# Website CV — Statis (tanpa PHP, tanpa database)

Klik dua kali `index.html` untuk membukanya di browser. Tidak perlu XAMPP,
MySQL, atau phpMyAdmin. (Internet hanya dibutuhkan untuk font Google.)

## Mengubah isi
Edit langsung `index.html` dengan teks editor (Notepad/VS Code):
- Profil, tagline, "Tentang saya": bagian hero & `#tentang`
- Keahlian: tambah/ubah `<li>` di daftar teknis / non-teknis
- Proyek: salin satu blok `project-card`, ganti judul, deskripsi, dan `href`
- Pendidikan: salin satu blok `timeline-item`
- Bagian tambahan: ada contoh yang di-komen di dalam `<main>`

Foto profil: ganti file `assets/img/profile.png`.
Semua animasi (kursor, tilt, parallax, scroll) tetap sama dan berjalan lewat
`assets/js/main.js` dan `assets/css/style.css`.

Panel admin, login, dan database sudah dihapus — mengubah isi sekarang
dilakukan lewat edit file.

## Hosting
Upload seluruh folder ke hosting statis (GitHub Pages, Netlify, dll).
