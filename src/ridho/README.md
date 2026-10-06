# CV Ridho — LAMP

Apache + MariaDB/MySQL + PHP (tanpa framework).

## Struktur
```
cv_ridho_lamp/
  config/database.php   # koneksi PDO, env DB_HOST/DB_NAME/DB_USER/DB_PASS
  database/schema.sql    # tabel users + seed admin@mail.com / 123456
  public/                # DocumentRoot
    index.php            # login (ganti lib/screens/login.dart)
    cv.php               # CV (ganti lib/main.dart CVPage)
    logout.php
    assets/css/style.css
    assets/img/SSS.jpeg
```

## Jalan
```bash
mysql -u root < database/schema.sql
php -S 127.0.0.1:8099 -t public
# Apache: DocumentRoot -> .../cv_ridho_lamp/public
```

Login: `admin@mail.com` / `123456`. Tanpa DB: fallback hardcode aktif.
