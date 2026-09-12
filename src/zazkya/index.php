<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CV Zazkya Fadillah</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #242424;
            font-family: Arial, Helvetica, sans-serif;
            color: #171717;
        }

        .page {
            width: 100%;
            min-height: 100vh;
            padding: 40px 25px;
            position: relative;
            overflow: hidden;
        }

        /* =========================================
           DEKORASI
        ========================================= */

        .circle-decoration {
            position: absolute;
            top: 25px;
            left: 50px;
            width: 78px;
            height: 78px;
            background: #9daaf5;
            border-radius: 50%;
            z-index: 2;
        }

        .circle-decoration::before,
        .circle-decoration::after {
            content: "";
            position: absolute;
            background: #242424;
            border-radius: 50%;
        }

        .circle-decoration::before {
            width: 9px;
            height: 9px;
            top: 28px;
            left: 25px;
            box-shadow:
                17px -12px 0 #242424,
                2px 15px 0 #242424;
        }

        .heart-left {
            position: absolute;
            left: 5px;
            top: 145px;
            color: #666;
            font-size: 65px;
            transform: rotate(-15deg);
            z-index: 3;
        }

        .star {
            position: absolute;
            right: 30px;
            bottom: 20px;
            color: white;
            font-size: 70px;
            transform: rotate(20deg);
        }

        /* =========================================
           CONTACT BAR
        ========================================= */

        .contact {
            position: relative;
            z-index: 3;

            width: 55%;
            max-width: 560px;
            min-width: 400px;

            margin-left: 50px;
            height: 60px;

            background: #f1f1f1;
            border-radius: 40px;

            display: flex;
            align-items: center;

            padding-left: 30px;

            gap: 30px;

            font-size: 15px;
            font-style: italic;
        }

        .contact span {
            white-space: nowrap;
        }

        /* =========================================
           MAIN CARD
        ========================================= */

        .main-card {
            position: relative;
            z-index: 1;

            max-width: 1050px;
            margin: -10px auto 0;

            background: #a5aff4;

            min-height: 1100px;

            border-radius: 30px;

            padding: 55px 320px 45px 45px;

            overflow: visible;
        }

        /* =========================================
           FOTO
        ========================================= */

        .photo {
            position: absolute;

            right: 45px;
            top: -10px;

            width: 330px;
            height: 330px;

            border-radius: 50%;

            background: #f5f5f5;

            padding: 15px;

            z-index: 5;
        }

        .photo img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            border-radius: 50%;

            display: block;
        }

        /* =========================================
           ABOUT ME
        ========================================= */

        .about {
            width: 100%;

            background: #242424;

            color: white;

            padding: 28px;

            border-radius: 25px 25px 25px 60px;

            margin-bottom: 40px;
        }

        .about-title {
            display: flex;
            align-items: center;

            gap: 12px;

            margin-bottom: 20px;
        }

        .about-title h2 {
            font-size: 30px;
            letter-spacing: 1px;
        }

        .about-title .line {
            height: 3px;
            background: white;
            flex: 1;
        }

        .about p {
            font-size: 15px;
            line-height: 1.65;
        }

        /* =========================================
           NAME
        ========================================= */

        .identity {
            width: 100%;

            text-align: right;

            margin-top: 15px;

            margin-bottom: 45px;
        }

        .identity h1 {
            font-size: 52px;
            line-height: 1;

            font-weight: 700;

            letter-spacing: -2px;
        }

        .identity h3 {
            margin-top: 8px;

            font-size: 20px;

            font-weight: 400;

            font-style: italic;

            letter-spacing: 4px;
        }

        /* =========================================
           TWO COLUMN CONTENT
        ========================================= */

        .content-row {
            display: grid;

            grid-template-columns: 1fr 1fr;

            gap: 25px;

            margin-bottom: 30px;
        }

        /* =========================================
           PROFILE
        ========================================= */

        .profile {
            background: rgba(255,255,255,0.12);

            border: 1px solid #8792d0;

            border-radius: 18px;

            padding: 22px;
        }

        .section-title {
            display: flex;

            align-items: center;

            gap: 10px;

            margin-bottom: 20px;
        }

        .section-title h2 {
            font-size: 22px;
            letter-spacing: 1px;
        }

        .section-title .line {
            flex: 1;

            height: 2px;

            background: #59659d;
        }

        .profile-item {
            margin-bottom: 15px;
        }

        .profile-item label {
            display: block;

            font-size: 10px;

            color: #555b75;

            font-weight: bold;

            letter-spacing: 1.5px;

            margin-bottom: 4px;
        }

        .profile-item strong {
            display: block;

            font-size: 14px;
        }

        .profile-item .border {
            height: 1px;

            background: #7d87c3;

            margin-top: 7px;
        }

        /* =========================================
           QUOTE
        ========================================= */

        .quote {
            display: flex;

            flex-direction: column;

            justify-content: flex-end;
        }

        .quote-title {
            font-size: 16px;

            font-weight: bold;

            margin-bottom: 10px;
        }

        .quote-box {
            background: #242424;

            color: white;

            padding: 20px;

            border-radius: 12px;

            text-align: center;

            font-size: 14px;

            font-weight: bold;

            line-height: 1.5;
        }

        /* =========================================
           TENTANG SAYA
        ========================================= */

        .description {
            background: #f4f4f4;

            border-radius: 18px;

            padding: 25px;

            margin-bottom: 30px;
        }

        .description h2 {
            font-size: 22px;

            display: flex;

            align-items: center;

            gap: 10px;

            margin-bottom: 15px;
        }

        .description p {
            color: #555;

            font-size: 14px;

            line-height: 1.7;
        }

        /* =========================================
           SKILL
        ========================================= */

        .skills {
            position: absolute;

            right: -15px;

            bottom: 80px;

            width: 270px;

            background: #242424;

            color: white;

            padding: 28px 25px;

            border-radius: 35px 20px 20px 35px;

            z-index: 10;
        }

        .skills h2 {
            font-size: 28px;

            margin-bottom: 20px;
        }

        .skill {
            border: 1px solid white;

            border-radius: 30px;

            padding: 11px 8px;

            text-align: center;

            margin-bottom: 12px;

            font-size: 12px;
        }

        /* =========================================
           FOOTER
        ========================================= */

        .footer {
            display: flex;

            align-items: flex-end;

            justify-content: space-between;
        }

        .footer-left .line {
            width: 150px;

            height: 6px;

            background: #242424;

            border-radius: 5px;

            margin-bottom: 10px;
        }

        .footer-left span {
            font-size: 14px;

            font-weight: bold;
        }

        /* =========================================
           BARCODE
        ========================================= */

        .barcode {
            display: flex;

            align-items: flex-end;

            height: 50px;

            gap: 2px;
        }

        .barcode span {
            display: block;

            width: 3px;

            height: 45px;

            background: #242424;
        }

        .barcode span:nth-child(2n) {
            width: 2px;
            height: 35px;
        }

        .barcode span:nth-child(3n) {
            width: 5px;
            height: 48px;
        }

        /* =========================================
           RESPONSIVE
        ========================================= */

        @media (max-width: 850px) {

            .page {
                padding: 25px 15px;
            }

            .contact {
                width: calc(100% - 50px);
                min-width: 0;

                margin-left: 40px;

                font-size: 11px;

                gap: 15px;

                overflow: hidden;
            }

            .main-card {
                margin-top: 20px;

                padding: 30px 25px 40px;

                min-height: auto;
            }

            .photo {
                position: relative;

                right: auto;
                top: auto;

                margin: 0 auto 30px;

                width: 250px;
                height: 250px;
            }

            .about {
                margin-top: 10px;
            }

            .identity {
                text-align: center;
            }

            .identity h1 {
                font-size: 38px;
            }

            .identity h3 {
                font-size: 14px;
                letter-spacing: 2px;
            }

            .content-row {
                grid-template-columns: 1fr;
            }

            .skills {
                position: relative;

                right: auto;
                bottom: auto;

                width: 100%;

                margin-top: 25px;

                border-radius: 25px;
            }

            .footer {
                margin-top: 20px;
            }
        }

        @media (max-width: 500px) {

            .contact {
                height: auto;

                min-height: 55px;

                padding: 10px 15px;

                flex-direction: column;

                align-items: flex-start;

                justify-content: center;

                gap: 3px;
            }

            .circle-decoration {
                left: 10px;
            }

            .main-card {
                border-radius: 22px;
            }

            .photo {
                width: 210px;
                height: 210px;
            }

            .about-title h2 {
                font-size: 23px;
            }

            .about p {
                font-size: 13px;
            }

            .identity h1 {
                font-size: 31px;
            }

            .identity h3 {
                font-size: 12px;
            }

            .footer {
                flex-direction: column;

                align-items: flex-start;

                gap: 20px;
            }
        }

    </style>
</head>

<body>

<div class="page">

    <!-- DEKORASI -->
    <div class="circle-decoration"></div>

    <div class="heart-left">
        ♡
    </div>

    <!-- CONTACT -->
    <div class="contact">

        <span>
            +08 23 sisanya nanti aja
        </span>

        <span>
            leemuwoon@gmail.com
        </span>

    </div>


    <!-- MAIN CARD -->
    <div class="main-card">


        <!-- FOTO -->
        <div class="photo">

            <img
                src="image/zazkya.jpeg"
                alt="Foto Zazkya"
            >

        </div>


        <!-- ABOUT ME -->
        <section class="about">

            <div class="about-title">

                <h2>
                    ABOUT ME
                </h2>

                <div class="line"></div>

            </div>

            <p>
                Manhwa Enthusiast dengan dedikasi tinggi
                dalam mengeksplorasi dunia komik digital Korea.
                Berpengalaman dalam melakukan analisis mendalam
                terhadap berbagai karya manhwa, mulai dari genre
                aksi, fantasi, romantis, hingga drama.
            </p>

        </section>


        <!-- NAMA -->
        <section class="identity">

            <h1>
                Zazkya Fadillah
            </h1>

            <h3>
                MANHWA ENTHUSIAST
            </h3>

        </section>


        <!-- PROFILE + QUOTE -->
        <div class="content-row">


            <!-- PROFILE -->
            <section class="profile">

                <div class="section-title">

                    <h2>
                        PROFILE
                    </h2>

                    <div class="line"></div>

                </div>


                <div class="profile-item">

                    <label>
                        NAMA
                    </label>

                    <strong>
                        Zazkya Fadillah
                    </strong>

                    <div class="border"></div>

                </div>


                <div class="profile-item">

                    <label>
                        PROFESI
                    </label>

                    <strong>
                        MANHWA ENTHUSIAST
                    </strong>

                    <div class="border"></div>

                </div>


                <div class="profile-item">

                    <label>
                        EMAIL
                    </label>

                    <strong>
                        leemuwoon@gmail.com
                    </strong>

                    <div class="border"></div>

                </div>


                <div class="profile-item">

                    <label>
                        TELEPON
                    </label>

                    <strong>
                        +08 23 sisanya nanti aja
                    </strong>

                    <div class="border"></div>

                </div>

            </section>


            <!-- QUOTE -->
            <section class="quote">

                <div class="quote-title">
                    Kata kata hari ini:
                </div>

                <div class="quote-box">

                    kal au di luar beda orang
                    <br>

                    bisa semua
                    <br>

                    minusnya (mata duitan)

                </div>

            </section>

        </div>


        <!-- TENTANG SAYA -->
        <section class="description">

            <h2>
                ✦ &nbsp; TENTANG SAYA
            </h2>

            <p>

                Manhwa Enthusiast dengan dedikasi tinggi
                dalam mengeksplorasi dunia komik digital Korea.
                Berpengalaman dalam melakukan analisis mendalam
                terhadap berbagai karya manhwa, mulai dari genre
                aksi, fantasi, romantis, hingga drama.
                Memiliki kemampuan dalam memahami perkembangan
                karakter, struktur cerita, serta tren hiburan digital.
                Mengubah aktivitas membaca menjadi bentuk apresiasi
                kreatif dengan pendekatan analitis dan rasa ingin
                tahu yang tinggi.

            </p>

        </section>


        <!-- SKILL -->
        <section class="skills">

            <h2>
                SKILL
            </h2>

            <div class="skill">
                Manhwa Enthusiast
            </div>

            <div class="skill">
                Story Analysis
            </div>

            <div class="skill">
                Character Analysis
            </div>

            <div class="skill">
                Digital Reading
            </div>

            <div class="skill">
                Creative Appreciation
            </div>

        </section>


        <!-- FOOTER -->
        <footer class="footer">

            <div class="footer-left">

                <div class="line"></div>

                <span>
                    📷 &nbsp; Zazkya Fadillah
                </span>

            </div>


            <div class="barcode">

                <?php

                $bars = [
                    3,2,5,2,2,4,2,6,3,2,
                    5,2,4,2,6,2,3,5,2,2,
                    5,3,2,6,2,4,3,2,5,2,3
                ];

                foreach ($bars as $width) {

                    echo "<span style='width: {$width}px'></span>";

                }

                ?>

            </div>

        </footer>

    </div>


    <div class="star">
        ☆
    </div>

</div>

</body>
</html>