<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Digital CV - Reva Alviani</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #fff4f1;
            color: #292929;
            padding: 25px;
        }

        .cv-container {
            max-width: 1100px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);

            display: grid;
            grid-template-columns: 330px 1fr;
        }

        /* ================= BAGIAN KIRI ================= */

        .left-section {
            background: #f3cfc5;
            padding: 40px 35px;
        }

        .photo-container {
            width: 210px;
            height: 210px;
            margin: 0 auto 40px;

            border: 6px solid #e98f9d;
            border-radius: 50%;
            overflow: hidden;
            background: #ffe4dc;
        }

        .photo-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .section-title {
            width: 100%;
            padding: 12px 20px;
            margin-bottom: 22px;

            background: #ffe4dc;
            border-radius: 30px;

            font-size: 20px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;

            margin-bottom: 18px;
            font-size: 14px;
        }

        .contact-icon {
            font-size: 21px;
            min-width: 23px;
        }

        .contact-text {
            word-break: break-word;
        }

        .hobby {
            margin-bottom: 25px;
        }

        .skill {
            display: flex;
            gap: 10px;

            margin-bottom: 15px;
            font-size: 14px;
        }

        .bullet {
            font-size: 20px;
            font-weight: bold;
            line-height: 14px;
        }


        /* ================= BAGIAN KANAN ================= */

        .right-section {
            background: white;
            padding: 45px 40px;
        }

        .name {
            color: #e98f9d;
            font-size: 45px;
            font-weight: bold;
            letter-spacing: 2px;
            line-height: 1.05;
        }

        .job {
            margin-top: 8px;

            font-size: 18px;
            letter-spacing: 5px;
        }

        .line {
            width: 100%;
            height: 1px;
            background: #292929;

            margin: 18px 0 22px;
        }

        .about-title {
            font-size: 21px;
            font-weight: bold;
            letter-spacing: 1px;

            margin-bottom: 12px;
        }

        .about-text {
            font-size: 14px;
            line-height: 1.6;
            color: #666666;
        }

        .title-box {
            width: 100%;

            padding: 12px 20px;
            margin-top: 30px;
            margin-bottom: 20px;

            background: #ffe4dc;
            border-radius: 30px;

            font-size: 20px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .timeline-item {
            display: flex;
            align-items: flex-start;

            margin-bottom: 25px;
        }

        .circle {
            width: 12px;
            height: 12px;

            margin-top: 5px;
            margin-right: 15px;

            background: #e98f9d;
            border-radius: 50%;

            flex-shrink: 0;
        }

        .item-content {
            flex: 1;
        }

        .item-title {
            font-size: 16px;
            font-weight: bold;

            margin-bottom: 4px;
        }

        .item-subtitle {
            font-size: 14px;
            font-weight: bold;

            margin-bottom: 4px;
        }

        .item-year {
            font-size: 13px;
            color: #666666;
        }

        .info-row {
            display: flex;
            align-items: flex-start;

            margin-bottom: 13px;

            font-size: 14px;
        }

        .info-title {
            width: 130px;
            font-weight: bold;
            flex-shrink: 0;
        }

        .colon {
            font-weight: bold;
            margin-right: 5px;
        }

        .info-value {
            color: #666666;
        }

        .experience-description {
            font-size: 14px;
            line-height: 1.5;
            color: #666666;
        }


        /* ================= RESPONSIVE ================= */

        @media (max-width: 800px) {

            body {
                padding: 10px;
            }

            .cv-container {
                grid-template-columns: 1fr;
            }

            .left-section {
                border-radius: 0;
            }

            .right-section {
                padding: 35px 25px;
            }

            .name {
                font-size: 38px;
            }

            .job {
                font-size: 14px;
                letter-spacing: 3px;
            }

            .info-row {
                flex-wrap: wrap;
            }

            .info-title {
                width: 120px;
            }
        }
    </style>
</head>

<body>

<div class="cv-container">

    <!-- ================= BAGIAN KIRI ================= -->

    <div class="left-section">

        <!-- FOTO -->
        <div class="photo-container">
            <img src="foto4.jpg" alt="Foto Reva Alviani">
        </div>


        <!-- KONTAK -->

        <div class="section-title">
            KONTAK
        </div>

        <div class="contact-item">
            <div class="contact-icon">📞</div>
            <div class="contact-text">
                08884645436
            </div>
        </div>

        <div class="contact-item">
            <div class="contact-icon">✉️</div>
            <div class="contact-text">
                revavavava@gmail.com
            </div>
        </div>

        <div class="contact-item">
            <div class="contact-icon">📍</div>
            <div class="contact-text">
                Majalengka, Jawa Barat
            </div>
        </div>


        <!-- HOBI -->

        <div class="section-title">
            HOBI
        </div>

        <div class="hobby">
            <div class="skill">
                <span class="bullet">•</span>
                <span>Menyanyi</span>
            </div>
        </div>


        <!-- KEAHLIAN -->

        <div class="section-title">
            KEAHLIAN
        </div>

        <div class="skill">
            <span class="bullet">•</span>
            <span>Microsoft Office</span>
        </div>

        <div class="skill">
            <span class="bullet">•</span>
            <span>Desain</span>
        </div>

        <div class="skill">
            <span class="bullet">•</span>
            <span>Pemrograman Web</span>
        </div>

        <div class="skill">
            <span class="bullet">•</span>
            <span>Kreativitas</span>
        </div>

        <div class="skill">
            <span class="bullet">•</span>
            <span>Kerja Sama Tim</span>
        </div>

    </div>


    <!-- ================= BAGIAN KANAN ================= -->

    <div class="right-section">

        <!-- NAMA -->

        <div class="name">
            REVA<br>
            ALVIANI
        </div>

        <div class="job">
            PELAJAR • RPL
        </div>

        <div class="line"></div>


        <!-- TENTANG SAYA -->

        <div class="about-title">
            TENTANG SAYA
        </div>

        <div class="about-text">
            Saya adalah seorang pelajar yang memiliki semangat
            untuk belajar dan mencoba hal-hal baru. Saya tertarik
            pada dunia teknologi dan desain, serta senang
            mengembangkan kemampuan diri. Saya juga mampu
            bekerja sama dengan orang lain dan memiliki keinginan
            untuk terus belajar menjadi pribadi yang lebih baik.
        </div>


        <!-- PENDIDIKAN -->

        <div class="title-box">
            PENDIDIKAN
        </div>

        <div class="timeline-item">

            <div class="circle"></div>

            <div class="item-content">

                <div class="item-title">
                    SMK
                </div>

                <div class="item-subtitle">
                    Rekayasa Perangkat Lunak
                </div>

                <div class="item-year">
                    Sedang Menempuh Pendidikan
                </div>

            </div>

        </div>


        <!-- DATA PRIBADI -->

        <div class="title-box">
            DATA PRIBADI
        </div>

        <div class="info-row">

            <div class="info-title">
                Tanggal Lahir
            </div>

            <div class="colon">
                :
            </div>

            <div class="info-value">
                08 Juni 2009
            </div>

        </div>

        <div class="info-row">

            <div class="info-title">
                Jenis Kelamin
            </div>

            <div class="colon">
                :
            </div>

            <div class="info-value">
                Perempuan
            </div>

        </div>

        <div class="info-row">

            <div class="info-title">
                Alamat
            </div>

            <div class="colon">
                :
            </div>

            <div class="info-value">
                Majalengka, Jawa Barat
            </div>

        </div>


        <!-- PENGALAMAN -->

        <div class="title-box">
            PENGALAMAN
        </div>


        <div class="timeline-item">

            <div class="circle"></div>

            <div class="item-content">

                <div class="item-title">
                    Proyek Sekolah
                </div>

                <div class="experience-description">
                    Membuat proyek website sederhana
                    menggunakan HTML, CSS, PHP, dan database.
                </div>

            </div>

        </div>


        <div class="timeline-item">

            <div class="circle"></div>

            <div class="item-content">

                <div class="item-title">
                    Tugas Pemrograman
                </div>

                <div class="experience-description">
                    Mengerjakan berbagai tugas pemrograman
                    dan mengembangkan kemampuan dalam membuat aplikasi.
                </div>

            </div>

        </div>

    </div>

</div>

</body>
