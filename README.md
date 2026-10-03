# CV PPLG

Kumpulan Curriculum Vitae murid jurusan PPLG (Pengembangan Perangkat Lunak dan Gim).

## Struktur

```
cv_pplg/
├── index.html    # Landing page portal
├── README.md
├── Containerfile # Image Podman (PHP CLI + php -S)
├── .dockerignore
├── deploy/       # Deploy Podman + systemd
│   ├── cv-pplg.service
│   ├── install.sh
│   └── update.sh
└── src/          # 28 folder CV individu
```

## Daftar CV

| # | Nama | Entry Point |
|---|------|-------------|
| 1 | Ahmad Yusuf Firdaus | `src/yusuf/index.php` |
| 2 | Alsyah | `src/alsa/indexx.php` |
| 3 | Alya Nur Fauziah | `src/alya/index.php` |
| 4 | Azzahra Meita Putri | `src/zahraa/cvzahra.php` |
| 5 | Desy Apriyani | `src/desy/cv.php` |
| 6 | Dinia Saroh | `src/dini/index.php` |
| 7 | Dwi Rafi Mazdudin | `src/rafi/index.php` |
| 8 | Fedly Pratama | `src/fedly/index.html` |
| 9 | Frysa Salsabila Fauzi | `src/frysa/index.php` |
| 10 | Hasan | `src/hasan/index.php` |
| 11 | Krisna Apriyono | `src/krisna/index.php` |
| 12 | Lulu Isnawati | `src/lulu/index.php` |
| 13 | Mitha Salsabila | `src/mitha/cv.php` |
| 14 | Muhamad Saiful Anwar | `src/ipul/index.html` |
| 15 | Muhammad Lutpi | `src/lutpi/cv2.php` |
| 16 | Nihayatul Karimah | `src/niha/cvniha.php` |
| 17 | Noval Fazri | `src/noval/index.php` |
| 18 | Nurmala Ayu Komalasari | `src/mala/index.php` |
| 19 | Retno Ayu Anjani | `src/retno/index.php` |
| 20 | Reva Alviani | `src/reva/index.php` |
| 21 | Rido Maulana | `src/rido/index.php` |
| 22 | Sahla Tri Nurrani | `src/sahla/sahla5.php` |
| 23 | Sartono Tegar | `src/tegar/index.php` |
| 24 | Shinta Ramadhani | `src/shinta/index.php` |
| 25 | Vebyola Oktaviani | `src/vebyola/vebyola.php` |
| 26 | Wildan Aziz Mubakkir | `src/wildan/cv_wldn.php` |
| 27 | Yesi Anggita | `src/yesi/index.php` |
| 28 | Zazkya Fadillah | `src/zazkya/index.php` |

## Cara Menjalankan

Butuh Podman:

```bash
podman build -t localhost/cv-pplg:latest .
podman run --rm -p 8000:8000 localhost/cv-pplg:latest
```

Lalu buka:

- Portal: `http://localhost:8000/index.html`
- Contoh CV langsung: `http://localhost:8000/src/rafi/index.php`

## Landing Page

`index.html` adalah single file vanilla (HTML + inline CSS/JS, tanpa dependency):

- Hero judul "CV PPLG"
- Search filter live (case-insensitive)
- Grid 28 kartu urut abjad (avatar inisial + nama + tombol Lihat CV, dibuka di tab baru)
- Responsive mobile

## Tech Stack

- PHP vanilla (halaman CV)
- HTML5 + CSS3 vanilla (sebagian inline, sebagian file `.css` terpisah)
- Tanpa framework, tanpa build tool, tanpa `package.json`

## Deploy Server (Podman + systemd, port 2027)

File deploy ada di `deploy/`:

- `Containerfile` — image Podman (`php:8.3-cli-alpine`, serve via `php -S 0.0.0.0:8000`)
- `deploy/cv-pplg.service` — unit systemd yang menjalankan `podman run` (container `cv-pplg`)
- `deploy/install.sh` — build image, pasang unit, `enable --now`
- `deploy/update.sh` — rebuild image + restart service

Di server (Debian/Ubuntu, dari root repo):

```bash
sudo apt install -y podman
sudo ./deploy/install.sh
```

Kustomisasi:

```bash
IMAGE=localhost/cv-pplg:latest PORT=2027 sudo -E ./deploy/install.sh
```

## Update File di Server

`install.sh` hanya untuk pasang awal. Setiap ada perubahan file
(tambah/hapus/edit CV), jalankan di server:

```bash
git pull origin main
sudo ./deploy/update.sh
```

`update.sh` me-rebuild image dari repo terbaru lalu restart service,
sehingga file yang dihapus di repo ikut hilang dari server
(contoh: ganti foto `foto_lulu.jpg` → `lulu1.jpeg`).

Jika domain di belakang Cloudflare, purge cache untuk path yang berubah
(mis. `/src/lulu/*`) setelah update.

Cek status:

```bash
systemctl status cv-pplg.service
journalctl -u cv-pplg.service -f
```

Lalu buka `http://<ip-server>:2027/index.html`. Buka port 2027 di firewall bila perlu (`ufw allow 2027/tcp`).
