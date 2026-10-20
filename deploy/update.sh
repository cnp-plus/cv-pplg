#!/usr/bin/env bash
# Rebuild image + restart service ROOTLESS setelah ada perubahan file.
# Dipakai setiap ada perubahan (tambah/hapus/edit CV).
#
# Cara pakai (di server, sebagai user biasa BUKAN root, dari root repo ini):
#   git pull origin main
#   ./deploy/update.sh
#
# Opsi via environment:
#   IMAGE=localhost/cv-pplg:latest ./deploy/update.sh
set -euo pipefail

IMAGE="${IMAGE:-localhost/cv-pplg:latest}"
SERVICE_NAME="cv-pplg.service"
REPO_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"

if [[ "${EUID}" -eq 0 ]]; then
  echo "JALAN SEBAGAI USER BIASA, BUKAN root. Contoh: ./deploy/update.sh" >&2
  echo "Rootless podman tidak boleh dijalankan root." >&2
  exit 1
fi

command -v podman >/dev/null 2>&1 || {
  echo "podman tidak ditemukan. Install dulu, mis. Ubuntu/Debian: sudo apt install -y podman" >&2
  exit 1
}

echo "==> Rebuild image ${IMAGE} (rootless)"
podman build -t "${IMAGE}" -f "${REPO_DIR}/Containerfile" "${REPO_DIR}"

echo "==> Restart service (user)"
systemctl --user restart "${SERVICE_NAME}"
sleep 1
systemctl --user is-active "${SERVICE_NAME}"

echo "Selesai. Jika domain di belakang Cloudflare, purge cache untuk path yang berubah."
