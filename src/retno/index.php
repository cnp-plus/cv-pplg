<?php
// CV Retno Ayu Anjani
// Simpan foto profil sebagai: assets/retno.jpg

$nama = "RETNO AYU ANJANI";

$pendidikan = [
    "SMK",
    "Sedang menempuh pendidikan sambil mengembangkan kreativitas dan berbagai kemampuan yang aku minati."
];

$kemampuan = [
    "Menggambar desain pakaian",
    "Membuat konsep fashion",
    "Mengubah dan mengkreasikan pakaian",
    "Mix & match outfit",
    "Bereksperimen dengan berbagai gaya",
    "Coding dasar HTML, CSS, PHP, dan Flutter"
];

$hobi = [
    "Menggambar desain baju",
    "Mengkreasikan pakaian",
    "Mencoba berbagai style fashion",
    "Bereksperimen dengan ide-ide baru",
    "Membuat sesuatu dari imajinasi sendiri"
];

$tentang = "Aku adalah seseorang yang suka bereksperimen dan mencoba hal-hal baru. Aku senang mengubah sesuatu yang sederhana menjadi lebih menarik, terutama dalam hal fashion.

Aku suka menggambar baju, membuat desain dari imajinasiku sendiri, dan mencoba berbagai gaya. Aku juga termasuk anak mama yang cengeng dan sedikit manja.";

$proyek = "Proyek kreatif yang menjadi tempat untuk menuangkan ide dan imajinasi dalam bidang fashion, mulai dari menggambar desain pakaian, membuat konsep, styling, hingga bereksperimen mengubah pakaian menjadi sesuatu yang lebih unik.";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($nama) ?> - CV</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Trebuchet MS", Arial, sans-serif;
            background:
                radial-gradient(circle at 15% 15%, rgba(255,255,255,.7), transparent 25%),
                #d8c5a3;
            color: #4b1c22;
            padding: 35px 15px;
        }

        .paper {
            width: 100%;
            max-width: 1050px;
            margin: auto;
            background: #f4ead5;
            position: relative;
            overflow: hidden;
            border: 10px solid #e6d5b6;
            box-shadow: 0 15px 40px rgba(54, 25, 19, .25);
        }

        .paper::before,
        .paper::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            opacity: .28;
            z-index: 0;
        }

        .paper::before {
            width: 300px;
            height: 300px;
            background: #b9c8e7;
            left: -170px;
            top: 100px;
        }

        .paper::after {
            width: 250px;
            height: 250px;
            background: #d2d9eb;
            right: -130px;
            top: 280px;
        }

        .content {
            position: relative;
            z-index: 2;
            padding: 45px;
        }

        .top {
            display: grid;
            grid-template-columns: 290px 1fr;
            gap: 45px;
            align-items: center;
        }

        .photo-wrap {
            position: relative;
            padding: 15px;
        }

        .photo {
            width: 100%;
            aspect-ratio: 3 / 4;
            object-fit: cover;
            background: #d9d9d9;
            border: 10px solid #fff;
            box-shadow: 0 7px 18px rgba(0,0,0,.2);
            display: block;
        }

        .photo-note {
            text-align: center;
            margin-top: 10px;
            color: #887d77;
            font-size: 12px;
        }

        .title-small {
            display: inline-block;
            background: #7d1720;
            color: white;
            padding: 9px 20px;
            font-size: 17px;
            font-weight: bold;
            transform: rotate(-2deg);
            margin-bottom: 14px;
        }

        h1 {
            font-family: Georgia, serif;
            font-size: clamp(38px, 7vw, 72px);
            line-height: .95;
            color: #6d1219;
            letter-spacing: 2px;
            margin-bottom: 12px;
        }

        .tagline {
            display: inline-block;
            background: #b18a16;
            color: white;
            padding: 10px 20px;
            font-weight: bold;
            font-size: 18px;
            transform: rotate(1deg);
        }

        .intro {
            margin-top: 25px;
            background: #eadcc2;
            border: 1px dashed #9b7c62;
            padding: 22px;
            font-size: 16px;
            line-height: 1.8;
            box-shadow: 5px 7px 0 rgba(125, 23, 32, .08);
        }

        .section-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-top: 42px;
        }

        .section {
            position: relative;
            background: #f8f0df;
            padding: 25px;
            box-shadow: 0 7px 15px rgba(67, 35, 20, .12);
            border: 1px solid rgba(125,23,32,.13);
        }

        .section:nth-child(even) {
            transform: rotate(.5deg);
        }

        .section:nth-child(odd) {
            transform: rotate(-.4deg);
        }

        .section-title {
            display: inline-block;
            background: #7d1720;
            color: #fff;
            padding: 8px 18px;
            font-size: 20px;
            margin: -42px 0 18px -10px;
            transform: rotate(-2deg);
        }

        .gold-title {
            background: #b18a16;
        }

        .section p {
            font-size: 15px;
            line-height: 1.75;
            white-space: pre-line;
        }

        ul {
            list-style: none;
        }

        li {
            position: relative;
            padding: 8px 0 8px 28px;
            line-height: 1.5;
            font-size: 15px;
        }

        li::before {
            content: "★";
            position: absolute;
            left: 0;
            top: 8px;
            color: #b18a16;
            font-size: 16px;
        }

        .education {
            background: #e8edf5;
        }

        .skills {
            background: #efe2cf;
        }

        .hobby {
            background: #f7ead9;
        }

        .about {
            background: #e6dfd2;
        }

        .project {
            margin-top: 35px;
            background: #ead8b9;
            padding: 30px;
            border-left: 8px solid #7d1720;
            box-shadow: 7px 8px 0 rgba(125,23,32,.1);
        }

        .project h2 {
            color: #7d1720;
            font-family: Georgia, serif;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .project-name {
            font-weight: bold;
            color: #9b7610;
            font-size: 19px;
            margin-bottom: 12px;
        }

        .quote {
            text-align: center;
            font-family: Georgia, serif;
            font-size: 21px;
            font-style: italic;
            color: #7d1720;
            margin-top: 25px;
        }

        .footer {
            margin-top: 35px;
            text-align: center;
            font-size: 13px;
            color: #887d77;
        }

        .decor {
            position: absolute;
            color: #b18a16;
            font-size: 55px;
            z-index: 1;
            user-select: none;
        }

        .star1 { right: 35px; top: 30px; transform: rotate(15deg); }
        .star2 { left: 35px; bottom: 110px; transform: rotate(-15deg); }
        .star3 { right: 50px; bottom: 80px; transform: rotate(25deg); }

        @media (max-width: 800px) {
            body {
                padding: 10px;
            }

            .content {
                padding: 25px 18px;
            }

            .top {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .photo-wrap {
                max-width: 270px;
                margin: auto;
            }

            .section-grid {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            h1 {
                text-align: center;
            }

            .title-small,
            .tagline {
                display: block;
                width: fit-content;
                margin-left: auto;
                margin-right: auto;
            }

            .intro {
                font-size: 14px;
            }
        }

        @media print {
            body {
                background: white;
                padding: 0;
            }

            .paper {
                max-width: none;
                border: none;
                box-shadow: none;
            }
        }
    </style>
</head>

<body>

<div class="paper">

    <span class="decor star1">✦</span>
    <span class="decor star2">✦</span>
    <span class="decor star3">✧</span>

    <main class="content">

        <section class="top">

            <div class="photo-wrap">
                <!-- Ganti file ini dengan foto Retno -->
                <img src="image/imupp.jpeg" alt="Foto <?= htmlspecialchars($nama) ?>" class="photo">
                <div class="photo-note">Creative • Fashion • Coding</div>
            </div>

            <div>
                <div class="title-small">CURRICULUM VITAE</div>

                <h1><?= htmlspecialchars($nama) ?></h1>

                <div class="tagline">Fashion Creative &amp; RPL Student</div>

                <div class="intro">
                    Saya adalah pelajar SMK yang senang mengeksplorasi kreativitas,
                    khususnya dalam fashion, desain pakaian, styling, serta teknologi.
                    Saya juga terus mengembangkan kemampuan coding dasar untuk
                    membuat berbagai proyek digital.
                </div>
            </div>

        </section>


        <section class="section-grid">

            <article class="section education">
                <div class="section-title">Pendidikan</div>

                <p><strong><?= htmlspecialchars($pendidikan[0]) ?></strong></p>

                <p style="margin-top:10px;">
                    <?= htmlspecialchars($pendidikan[1]) ?>
                </p>
            </article>


            <article class="section skills">
                <div class="section-title gold-title">Kemampuan</div>

                <ul>
                    <?php foreach ($kemampuan as $item): ?>
                        <li><?= htmlspecialchars($item) ?></li>
                    <?php endforeach; ?>
                </ul>
            </article>


            <article class="section hobby">
                <div class="section-title">Hobi</div>

                <ul>
                    <?php foreach ($hobi as $item): ?>
                        <li><?= htmlspecialchars($item) ?></li>
                    <?php endforeach; ?>
                </ul>
            </article>


            <article class="section about">
                <div class="section-title gold-title">Tentang Aku</div>

                <p><?= nl2br(htmlspecialchars($tentang)) ?></p>
            </article>

        </section>


        <section class="project">
            <h2>Proyek</h2>

            <div class="project-name">
                NYUAE — Fashion Creative Project
            </div>

            <p>
                <?= htmlspecialchars($proyek) ?>
            </p>

            <div class="quote">
                “Create it. Change it. Make it yours.”
            </div>
        </section>


        <div class="footer">
            RETNO AYU ANJANI &nbsp;•&nbsp; CURRICULUM VITAE
        </div>

    </main>
</div>

</body>
</html>
