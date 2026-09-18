<?php
// ==========================
// DATA CV
// ==========================

$nama = "Frysa Salsabila Fauzi";
$jabatan = "Beauty & Creative Enthusiast";

$about = "I am a creative and professional individual with strong leadership skills. 
I am able to work independently and as part of a team, take initiative, complete tasks 
responsibly, and meet deadlines. I learn quickly, adapt well to new challenges, and 
always strive to deliver the best results.";

$experiences = [
    [
        "position" => "Ketua Tim Proyek",
        "company" => "Proyek Sekolah",
        "year" => "2024 - Sekarang",
        "description" => [
            "Memimpin dan mengarahkan anggota tim dalam menyelesaikan proyek.",
            "Mengatur pembagian tugas dan memastikan pekerjaan berjalan dengan baik.",
            "Membangun kerja sama dan  komunikasi dalam tim."
        ]
    ],
    [
        "position" => "Proyek Kreatif & Promosi",
        "company" => "Proyek Pribadi/Sekolah",
        "year" => "2023 - 2024",
        "description" => [
            "Membuat dan mengembangkan ide kreatif untuk sebuah proyek.",
            "Membuat proses editing dan pembuatan konten.",
            "Mencari informasi dan solusi secara mandiri.",
            "Mengembangkan kemampuan komunikasi dan kreativitas."
        ]
    ]
];

$education = [
    "SMKN 1 Leuwimunding",
    "Jurusan Rekayasa Perangkat Lunak",
    "2024 - 2026"
];

$skills = [
    ["name" => "🎤 Singing", "percent" => 85],
    ["name" => "🏃‍♀️ Sports/Athletics", "percent" => 80],
    ["name" => "💻 Programming", "percent" => 80],
    ["name" => "🎬 Video & Photo Editing", "percent" => 75],
    ["name" => "👑 Leadership", "percent" => 75],
    ["name" => "⚔️ Gaming", "percent" => 85]
];

$phone = "+62 812-3456-7890";
$email = "frysaimutkiyut@gmail.com";
$website = "www.frysaimut.com";
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $nama ?> - CV</title>

    <link rel="stylesheet" href="style.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

<div class="cv">

    <!-- ========================= -->
    <!-- BAGIAN ATAS -->
    <!-- ========================= -->

    <div class="top">

        <!-- FOTO -->
        <div class="photo-section">

            <div class="decor decor1">✦</div>
            <div class="decor decor2">✦</div>

            <div class="photo-frame">

                <img src="foto1.jpeg" alt="Foto <?= $nama ?>">

            </div>

        </div>


        <!-- NAMA & ABOUT -->
        <div class="intro">

            <div class="name-box">
                <?= $nama ?>
            </div>

            <div class="job-box">
                <?= $jabatan ?>
            </div>

            <h2>About Me</h2>

            <div class="line"></div>

            <p>
                <?= $about ?>
            </p>

        </div>

    </div>


    <!-- ========================= -->
    <!-- ISI CV -->
    <!-- ========================= -->

    <div class="content">

        <!-- KOLOM KIRI -->
        <div class="left">

            <!-- EXPERIENCE -->
            <section>

                <h2>Experience</h2>

                <div class="line"></div>

                <?php foreach ($experiences as $experience): ?>

                    <div class="experience">

                        <div class="experience-head">

                            <div>
                                <strong>
                                    <?= $experience["position"] ?>
                                </strong>

                                <small>
                                    <?= $experience["company"] ?>
                                </small>
                            </div>

                            <span>
                                <?= $experience["year"] ?>
                            </span>

                        </div>

                        <ul>

                            <?php foreach ($experience["description"] as $desc): ?>

                                <li>
                                    <?= $desc ?>
                                </li>

                            <?php endforeach; ?>

                        </ul>

                    </div>

                <?php endforeach; ?>

            </section>


            <!-- EDUCATION -->
            <section class="education">

                <h2>Education</h2>

                <div class="line"></div>

                <?php foreach ($education as $edu): ?>

                    <p>
                        <?= $edu ?>
                    </p>

                <?php endforeach; ?>

            </section>

        </div>


        <!-- KOLOM KANAN -->
        <div class="right">

            <!-- SKILLS -->
            <section>

                <h2>Skills</h2>

                <div class="line"></div>

                <div class="skills">

                    <?php foreach ($skills as $skill): ?>

                        <div class="skill">

                            <div class="circle"
                                 style="--percent: <?= $skill["percent"] ?>%;">
                                <span>
                                    <?= $skill["percent"] ?>%
                                </span>
                            </div>

                            <p>
                                <?= $skill["name"] ?>
                            </p>

                        </div>

                    <?php endforeach; ?>

                </div>

            </section>


            <!-- CONTACT -->
             
            <div class="contact">

                <h2>Contact</h2>

                <div class="contact-line"></div>

                <div class="contact-item">
                    <div class="icon">☎</div>
                    <span><?= $phone ?></span>
                </div>

                <div class="contact-item">
                    <div class="icon">✉</div>
                    <span><?= $email ?></span>
                </div>

                <div class="contact-item">
                    <div class="icon">🌐</div>
                    <span><?= $website ?></span>
                </div>

            </div>

        </div>

    </div>


    <!-- DEKORASI BAWAH -->
    <div class="bottom-decoration">
        ∿∿∿∿∿∿∿∿∿∿∿∿∿∿∿∿∿
    </div>

</div>

</body>
</html>