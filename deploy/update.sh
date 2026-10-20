#!/usr/bin/env bash
# Rebuild + restart container setelah ada perubahan file.
# Dipakai setiap ada perubahan (tambah/hapus/edit CV).
#
# Cara pakai (di server, dari root repo ini):
#   git pull origin main
#   ./deploy/update.sh
#
# Opsi via environment:
#   PORT=8080 ./deploy/update.sh
set -euo pipefail

REPO_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
cd "${REPO_DIR}"

command -v docker >/dev/null 2>&1 || {
  echo "docker tidak ditemukan. Install dulu: curl -fsSL https://get.docker.com |sh" >&2
  exit 1
}

docker info >/dev/null 2>&1 || {
  echo "User '$USER' tidak bisa akses docker daemon: sudo usermod -aG docker $USER, lalu log-out/log-in." >&2
  exit 1
}

echo "==> Rebuild image (docker)"
docker compose build --pull

echo "==> Restart container"
docker compose up -d

echo "==> Status"
docker compose ps

echo "Selesai. Jika domain di belakang Cloudflare, purge cache untuk path yang berubah."
