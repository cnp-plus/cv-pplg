<?php
require 'data.php';
$berhasilKirim = isset($_GET['sukses']) && $_GET['sukses'] == '1';
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CV - <?= htmlspecialchars($profil['nama']) ?></title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <!-- HEADER -->
    <header class="header">
        <img src="<?= htmlspecialchars($profil['foto']) ?>" alt="Foto Profil" class="foto-profil">
        <div class="info-header">
            <h1><?= htmlspecialchars($profil['nama']) ?></h1>
            <p class="jabatan"><?= htmlspecialchars($profil['jabatan']) ?></p>
            <ul class="kontak-list">
                <li>📧 <?= htmlspecialchars($profil['email']) ?></li>
                <li>📞 <?= htmlspecialchars($profil['telepon']) ?></li>
                <li>📍 <?= htmlspecialchars($profil['alamat']) ?></li>
            </ul>
        </div>
    </header>

    <!-- RINGKASAN -->
    <section class="section">
        <h2>Tentang Saya</h2>
        <p><?= htmlspecialchars($profil['ringkasan']) ?></p>
    </section>

    <!-- PENGALAMAN -->
    <section class="section">
        <h2>Pengalaman Kerja</h2>
        <?php foreach ($pengalaman as $p): ?>
            <div class="item">
                <div class="item-header">
                    <strong><?= htmlspecialchars($p['posisi']) ?></strong>
                    <span class="periode"><?= htmlspecialchars($p['periode']) ?></span>
                </div>
                <div class="instansi"><?= htmlspecialchars($p['instansi']) ?></div>
                <p><?= htmlspecialchars($p['deskripsi']) ?></p>
            </div>
        <?php endforeach; ?>
    </section>

    <!-- PENDIDIKAN -->
    <section class="section">
        <h2>Pendidikan</h2>
        <?php foreach ($pendidikan as $p): ?>
            <div class="item">
                <div class="item-header">
                    <strong><?= htmlspecialchars($p['jenjang']) ?></strong>
                    <span class="periode"><?= htmlspecialchars($p['periode']) ?></span>
                </div>
            
            </div>
        <?php endforeach; ?>
    </section>

    <!-- SKILL -->
    <section class="section">
        <h2>Keahlian</h2>
        <div class="skill-list">
            <?php foreach ($skill as $s): ?>
                <span class="skill-badge"><?= htmlspecialchars($s) ?></span>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- FORM KONTAK -->
    <section class="section">
        <h2>Hubungi Saya</h2>

        <?php if ($berhasilKirim): ?>
            <p class="pesan-sukses">✅ Pesan kamu berhasil dikirim, terima kasih!</p>
        <?php endif; ?>

        <form action="contact.php" method="POST" class="form-kontak">
            <div class="form-group">
                <label for="nama_pengirim">Nama</label>
                <input type="text" id="nama_pengirim" name="nama_pengirim" required>
            </div>
            <div class="form-group">
                <label for="email_pengirim">Email</label>
                <input type="email" id="email_pengirim" name="email_pengirim" required>
            </div>
            <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea id="pesan" name="pesan" rows="4" required></textarea>
            </div>
            <button type="submit">Kirim Pesan</button>
        </form>
    </section>

</div>

</body>
</html>
