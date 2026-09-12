<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home - Alsyah</title>

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

    <style>

        /* ================= RESET ================= */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Quicksand", sans-serif;
            background: #f9d4d6;
            color: #895757;
        }


        /* ================= NAVBAR ================= */

        .navbar {
            width: 100%;
            min-height: 80px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 18px 8%;

            background: #fff8eb;

            position: sticky;
            top: 0;

            z-index: 999;

            box-shadow: 0 3px 15px rgba(100, 50, 50, 0.08);
        }


        .logo span {
            font-family: "Playfair Display", serif;

            font-size: 30px;

            font-weight: bold;

            color: #9c5b5b;

            letter-spacing: 2px;
        }


        .menu {
            display: flex;

            align-items: center;

            gap: 30px;
        }


        .menu a {
            text-decoration: none;

            color: #895757;

            font-size: 16px;

            font-weight: 600;

            transition: 0.3s;
        }


        .menu a:hover {
            color: #e66f9d;
        }


        .menu a.active {
            color: #e66f9d;
        }


        /* ================= HOME ================= */

        .home {
            min-height: 650px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 50px;

            padding: 70px 10%;

            background:
                radial-gradient(
                    circle at 90% 20%,
                    #f5aeb5 0,
                    transparent 25%
                ),

                #e99da1;
        }


        .home-text {
            max-width: 570px;
        }


        .small-title {
            font-size: 18px;

            letter-spacing: 4px;

            color: white;

            margin-bottom: 10px;
        }


        .home-text h1 {
            font-family: "Playfair Display", serif;

            font-size: 80px;

            color: white;

            letter-spacing: 5px;
        }


        .home-text h2 {
            font-family: "Playfair Display", serif;

            font-size: 35px;

            font-weight: 400;

            color: #884f4f;

            margin-top: -10px;
        }


        .description {
            font-family: "Playfair Display", serif;

            font-size: 19px;

            line-height: 1.7;

            margin-top: 25px;

            color: #804c4c;
        }


        /* ================= BUTTON ================= */

        .home-buttons {
            display: flex;

            gap: 15px;

            margin-top: 35px;

            flex-wrap: wrap;
        }


        .btn {
            display: inline-block;

            padding: 14px 27px;

            border-radius: 30px;

            background: #fff8eb;

            color: #9c5b5b;

            text-decoration: none;

            font-weight: bold;

            transition: 0.3s;
        }


        .btn:hover {
            transform: translateY(-3px);

            box-shadow: 0 7px 15px rgba(100,50,50,.15);
        }


        .btn.outline {
            background: transparent;

            border: 2px solid white;

            color: white;
        }


        /* ================= FOTO ================= */

        .home-photo {
            position: relative;

            margin-right: 4%;
        }


        .photo-circle {
            width: 380px;
            height: 500px;

            padding: 12px;

            background: #fff8eb;

            border-radius: 50%;

            transform: rotate(2deg);

            box-shadow: 0 15px 30px rgba(90,40,40,.15);
        }


        .photo-circle img {
            width: 100%;
            height: 100%;

            object-fit: cover;

            border-radius: 50%;
        }


        .flower {
            position: absolute;

            right: -30px;
            bottom: 20px;

            width: 90px;
            height: 90px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            background: #f6b72d;

            border: 12px solid #fff8eb;

            font-size: 50px;

            color: white;
        }


        /* ================= SECTION ================= */

        .content-section {
            padding: 90px 10%;

            background: #fff8eb;
        }


        .content-section:nth-child(even) {
            background: #f9ced0;
        }


        .section-title {
            display: flex;

            align-items: center;

            gap: 20px;

            margin-bottom: 40px;
        }


        .section-title span {
            font-size: 18px;

            color: #e56f9b;

            font-weight: bold;
        }


        .section-title h2 {
            font-family: "Playfair Display", serif;

            font-size: 42px;

            font-weight: 400;

            color: #895757;
        }


        /* ================= ABOUT ================= */

        .about-box {
            max-width: 850px;

            background: #f9d4d6;

            padding: 40px;

            border-radius: 25px;

            border: 2px solid #ef83a7;
        }


        .about-box h3 {
            font-family: "Playfair Display", serif;

            font-size: 28px;

            margin-bottom: 20px;
        }


        .about-box p {
            font-family: "Playfair Display", serif;

            font-size: 18px;

            line-height: 1.8;

            margin-bottom: 15px;
        }


        /* ================= SKILL ================= */

        .skill-container {
            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 25px;
        }


        .skill-card {
            background: #fff;

            padding: 30px;

            border-radius: 20px;

            border: 2px solid #ef83a7;

            box-shadow: 0 5px 15px rgba(100,50,50,.06);
        }


        .skill-card h3 {
            font-size: 20px;

            margin-bottom: 20px;
        }


        .progress {
            width: 100%;

            height: 13px;

            background: #f5b8c9;

            border-radius: 20px;

            overflow: hidden;
        }


        .progress div {
            height: 100%;

            background: #ed72a3;

            border-radius: 20px;
        }


        .skill-card span {
            display: block;

            margin-top: 10px;

            text-align: right;

            font-weight: bold;
        }


        /* ================= EXPERIENCE ================= */

        .experience-box {
            background: #fff;

            padding: 30px;

            margin-bottom: 20px;

            border-radius: 20px;

            border-left: 6px solid #ed72a3;
        }


        .experience-box h3 {
            font-family: "Playfair Display", serif;

            font-size: 25px;

            margin-bottom: 12px;
        }


        .experience-box p {
            line-height: 1.7;
        }


        /* ================= KONTAK ================= */

        .contact-section {
            text-align: center;
        }


        .contact-section .section-title {
            justify-content: center;
        }


        .contact-container {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 25px;
        }


        .contact-card {
            padding: 35px 20px;

            background: #fff;

            border-radius: 25px;

            border: 2px solid #ef83a7;
        }


        .contact-icon {
            font-size: 35px;

            margin-bottom: 15px;
        }


        .contact-card h3 {
            margin-bottom: 10px;
        }


        .contact-card p {
            font-family: "Playfair Display", serif;
        }


        /* ================= FOOTER ================= */

        footer {
            text-align: center;

            padding: 45px;

            background: #c98488;

            color: white;
        }


        footer h3 {
            font-family: "Playfair Display", serif;

            font-size: 30px;
        }


        footer p {
            margin: 8px 0 20px;
        }


        /* ================= RESPONSIVE ================= */

        @media (max-width: 850px) {

            .navbar {
                padding: 20px;

                flex-direction: column;

                gap: 15px;
            }


            .menu {
                flex-wrap: wrap;

                justify-content: center;

                gap: 15px;
            }


            .home {
                flex-direction: column;

                text-align: center;

                gap: 50px;

                padding: 60px 25px;
            }


            .home-buttons {
                justify-content: center;
            }


            .home-text h1 {
                font-size: 60px;
            }


            .home-photo {
                margin: 0;
            }


            .photo-circle {
                width: 300px;
                height: 400px;
            }


            .skill-container,
            .contact-container {
                grid-template-columns: 1fr;
            }

        }


        @media (max-width: 500px) {

            .logo span {
                font-size: 25px;
            }


            .menu {
                gap: 10px;
            }


            .menu a {
                font-size: 13px;
            }


            .home-text h1 {
                font-size: 48px;
            }


            .home-text h2 {
                font-size: 27px;
            }


            .description {
                font-size: 16px;
            }


            .photo-circle {
                width: 250px;
                height: 340px;
            }


            .section-title h2 {
                font-size: 32px;
            }


            .content-section {
                padding: 60px 20px;
            }


            .about-box {
                padding: 25px;
            }


            .btn {
                padding: 12px 18px;
            }

        }

    </style>

</head>


<body>


<!-- ================= NAVBAR ================= -->

<nav class="navbar">

    <div class="logo">
        <span>ALSYAH</span>
    </div>


    <div class="menu">

        <a href="#home" class="active">
            Home
        </a>

        <a href="#tentang">
            Tentang Saya
        </a>

        <a href="#skill">
            Keterampilan
        </a>

        <a href="#pengalaman">
            Pengalaman
        </a>

        <a href="#kontak">
            Kontak
        </a>

    </div>

</nav>


<!-- ================= HOME ================= -->

<section class="home" id="home">


    <div class="home-text">

        <p class="small-title">
            HALO, SAYA
        </p>


        <h1>
            ALSYAH
        </h1>


        <h2>
            Desainer Grafis
        </h2>


        <p class="description">

            Saya suka menggambar

        </p>


        <div class="home-buttons">

            <a href="#tentang" class="btn">
                Tentang Saya
            </a>


            <a href="#kontak" class="btn outline">
                Hubungi Saya
            </a>

        </div>

    </div>



    <!-- FOTO -->

    <div class="home-photo">

        <div class="photo-circle">

            <img src="foto1.jpeg"
                 alt="Foto Alsyah">

        </div>


        <div class="flower">
            ✿
        </div>

    </div>


</section>


<!-- ================= TENTANG ================= -->

<section class="content-section"
         id="tentang">


    <div class="section-title">

        <span>
            01
        </span>

        <h2>
            Tentang Saya
        </h2>

    </div>


    <div class="about-box">

        <h3>
            Halo, saya Alsyah 
        </h3>


        <p>

            Saya menyukai kegiatan yang berhubungan
            dengan kreativitas dan desain.

        </p>


        <p>

            Saya merupakan orang yang ramah,
            teliti, suka belajar hal baru,
            dan senang membuat sesuatu
            yang menarik.

        </p>

    </div>

</section>


<!-- ================= SKILL ================= -->

<section class="content-section"
         id="skill">


    <div class="section-title">

        <span>
            02
        </span>

        <h2>
            Keterampilan
        </h2>

    </div>


    <div class="skill-container">


        <div class="skill-card">

            <h3>
                📷 Fotografi
            </h3>

            <div class="progress">

                <div style="width:90%">
                </div>

            </div>

            <span>
                90%
            </span>

        </div>



        <div class="skill-card">

            <h3>
                🎨 Desain Grafis
            </h3>

            <div class="progress">

                <div style="width:85%">
                </div>

            </div>

            <span>
                85%
            </span>

        </div>



        <div class="skill-card">

            <h3>
            makan
            </h3>

            <div class="progress">

                <div style="width:85%">
                </div>

            </div>

            <span>
                85%
            </span>

        </div>



        <div class="skill-card">

            <h3>
                🖼️ Editing Foto
            </h3>

            <div class="progress">

                <div style="width:90%">
                </div>

            </div>

            <span>
                90%
            </span>

        </div>


    </div>

</section>


<!-- ================= PENGALAMAN ================= -->

<section class="content-section"
         id="pengalaman">


    <div class="section-title">

        <span>
            03
        </span>

        <h2>
            Pengalaman
        </h2>

    </div>


    <div class="experience-box">

        <h3>
            Membuat poster
        </h3>

        <p>

            Membuat berbagai warna,bentuk

        </p>

    </div>



    <div class="experience-box">

        <h3>
            Fotografi & Dokumentasi
        </h3>

        <p>

            Melakukan kegiatan fotografi dan
            dokumentasi untuk menghasilkan foto
            yang menarik dan dapat digunakan
            sebagai media informasi.

        </p>

    </div>

</section>


<!-- ================= KONTAK ================= -->

<section class="content-section contact-section"
         id="kontak">


    <div class="section-title">

        <span>
            04
        </span>

        <h2>
            Kontak
        </h2>

    </div>


    <div class="contact-container">


        <div class="contact-card">

            <div class="contact-icon">
                ☎
            </div>

            <h3>
                Telepon
            </h3>

            <p>
                +123-456-7890
            </p>

        </div>



        <div class="contact-card">

            <div class="contact-icon">
                ✉
            </div>

            <h3>
                Email
            </h3>

            <p>
                alsyah@gmail.com
            </p>

        </div>



        <div class="contact-card">

            <div class="contact-icon">
                📍
            </div>

            <h3>
                Alamat
            </h3>

            <p>
                Cirebon, Ciwaringin
            </p>

        </div>


    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer>

    <h3>
        ALSYAH
    </h3>

    <p>
        Desainer Grafis
    </p>

    <small>
        © 2026 Alsyah. All Rights Reserved.
    </small>

</footer>


</body>
</html>