<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Farida Amelia</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #bfc1c2;
            color: #222;
            padding: 25px;
        }

        .cv {
            max-width: 1100px;
            margin: auto;
            background: #eeeeee;
            padding: 35px;
            border-radius: 25px;
            box-shadow: 0 10px 35px rgba(0,0,0,0.15);
        }

        /* ================= HEADER ================= */

        .header {
            display: flex;
            align-items: center;
            gap: 45px;
            margin-bottom: 30px;
        }

        /* FOTO */
        .photo {
            width: 280px;
            height: 280px;
            min-width: 280px;
            border-radius: 50%;
            background: #d5d5d5;
            border: 8px solid white;
            overflow: hidden;
            box-shadow: 0 3px 12px rgba(0,0,0,0.12);
        }

        .photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .header-info {
            flex: 1;
        }

        .header-info h1 {
            font-family: Georgia, serif;
            font-size: 60px;
            color: #202020;
            margin-bottom: 12px;
        }

        .cv-title {
            font-size: 25px;
            letter-spacing: 7px;
            color: #444;
            margin-bottom: 25px;
        }

        .line {
            width: 100%;
            height: 2px;
            background: #555;
            margin-bottom: 25px;
        }

        .quote {
            font-family: Georgia, serif;
            font-size: 20px;
            font-style: italic;
            line-height: 1.6;
            color: #333;
        }

        /* ================= DUA KOLOM ================= */

        .columns {
            display: grid;
            grid-template-columns: 40% 60%;
            gap: 20px;
        }

        .left {
            padding-right: 5px;
        }

        .right {
            padding-left: 5px;
        }

        /* ================= CARD ================= */

        .card {
            background: #f5f5f5;
            border-radius: 20px;
            padding: 20px;
            margin-bottom: 18px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
        }

        .card-title {
            display: flex;
            align-items: center;
            background: #606467;
            color: white;
            border-radius: 30px;
            min-height: 52px;
            margin-bottom: 20px;
            padding: 0 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .icon {
            width: 45px;
            height: 45px;
            min-width: 45px;
            border-radius: 50%;
            background: #4b4f52;
            border: 2px solid #777;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: -8px;
            margin-right: 14px;
            font-size: 22px;
        }

        /* ================= PROFIL ================= */

        .profile-text {
            font-size: 17px;
            line-height: 1.8;
            text-align: left;
        }

        /* ================= DATA DIRI ================= */

        .data {
            display: grid;
            grid-template-columns: 145px 15px 1fr;
            row-gap: 13px;
            font-size: 15px;
            line-height: 1.5;
        }

        .data .label {
            font-weight: bold;
        }

        /* ================= KONTAK ================= */

        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 13px;
            margin-bottom: 17px;
        }

        .contact-icon {
            width: 38px;
            height: 38px;
            min-width: 38px;
            border-radius: 50%;
            background: #5d6265;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
        }

        .contact-text {
            font-size: 14px;
            line-height: 1.5;
        }

        .contact-text strong {
            display: block;
            margin-bottom: 4px;
        }

        /* ================= PENDIDIKAN ================= */

        .education {
            position: relative;
            padding-left: 35px;
            margin-bottom: 20px;
        }

        .education::before {
            content: "";
            position: absolute;
            left: 7px;
            top: 8px;
            width: 12px;
            height: 12px;
            background: #555;
            border-radius: 50%;
        }

        .education::after {
            content: "";
            position: absolute;
            left: 12px;
            top: 20px;
            width: 2px;
            height: 60px;
            background: #888;
        }

        .education:last-child::after {
            display: none;
        }

        .education h3 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .education p {
            font-size: 15px;
            line-height: 1.5;
            color: #444;
        }

        /* ================= LIST ================= */

        ul {
            padding-left: 25px;
        }

        li {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 5px;
        }

        /* ================= CITA-CITA ================= */

        .dream {
            font-size: 17px;
            line-height: 1.8;
        }

        /* ================= HP ================= */

        @media (max-width: 800px) {

            body {
                padding: 10px;
            }

            .cv {
                padding: 18px;
                border-radius: 15px;
            }

            .header {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }

            .photo {
                width: 190px;
                height: 190px;
                min-width: 190px;
            }

            .header-info h1 {
                font-size: 38px;
            }

            .cv-title {
                font-size: 18px;
                letter-spacing: 4px;
            }

            .quote {
                font-size: 16px;
            }

            .columns {
                grid-template-columns: 1fr;
            }

            .left,
            .right {
                padding: 0;
            }

            .data {
                grid-template-columns: 110px 10px 1fr;
                font-size: 13px;
            }

            .card-title {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>

<div class="cv">

    <!-- ================= HEADER ================= -->

    <div class="header">

        <!--
            FOTO:
            Taruh foto kamu di folder yang sama dengan CV.php
            dan beri nama: foto.jpg
        -->

        <div class="photo">
            <img src="fotofarida.jpeg" alt="Foto Farida Amelia">
        </div>

        <div class="header-info">

            <h1>Farida Amelia Sholiha</h1>

            <div class="cv-title">
                CURRICULUM VITAE
            </div>

            <div class="line"></div>

            <p class="quote">
                "Terus belajar, berkembang, dan menjadi versi
                terbaik dari diri sendiri."
            </p>

        </div>

    </div>


    <!-- ================= ISI CV ================= -->

    <div class="columns">

        <!-- ================= KOLOM KIRI ================= -->

        <div class="left">

            <!-- PROFIL -->

            <div class="card">

                <div class="card-title">
                    <div class="icon">👤</div>
                    Profil
                </div>

                <p class="profile-text">
                    Saya adalah seorang pelajar yang memiliki semangat tinggi
                    untuk terus belajar dan berkembang.Saya tertarik pada teknologi,
                    khususnya dalam pembuatan web dan Aplikasi.Saya merupakan pribadi
                    yang bertanggung jawab,mau bekerja sama dengan orang lain,dan dapat
                    bergaul dengan baik.Saya juga berusaha menyelesaikan tugas dengan baik.
                    Diluar teknologi saya juga memiliki hobi beternak dan sangat senang 
                    merawat hewan.Kegiatan tersebut menurut saya adalah mengajarkan
                    saya tentang tanggung jawab,kesabaran,dan ketekunan.
                </p>

            </div>


            <!-- DATA DIRI -->

            <div class="card">

                <div class="card-title">
                    <div class="icon">▣</div>
                    Data Diri
                </div>

                <div class="data">

                    <span class="label">Nama</span>
                    <span>:</span>
                    <span>Farida Amelia Sholiha</span>

                    <span class="label">Tempat, Tgl Lahir</span>
                    <span>:</span>
                    <span>[25-05-2008]</span>

                    <span class="label">Jenis Kelamin</span>
                    <span>:</span>
                    <span>Perempuan</span>

                    <span class="label">Alamat</span>
                    <span>:</span>
                    <span>[Sindanghaji]</span>

                    <span class="label">Kewarganegaraan</span>
                    <span>:</span>
                    <span>Indonesia</span>

                </div>

            </div>


            <!-- KONTAK -->

            <div class="card">

                <div class="card-title">
                    <div class="icon">☎</div>
                    Kontak
                </div>

                <div class="contact-item">

                    <div class="contact-icon">☎</div>

                    <div class="contact-text">
                        <strong>No. Telepon</strong>
                        [08**-****-****]
                    </div>

                </div>


                <div class="contact-item">

                    <div class="contact-icon">✉</div>

                    <div class="contact-text">
                        <strong>Email</strong>
                        [@gmail.comaku99]
                    </div>

                </div>


                <div class="contact-item">

                    <div class="contact-icon">◎</div>

                    <div class="contact-text">
                        <strong>Instagram</strong>
                        [ec****l]
                    </div>

                </div>


                <div class="contact-item">

                    <div class="contact-icon">⌖</div>

                    <div class="contact-text">
                        <strong>Alamat</strong>
                        [Sindanghaji]
                    </div>

                </div>

            </div>

        </div>


        <!-- ================= KOLOM KANAN ================= -->

        <div class="right">

            <!-- PENDIDIKAN -->

            <div class="card">

                <div class="card-title">
                    <div class="icon">🎓</div>
                    Pendidikan
                </div>

                <div class="education">

                    <h3>SMP</h3>

                    <p>
                        [SMPN 2 LEUWIMUNDING]
                    </p>

                    <p>
                        [2021-2024]
                    </p>

                </div>


                <div class="education">

                    <h3>SMK</h3>

                    <p>
                        [SMKN 1 LEUWIMUNDING]
                    </p>

                    <p>
                        [2024-2027]
                    </p>

                </div>

            </div>


            <!-- KETERAMPILAN -->

            <div class="card">

                <div class="card-title">
                    <div class="icon">⚙</div>
                    Keterampilan
                </div>

                <ul>

                    <li>Microsoft Office (Word, Excel, PowerPoint)</li>

                    <li>Pengoperasian komputer & smartphone</li>

                    <li>Dasar HTML dan PHP</li>

                    <li>Komunikasi dan kerja sama tim</li>

                    <li>Manajemen waktu</li>

                    <li>Mampu belajar hal baru</li>

                </ul>

            </div>


            <!-- KELEBIHAN -->

            <div class="card">

                <div class="card-title">
                    <div class="icon">★</div>
                    Kelebihan
                </div>

                <ul>

                    <li>Bertanggung jawab dalam setiap tugas</li>

                    <li>Disiplin dan selalu berusaha memberikan hasil terbaik</li>

                    <li>Mudah beradaptasi dengan lingkungan baru</li>

                    <li>Suka belajar hal baru dan tidak mudah menyerah</li>

                </ul>

            </div>


            <!-- HOBI -->

            <div class="card">

                <div class="card-title">
                    <div class="icon">♧</div>
                    Hobi
                </div>

                <ul>

                    <li>Berkendara sepeda motor manual (kopling)</li>

                    <li>Mendengarkan musik</li>

                    <li>Menonton film / series</li>

                </ul>

            </div>


            <!-- CITA-CITA -->

            <div class="card">

                <div class="card-title">
                    <div class="icon">◎</div>
                    Cita-cita
                </div>

                <p class="dream">
                    Saya ingin menjadi orang sukses,memiliki pekerjaan
                    yang baik dan halal,membanggakan orang tua,serta terus 
                    mengembangkan kemampuan untuk menjadi pribadi yang lebih
                    baik lagi.
                </p>

            </div>

        </div>

    </div>

</div>

</body>
</html>