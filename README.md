# CV PPLG

Kumpulan Curriculum Vitae murid jurusan PPLG (Pengembangan Perangkat Lunak dan Gim).

## Struktur

```
cv_pplg/
├── index.html   # Landing page portal
├── README.md
├── serve.sh     # Runner PHP built-in server (port 2027)
├── deploy/      # File deploy server (systemd + installer)
│   ├── cv-pplg.service
│   └── install.sh
└── src/         # 24 folder CV individu
```

## Daftar CV

| # | Nama | Entry Point |
|---|------|-------------|
| 1 | Ahmad Yusuf Firdaus | `src/yusuf/index.php` |
| 2 | Alsyah | `src/alsa/indexx.php` |
| 3 | Alya Nur Fauziah | `src/alya/index.php` |
| 4 | Azzahra Meita Putri | `src/zahraa/cvzahra.php` |
| 5 | Dwi Rafi Mazdudin | `src/rafi/index.php` |
| 6 | Fedly Pratama | `src/fedly/index.html` |
| 7 | Hasan | `src/hasan/index.php` |
| 8 | Krisna Apriyono | `src/krisna/index.php` |
| 9 | Lulu Isnawati | `src/lulu/index.php` |
| 10 | Mitha Salsabila | `src/mitha/cv.php` |
| 11 | Muhammad Lutpi | `src/lutpi/cv2.php` |
| 12 | Nihayatul Karimah | `src/niha/cvniha.php` |
| 13 | Noval Fazri | `src/noval/index.php` |
| 14 | Nurmala Ayu Komalasari | `src/mala/index.php` |
| 15 | Retno Ayu Anjani | `src/retno/index.php` |
| 16 | Reva Alviani | `src/reva/index.php` |
| 17 | Rido Maulana | `src/rido/index.php` |
| 18 | Sahla Tri Nurrani | `src/sahla/sahla5.php` |
| 19 | Sartono Tegar | `src/tegar/index.php` |
| 20 | Shinta Ramadhani | `src/shinta/index.php` |
| 21 | Vebyola Oktaviani | `src/vebyola/vebyola.php` |
| 22 | Wildan Aziz Mubakkir | `src/wildan/cv_wldn.php` |
| 23 | Yesi Anggita | `src/yesi/index.php` |
| 24 | Zazkya Fadillah | `src/zazkya/index.php` |

## Cara Menjalankan

Butuh PHP karena tugas nya menggunakan `.php`:

```bash
php -S localhost:8000
```

Lalu buka:

- Portal: `http://localhost:8000/index.html`
- Contoh CV langsung: `http://localhost:8000/src/rafi/index.php`

## Landing Page

`index.html` adalah single file vanilla (HTML + inline CSS/JS, tanpa dependency):

- Hero judul "CV PPLG"
- Search filter live (case-insensitive)
- Grid 24 kartu urut abjad (avatar inisial + nama + tombol Lihat CV, dibuka di tab baru)
- Responsive mobile

## Tech Stack

- PHP vanilla (halaman CV)
- HTML5 + CSS3 vanilla (sebagian inline, sebagian file `.css` terpisah)
- Tanpa framework, tanpa build tool, tanpa `package.json`

## Deploy Server (systemd, port 2027)

File deploy ada di `deploy/`:

- `deploy/cv-pplg.service` — unit systemd system-level (default: user `www-data`, dir `/opt/cv_pplg`, port 2027)
- `deploy/install.sh` — installer: salin project ke server, pasang unit, `enable --now`
- `serve.sh` — runner `php -S 0.0.0.0:$PORT` (default 2027)

Di server (Debian/Ubuntu, dari root repo):

```bash
sudo apt install -y php-cli
sudo ./deploy/install.sh
```

Kustomisasi:

```bash
APP_DIR=/opt/cv_pplg SERVICE_USER=www-data PORT=2027 sudo -E ./deploy/install.sh
```

Cek status:

```bash
systemctl status cv-pplg.service
journalctl -u cv-pplg.service -f
```

Lalu buka `http://<ip-server>:2027/index.html`. Buka port 2027 di firewall bila perlu (`ufw allow 2027/tcp`).
