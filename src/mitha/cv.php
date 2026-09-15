<?php
// ==================================================
// DATA CV — GANTI BAGIAN INI SAJA
// ==================================================

$nama = "MITHA SALSABILA";
$jurusan = "Pengembangan Perangkat Lunak dan Gim";
$status = "Pelajar SMK";

$tempat_lahir = "Majalengka";
$tanggal_lahir = "20 Desember 2008";
$alamat = "Desa Patuanan";
$telepon = "08xxxxxxxxxx";
$email = "mitha@email.com";

$profil = "Saya adalah pelajar SMK jurusan Pengembangan Perangkat Lunak dan Gim yang memiliki semangat untuk belajar dan mengembangkan keterampilan baru. Saya bertanggung jawab, mampu bekerja secara individu maupun dalam tim, serta berusaha menyelesaikan setiap tugas dengan baik. Saya memiliki minat pada teknologi, kreativitas, dan kewirausahaan.";

$pendidikan = [
    [
        "sekolah" => "SMK Negeri 1 Leuwimunding",
        "tahun" => "2024 – 2027",
        "jurusan" => "Pengembangan Perangkat Lunak dan Gim"
    ],
    [
        "sekolah" => "SMP Negeri 2 Leuwimunding",
        "tahun" => "2021 – 2024",
        "jurusan" => ""
    ],
    [
        "sekolah" => "SD Negeri 1 Patuanan",
        "tahun" => "2015 – 2021",
        "jurusan" => ""
    ]
];

$organisasi = [
    [
        "nama" => "Paskibra",
        "jabatan" => "Danton (Komandan Pleton)",
        "isi" => [
            "Memimpin dan mengarahkan anggota dalam latihan dan kegiatan Paskibra.",
            "Mengembangkan kemampuan kepemimpinan, kedisiplinan, komunikasi, dan kerja sama tim.",
            "Bertanggung jawab terhadap koordinasi dan kekompakan pleton."
        ]
    ]
];

$sertifikat = [
    "Sertifikat Paskibra",
    "Sertifikat Pecapa",
    "Sertifikat Paskibraka tingkat Kecamatan",
    "Juara 1 Lomba Shalawat"
];

$hobi = [
    "Berkebun",
    "Mempelajari teknologi",
    "Memasak",
    "Fotografi",
    "Menggambar",
    "Bernyanyi",
    "Mencoba hal baru"
];

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CV - <?php echo $nama; ?></title>

    <style>

        /* ==================================================
           RESET
        ================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #eee7f7;
            color: #333;
            padding: 40px 20px;
        }


        /* ==================================================
           CONTAINER CV
        ================================================== */

        .cv {
            max-width: 1150px;
            margin: auto;
            background: white;
            display: grid;
            grid-template-columns: 34% 66%;
            min-height: 1000px;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 10px 35px rgba(70, 50, 90, 0.15);
        }


        /* ==================================================
           SIDEBAR KIRI
        ================================================== */

        .sidebar {
            background: #dcd0eb;
            padding: 45px 35px;
        }


        /* ==================================================
           FOTO
        ================================================== */

        .photo {
            width: 220px;
            height: 220px;
            margin: 0 auto 40px;

            border-radius: 50%;
            overflow: hidden;

            background: #eee7f7;
            border: 8px solid #ffffff;

            box-shadow: 0 5px 18px rgba(70, 50, 90, 0.15);
        }

        .photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }


        /* ==================================================
           JUDUL SIDEBAR
        ================================================== */

        .side-title {
            display: flex;
            align-items: center;
            gap: 10px;

            margin-top: 30px;
            margin-bottom: 18px;

            border-bottom: 2px solid #b9a8ce;
            padding-bottom: 10px;
        }

        .side-title h2 {
            font-size: 18px;
            letter-spacing: 1px;
            color: #40354c;
        }

        .icon {
            width: 28px;
            height: 28px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;
            background: #ffffff;
            color: #77628b;

            font-size: 13px;
        }


        /* ==================================================
           DATA PRIBADI
        ================================================== */

        .personal-data {
            list-style: none;
        }

        .personal-data li {
            margin-bottom: 15px;
            line-height: 1.5;
        }

        .personal-data strong {
            display: block;
            font-size: 12px;
            color: #76667f;
            text-transform: uppercase;
            letter-spacing: .5px;
            margin-bottom: 3px;
        }

        .personal-data span {
            font-size: 14px;
            color: #38313d;
        }


        /* ==================================================
           PENDIDIKAN
        ================================================== */

        .education-item {
            margin-bottom: 22px;
        }

        .education-item .year {
            font-size: 12px;
            color: #76667f;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .education-item h3 {
            font-size: 15px;
            color: #39303f;
            line-height: 1.4;
        }

        .education-item p {
            font-size: 13px;
            margin-top: 5px;
            color: #665c6c;
            line-height: 1.4;
        }


        /* ==================================================
           QUOTE
        ================================================== */

        .quote {
            margin-top: 35px;
            padding: 18px;

            background: rgba(255, 255, 255, 0.55);
            border-radius: 12px;

            font-size: 13px;
            line-height: 1.7;
            color: #54495e;
        }


        /* ==================================================
           BAGIAN KANAN
        ================================================== */

        .main {
            padding: 55px 55px;
            background: #ffffff;
        }


        /* ==================================================
           HEADER
        ================================================== */

        .header {
            border-bottom: 3px solid #dcd0eb;
            padding-bottom: 25px;
            margin-bottom: 35px;
        }

        .header h1 {
            font-size: 46px;
            letter-spacing: 2px;
            color: #302936;
            margin-bottom: 10px;
        }

        .header .job {
            font-size: 17px;
            color: #756582;
            font-weight: bold;
        }

        .header .status {
            margin-top: 8px;
            font-size: 14px;
            color: #777;
        }


        /* ==================================================
           SECTION
        ================================================== */

        .section {
            margin-bottom: 38px;
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 12px;

            margin-bottom: 18px;
        }

        .section-title .line {
            width: 45px;
            height: 4px;
            background: #9a82ad;
            border-radius: 10px;
        }

        .section-title h2 {
            font-size: 21px;
            color: #39313f;
            letter-spacing: .5px;
        }

        .section p {
            font-size: 15px;
            line-height: 1.8;
            color: #59525d;
        }


        /* ==================================================
           ORGANISASI
        ================================================== */

        .activity {
            padding: 20px;

            background: #f8f5fb;
            border-left: 4px solid #9a82ad;

            border-radius: 0 12px 12px 0;
            margin-bottom: 15px;
        }

        .activity-title {
            font-size: 17px;
            color: #403647;
            margin-bottom: 12px;
        }

        .activity-title span {
            color: #806d8e;
            font-size: 14px;
            font-weight: normal;
        }

        .activity ul {
            padding-left: 20px;
        }

        .activity li {
            margin-bottom: 8px;
            font-size: 14px;
            line-height: 1.6;
            color: #5c555f;
        }


        /* ==================================================
           SERTIFIKAT
        ================================================== */

        .certificate-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .certificate {
            padding: 15px;

            background: #f8f5fb;
            border: 1px solid #e5ddec;
            border-radius: 10px;

            font-size: 14px;
            color: #514857;
        }


        /* ==================================================
           HOBI
        ================================================== */

        .hobby-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .hobby {
            padding: 9px 15px;

            background: #eee7f7;
            border-radius: 20px;

            font-size: 13px;
            color: #594b63;
        }


        /* ==================================================
           RESPONSIVE HP
        ================================================== */

        @media (max-width: 800px) {

            body {
                padding: 15px;
            }

            .cv {
                grid-template-columns: 1fr;
            }

            .sidebar,
            .main {
                padding: 35px 25px;
            }

            .header h1 {
                font-size: 34px;
            }

            .certificate-list {
                grid-template-columns: 1fr;
            }

            .photo {
                width: 190px;
                height: 190px;
            }
        }

    </style>
</head>


<body>

<div class="cv">


    <!-- ==================================================
         SIDEBAR KIRI
    ================================================== -->

    <aside class="sidebar">


        <!-- FOTO
             GANTI FOTO DENGAN FILE:
             foto.jpeg
        -->

        <div class="photo">
            <img src="ftomitha2.jpeg" alt="Foto <?php echo $nama; ?>">
        </div>


        <!-- DATA PRIBADI -->

        <div class="side-title">
            <div class="icon">●</div>
            <h2>DATA PRIBADI</h2>
        </div>

        <ul class="personal-data">

            <li>
                <strong>Nama</strong>
                <span><?php echo $nama; ?></span>
            </li>

            <li>
                <strong>Tempat, Tanggal Lahir</strong>
                <span>
                    <?php echo $tempat_lahir . ", " . $tanggal_lahir; ?>
                </span>
            </li>

            <li>
                <strong>Alamat</strong>
                <span><?php echo $alamat; ?></span>
            </li>

            <li>
                <strong>No. Telepon</strong>
                <span><?php echo $telepon; ?></span>
            </li>

            <li>
                <strong>Email</strong>
                <span><?php echo $email; ?></span>
            </li>

        </ul>


        <!-- PENDIDIKAN -->

        <div class="side-title">
            <div class="icon">●</div>
            <h2>PENDIDIKAN</h2>
        </div>

        <?php foreach ($pendidikan as $p): ?>

            <div class="education-item">

                <div class="year">
                    <?php echo $p["tahun"]; ?>
                </div>

                <h3>
                    <?php echo $p["sekolah"]; ?>
                </h3>

                <?php if ($p["jurusan"] != ""): ?>

                    <p>
                        <?php echo $p["jurusan"]; ?>
                    </p>

                <?php endif; ?>

            </div>

        <?php endforeach; ?>


        <!-- QUOTE -->

        <div class="quote">
            “Terus belajar, berkembang, dan berusaha menjadi versi terbaik dari diri sendiri.”
        </div>

    </aside>



    <!-- ==================================================
         BAGIAN UTAMA KANAN
    ================================================== -->

    <main class="main">


        <!-- HEADER -->

        <header class="header">

            <h1>
                <?php echo $nama; ?>
            </h1>

            <div class="job">
                <?php echo $jurusan; ?>
            </div>

            <div class="status">
                <?php echo $status; ?>
            </div>

        </header>



        <!-- PROFIL -->

        <section class="section">

            <div class="section-title">
                <div class="line"></div>
                <h2>PROFIL</h2>
            </div>

            <p>
                <?php echo $profil; ?>
            </p>

        </section>



        <!-- ORGANISASI -->

        <section class="section">

            <div class="section-title">
                <div class="line"></div>
                <h2>ORGANISASI & KEGIATAN</h2>
            </div>


            <?php foreach ($organisasi as $o): ?>

                <div class="activity">

                    <h3 class="activity-title">

                        <?php echo $o["nama"]; ?>

                        <span>
                            — <?php echo $o["jabatan"]; ?>
                        </span>

                    </h3>


                    <ul>

                        <?php foreach ($o["isi"] as $kegiatan): ?>

                            <li>
                                <?php echo $kegiatan; ?>
                            </li>

                        <?php endforeach; ?>

                    </ul>

                </div>

            <?php endforeach; ?>

        </section>



        <!-- SERTIFIKAT -->

        <section class="section">

            <div class="section-title">
                <div class="line"></div>
                <h2>SERTIFIKAT & PRESTASI</h2>
            </div>


            <div class="certificate-list">

                <?php foreach ($sertifikat as $s): ?>

                    <div class="certificate">
                        <?php echo $s; ?>
                    </div>

                <?php endforeach; ?>

            </div>

        </section>



        <!-- HOBI -->

        <section class="section">

            <div class="section-title">
                <div class="line"></div>
                <h2>HOBI & MINAT</h2>
            </div>


            <div class="hobby-list">

                <?php foreach ($hobi as $h): ?>

                    <div class="hobby">
                        <?php echo $h; ?>
                    </div>

                <?php endforeach; ?>

            </div>

        </section>


    </main>

</div>

</body>
</html>