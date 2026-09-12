<?php

// =====================================================
// DATA CV
// GANTI BAGIAN INI SESUAI DATA KAMU
// =====================================================

$nama = "NURMALA AYU KOMALASARI";
$gelar = "calon sarjana";
$foto = "assets/malmal.jpeg";

$tentang = "Saya adalah siswi kelas 12 SMK jurusan Pengembangan Perangkat Lunak dan Gim (PPLG),saya adalah anak stau-satunya dikeluarga, saya hobi bermain bulu tangkis,dan saya orang yang mudah di ajak bercerita,saya bisa menjadi priadi yang pendiam dan kadang sebaliknya .";

$kontak = [
    "email" => "malaayu2112@gmail.com",
    "telepon" => "0822xxxxxxxx",
    "alamat" => "majalengka,leuwimunding,patuanan",
    "instagram" => "@mallla21_",
    "tiktok" => "mallla$"
];

$data_diri = [
    "Tempat, Tgl Lahir" => "majalengka,21 oktober 2008",
    "Jenis Kelamin" => "Perempuan",
    "Status" => "pelajar",
    "Kewarganegaraan" => "Indonesia"
];

$pendidikan = [
    [
        "tahun" => "2024 - Sekarang",
        "sekolah" => "SMKN 1 LEUWIMUNDING",
        "jurusan" => "PPLG"
    ],
    [
        "tahun" => "2021 - 2023",
        "sekolah" => "SMPN 2 LEUWIMUNDING",
        "jurusan" => "umum"
    ]
];

$pengalaman = [
    [
        "tahun" => "2025 - Sekarang",
        "posisi" => "kebersihan kelas",
        "tempat" => "smkn 1 leuwimunding",
        "deskripsi" => "saya bertugas untuk selalu mengingatkan anak kelas piket setiap harinya."
    ],
    [
        "tahun" => "2023",
        "posisi" => "wakil ketua paskibra",
        "tempat" => "smpn 2 leuwimunding",
        "deskripsi" => "mengikuti lomba baris berbaris sewilayah 3 cirebon."
    ]
];

$skills = [
    ["nama" => "bercerita", "persen" => 90],
    ["nama" => "fotografi", "persen" => 80],
    ["nama" => "membaca", "persen" => 75],
    ["nama" => "masak", "persen" => 70]
];

$project = [
    [
        "nomor" => "01",
        "judul" => "Aplikasi Dashboard Apotek",
        "deskripsi" => "Mengembangkan aplikasi berbasis Flutter."
    ],
    [
        "nomor" => "02",
        "judul" => "Proyek Game",
        "deskripsi" => "Mencoba membuat berbagai proyek game sederhana menggunakan teknologi yang dipelajari, termasuk konsep game dengan karakter, skor, nyawa, waktu, level, suara, dan interaksi pemain.."
    ],
    [
        "nomor" => "03",
        "judul" => "proposal eskul",
        "deskripsi" => "saya sedang belajar dan mengerjakan proposal sebagai sekertaris di paskibra karena itu tugasnya ."
    ]
];

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($nama); ?> - CV</title>

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

</head>


<body>


<!-- ==================================================
     CV WRAPPER
================================================== -->

<div class="cv">


    <!-- ==================================================
         SIDEBAR
    ================================================== -->

    <aside class="sidebar">


        <!-- FOTO -->

        <div class="photo-area">

            <div class="photo-border">

                <img
                    src="<?= htmlspecialchars($foto); ?>"
                    alt="Foto <?= htmlspecialchars($nama); ?>"
                >

            </div>

        </div>


        <!-- NAMA -->

        <div class="profile">

            <h1>
                <?= htmlspecialchars($nama); ?>
            </h1>

            <p>
                <?= htmlspecialchars($gelar); ?>
            </p>

        </div>


        <div class="side-line"></div>


        <!-- CONTACT -->

        <div class="side-section">

            <h3>CONTACT</h3>


            <div class="side-item">

                <span class="icon">✉</span>

                <div>

                    <small>Email</small>

                    <p>
                        <?= htmlspecialchars($kontak["email"]); ?>
                    </p>

                </div>

            </div>


            <div class="side-item">

                <span class="icon">☎</span>

                <div>

                    <small>Phone</small>

                    <p>
                        <?= htmlspecialchars($kontak["telepon"]); ?>
                    </p>

                </div>

            </div>


            <div class="side-item">

                <span class="icon">⌖</span>

                <div>

                    <small>Address</small>

                    <p>
                        <?= htmlspecialchars($kontak["alamat"]); ?>
                    </p>

                </div>

            </div>


            <div class="side-item">

                <span class="icon">◎</span>

                <div>

                    <small>Instagram</small>

                    <p>
                        <?= htmlspecialchars($kontak["instagram"]); ?>
                    </p>

                </div>

            </div>


        </div>


        <!-- SKILLS -->

        <div class="side-section">

            <h3>SKILLS</h3>


            <?php foreach ($skills as $skill): ?>

                <div class="skill">

                    <div class="skill-label">

                        <span>
                            <?= htmlspecialchars($skill["nama"]); ?>
                        </span>

                        <span>
                            <?= htmlspecialchars($skill["persen"]); ?>%
                        </span>

                    </div>


                    <div class="skill-track">

                        <div
                            class="skill-fill"
                            style="width: <?= htmlspecialchars($skill["persen"]); ?>%"
                        ></div>

                    </div>

                </div>

            <?php endforeach; ?>


        </div>


        <!-- DATA DIRI -->

        <div class="side-section">

            <h3>PERSONAL</h3>


            <?php foreach ($data_diri as $label => $value): ?>

                <div class="personal-item">

                    <small>
                        <?= htmlspecialchars($label); ?>
                    </small>

                    <p>
                        <?= htmlspecialchars($value); ?>
                    </p>

                </div>

            <?php endforeach; ?>


        </div>


    </aside>



    <!-- ==================================================
         CONTENT
    ================================================== -->

    <main class="content">


        <!-- HEADER -->

        <header class="content-header">

            <div>

                <span class="subtitle">
                    CURRICULUM VITAE
                </span>

                <h2>
                    Hello, I'm
                    <strong><?= htmlspecialchars($nama); ?></strong>
                </h2>

                <p>
                    <?= htmlspecialchars($gelar); ?>
                </p>

            </div>


            <div class="header-number">

                <span>CV</span>

            </div>

        </header>



        <!-- ABOUT -->

        <section class="section">

            <div class="section-title">

                <span>01</span>

                <h3>ABOUT ME</h3>

            </div>


            <div class="about">

                <p>
                    <?= htmlspecialchars($tentang); ?>
                </p>

            </div>

        </section>



        <!-- EDUCATION -->

        <section class="section">

            <div class="section-title">

                <span>02</span>

                <h3>EDUCATION</h3>

            </div>


            <div class="education-grid">


                <?php foreach ($pendidikan as $edu): ?>

                    <div class="education-card">

                        <span class="year">
                            <?= htmlspecialchars($edu["tahun"]); ?>
                        </span>

                        <h4>
                            <?= htmlspecialchars($edu["sekolah"]); ?>
                        </h4>

                        <p>
                            <?= htmlspecialchars($edu["jurusan"]); ?>
                        </p>

                    </div>

                <?php endforeach; ?>


            </div>

        </section>



        <!-- EXPERIENCE -->

        <section class="section">

            <div class="section-title">

                <span>03</span>

                <h3>EXPERIENCE</h3>

            </div>


            <div class="experience-grid">


                <?php foreach ($pengalaman as $exp): ?>

                    <div class="experience-card">


                        <div class="experience-year">

                            <?= htmlspecialchars($exp["tahun"]); ?>

                        </div>


                        <div>

                            <h4>
                                <?= htmlspecialchars($exp["posisi"]); ?>
                            </h4>

                            <span class="company">
                                <?= htmlspecialchars($exp["tempat"]); ?>
                            </span>

                            <p>
                                <?= htmlspecialchars($exp["deskripsi"]); ?>
                            </p>

                        </div>


                    </div>

                <?php endforeach; ?>


            </div>

        </section>



        <!-- PROJECT -->

        <section class="section">

            <div class="section-title">

                <span>04</span>

                <h3>SELECTED PROJECT</h3>

            </div>


            <div class="project-grid">


                <?php foreach ($project as $item): ?>

                    <div class="project-card">

                        <span class="project-number">

                            <?= htmlspecialchars($item["nomor"]); ?>

                        </span>


                        <h4>

                            <?= htmlspecialchars($item["judul"]); ?>

                        </h4>


                        <p>

                            <?= htmlspecialchars($item["deskripsi"]); ?>

                        </p>


                        <span class="arrow">
                            →
                        </span>

                    </div>

                <?php endforeach; ?>


            </div>

        </section>



        <!-- FOOTER -->

        <footer>

            <div>

                <strong>
                    <?= htmlspecialchars($nama); ?>
                </strong>

                <span>
                    <?= htmlspecialchars($kontak["email"]); ?>
                </span>

            </div>


            <span>
                © <?= date("Y"); ?>
            </span>

        </footer>


    </main>


</div>


</body>

</html>