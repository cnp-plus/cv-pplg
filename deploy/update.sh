#!/usr/bin/env bash
# Sync ulang file project ke APP_DIR tanpa install ulang systemd.
# Dipakai setiap ada perubahan file (tambah/hapus/edit CV).
# Hapus file di server yang sudah tidak ada di repo (rsync --delete).
#
# Cara pakai (di server, dari root repo ini):
#   git pull origin main
#   sudo ./deploy/update.sh
#
# Opsi via environment:
#   APP_DIR=/opt/cv_pplg SERVICE_USER=www-data sudo -E ./deploy/update.sh
set -euo pipefail

APP_DIR="${APP_DIR:-/opt/cv_pplg}"
SERVICE_USER="${SERVICE_USER:-www-data}"
SERVICE_NAME="cv-pplg.service"
REPO_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"

if [[ "${EUID}" -ne 0 ]]; then
  echo "Jalankan sebagai root: sudo ./deploy/update.sh" >&2
  exit 1
fi

echo "==> Sync file ke ${APP_DIR}"
mkdir -p "${APP_DIR}"
if command -v rsync >/dev/null 2>&1; then
  # --delete: file yang dihapus di repo ikut terhapus di server
  rsync -a --delete \
    --exclude='.git/' \
    --exclude='.opencode/' \
    "${REPO_DIR}/" "${APP_DIR}/"
else
  echo "rsync tidak ada, fallback ke tar (file terhapus TIDAK ikut terhapus)" >&2
  tar --exclude='.git' --exclude='.opencode' -cf - -C "${REPO_DIR}" . | tar -xf - -C "${APP_DIR}"
fi
chown -R "${SERVICE_USER}:${SERVICE_USER}" "${APP_DIR}"
chmod +x "${APP_DIR}/serve.sh"

echo "==> Restart service"
if systemctl list-unit-files | grep -q "^${SERVICE_NAME}"; then
  systemctl restart "${SERVICE_NAME}"
  sleep 1
  systemctl is-active "${SERVICE_NAME}"
else
  echo "Unit ${SERVICE_NAME} belum terpasang, jalankan: sudo ./deploy/install.sh" >&2
fi

echo "Selesai. Jika domain di belakang Cloudflare, purge cache untuk path yang berubah."
