#!/usr/bin/env bash
# Auto-serve CV PPLG via PHP built-in server di port 2027.
# Dipakai oleh systemd unit cv-pplg.service. Bisa juga dijalankan manual.
set -euo pipefail

DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PORT="${PORT:-2027}"

command -v php >/dev/null 2>&1 || { echo "php tidak ditemukan di PATH" >&2; exit 1; }

exec php -S "0.0.0.0:${PORT}" -t "${DIR}"
