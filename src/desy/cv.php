<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Desi</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #eaf6ff;
            padding: 50px 25px;
        }

        .cv {
            max-width: 1250px;
            margin: auto;
            background: white;
            display: flex;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        /* SIDEBAR */
        .sidebar {
            width: 32%;
            background: #72bdf4;
            color: white;
            padding: 50px 35px;
        }

        .foto {
            text-align: center;
            margin-bottom: 40px;
        }

        .foto img {
            width: 220px;
            height: 220px;
            object-fit: cover;
            border-radius: 50%;
            border: 7px solid white;
        }

        .sidebar h2 {
            font-size: 28px;
            border-bottom: 3px solid white;
            padding-bottom: 10px;
            margin-top: 40px;
        }

        .sidebar p,
        .sidebar li {
            font-size: 21px;
            line-height: 1.7;
        }

        .sidebar ul {
            padding-left: 25px;
        }

        /* ISI */
        .content {
            width: 68%;
            padding: 60px;
        }

        .nama {
            margin-bottom: 40px;
        }

        .nama h1 {
            margin: 0;
            font-size: 55px;
            color: #2582c4;
        }

        .nama h3 {
            margin-top: 12px;
            color: #666;
            font-size: 26px;
            font-weight: normal;
        }

        .bagian {
            margin-bottom: 40px;
        }

        .bagian h2 {
            color: #2582c4;
            font-size: 32px;
            margin-bottom: 12px;
            border-left: 8px solid #72bdf4;
            padding-left: 15px;
        }

        .bagian p {
            font-size: 22px;
            line-height: 1.8;
            color: #444;
        }

        .keahlian {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }

        .skill {
            background: #e3f3ff;
            color: #2582c4;
            padding: 13px 20px;
            border-radius: 25px;
            font-size: 20px;
            font-weight: bold;
        }

        .pendidikan {
            background: #f5fbff;
            border: 1px solid #cdeaff;
            border-radius: 14px;
            padding: 20px 23px;
        }

        @media (max-width: 700px) {
            .cv {
                flex-direction: column;
            }

            .sidebar,
            .content {
                width: 100%;
            }

            .content {
                padding: 40px;
            }
        }
    </style>
</head>

<body>

<div class="cv">

    <!-- SIDEBAR KIRI -->
    <div class="sidebar">

        <div class="foto">
            <img src="fotode.jpeg" alt="Foto Saya">
        </div>

        <h2>Kontak</h2>

        <p>📱 08xxxxxxxxxx</p>
        <p>📧 desy@gmail.com</p>
        <p>📍 Majalengka</p>

        <h2>Hobi</h2>

        <ul>
            <li>🎧 Mendengarkan musik</li>
            <li>🎬 Menonton film</li>
            <li>📖 Membaca</li>
            <li>🍳 Memasak</li>
        </ul>

        <h2>Kemampuan</h2>

        <ul>
            <li>Mudah bekerja sama</li>
            <li>Bertanggung jawab</li>
            <li>Disiplin</li>
        </ul>

    </div>


    <!-- ISI KANAN -->
    <div class="content">

        <div class="nama">
            <h1>Desy Apriyani</h1>
            <h3>Siswi Jurusan PPLG</h3>
        </div>

        <div class="bagian">
            <h2>Tentang Saya</h2>

            <p>
                Saya adalah siswi jurusan PPLG yang sedang mempelajari
                pemrograman dan pengembangan aplikasi. Saya tertarik
                dengan teknologi dan senang mempelajari hal-hal baru.
            </p>
        </div>

        <div class="bagian">
            <h2>Pendidikan</h2>

            <div class="pendidikan">
                <p>
                    <b>SMK</b><br>
                    Pengembangan Perangkat Lunak dan Gim (PPLG)
                </p>
            </div>
        </div>

        <div class="bagian">
            <h2>Kemampuan</h2>

            <div class="keahlian">
                <div class="skill">HTML</div>
                <div class="skill">Database</div>
                <div class="skill">PHP</div>
                <div class="skill">Flutter</div>
            </div>
        </div>

        <div class="bagian">
            <h2>Tujuan</h2>

            <p>
                Terus mengembangkan kemampuan di bidang teknologi
                dan menjadi seseorang yang mampu membuat aplikasi
                yang bermanfaat.
            </p>
        </div>

    </div>

</div>

</body>
</html>