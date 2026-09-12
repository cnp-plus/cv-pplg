# CV — Ahmad Yusuf Firdaus

> Siswa PPLG • Fullstack Dev • Problem Solver • Leadership

Website CV interaktif, elegan dan modern — dibangun dengan **PHP** + HTML/CSS/JS vanilla. Tema *quiet-luxury*: paper hangat `#fdfcfa`, tinta pekat `#111214`, aksen brass `#c2a47a` — tanpa gradient ungu/pink pasaran.

**Live:** `https://ucup-aja.github.io/cv-yusuf` *(statis)* / hosting PHP untuk form kontak aktif  
**Repo:** `Ucup-aja/cv-yusuf` (private)

---

## ✨ Fitur

- **Hero** dengan typed animation (`Fullstack Dev / Problem Solver / Leadership`)
- **Tentang** — profil, status, minat & sertifikasi LKS Web Technologies Kab. Majalengka
- **Pengalaman** — Project Lead, Ketua OSIS, Founder CNP++ (Community of Networking & Programming), Wakil Ketua MPK 2024-2025 (timeline)
- **Keahlian** — Hard Skill (Frontend / Backend / Tools) + Soft Skill (Leadership, Problem Solving, Teamwork, dll) dengan progress bar & filter
- **Proyek** — SmartBK & PPLG 1 dengan filter kategori
- **Kontak** — form validasi + simpan ke `storage/messages.json` + kirim `mail()` (fungsional di hosting PHP)
- **Interaktif** — dark/light theme, progress bar scroll, reveal on scroll, counter stats, filter project/skill, responsive & print-ready (PDF)

## 🛠️ Tech Stack

- **Backend:** PHP 8 (tanpa framework, `data.php` sebagai single source of truth)
- **Frontend:** HTML5, CSS3 (custom, terpisah di `assets/css/style.css`), Vanilla JS (`assets/js/main.js`)
- **Font:** Cormorant Garamond (serif judul) + Inter (body) — Google Fonts
- **Icon:** Font Awesome 6

## 📁 Struktur

```
cv/
├── index.php          # layout & logic contact
├── data.php           # ← edit semua data di sini
├── assets/
│   ├── css/style.css  # tema elegant
│   ├── js/main.js     # typed, scroll, filter, theme
│   └── image/
│       ├── me.jpeg
│       ├── smartBK.png
│       └── PPLG 1.png
├── storage/           # auto dibuat, simpan pesan kontak (di-ignore git)
└── .gitignore
```

## 🚀 Jalankan Lokal

```bash
# dari folder cv
php -S localhost:8000
# buka http://localhost:8000
```

Atau via Apache: letakkan di `/var/www/html/cv` → akses `http://localhost/cv`.

## ✏️ Kustomisasi

Edit **`data.php`** saja:

```php
$profile  // nama, title, typed, lokasi, email, phone, foto, about, stats
$experiences // array role/company/period/loc/desc/tags/color
$education
$hardSkills // Frontend/Backend/Tools + level 0-100
$softSkills // name/level/desc
$projects  // title/cat/img/desc/tags
$certs
```

Foto ganti `assets/image/me.jpeg` atau ubah path di `$profile['photo']`.

## ✉️ Form Kontak

- Validasi: nama ≥2, email valid, pesan ≥10 karakter
- Simpan: `storage/messages.json` (buat otomatis, sudah di `.gitignore`)
- Email: `mail($profile['email'], ...)` — butuh `sendmail`/SMTP di hosting. Di GitHub Pages (statis) form tidak mengirim email, hanya demo.

Cek pesan masuk:
```bash
cat storage/messages.json | jq
```

## 🔒 .gitignore

Sudah dikonfigurasi: `.env`, `vendor/`, `node_modules/`, `.DS_Store`, `.vscode/.idea`, `*.log`, `storage/` — aman push. Foto `me.jpeg` sengaja ikut agar tampil di GitHub; uncomment baris di `.gitignore` bila ingin private.

## ☁️ Deploy

- **GitHub Pages:** hanya HTML statis — `index.php` perlu di-build jadi `index.html` atau pakai hosting PHP.
- **Hosting PHP:** upload via FTP / `git pull` di cPanel, Hostinger, Niagahoster, Vercel (PHP adapter) — form kontak langsung aktif.

## 👤 Author

**Ahmad Yusuf Firdaus** — SMKN 1 Leuwimunding, PPLG  
Majalengka, Indonesia · [GitHub](https://github.com/Ucup-aja) · ahmadyusuffirdaus1211@gmail.com

---

Dibuat dengan ♥ — elegan, ringan, tanpa AI slop.
