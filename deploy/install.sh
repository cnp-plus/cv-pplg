#!/usr/bin/env bash
# Installer CV PPLG via Docker Compose (port 2027).
#
# Cara pakai (di server, dari root repo ini):
#   ./deploy/install.sh
#
# Opsi via environment:
#   PORT=2027 ./deploy/install.sh
#
# Yang dilakukan script:
#   1. Cek docker + docker compose plugin
#   2. Cek user bisa akses docker daemon (anggota grup 'docker')
#   3. Bersihkan sisa deploy podman/systemd lama kalau masih jalan
#   4. docker compose up -d --build  (port diwendangi di sini kalau perlu)
set -euo pipefail

SERVICE="cv-pplg"
REPO_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
cd "${REPO_DIR}"

if ! command -v docker >/dev/null 2>&1; then
  echo "docker tidak ditemukan. Install dulu (sekali ini saja butuh sudo):" >&2
  echo "  curl -fsSL https://get.docker.com |sh" >&2
  exit 1
fi

if ! docker compose version >/dev/null 2>&1; then
  echo "Plugin 'docker compose' tidak ada. Pasang: sudo apt install -y docker-compose-plugin" >&2
  exit 1
fi

if ! docker info >/dev/null 2>&1; then
  echo "User '$USER' tidak bisa akses docker daemon." >&2
  echo "  Tambahkan grup lalu log-out/log-in sekali:" >&2
  echo "  sudo usermod -aG docker $USER" >&2
  exit 1
fi

# Sisa deploy podman/systemd lama akan bentrok port
for kind in "" "--user"; do
  if systemctl ${kind} is-active --quiet "${SERVICE}.service" 2>/dev/null; then
    echo "Service lama '${SERVICE}.service' (${kind:-system}) masih aktif." >&2
    echo "Matikan & hapus agar tidak bentrok:" >&2
    echo "  systemctl ${kind} disable --now ${SERVICE}.service" >&2
    case "${kind}" in
      --user) echo "  rm ~/.config/systemd/user/${SERVICE}.service" ;;
      *)      echo "  sudo rm /etc/systemd/system/${SERVICE}.service" ;;
    esac
    exit 1
  fi
done

echo "==> Build image (pull base image, termasuk patch PHP terbaru)"
docker compose build --pull

echo "==> Jalankan container"
docker compose up -d

echo "==> Status"
docker compose ps
echo "Buka: http://<ip-server>:${PORT:-2027}/index.html"
