#!/usr/bin/env bash
# Installer CV PPLG via Podman ROOTLESS + systemd user (port 2027).
#
# Cara pakai (di server, sebagai user biasa BUKAN root, dari root repo ini):
#   ./deploy/install.sh
#
# Opsi via environment:
#   IMAGE=localhost/cv-pplg:latest PORT=2027 ./deploy/install.sh
#
# Yang dilakukan script:
#   1. Tolak jalan sebagai root (rootless Wajib)
#   2. Cek podman + cek id utility dipetakan (butuh subuid/subgid)
#   3. Build image dari Containerfile ke storage user
#   4. Pasang unit ke ~/.config/systemd/user/cv-pplg.service
#   5. daemon-reload + enable --now (+ lingering agar jalan tanpa sesi login)
#
# Catatan: rootless hanya bisa bind port >= 1024. Default 2027 aman.
set -euo pipefail

IMAGE="${IMAGE:-localhost/cv-pplg:latest}"
PORT="${PORT:-2027}"
SVC="cv-pplg"
SERVICE_NAME="${SVC}.service"
REPO_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
USER_UNIT_DIR="${HOME}/.config/systemd/user"

if [[ "${EUID}" -eq 0 ]]; then
  echo "JALAN SEBAGAI USER BIASA, BUKAN root. Contoh: ./deploy/install.sh" >&2
  echo "Rootless podman tidak boleh dijalankan root." >&2
  exit 1
fi

command -v podman >/dev/null 2>&1 || {
  echo "podman tidak ditemukan. Install dulu, mis. Ubuntu/Debian: sudo apt install -y podman" >&2
  exit 1
}
PODMAN="$(command -v podman)"

# Pastikan subuid/subgid mapping siap untuk rootless
if ! podman info >/dev/null 2>&1; then
  echo "podman info gagal: cek subuid/subgid untuk user '$USER':" >&2
  echo "  - /etc/subuid dan /etc/subgid harus berisi baris: $USER:start:65536" >&2
  echo "  Ubuntu/Debian: sudo usermod --add-subuids 100000-165535 --add-subgids 100000-165535 $USER" >&2
  echo "  Lalu log-out/log-in lagi agar mapping aktif." >&2
  exit 1
fi

# Unit system lama (dari install root sebelumnya) akan bentrok port
if systemctl is-active --quiet "${SERVICE_NAME}" 2>/dev/null; then
  echo "Nama service '${SERVICE_NAME}' masih dipakai unit SYSTEM lama." >&2
  echo "Matikan dan hapus dulu agar tidak bentrok port ${PORT}:" >&2
  echo "  sudo systemctl disable --now ${SERVICE_NAME}" >&2
  echo "  sudo rm /etc/systemd/system/${SERVICE_NAME}" >&2
  exit 1
fi

if ! command -v loginctl >/dev/null 2>&1; then
  echo "loginctl tidak ditemukan (butuh systemd user manager)" >&2
  exit 1
fi

# Pastikan systemd user manager jalan meski user tidak login (lingering)
if ! loginctl show-user "$USER" --property=Linger 2>/dev/null | grep -q "Linger=yes"; then
  echo "==> Mengaktifkan lingering agar service tetap jalan tanpa sesi login"
  loginctl enable-linger "$USER" || {
    echo "Warning: enable-linger gagal (butuh sudo sekali): sudo loginctl enable-linger $USER" >&2
    echo "Service tetap dipasang, tapi hanya jalan saat ada sesi login aktif." >&2
  }
fi

echo "==> Build image ${IMAGE} (rootless)"
podman build -t "${IMAGE}" -f "${REPO_DIR}/Containerfile" "${REPO_DIR}"

echo "==> Pasang unit systemd USER"
mkdir -p "${USER_UNIT_DIR}"
sed -e "s|%h/bin/podman|${PODMAN}|g" \
    -e "s|-p 2027:8000|-p ${PORT}:8000|" \
    -e "s|localhost/cv-pplg:latest|${IMAGE}|g" \
    "${REPO_DIR}/deploy/${SERVICE_NAME}" > "${USER_UNIT_DIR}/${SERVICE_NAME}"

systemctl --user daemon-reload
systemctl --user enable --now "${SERVICE_NAME}"
sleep 2

echo "==> Status"
systemctl --user is-active "${SERVICE_NAME}"
echo "Buka: http://<ip-server>:${PORT}/index.html"
