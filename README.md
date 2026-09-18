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
└── src/         # 26 folder CV individu
```

## Daftar CV

| # | Nama | Entry Point |
|---|------|-------------|
| 1 | Ahmad Yusuf Firdaus | `src/yusuf/index.php` |
| 2 | Alsyah | `src/alsa/indexx.php` |
| 3 | Alya Nur Fauziah | `src/alya/index.php` |
| 4 | Azzahra Meita Putri | `src/zahraa/cvzahra.php` |
| 5 | Desy Apriyani | `src/desy/cv.php` |
| 6 | Dwi Rafi Mazdudin | `src/rafi/index.php` |
| 7 | Fedly Pratama | `src/fedly/index.html` |
| 8 | Frysa Salsabila Fauzi | `src/frysa/index.php` |
| 9 | Hasan | `src/hasan/index.php` |
| 10 | Krisna Apriyono | `src/krisna/index.php` |
| 11 | Lulu Isnawati | `src/lulu/index.php` |
| 12 | Mitha Salsabila | `src/mitha/cv.php` |
| 13 | Muhammad Lutpi | `src/lutpi/cv2.php` |
| 14 | Nihayatul Karimah | `src/niha/cvniha.php` |
| 15 | Noval Fazri | `src/noval/index.php` |
| 16 | Nurmala Ayu Komalasari | `src/mala/index.php` |
| 17 | Retno Ayu Anjani | `src/retno/index.php` |
| 18 | Reva Alviani | `src/reva/index.php` |
| 19 | Rido Maulana | `src/rido/index.php` |
| 20 | Sahla Tri Nurrani | `src/sahla/sahla5.php` |
| 21 | Sartono Tegar | `src/tegar/index.php` |
| 22 | Shinta Ramadhani | `src/shinta/index.php` |
| 23 | Vebyola Oktaviani | `src/vebyola/vebyola.php` |
| 24 | Wildan Aziz Mubakkir | `src/wildan/cv_wldn.php` |
| 25 | Yesi Anggita | `src/yesi/index.php` |
| 26 | Zazkya Fadillah | `src/zazkya/index.php` |

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
- Grid 26 kartu urut abjad (avatar inisial + nama + tombol Lihat CV, dibuka di tab baru)
- Responsive mobile

## Tech Stack

- PHP vanilla (halaman CV)
- HTML5 + CSS3 vanilla (sebagian inline, sebagian file `.css` terpisah)
- Tanpa framework, tanpa build tool, tanpa `package.json`

## Deploy Server (systemd, port 2027)

File deploy ada di `deploy/`:

- `deploy/cv-pplg.service` — unit systemd system-level (default: user `www-data`, dir `/opt/cv_pplg`, port 2027)
- `deploy/install.sh` — installer: salin project ke server, pasang unit, `enable --now`
- `deploy/update.sh` — update file di server (rsync `--delete`, restart service)
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

## Update File di Server

`install.sh` hanya untuk pasang awal. Setiap ada perubahan file
(tambah/hapus/edit CV), jalankan di server:

```bash
cd /opt/cv_pplg  # atau clone repo, lalu dari root repo:
git pull origin main
sudo ./deploy/update.sh
```

`update.sh` memakai `rsync --delete` sehingga file yang dihapus di repo
ikut terhapus di server (contoh: ganti foto `foto_lulu.jpg` → `lulu1.jpeg`),
lalu restart service. Tanpa ini, file lama yang sudah dihapus bisa tertinggal
dan menimpa tampilan — mis. CSS lama tetap ter-serve walau `index.php` sudah baru.

Jika domain di belakang Cloudflare, purge cache untuk path yang berubah
(mis. `/src/lulu/*`) setelah update.

Cek status:

```bash
systemctl status cv-pplg.service
journalctl -u cv-pplg.service -f
```

Lalu buka `http://<ip-server>:2027/index.html`. Buka port 2027 di firewall bila perlu (`ufw allow 2027/tcp`).
