<?php
require_once __DIR__ . '/data.php'; 

$msg = null; $msgType = 'success';
if($_SERVER['REQUEST_METHOD']==='POST'){
  $name = trim($_POST['name'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $subject = trim($_POST['subject'] ?? '') ?: 'Tanpa Subjek';
  $message = trim($_POST['message'] ?? '');
  $errors = [];
  if(mb_strlen($name) < 2) $errors[] = 'Nama minimal 2 karakter';
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email tidak valid';
  if(mb_strlen($message) < 10) $errors[] = 'Pesan minimal 10 karakter';
  if($errors){
    $msg = implode(' • ', $errors);
    $msgType = 'error';
  } else {
    $storageDir = __DIR__ . '/storage';
    if(!is_dir($storageDir)) mkdir($storageDir, 0755, true);
    $entry = [
      'date' => date('c'),
      'name' => $name,
      'email' => $email,
      'subject' => $subject,
      'message' => $message,
      'ip' => $_SERVER['REMOTE_ADDR'] ?? '-'
    ];
    $file = $storageDir . '/messages.json';
    $all = [];
    if(file_exists($file)){ $all = json_decode(file_get_contents($file), true) ?: []; }
    $all[] = $entry;
    file_put_contents($file, json_encode($all, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE), LOCK_EX);
    $to = $profile['email'];
    $mailSubject = "[CV] $subject — dari $name";
    $mailBody = "Nama: $name\nEmail: $email\nSubjek: $subject\nIP: {$entry['ip']}\nWaktu: {$entry['date']}\n\nPesan:\n$message\n";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";
    @mail($to, $mailSubject, $mailBody, $headers);
    $msg = "Terima kasih, " . htmlspecialchars($name) . "! Pesanmu sudah tersimpan & diteruskan ke email.";
    $msgType = 'success';
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?= $profile['name'] ?> <?= $profile['title'] ?> | CV</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,500&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div id="progress"></div>
<nav>
  <a href="#" style="font-weight:800;letter-spacing:-.02em;display:flex;gap:10px;align-items:center"><span style="width:32px;height:32px;display:grid;place-items:center;background:linear-gradient(135deg,var(--pri),var(--acc));color:#fff;border-radius:9px;font-size:14px">CV</span>UCUP<span style="color:var(--pri)"></span></a>
  <div class="nav-links" id="navLinks">
    <a href="#about" class="active">Tentang</a>
    <a href="#experience">Pengalaman</a>
    <a href="#skills">Keahlian</a>
    <a href="#projects">Proyek</a>
    <a href="#contact">Kontak</a>
  </div>
  <div class="nav-actions">
    <button class="icon-btn" id="themeBtn" title="Toggle theme"><i class="fa-solid fa-moon"></i></button>
    <button class="btn btn-ghost" onclick="window.print()"><i class="fa-solid fa-download"></i> PDF</button>
    <button class="icon-btn hamburger" id="ham"><i class="fa-solid fa-bars"></i></button>
  </div>
</nav>

<div class="hero">
  <div class="container hero-grid">
    <div class="reveal in">
      <div class="badge"><i class="fa-solid fa-circle" style="font-size:8px"></i> Available for freelance • Open to work</div>
      <h1>Halo, saya<br><span><?= $profile['name'] ?></span></h1>
      <div class="typed"><span id="typed"></span><span style="animation:blink 1s infinite">|</span></div>
      <p><?= $profile['about'] ?></p>
      <div class="hero-cta">
        <a href="#contact" class="btn btn-pri"><i class="fa-solid fa-paper-plane"></i> Hubungi Saya</a>
        <a href="#projects" class="btn btn-ghost"><i class="fa-solid fa-sparkles"></i> Lihat Karya</a>
      </div>
      <div class="stats">
        <?php foreach($profile['stats'] as $s): ?>
        <div class="stat"><b class="count" data-target="<?= $s['value'] ?>">0</b><b><?= $s['suffix'] ?></b><br><span><?= $s['label'] ?></span></div>
        <?php endforeach; ?>
      </div>
      <div class="contact-dots">
        <a class="dot" href="mailto:<?= $profile['email'] ?>"><i class="fa-solid fa-envelope" style="color:var(--pri)"></i> <?= $profile['email'] ?></a>
        <span class="dot"><i class="fa-solid fa-location-dot" style="color:var(--acc)"></i> <?= $profile['location'] ?></span>
        <a class="dot" href="https://<?= $profile['linkedin'] ?>" target="_blank"><i class="fa-brands fa-linkedin" style="color:#0a66c2"></i> LinkedIn</a>
        <a class="dot" href="https://<?= $profile['github'] ?>" target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
      </div>
    </div>
    <div class="photo-wrap reveal in" style="transition-delay:.15s">
      <div class="blob" style="top:-40px;right:-40px"></div>
      <div class="photo-card">
        <img src="<?= $profile['photo'] ?>" alt="foto profil" loading="lazy">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-top:12px">
          <div><b style="font-size:14px"><?= $profile['name'] ?></b><br><span style="font-size:12px;color:var(--muted)"><?= $profile['title'] ?> • <?= $profile['location'] ?></span></div>
          <span style="width:10px;height:10px;background:#22c55e;border-radius:50%;box-shadow:0 0 0 6px rgba(34,197,94,.2)"></span>
        </div>
      </div>
      <div class="photo-info">
        <i class="fa-solid fa-phone"></i>
        <div><div style="font-size:11px;color:var(--muted);font-weight:700;letter-spacing:.05em">HUBUNGI</div><b style="font-size:13px"><?= $profile['phone'] ?></b></div>
        <div style="margin-left:auto;text-align:right"><div style="font-size:11px;color:var(--muted)">Website</div><b style="font-size:12px;color:var(--pri)"><?= $profile['website'] ?></b></div>
      </div>
    </div>
  </div>
</div>

<section id="about" class="reveal">
  <div class="container">
    <div class="sec-head">
      <h2>Tentang Saya</h2>
      <p>Developer yang mencintai detail, performa, dan pengalaman pengguna yang mulus.</p>
    </div>
    <div class="grid2">
      <div class="card">
        <h3 style="margin-bottom:10px"><i class="fa-solid fa-quote-left" style="color:var(--pri)"></i> Profil</h3>
        <p style="color:var(--muted);font-size:14px">Saya fokus membangun produk digital yang cepat, aman, dan mudah diskalakan. Berpengalaman bekerja lintas tim dari riset, desain, hingga deployment. Saat ini mendalami tech Vue, Ts, dan Laravel API.</p>
        <div class="line"></div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;font-size:13px">
          <div><span style="color:var(--muted)">Lokasi</span><br><b>Jakarta, Indonesia</b></div>
          <div><span style="color:var(--muted)">Status</span><br><b>Full-time / Freelance</b></div>
          <div><span style="color:var(--muted)">Bahasa</span><br><b>Indonesia, English</b></div>
          <div><span style="color:var(--muted)">Minat</span><br><b>Web Development</b></div>
        </div>
      </div>
      <div class="card">
        <h3 style="margin-bottom:12px">Sertifikasi & Penghargaan</h3>
        <?php foreach($certs as $c): ?>
        <div style="display:flex;gap:12px;align-items:center;padding:10px 0;border-bottom:1px solid var(--line)">
          <span style="width:36px;height:36px;display:grid;place-items:center;background:linear-gradient(135deg,var(--pri),var(--acc));color:#fff;border-radius:10px"><i class="fa-solid fa-award"></i></span>
          <div><b style="font-size:13px"><?= $c['name'] ?></b><br><span style="font-size:12px;color:var(--muted)"><?= $c['by'] ?></span></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section id="experience" class="reveal">
  <div class="container">
    <div class="sec-head">
      <h2>Pengalaman</h2>
      <p>Perjalanan profesional membangun produk yang dipakai ribuan pengguna.</p>
    </div>
    <div class="grid2" style="align-items:start">
      <div class="timeline">
        <?php foreach($experiences as $e): ?>
        <div class="tl-item" style="--c:<?= $e['color'] ?>">
          <div class="tl-top">
            <div><b><?= $e['role'] ?></b><br><span style="color:var(--pri);font-weight:700;font-size:13px"><?= $e['company'] ?></span> <span style="color:var(--muted);font-size:12px">• <?= $e['loc'] ?></span></div>
            <span class="tag"><?= $e['period'] ?></span>
          </div>
          <p style="color:var(--muted);font-size:13px"><?= $e['desc'] ?></p>
          <div class="tags"><?php foreach($e['tags'] as $t): ?><span><?= $t ?></span><?php endforeach; ?></div>
        </div>
        <?php endforeach; ?>
      </div>
      <div>
        <h3 style="font-family:'Space Grotesk',sans-serif;margin-bottom:14px">Pendidikan</h3>
        <?php foreach($education as $ed): ?>
        <div class="card edu" style="margin-bottom:14px">
          <b><?= $ed['degree'] ?></b><br>
          <small><?= $ed['school'] ?> • <?= $ed['period'] ?></small>
          <div style="margin-top:8px;font-size:12px;font-weight:700;background:rgba(99,102,241,.1);color:var(--pri);display:inline-block;padding:5px 10px;border-radius:999px"><?= $ed['gpa'] ?></div>
          <p style="color:var(--muted);font-size:13px;margin-top:8px"><?= $ed['desc'] ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section id="skills" class="reveal">
  <div class="container">
    <div class="sec-head">
      <h2>Keahlian</h2>
      <p>Hard skill teknis & soft skill leadership yang saling melengkapi.</p>
    </div>

    <h3 style="font-family:'Space Grotesk',sans-serif;font-size:18px;margin-bottom:14px"><i class="fa-solid fa-laptop-code" style="color:var(--pri)"></i> Hard Skill</h3>
    <div class="filter" id="skillFilter" style="margin-bottom:16px">
      <button class="pill active" data-f="all">Semua</button>
      <button class="pill" data-f="Frontend">Frontend</button>
      <button class="pill" data-f="Backend">Backend</button>
      <button class="pill" data-f="Tools">Tools</button>
    </div>
    <div class="grid2" id="skillGrid">
      <?php foreach($hardSkills as $cat=>$items): ?>
      <div class="card skill-card" data-cat="<?= $cat ?>">
        <div class="skill-head"><h3><?= $cat ?></h3><i class="fa-solid fa-code" style="color:var(--muted)"></i></div>
        <?php foreach($items as $sk): ?>
        <div class="bar">
          <div class="bar-top"><span><?= $sk['name'] ?></span><span style="color:var(--pri)"><?= $sk['level'] ?>%</span></div>
          <div class="track"><div class="fill" data-width="<?= $sk['level'] ?>%"></div></div>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endforeach; ?>
    </div>

    <h3 style="font-family:'Space Grotesk',sans-serif;font-size:18px;margin:36px 0 14px"><i class="fa-solid fa-users" style="color:var(--acc)"></i> Soft Skill</h3>
    <div class="grid2">
      <?php foreach($softSkills as $sk): ?>
      <div class="card">
        <div class="bar" style="margin:0">
          <div class="bar-top"><span><?= $sk['name'] ?></span><span style="color:var(--pri)"><?= $sk['level'] ?>%</span></div>
          <div class="track"><div class="fill" data-width="<?= $sk['level'] ?>%"></div></div>
          <div style="font-size:12.5px;color:var(--muted);margin-top:6px"><?= $sk['desc'] ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="projects" class="reveal">
  <div class="container">
    <div class="sec-head">
      <h2>Proyek Pilihan</h2>
      <div class="filter" id="projFilter">
        <button class="pill active" data-p="all">Semua</button>
        <button class="pill" data-p="Fullstack">Fullstack</button>
        <button class="pill" data-p="Frontend">Frontend</button>
        <button class="pill" data-p="UI/UX">UI/UX</button>
      </div>
    </div>
    <div class="project-grid" id="projGrid">
      <?php foreach($projects as $p): ?>
      <div class="proj" data-cat="<?= $p['cat'] ?>">
        <img src="<?= $p['img'] ?>" alt="<?= $p['title'] ?>">
        <div class="proj-body">
          <span style="font-size:11px;font-weight:800;letter-spacing:.06em;color:var(--pri);text-transform:uppercase"><?= $p['cat'] ?></span>
          <h3><?= $p['title'] ?></h3>
          <p><?= $p['desc'] ?></p>
          <div class="proj-tags"><?php foreach($p['tags'] as $t): ?><span><?= $t ?></span><?php endforeach; ?></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="contact" class="reveal">
  <div class="container">
    <div class="sec-head">
      <h2>Mari Terhubung</h2>
      <p>Punya ide proyek atau ingin kolaborasi? Kirim pesan, saya balas < 24 jam.</p>
    </div>
    <?php if($msg): ?><div class="alert" style="<?= $msgType==='error'?'background:linear-gradient(135deg,#ef4444,#f97316)':'' ?>"><i class="fa-solid <?= $msgType==='error'?'fa-triangle-exclamation':'fa-circle-check' ?>"></i> <?= htmlspecialchars($msg) ?></div><?php endif; ?>
    <div class="contact-grid">
      <div class="card">
        <h3>Kontak Langsung</h3>
        <div style="margin-top:14px;display:grid;gap:12px">
          <a href="mailto:<?= $profile['email'] ?>" style="display:flex;gap:12px;align-items:center"><span style="width:40px;height:40px;display:grid;place-items:center;background:var(--bg);border:1px solid var(--line);border-radius:12px"><i class="fa-solid fa-envelope" style="color:var(--pri)"></i></span><div><div style="font-size:12px;color:var(--muted)">Email</div><b style="font-size:13px"><?= $profile['email'] ?></b></div></a>
          <div style="display:flex;gap:12px;align-items:center"><span style="width:40px;height:40px;display:grid;place-items:center;background:var(--bg);border:1px solid var(--line);border-radius:12px"><i class="fa-solid fa-phone" style="color:var(--acc)"></i></span><div><div style="font-size:12px;color:var(--muted)">Telepon</div><b style="font-size:13px"><?= $profile['phone'] ?></b></div></div>
          <div style="display:flex;gap:12px;align-items:center"><span style="width:40px;height:40px;display:grid;place-items:center;background:var(--bg);border:1px solid var(--line);border-radius:12px"><i class="fa-solid fa-location-dot" style="color:var(--pri2)"></i></span><div><div style="font-size:12px;color:var(--muted)">Lokasi</div><b style="font-size:13px"><?= $profile['location'] ?></b></div></div>
        </div>
        <div style="display:flex;gap:10px;margin-top:18px">
          <a href="https://<?= $profile['linkedin'] ?>" target="_blank" class="icon-btn"><i class="fa-brands fa-linkedin"></i></a>
          <a href="https://<?= $profile['github'] ?>" target="_blank" class="icon-btn"><i class="fa-brands fa-github"></i></a>
          <a href="https://<?= $profile['website'] ?>" target="_blank" class="icon-btn"><i class="fa-solid fa-globe"></i></a>
          <a href="#" class="icon-btn"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <div style="margin-top:18px;padding:14px;background:var(--bg);border:1px dashed var(--line);border-radius:14px;font-size:13px;color:var(--muted)"><i style="color:var(--pri)"></i></div>
      </div>
      <form method="POST" class="card" onsubmit="return validateForm(event)">
        <h3>Kirim Pesan</h3>
        <div class="form-grid" style="margin-top:14px">
          <div><label style="font-size:12px;font-weight:700">Nama</label><input class="input" name="name" required placeholder="Nama lengkap"></div>
          <div><label style="font-size:12px;font-weight:700">Email</label><input class="input" name="email" type="email" required placeholder="email@contoh.com"></div>
        </div>
        <div style="margin-top:12px"><label style="font-size:12px;font-weight:700">Subjek</label><input class="input" name="subject" placeholder="Tentang apa?"></div>
        <div style="margin-top:12px"><label style="font-size:12px;font-weight:700">Pesan</label><textarea class="input" name="message" rows="4" required placeholder="Tulis pesanmu di sini..."></textarea></div>
        <button class="btn btn-pri" style="width:100%;justify-content:center;margin-top:14px" type="submit"><i class="fa-solid fa-paper-plane"></i> Kirim Pesan</button>
      </form>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container">
    © <?= date('Y') ?> <?= $profile['name'] ?> • <a href="#" style="color:var(--pri);font-weight:700">Kembali ke atas ↑</a>
  </div>
</footer>

<script>window.TYPED_PHRASES = <?= json_encode($profile['typed']) ?>;</script>
<script src="assets/js/main.js"></script>
</body>
</html>
