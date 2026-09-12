<?php
$nama = "Alya Nur Fauziah";
$profesi = "Pelajar";

$tentang = "Saya adalah seorang pelajar yang memiliki semangat untuk belajar, berkembang, dan mencoba hal-hal baru. Saya senang bekerja sama, berkreasi, dan mengembangkan kemampuan diri.";

$keahlian = [
    "HTML & CSS dasar",
    "PHP & MySQL dasar",
    "Visual Studio Code",
    "Menggunakan XAMPP & phpMyAdmin",
    "CRUD (Create, Read, Update, Delete)",
    "Membuat dan mengelola database sederhana"
];

$pendidikan = [
    [
        "sekolah" => "SMKN 1 Leuwimunding",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "tahun" => "2024 - Sekarang"
    ]
];
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CV <?= $nama; ?></title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #eef6ff;
            color: #26364a;
            padding: 30px;
        }

        /* CONTAINER */

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            border-radius: 25px;
            overflow: hidden;

            box-shadow:
                0 15px 40px rgba(45, 105, 170, 0.15);
        }


        /* HEADER */

        .header {
            background: linear-gradient(
                135deg,
                #1976d2,
                #42a5f5
            );

            color: white;

            padding: 45px;

            display: flex;
            align-items: center;

            gap: 35px;
        }


        /* FOTO */

        .foto {
            width: 155px;
            height: 155px;

            object-fit: cover;

            border-radius: 50%;

            border: 6px solid white;

            box-shadow:
                0 8px 25px rgba(0,0,0,0.2);

            transition: 0.4s;
        }

        .foto:hover {
            transform: scale(1.05);
        }


        /* NAMA */

        .header h1 {
            font-size: 42px;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 19px;
            opacity: 0.9;
        }


        /* CONTENT */

        .content {
            padding: 40px;
        }


        /* SECTION */

        .section {
            margin-bottom: 35px;
        }

        .section h2 {
            color: #1976d2;

            font-size: 25px;

            margin-bottom: 18px;

            display: flex;
            align-items: center;

            gap: 10px;
        }

        .section h2::before {
            content: "";

            width: 6px;
            height: 28px;

            background: #42a5f5;

            border-radius: 10px;
        }


        /* TENTANG */

        .about {
            background: #f5faff;

            padding: 22px;

            border-radius: 15px;

            line-height: 1.8;

            border: 1px solid #dceeff;
        }


        /* DATA DIRI */

        .data {
            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 15px;
        }

        .data-box {
            background: #f5faff;

            padding: 18px;

            border-radius: 13px;

            border-left:
                4px solid #42a5f5;

            transition: 0.3s;
        }

        .data-box:hover {
            transform: translateY(-4px);

            box-shadow:
                0 8px 20px
                rgba(25,118,210,0.1);
        }

        .data-box strong {
            display: block;

            color: #1976d2;

            margin-bottom: 6px;
        }


        /* PENDIDIKAN */

        .education {
            display: flex;

            align-items: center;

            gap: 20px;

            background: #f5faff;

            padding: 22px;

            border-radius: 15px;

            border: 1px solid #dceeff;

            transition: 0.3s;
        }

        .education:hover {
            transform: translateX(7px);
        }

        .education-icon {
            width: 55px;
            height: 55px;

            background: #dceeff;

            border-radius: 50%;

            display: flex;

            justify-content: center;

            align-items: center;

            font-size: 27px;
        }

        .education h3 {
            color: #26364a;

            margin-bottom: 6px;
        }

        .education p {
            color: #607080;

            margin-bottom: 5px;
        }

        .education small {
            color: #1976d2;
        }


        /* KEAHLIAN */

        .skills {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 15px;
        }

        .skill {
            background: white;

            border: 2px solid #e0efff;

            padding: 18px;

            border-radius: 15px;

            text-align: center;

            color: #286ca8;

            font-weight: bold;

            transition: 0.3s;
        }

        .skill:hover {
            background: #1976d2;

            color: white;

            transform:
                translateY(-6px);

            box-shadow:
                0 10px 20px
                rgba(25,118,210,0.2);
        }


        /* KONTAK */

        .contact {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 15px;
        }

        .contact-box {
            background: #f5faff;

            padding: 20px;

            border-radius: 15px;

            text-align: center;

            border: 1px solid #dceeff;

            transition: 0.3s;
        }

        .contact-box:hover {
            transform: translateY(-5px);

            background: #eef7ff;
        }

        .contact-icon {
            font-size: 30px;

            margin-bottom: 10px;
        }

        .contact-box strong {
            display: block;

            color: #1976d2;

            margin-bottom: 7px;
        }

        .contact-box p {
            color: #607080;

            font-size: 14px;
        }


        /* FOOTER */

        .footer {
            background: #1976d2;

            color: white;

            text-align: center;

            padding: 22px;

            line-height: 1.8;
        }


        /* RESPONSIVE HP */

        @media (max-width: 700px) {

            body {
                padding: 12px;
            }

            .header {
                flex-direction: column;

                text-align: center;

                padding: 35px 20px;
            }

            .header h1 {
                font-size: 32px;
            }

            .content {
                padding: 25px 20px;
            }

            .data {
                grid-template-columns: 1fr;
            }

            .skills {
                grid-template-columns: 1fr 1fr;
            }

            .contact {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>


<div class="container">


    <!-- HEADER -->

    <div class="header">

        <img
            src="asset/foto.jpeg"
            class="foto"
            alt="Foto Profil"
        >

        <div>

            <h1>
                <?= $nama; ?>
            </h1>

            <p>
                <?= $profesi; ?>
            </p>

            <p style="margin-top:10px;">
                Curriculum Vitae
            </p>

        </div>

    </div>


    <!-- CONTENT -->

    <div class="content">


        <!-- TENTANG SAYA -->

        <div class="section">

            <h2>
                Tentang Saya
            </h2>

            <div class="about">

                <p>
                    <?= $tentang; ?>
                </p>

            </div>

        </div>


        <!-- DATA DIRI -->

        <div class="section">

            <h2>
                Data Diri
            </h2>

            <div class="data">

                <div class="data-box">

                    <strong>
                        Nama
                    </strong>

                    <p>
                        <?= $nama; ?>
                    </p>

                </div>


                <div class="data-box">

                    <strong>
                        Status
                    </strong>

                    <p>
                        Pelajar
                    </p>

                </div>


                <div class="data-box">

                    <strong>
                        Jurusan
                    </strong>

                    <p>
                        Rekayasa Perangkat Lunak
                    </p>

                </div>


                <div class="data-box">

                    <strong>
                        Tempat Tinggal
                    </strong>

                    <p>
                        Majalengka, Jawa Barat
                    </p>

                </div>

            </div>

        </div>


        <!-- PENDIDIKAN -->

        <div class="section">

            <h2>
                Pendidikan
            </h2>


            <?php foreach ($pendidikan as $p): ?>

                <div class="education">

                    <div class="education-icon">
                        🎓
                    </div>


                    <div>

                        <h3>
                            <?= $p["sekolah"]; ?>
                        </h3>

                        <p>
                            <?= $p["jurusan"]; ?>
                        </p>

                        <small>
                            <?= $p["tahun"]; ?>
                        </small>

                    </div>

                </div>

            <?php endforeach; ?>


        </div>


        <!-- KEAHLIAN -->

        <div class="section">

            <h2>
                Keahlian
            </h2>


            <div class="skills">


                <?php foreach ($keahlian as $skill): ?>

                    <div class="skill">

                        <?= $skill; ?>

                    </div>

                <?php endforeach; ?>


            </div>

        </div>


        <!-- KONTAK -->

        <div class="section">

            <h2>
                Kontak
            </h2>


            <div class="contact">


                <div class="contact-box">

                    <div class="contact-icon">
                        ✉️
                    </div>

                    <strong>
                        Email
                    </strong>

                    <p>
                        alyanur45@gmail.com
                    </p>

                </div>


                <div class="contact-box">

                    <div class="contact-icon">
                        📱
                    </div>

                    <strong>
                        Telepon
                    </strong>

                    <p>
                        083124768907
                    </p>

                </div>


                <div class="contact-box">

                    <div class="contact-icon">
                        📍
                    </div>

                    <strong>
                        Alamat
                    </strong>

                    <p>
                        Majalengka, Jawa Barat
                    </p>

                </div>


            </div>

        </div>


    </div>


    <!-- FOOTER -->

    <div class="footer">

        <p>
            © <?= date("Y"); ?> <?= $nama; ?>
        </p>

        <p>
            Curriculum Vitae
        </p>

    </div>


</div>


</body>

</html>