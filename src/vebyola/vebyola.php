<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CV Vebyola Oktaviani</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5efe3;
            color: #333;
        }

        .cv {
            width: 95%;
            max-width: 750px;
            margin: 25px auto;
            background: #fffaf0;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 5px 20px #d6c5aa;
        }

        /* HEADER */
        .header {
            background: linear-gradient(135deg, #d8b98c, #b89568);
            color: white;
            text-align: center;
            padding: 35px 20px;
        }

        /* FOTO */
        .foto {
            width: 150px;
            height: 170px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid white;
            display: block;
            margin: 0 auto 15px;
        }

        .header h1 {
            margin: 10px 0;
            font-size: 30px;
        }

        .header p {
            margin: 0;
            font-size: 16px;
        }

        /* ISI */
        .isi {
            padding: 30px;
        }

        h2 {
            color: #8b6845;
            border-bottom: 3px solid #d8c0a0;
            padding-bottom: 8px;
            margin-top: 25px;
        }

        .data {
            background: #f7efe3;
            border-left: 6px solid #b89568;
            padding: 15px 20px;
            border-radius: 10px;
        }

        .data p {
            margin: 13px 0;
            line-height: 1.5;
        }

        p {
            line-height: 1.6;
        }

        li {
            margin-bottom: 10px;
        }

        /* SKILL */
        .skill {
            display: inline-block;
            background: #b89568;
            color: white;
            padding: 9px 16px;
            margin: 5px 3px;
            border-radius: 20px;
        }

        /* FOOTER */
        .footer {
            background: #8b6845;
            color: white;
            text-align: center;
            padding: 15px;
        }

        /* HP */
        @media (max-width: 600px) {

            .cv {
                width: 100%;
                margin: 0;
                border-radius: 0;
            }

            .header {
                padding: 30px 15px;
            }

            .header h1 {
                font-size: 25px;
            }

            .foto {
                width: 135px;
                height: 160px;
            }

            .isi {
                padding: 20px;
            }

            .data p {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

<div class="cv">

    <!-- HEADER -->
    <div class="header">

        <!-- FOTO -->
        <img
            class="foto"
            alt="Foto Vebyola"
            src="data:image/jpeg;base64,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">

        <h1>Vebyola Oktaviani</h1>

        <p>
            Siswa SMK | Rekayasa Perangkat Lunak
        </p>

    </div>

    <!-- ISI CV -->
    <div class="isi">

        <h2>Data Diri</h2>

        <div class="data">

            <p>
                <b>Nama:</b>
                Vebyola Oktaviani
            </p>

            <p>
                <b>Tempat, Tanggal Lahir:</b>
                Cirebon, 29 Oktober 2008
            </p>

            <p>
                <b>Alamat:</b>
                Gempol
            </p>

            <p>
                <b>No. HP:</b>
                085721062798
            </p>

            <p>
                <b>Email:</b>
                vebyola@gmail.com
            </p>

        </div>

        <h2>Tentang Saya</h2>

        <p>
            Saya adalah siswa SMK yang memiliki ketertarikan
            pada bidang Rekayasa Perangkat Lunak (RPL).
            Saya senang mempelajari teknologi dan pemrograman,
            serta memiliki pengalaman dalam organisasi sekolah.
        </p>

        <h2>Pendidikan</h2>

        <p>
            <b>SMKN 1 Leuwimunding</b>
        </p>

        <p>
            Jurusan Rekayasa Perangkat Lunak (RPL)
        </p>

        <h2>Pengalaman</h2>

        <ul>
            <li>Mengikuti Organisasi Siswa Intra Sekolah (OSIS)</li>
            <li>Berpartisipasi dalam kegiatan sekolah</li>
            <li>Bekerja sama dalam organisasi</li>
        </ul>

        <h2>Skill</h2>

        <span class="skill">RPL</span>
        <span class="skill">Pemrograman</span>
        <span class="skill">Website</span>
        <span class="skill">Kerja Sama</span>

    </div>

    <div class="footer">
        CV Vebyola Oktaviani
    </div>

</div>

</body>
</html>