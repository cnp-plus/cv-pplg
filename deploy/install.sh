#!/usr/bin/env bash
# Installer CV PPLG via Podman + Quadlet (system-level, port 2027).
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
#   3. Pasang quadlet ke /etc/containers/systemd/cv-pplg.container
#   4. daemon-reload + enable --now cv-pplg.service (dibangkitkan quadlet)
set -euo pipefail

IMAGE="${IMAGE:-localhost/cv-pplg:latest}"
PORT="${PORT:-2027}"
SERVICE_NAME="cv-pplg.service"
QUADLET_FILE="cv-pplg.container"
REPO_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"

if [[ "${EUID}" -ne 0 ]]; then
  echo "Jalankan sebagai root: sudo ./deploy/install.sh" >&2
  exit 1
fi

command -v podman >/dev/null 2>&1 || {
  echo "podman tidak ditemukan. Install dulu, mis. Ubuntu/Debian: apt install -y podman" >&2
  exit 1
}

echo "==> Build image ${IMAGE}"
podman build -t "${IMAGE}" -f "${REPO_DIR}/Containerfile" "${REPO_DIR}"

echo "==> Pasang quadlet"
mkdir -p /etc/containers/systemd
sed -e "s|^Image=.*|Image=${IMAGE}|" \
    -e "s|^PublishPort=.*|PublishPort=${PORT}:8000|" \
    "${REPO_DIR}/deploy/${QUADLET_FILE}" > "/etc/containers/systemd/${QUADLET_FILE}"

systemctl daemon-reload
systemctl enable --now "${SERVICE_NAME}"
sleep 2

echo "==> Status"
systemctl is-active "${SERVICE_NAME}"
echo "Buka: http://<ip-server>:${PORT}/index.html"
