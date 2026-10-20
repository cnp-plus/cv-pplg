# Image CV PPLG: PHP CLI + built-in server untuk serve file statis/PHP.
# Build & run: docker compose up -d --build
FROM docker.io/library/php:8.3-cli-alpine

WORKDIR /app

COPY . /app

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8000", "-t", "/app"]
