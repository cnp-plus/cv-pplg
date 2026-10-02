#!/usr/bin/env bash
# Rebuild image + restart service setelah ada perubahan file.
# Dipakai setiap ada perubahan (tambah/hapus/edit CV).
#
# Cara pakai (di server, dari root repo ini):
#   git pull origin main
#   sudo ./deploy/update.sh
#
# Opsi via environment:
#   IMAGE=localhost/cv-pplg:latest sudo -E ./deploy/update.sh
set -euo pipefail

IMAGE="${IMAGE:-localhost/cv-pplg:latest}"
SERVICE_NAME="cv-pplg.service"
REPO_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"

if [[ "${EUID}" -ne 0 ]]; then
  echo "Jalankan sebagai root: sudo ./deploy/update.sh" >&2
  exit 1
fi

command -v podman >/dev/null 2>&1 || {
  echo "podman tidak ditemukan. Install dulu, mis. Ubuntu/Debian: apt install -y podman" >&2
  exit 1
}

echo "==> Rebuild image ${IMAGE}"
podman build -t "${IMAGE}" -f "${REPO_DIR}/Containerfile" "${REPO_DIR}"

echo "==> Restart service"
systemctl restart "${SERVICE_NAME}"
sleep 1
systemctl is-active "${SERVICE_NAME}"

echo "Selesai. Jika domain di belakang Cloudflare, purge cache untuk path yang berubah."
