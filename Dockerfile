# Image CV PPLG: PHP CLI + built-in server untuk serve file statis/PHP.
# Build & run: docker compose up -d --build
#
# Versi di-pin, JANGAN pakai tag mengambang 8.3-cli-alpine.
# PHP < 8.3.36 rentan PHP2Shell (CVE-2026-109618 & CVE-2026-109619,
# CVSS 9.2: RCE/memory disclosure tanpa autentikasi). 8.3.36 adalah
# rilis pertama yang sudah ditambal di branch 8.3.
FROM docker.io/library/php:8.3.36-cli-alpine

WORKDIR /app

COPY . /app

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8000", "-t", "/app"]
