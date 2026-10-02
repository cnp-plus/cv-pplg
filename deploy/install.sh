#!/usr/bin/env bash
# Installer CV PPLG via Podman + systemd (system-level, port 2027).
#
# Cara pakai (di server, dari root repo ini):
#   sudo ./deploy/install.sh
#
# Opsi via environment:
#   IMAGE=localhost/cv-pplg:latest PORT=2027 sudo -E ./deploy/install.sh
#
# Yang dilakukan script:
#   1. Cek podman tersedia
#   2. Build image dari Containerfile
#   3. Bersihkan sisa quadlet gagal (kalau ada), pasang unit ke
#      /etc/systemd/system/cv-pplg.service
#   4. daemon-reload + enable --now
set -euo pipefail

IMAGE="${IMAGE:-localhost/cv-pplg:latest}"
PORT="${PORT:-2027}"
SERVICE_NAME="cv-pplg.service"
UNIT_FILE="cv-pplg.service"
REPO_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"

if [[ "${EUID}" -ne 0 ]]; then
  echo "Jalankan sebagai root: sudo ./deploy/install.sh" >&2
  exit 1
fi

command -v podman >/dev/null 2>&1 || {
  echo "podman tidak ditemukan. Install dulu, mis. Ubuntu/Debian: apt install -y podman" >&2
  exit 1
}
PODMAN="$(command -v podman)"

echo "==> Build image ${IMAGE}"
podman build -t "${IMAGE}" -f "${REPO_DIR}/Containerfile" "${REPO_DIR}"

echo "==> Pasang unit systemd"
# Bersihkan sisa percobaan quadlet (gagal di systemd lama), kalau ada
rm -f /etc/containers/systemd/cv-pplg.container
sed -e "s|/usr/bin/podman|${PODMAN}|g" \
    -e "s|-p 2027:8000|-p ${PORT}:8000|" \
    -e "s|localhost/cv-pplg:latest|${IMAGE}|g" \
    "${REPO_DIR}/deploy/${UNIT_FILE}" > "/etc/systemd/system/${SERVICE_NAME}"

systemctl daemon-reload
systemctl enable --now "${SERVICE_NAME}"
sleep 2

echo "==> Status"
systemctl is-active "${SERVICE_NAME}"
echo "Buka: http://<ip-server>:${PORT}/index.html"
