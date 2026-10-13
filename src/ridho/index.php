<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CV - Ridho Firmansyah</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="cv">
<div class="topbar"><h1>MyPortfolio</h1><button class="toggle" id="themeToggle" type="button">🌙 Dark</button></div>
<div class="grid">
<div class="profile">
<div class="brand"><span>MyPortfolio</span><span class="badge">Available for Hire</span></div>
<img class="avatar" src="assets/img/SSS.jpeg" alt="Foto Ridho">
<h2>RIDHO FIRMANSYAH</h2>
<div class="role">RUNNING</div>
<div class="contact">✉️ email@gmail.com</div>
<div class="about-title">Tentang Saya</div>
<p class="about">Saya adalah pribadi yang disiplin, bertanggung jawab, dan selalu berusaha menyelesaikan setiap tugas dengan tepat waktu. Saya juga mudah beradaptasi dengan lingkungan baru, mampu bekerja sama dalam tim, serta memiliki semangat untuk terus belajar dan mengembangkan kemampuan.</p>
</div>
<div class="info">
<div class="section"><h3>Keahlian Utama</h3><span class="chip">boxing</span><span class="chip">bulu tangkis</span></div>
<div class="section"><h3>Pengalaman Kerja</h3><div class="exp"><strong>-</strong><div class="place"></div><div class="year"></div></div></div>
<div class="section"><h3>Pendidikan</h3><div class="exp"><strong>SMKN 1 LEUWIMUNDING</strong><div class="place">JURUSAN PENGEMBANGAN PERANGKAT LUNAK DAN GIM</div><div class="year">2024 - 2027</div></div></div>
</div>
</div>
</div>
<script>
var t = localStorage.getItem('theme') || (matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
document.documentElement.dataset.theme = t;
var b = document.getElementById('themeToggle');
function paint() { b.textContent = document.documentElement.dataset.theme === 'dark' ? '☀️ Light' : '🌙 Dark'; }
paint();
b.onclick = function () {
  var n = document.documentElement.dataset.theme === 'dark' ? 'light' : 'dark';
  document.documentElement.dataset.theme = n;
  localStorage.setItem('theme', n);
  paint();
};
</script>
</body>
</html>
