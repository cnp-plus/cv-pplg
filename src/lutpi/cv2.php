<?php
/**
 * CV Dinamis - PHP (versi modern/kekinian)
 * Semua data ada di array $data di bawah ini.
 * Cukup ubah isi array untuk mengganti konten CV tanpa menyentuh HTML/CSS.
 */

$data = [
    'nama'      => 'MUHAMMAD LUTPI',
    'jabatan'   => 'Lulusan Baru · Software & Game Development',
    'foto'      => 'lutpi.jpg', // ganti dengan path foto profil Anda
    'deskripsi' => 'Lulusan SMKN 1 Leuwimunding jurusan PPLG (Pengembangan Perangkat Lunak dan Gim). Terbiasa bekerja dalam tim, cepat belajar hal baru, dan senang menyelesaikan masalah lewat teknologi.',

    'data_pribadi' => [
        'Tempat, Tanggal Lahir' => 'Majalengka, 10 Juli 2008',
        'Alamat'                => 'Leuwimunding, Tanjungsari',
        'Nomor Telepon'         => '082118486509',
        'Jenis Kelamin'         => 'Laki-laki',
        'Agama'                 => 'Islam',
        'Kewarganegaraan'       => 'Indonesia',
        'Email'                 => 'lutpi@gmail.com',
        'Status'                => 'jomblo',
    ],

    'pendidikan' => [
        ['sekolah' => 'SMKN 1 Leuwimunding', 'tahun' => '2023 - 2026'],
        ['sekolah' => 'SMPN 2 Leuwimunding', 'tahun' => '2020 - 2023'],
        ['sekolah' => 'SDN 1 Tanjungsari',   'tahun' => '2014 - 2020'],
    ],

    'pengalaman' => [
        [
            'kategori' => 'Relawan Media Sosial',
            'posisi'   => 'Admin Media Sosial',
            'periode'  => 'Agustus 2026',
            'tugas'    => [
                'Mengunggah konten narasumber.',
                'Menyusun rencana konten mingguan.',
                'Membalas interaksi di dalam akun media sosial.',
            ],
        ],
        [
            'kategori' => 'Relawan Komunikasi',
            'posisi'   => 'Pewawancara',
            'periode'  => 'September 2026',
            'tugas'    => [
                'Mewawancarai narasumber.',
                'Menulis hasil wawancara menjadi artikel biografi.',
            ],
        ],
        [
            'kategori' => 'Pelatih Olahraga',
            'posisi'   => 'Pelatih',
            'periode'  => '2025 - 2026',
            'tugas'    => [
                'Membantu peserta menjadi lebih bugar.',
                'Membuat sesi latihan lebih produktif.',
            ],
        ],
    ],

    'keahlian' => [
        'Kepemimpinan',
        'Kolaborasi Tim',
        'Manajemen Waktu',
        'Pemrograman Dasar',
        'Problem Solving',
    ],

    'hobi' => [
        'Lari',
        'Travelling',
        'Mendengarkan Musik',
    ],

    'kontak' => [
        'telepon' => '082118486509',
        'alamat'  => 'Leuwimunding, Tanjungsari',
        'email'   => 'lutpi@gmail.com',
    ],
];

// Fungsi bantu untuk output aman (mencegah XSS jika data berasal dari input luar)
function e($string)
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>CV - <?php echo e($data['nama']); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
<style>
    :root{
        --ink:#181B21;
        --paper:#F3F0E8;
        --rail:#EAE6DA;
        --line:#DAD5C6;
        --muted:#726C5E;
        --accent:#FF5A3C;
        --accent-soft:#FFE1D6;
        --teal:#146259;
        --teal-soft:#E1EEEB;
    }
    *{ box-sizing:border-box; }
    body{
        margin:0;
        font-family:'Inter', Arial, sans-serif;
        background:#DEDACE;
        color:var(--ink);
        display:flex;
        justify-content:center;
        padding:30px 10px;
        -webkit-font-smoothing:antialiased;
    }
    .cv-container{
        width:100%;
        max-width:980px;
        background:var(--paper);
        box-shadow:0 10px 40px rgba(0,0,0,0.18);
        overflow:hidden;
    }

    /* HERO */
    .hero{
        background:var(--ink);
        color:#fff;
        padding:48px 44px 38px;
        border-bottom:6px solid var(--accent);
    }
    .hero-top{
        display:flex;
        align-items:center;
        gap:30px;
        flex-wrap:wrap;
    }
    .photo-frame{
        position:relative;
        width:140px;
        height:140px;
        flex-shrink:0;
    }
    .photo-frame::before{
        content:"";
        position:absolute;
        top:10px;
        left:10px;
        width:100%;
        height:100%;
        background:var(--accent);
        border-radius:20px;
        z-index:0;
    }
    .photo-frame img{
        position:relative;
        z-index:1;
        width:100%;
        height:100%;
        object-fit:cover;
        border-radius:20px;
        display:block;
        border:3px solid var(--ink);
    }
    .hero-text{ flex:1; min-width:260px; }
    .hero-text h1{
        font-family:'Space Grotesk', sans-serif;
        font-weight:700;
        font-size:2.4rem;
        line-height:1.08;
        margin:0 0 8px 0;
        letter-spacing:-0.5px;
    }
    .jabatan{
        color:var(--accent);
        font-weight:600;
        font-size:1rem;
        margin:0 0 16px 0;
    }
    .deskripsi{
        font-size:0.95rem;
        line-height:1.65;
        color:#D6D2C6;
        margin:0;
        max-width:560px;
    }
    .kontak-row{
        display:flex;
        flex-wrap:wrap;
        gap:22px;
        margin-top:26px;
    }
    .kontak-row .item{
        display:flex;
        align-items:center;
        gap:9px;
        font-size:0.87rem;
        color:#D6D2C6;
    }
    .kontak-icon{
        width:26px;
        height:26px;
        border-radius:8px;
        background:rgba(255,255,255,0.08);
        display:flex;
        align-items:center;
        justify-content:center;
        font-size:0.85rem;
        flex-shrink:0;
    }

    /* BODY GRID */
    .body-grid{
        display:grid;
        grid-template-columns:280px 1fr;
    }
    .rail{
        background:var(--rail);
        padding:40px 30px;
        border-right:1px solid var(--line);
    }
    .main{
        padding:40px 44px;
    }
    .rail section, .main section{ margin-bottom:34px; }
    .rail section:last-child, .main section:last-child{ margin-bottom:0; }

    .section-title{
        display:flex;
        align-items:center;
        gap:10px;
        font-family:'Space Grotesk', sans-serif;
        font-weight:700;
        font-size:1.2rem;
        margin:0 0 18px 0;
        color:var(--ink);
    }
    .section-title::before{
        content:"";
        width:10px;
        height:10px;
        background:var(--accent);
        border-radius:3px;
        flex-shrink:0;
    }

    /* DATA PRIBADI - baris label/value */
    .info-row{
        display:flex;
        justify-content:space-between;
        gap:14px;
        padding:9px 0;
        border-bottom:1px solid var(--line);
        font-size:0.85rem;
    }
    .info-row:last-child{ border-bottom:none; }
    .info-row .label{ color:var(--muted); }
    .info-row .value{ font-weight:600; text-align:right; }

    /* CHIPS */
    .chip-group{ display:flex; flex-wrap:wrap; gap:8px; }
    .chip{
        display:inline-block;
        padding:6px 14px;
        border-radius:999px;
        font-size:0.82rem;
        font-weight:600;
    }
    .chip-skill{ background:var(--accent-soft); color:#A8391F; }
    .chip-hobi{ background:var(--teal-soft); color:var(--teal); }

    /* TIMELINE (pendidikan & pengalaman) */
    .timeline{
        list-style:none;
        margin:0;
        padding:0;
        position:relative;
    }
    .timeline::before{
        content:"";
        position:absolute;
        left:6px;
        top:6px;
        bottom:6px;
        width:2px;
        background:var(--line);
    }
    .timeline li{
        position:relative;
        padding-left:30px;
        margin-bottom:22px;
    }
    .timeline li:last-child{ margin-bottom:0; }
    .timeline li::before{
        content:"";
        position:absolute;
        left:0;
        top:4px;
        width:14px;
        height:14px;
        border-radius:50%;
        background:var(--paper);
        border:3px solid var(--accent);
        z-index:1;
    }
    .edu-row{
        display:flex;
        justify-content:space-between;
        align-items:baseline;
        gap:16px;
        flex-wrap:wrap;
    }
    .edu-row .sekolah{ font-weight:600; font-size:0.98rem; }
    .edu-row .tahun{ font-size:0.85rem; color:var(--muted); white-space:nowrap; }

    .exp-header{
        display:flex;
        justify-content:space-between;
        align-items:baseline;
        gap:16px;
        flex-wrap:wrap;
        margin-bottom:2px;
    }
    .exp-kategori{ font-weight:700; font-size:1.02rem; }
    .exp-periode{ font-size:0.82rem; color:var(--muted); white-space:nowrap; }
    .exp-posisi{
        font-size:0.9rem;
        color:var(--muted);
        margin:0 0 10px 0;
    }
    .exp-tugas{
        margin:0;
        padding-left:18px;
        font-size:0.9rem;
        line-height:1.65;
        color:#3A362D;
    }

    @media (max-width: 700px){
        .body-grid{ grid-template-columns:1fr; }
        .rail{ border-right:none; border-bottom:1px solid var(--line); }
        .hero{ padding:38px 26px 30px; }
        .main{ padding:34px 26px; }
        .rail{ padding:34px 26px; }
        .hero-text h1{ font-size:1.9rem; }
    }

    @media print{
        body{ background:#fff; padding:0; }
        .cv-container{ box-shadow:none; }
    }
</style>
</head>
<body>

<div class="cv-container">

    <!-- HERO -->
    <div class="hero">
        <div class="hero-top">
            <div class="photo-frame">
                <img src="<?php echo e($data['foto']); ?>" alt="Foto <?php echo e($data['nama']); ?>">
            </div>
            <div class="hero-text">
                <h1><?php echo e($data['nama']); ?></h1>
                <p class="jabatan"><?php echo e($data['jabatan']); ?></p>
                <p class="deskripsi"><?php echo e($data['deskripsi']); ?></p>
            </div>
        </div>
        <div class="kontak-row">
            <div class="item">
                <span class="kontak-icon">&#128222;</span>
                <span><?php echo e($data['kontak']['telepon']); ?></span>
            </div>
            <div class="item">
                <span class="kontak-icon">&#9993;</span>
                <span><?php echo e($data['kontak']['email']); ?></span>
            </div>
            <div class="item">
                <span class="kontak-icon">&#128205;</span>
                <span><?php echo e($data['kontak']['alamat']); ?></span>
            </div>
        </div>
    </div>

    <!-- BODY -->
    <div class="body-grid">

        <!-- RAIL -->
        <div class="rail">

            <section class="data-pribadi">
                <h2 class="section-title">Data Pribadi</h2>
                <?php foreach ($data['data_pribadi'] as $label => $value): ?>
                    <div class="info-row">
                        <span class="label"><?php echo e($label); ?></span>
                        <span class="value"><?php echo e($value); ?></span>
                    </div>
                <?php endforeach; ?>
            </section>

            <section class="keahlian">
                <h2 class="section-title">Keahlian</h2>
                <div class="chip-group">
                    <?php foreach ($data['keahlian'] as $item): ?>
                        <span class="chip chip-skill"><?php echo e($item); ?></span>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="hobi">
                <h2 class="section-title">Hobi</h2>
                <div class="chip-group">
                    <?php foreach ($data['hobi'] as $item): ?>
                        <span class="chip chip-hobi"><?php echo e($item); ?></span>
                    <?php endforeach; ?>
                </div>
            </section>

        </div>

        <!-- MAIN -->
        <div class="main">

            <section class="pengalaman">
                <h2 class="section-title">Pengalaman</h2>
                <ul class="timeline">
                    <?php foreach ($data['pengalaman'] as $exp): ?>
                        <li>
                            <div class="exp-header">
                                <span class="exp-kategori"><?php echo e($exp['kategori']); ?></span>
                                <span class="exp-periode"><?php echo e($exp['periode']); ?></span>
                            </div>
                            <p class="exp-posisi"><?php echo e($exp['posisi']); ?></p>
                            <ul class="exp-tugas">
                                <?php foreach ($exp['tugas'] as $tugas): ?>
                                    <li><?php echo e($tugas); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>

            <section class="pendidikan">
                <h2 class="section-title">Pendidikan</h2>
                <ul class="timeline">
                    <?php foreach ($data['pendidikan'] as $edu): ?>
                        <li>
                            <div class="edu-row">
                                <span class="sekolah"><?php echo e($edu['sekolah']); ?></span>
                                <span class="tahun"><?php echo e($edu['tahun']); ?></span>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </section>

        </div>

    </div>
</div>

</body>
</html>