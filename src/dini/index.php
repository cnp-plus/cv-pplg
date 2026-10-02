<?php
$nama = "Dinia Saroh";
$sekolah = "SMK Negeri 1 Leuwimunding";
$jurusan = "Rekayasa Perangkat Lunak (RPL)";
$kelas = "XII RPL";
$tempat_lahir = "Cirebon";
$alamat = "Budur, Cirebon";
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>CV Dinia Saroh</title>

<style>

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #eeeaff;
    color: #333;
}

.container {
    max-width: 430px;
    margin: auto;
    background: white;
    min-height: 100vh;
}

/* HEADER */

.header {
    background: linear-gradient(135deg, #725cff, #a58cff);
    padding: 35px 20px 40px;
    text-align: center;
    color: white;
    border-radius: 0 0 35px 35px;
}

/* TEMPAT FOTO */

.foto-box {
    width: 140px;
    height: 140px;
    margin: 0 auto 15px;
    border-radius: 50%;
    background: #ffffff;
    padding: 5px;
}

.foto-box img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
}

/* NAMA */

.header h1 {
    margin: 8px 0;
    font-size: 28px;
}

.header p {
    margin: 7px 0;
    font-size: 14px;
}

.badge {
    display: inline-block;
    background: white;
    color: #725cff;
    padding: 9px 18px;
    border-radius: 20px;
    font-weight: bold;
    margin-top: 8px;
}

/* CONTENT */

.content {
    padding: 20px;
}

/* CARD */

.card {
    background: white;
    border-radius: 20px;
    padding: 20px;
    margin-bottom: 18px;
    box-shadow: 0 5px 18px rgba(80,70,120,0.10);
    border: 1px solid #eee;
}

.card h2 {
    color: #6959e8;
    font-size: 19px;
    margin-top: 0;
}

/* TENTANG SAYA */

.tentang {
    font-size: 14px;
    line-height: 1.7;
    text-align: justify;
}

/* DATA DIRI */

.data {
    margin: 13px 0;
    font-size: 14px;
    line-height: 1.5;
}

.label {
    font-weight: bold;
    color: #666;
}

/* PENDIDIKAN */

.pendidikan {
    background: #f1efff;
    padding: 16px;
    border-radius: 15px;
    line-height: 1.6;
}

/* QUOTE */

.quote {
    background: linear-gradient(135deg, #f0edff, #faf9ff);
    padding: 20px;
    border-radius: 20px;
    text-align: center;
    color: #6959e8;
    font-style: italic;
    line-height: 1.6;
}

/* FOOTER */

.footer {
    text-align: center;
    padding: 20px;
    color: #999;
    font-size: 12px;
}

</style>
</head>

<body>

<div class="container">

    <!-- =========================
         BAGIAN FOTO DAN PROFIL
         ========================= -->

    <div class="header">

        <!--
        ==================================
        TEMPAT NARO FOTO KAMU
        ==================================

        Simpan foto kamu dengan nama:
        foto.jpg

        Lalu taruh foto tersebut
        satu folder dengan index.php
        -->

        <div class="foto-box">
            <img src="asset/dini.jpeg" alt="dini.jpeg">
        </div>

        <h1><?php echo $nama; ?></h1>

        <p><?php echo $sekolah; ?></p>

        <div class="badge">
            <?php echo $jurusan; ?>
        </div>

        <p>✨ Pelajar yang terus belajar dan berkembang ✨</p>

    </div>


    <div class="content">

        <!-- =========================
             TENTANG SAYA
             ========================= -->

        <div class="card">

            <h2>✨ Tentang Saya</h2>

            <p class="tentang">
                Halo, saya Dinia Saroh, seorang pelajar SMK Negeri 1
                Leuwimunding jurusan Rekayasa Perangkat Lunak (RPL).
                Saya tertarik dengan dunia teknologi dan pemrograman.
                Saya senang mempelajari hal-hal baru, mencoba membuat
                berbagai project, dan terus mengembangkan kemampuan
                saya agar menjadi lebih baik.
            </p>

        </div>


        <!-- =========================
             DATA DIRI
             ========================= -->

        <div class="card">

            <h2>👤 Data Diri</h2>

            <div class="data">
                <span class="label">Nama Lengkap</span><br>
                <?php echo $nama; ?>
            </div>

            <div class="data">
                <span class="label">Tempat Lahir</span><br>
                <?php echo $tempat_lahir; ?>
            </div>

            <div class="data">
                <span class="label">Alamat</span><br>
                <?php echo $alamat; ?>
            </div>

            <div class="data">
                <span class="label">Sekolah</span><br>
                <?php echo $sekolah; ?>
            </div>

            <div class="data">
                <span class="label">Jurusan</span><br>
                <?php echo $jurusan; ?>
            </div>

            <div class="data">
                <span class="label">Kelas</span><br>
                <?php echo $kelas; ?>
            </div>

        </div>


        <!-- =========================
             PENDIDIKAN
             ========================= -->

        <div class="card">

            <h2>🎓 Pendidikan</h2>

            <div class="pendidikan">

                <b><?php echo $sekolah; ?></b>

                <br>

                Jurusan <?php echo $jurusan; ?>

                <br>

                Kelas <?php echo $kelas; ?>

            </div>

        </div>


        <!-- =========================
             QUOTE
             ========================= -->

        <div class="quote">

            "Terus belajar, terus mencoba,
            dan jangan takut untuk berkembang. 🌷"

        </div>

    </div>


    <div class="footer">

        © 2026 CV <?php echo $nama; ?>

    </div>

</div>

</body>
</html>