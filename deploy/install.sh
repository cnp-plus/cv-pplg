#!/usr/bin/env bash
# Installer CV PPLG untuk server (systemd system-level, port 2027).
#
# Cara pakai (di server, dari root repo ini):
#   sudo ./deploy/install.sh
#
# Opsi via environment:
#   APP_DIR=/opt/cv_pplg SERVICE_USER=www-data PORT=2027 sudo -E ./deploy/install.sh
#
# Yang dilakukan script:
#   1. Cek php tersedia
#   2. Salin project ke APP_DIR
#   3. Pasang unit systemd ke /etc/systemd/system/cv-pplg.service
#   4. daemon-reload + enable --now
set -euo pipefail

APP_DIR="${APP_DIR:-/opt/cv_pplg}"
SERVICE_USER="${SERVICE_USER:-www-data}"
PORT="${PORT:-2027}"
SERVICE_NAME="cv-pplg.service"
REPO_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"

if [[ "${EUID}" -ne 0 ]]; then
  echo "Jalankan sebagai root: sudo ./deploy/install.sh" >&2
  exit 1
fi

command -v php >/dev/null 2>&1 || {
  echo "php tidak ditemukan. Install dulu, mis. Ubuntu/Debian: apt install -y php-cli" >&2
  exit 1
}

if ! id "${SERVICE_USER}" >/dev/null 2>&1; then
  echo "User ${SERVICE_USER} tidak ada. Buat dulu atau override: SERVICE_USER=nobody ./deploy/install.sh" >&2
  exit 1
fi

echo "==> Salin project ke ${APP_DIR}"
mkdir -p "${APP_DIR}"
# Salin isi repo kecuali .git agar deploy bersih
tar --exclude='.git' -cf - -C "${REPO_DIR}" . | tar -xf - -C "${APP_DIR}"
chown -R "${SERVICE_USER}:${SERVICE_USER}" "${APP_DIR}"
chmod +x "${APP_DIR}/serve.sh"

echo "==> Pasang unit systemd"
sed -e "s|^User=.*|User=${SERVICE_USER}|" \
    -e "s|^WorkingDirectory=.*|WorkingDirectory=${APP_DIR}|" \
    -e "s|^ExecStart=.*|ExecStart=${APP_DIR}/serve.sh|" \
    -e "s|^Environment=PORT=.*|Environment=PORT=${PORT}|" \
    "${REPO_DIR}/deploy/cv-pplg.service" > "/etc/systemd/system/${SERVICE_NAME}"

systemctl daemon-reload
systemctl enable --now "${SERVICE_NAME}"
sleep 2

echo "==> Status"
systemctl is-active "${SERVICE_NAME}"
echo "Buka: http://<ip-server>:2027/index.html"
