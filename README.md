# CV PPLG

Kumpulan Curriculum Vitae murid jurusan PPLG (Pengembangan Perangkat Lunak dan Gim).

## Struktur

```
cv_pplg/
├── index.html    # Landing page portal
├── README.md
├── Dockerfile    # Image Docker (PHP CLI + php -S)
├── compose.yaml  # Orkestrasi Docker Compose
├── .dockerignore
├── deploy/       # Deploy Docker Compose
│   ├── install.sh
│   └── update.sh
└── src/          # 30 folder CV individu
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
| 8 | Farida Amelia Sholiha | `src/farida/cv.php` |
| 9 | Fedly Pratama | `src/fedly/index.html` |
| 10 | Frysa Salsabila Fauzi | `src/frysa/index.php` |
| 11 | Hasan | `src/hasan/index.php` |
| 12 | Krisna Apriyono | `src/krisna/index.php` |
| 13 | Lulu Isnawati | `src/lulu/index.php` |
| 14 | Mitha Salsabila | `src/mitha/cv.php` |
| 15 | Muhamad Saiful Anwar | `src/ipul/index.html` |
| 16 | Muhammad Lutpi | `src/lutpi/cv2.php` |
| 17 | Nihayatul Karimah | `src/niha/cvniha.php` |
| 18 | Noval Fazri | `src/noval/index.php` |
| 19 | Nurmala Ayu Komalasari | `src/mala/index.php` |
| 20 | Retno Ayu Anjani | `src/retno/index.php` |
| 21 | Reva Alviani | `src/reva/index.php` |
| 22 | Ridho Firmansyah | `src/ridho/index.php` |
| 23 | Rido Maulana | `src/rido/index.php` |
| 24 | Sahla Tri Nurrani | `src/sahla/sahla5.php` |
| 25 | Sartono Tegar | `src/tegar/index.php` |
| 26 | Shinta Ramadhani | `src/shinta/index.php` |
| 27 | Vebyola Oktaviani | `src/vebyola/vebyola.php` |
| 28 | Wildan Aziz Mubakkir | `src/wildan/cv_wldn.php` |
| 29 | Yesi Anggita | `src/yesi/index.php` |
| 30 | Zazkya Fadillah | `src/zazkya/index.php` |

## Cara Menjalankan

Butuh Docker:

```bash
docker compose up -d --build
```

Lalu buka:

- Portal: `http://localhost:2027/index.html`
- Contoh CV langsung: `http://localhost:2027/src/rafi/index.php`

## Landing Page

`index.html` adalah single file vanilla (HTML + inline CSS/JS, tanpa dependency):

- Hero judul "CV PPLG"
- Search filter live (case-insensitive)
- Grid 30 kartu urut abjad (avatar inisial + nama + tombol Lihat CV, dibuka di tab baru)
- Responsive mobile

## Tech Stack

- PHP vanilla (halaman CV)
- HTML5 + CSS3 vanilla (sebagian inline, sebagian file `.css` terpisah)
- Tanpa framework, tanpa build tool, tanpa `package.json`

## Deploy Server (Docker Compose, port 2027)

File deploy ada di `deploy/`:

- `Dockerfile` — image (`php:8.3.36-cli-alpine`, di-pin ≥ 8.3.36 karena PHP2Shell, serve via `php -S 0.0.0.0:8000`)
- `compose.yaml` — container `cv-pplg`, port `${PORT:-2027}:8000`, `restart: unless-stopped` (jalan lagi otomatis setelah reboot)
- `deploy/install.sh` — build + jalankan pertama kali
- `deploy/update.sh` — rebuild image + restart container

Di server (Debian/Ubuntu, dari root repo), Docker dipasang sekali via sudo,
setelahnya **tanpa sudo** (user anggota grup `docker`):

```bash
curl -fsSL https://get.docker.com |sh   # sekali saja
sudo usermod -aG docker $USER           # lalu log-out/log-in
./deploy/install.sh
```

Kustomisasi port:

```bash
PORT=8080 ./deploy/install.sh
```

`install.sh` otomatis menolak jalan kalau masih ada service podman/systemd
lama bernama `cv-pplg` (system maupun user) dan menampilkan perintah
pembersihannya — port 2027 akan bentrok kalau dua-duanya jalan.

## Keamanan PHP (PHP2Shell)

Image PHP **di-pin** ke `8.3.36`, rilis pertama yang menambal
[CVE-2026-109618 & CVE-2026-109619](https://www.php2shell.com/) (CVSS 9.2,
RCE/memory disclosure tanpa autentikasi). Jangan menurunkan ke versi
< 8.3.36 dan jangan memakai tag mengambang `8.3-cli-alpine` — isinya bisa
berubah tanpa terlihat.

Cek versi yang benar-benar berjalan di server:

```bash
docker compose exec cv-pplg php -v   # harus 8.3.36+
```

Saat menaikkan versi: ubah `FROM` di `Dockerfile`, lalu

```bash
docker compose build --pull
docker compose up -d --force-recreate
```

## Update File di Server

`install.sh` hanya untuk pasang awal. Setiap ada perubahan file
(tambah/hapus/edit CV), jalankan di server:

```bash
git pull origin main
./deploy/update.sh
```

`update.sh` me-rebuild image dari repo terbaru lalu jalankan ulang container,
sehingga file yang dihapus di repo ikut hilang dari server
(contoh: ganti foto `foto_lulu.jpg` → `lulu1.jpeg`).

Jika domain di belakang Cloudflare, purge cache untuk path yang berubah
(mis. `/src/lulu/*`) setelah update.

Cek status:

```bash
docker compose ps
docker compose logs -f
```

Lalu buka `http://<ip-server>:2027/index.html`. Buka port 2027 di firewall bila perlu (`ufw allow 2027/tcp`).
