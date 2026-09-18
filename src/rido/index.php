<?php
// =========================
// DATA CV
// =========================

$nama = "Rido Maulana";
$profesi = "Web Developer";
$lokasi = "Indonesia";

$about = "Saya adalah seorang pelajar yang tertarik pada dunia teknologi,
khususnya pengembangan website dan pemrograman. Saya senang mempelajari
hal-hal baru, berpikir kreatif, dan mengembangkan kemampuan di bidang teknologi.";

$fokus = "Web Development";

$education = [
    [
        "sekolah" => "SMKN 1 LEUWIMUNDING",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "deskripsi" => "Mempelajari pengembangan website, pemrograman,
        database, desain antarmuka, dan dasar-dasar pengembangan perangkat lunak."
    ]
];

$languages = [
    "Bahasa Indonesia",
    "Mandarin",
    "English",
    "日本語 (Jepang)"
];

$skills = [
    "HTML",
    "CSS",
    "SQL",
    "MariaDB",
    "PHP",
    "Creative Thinking"
];

$experience = [
    [
        "judul" => "Membuat Website",
        "deskripsi" => "Membuat dan mengembangkan website menggunakan HTML,
        CSS, PHP, dan database untuk kebutuhan tugas maupun project."
    ],
    [
        "judul" => "Modifikasi & Integrasi Kode",
        "deskripsi" => "Mempelajari kode yang sudah tersedia, melakukan modifikasi,
        memperbaiki error, serta mengintegrasikan kode sesuai kebutuhan website."
    ]
];

$email = "emailkamu@gmail.com";
$nomor = "08xxxxxxxxxx";
$github = "github.com/username";
$instagram = "@username";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $nama ?> - CV</title>

    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >
</head>

<body>

<!-- =========================
     NAVBAR
========================= -->

<header class="navbar">

    <div class="logo">
        <?= $nama ?>
    </div>

    <nav>
        <a href="#home">Home</a>
        <a href="#education">Education</a>
        <a href="#skills">Skills</a>
        <a href="#experience">Experience</a>
        <a href="#contact">Contact</a>
    </nav>

</header>


<!-- =========================
     HOME
========================= -->

<section id="home" class="home">

    <div class="home-content">

        <div class="photo-box">
            <!-- Ganti foto.jpg dengan foto kamu -->
            <img src="foto.png" alt="Foto Profil">
        </div>

        <div class="intro">

            <p class="hello">
                Hello, I'm
            </p>

            <h1>
                <?= $nama ?>
            </h1>

            <h2>
                <?= $profesi ?>
            </h2>

            <p class="about">
                <?= $about ?>
            </p>

            <div class="info">

                <div>
                    <i class="fa-solid fa-bullseye"></i>
                    <span>
                        <b>Fokus</b>
                        <?= $fokus ?>
                    </span>
                </div>

                <div>
                    <i class="fa-solid fa-location-dot"></i>
                    <span>
                        <b>Lokasi</b>
                        <?= $lokasi ?>
                    </span>
                </div>

            </div>

            <a href="cv.pdf" download class="btn">
                <i class="fa-solid fa-download"></i>
                Download CV
            </a>

        </div>

    </div>

</section>


<!-- =========================
     EDUCATION
========================= -->

<section id="education" class="section">

    <div class="container">

        <p class="section-subtitle">
            Education
        </p>

        <h2 class="section-title">
            Pendidikan
        </h2>

        <?php foreach ($education as $edu): ?>

            <div class="card education-card">

                <div class="card-icon">
                    <i class="fa-solid fa-school"></i>
                </div>

                <div>

                    <h3>
                        <?= $edu["sekolah"] ?>
                    </h3>

                    <h4>
                        <?= $edu["jurusan"] ?>
                    </h4>

                    <p>
                        <?= $edu["deskripsi"] ?>
                    </p>

                </div>

            </div>

        <?php endforeach; ?>


        <!-- Bahasa -->

        <div class="languages">

            <h3>
                Bahasa yang Dipelajari
            </h3>

            <div class="language-list">

                <?php foreach ($languages as $language): ?>

                    <span>
                        <?= $language ?>
                    </span>

                <?php endforeach; ?>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     SKILLS
========================= -->

<section id="skills" class="section gray">

    <div class="container">

        <p class="section-subtitle">
            Skills
        </p>

        <h2 class="section-title">
            Keahlian
        </h2>

        <div class="skills-grid">

            <?php foreach ($skills as $skill): ?>

                <div class="skill-card">

                    <i class="fa-solid fa-code"></i>

                    <h3>
                        <?= $skill ?>
                    </h3>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =========================
     EXPERIENCE
========================= -->

<section id="experience" class="section">

    <div class="container">

        <p class="section-subtitle">
            Experience
        </p>

        <h2 class="section-title">
            Pengalaman
        </h2>

        <div class="experience">

            <?php foreach ($experience as $exp): ?>

                <div class="experience-item">

                    <div class="timeline-dot"></div>

                    <div class="experience-content">

                        <h3>
                            <?= $exp["judul"] ?>
                        </h3>

                        <p>
                            <?= $exp["deskripsi"] ?>
                        </p>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>


<!-- =========================
     CONTACT
========================= -->

<section id="contact" class="section contact-section">

    <div class="container">

        <p class="section-subtitle">
            Contact
        </p>

        <h2 class="section-title">
            Hubungi Saya
        </h2>

        <div class="contact-grid">

            <a href="mailto:<?= $email ?>" class="contact-card">

                <i class="fa-solid fa-envelope"></i>

                <div>
                    <h3>Email</h3>
                    <p><?= $email ?></p>
                </div>

            </a>


            <a href="tel:<?= $nomor ?>" class="contact-card">

                <i class="fa-solid fa-phone"></i>

                <div>
                    <h3>Nomor</h3>
                    <p><?= $nomor ?></p>
                </div>

            </a>


            <a href="https://<?= $github ?>" target="_blank" class="contact-card">

                <i class="fa-brands fa-github"></i>

                <div>
                    <h3>GitHub</h3>
                    <p><?= $github ?></p>
                </div>

            </a>


            <a href="https://instagram.com/<?= str_replace('@', '', $instagram) ?>"
               target="_blank"
               class="contact-card">

                <i class="fa-brands fa-instagram"></i>

                <div>
                    <h3>Instagram</h3>
                    <p><?= $instagram ?></p>
                </div>

            </a>

        </div>

    </div>

</section>


<!-- =========================
     FOOTER
========================= -->

<footer>

    <p>
        © <?= date("Y") ?> <?= $nama ?>. All Rights Reserved.
    </p>

</footer>


</body>
</html>
