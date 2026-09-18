<?php
$name = 'WILDAN AZIZ MUBAKKIR';
$email = 'azizwildan761@gmail.com';
$phone = '083171486105';
$location = 'Majalengka, Indonesia';
$portfolio = 'Portfolio';
$profile = 'Saya merupakan siswa SMK yang memiliki ketertarikan besar terhadap dunia bisnis dan kewirausahaan. Saya tertarik mempelajari bagaimana sebuah bisnis dapat dikembangkan melalui perencanaan, strategi, pengelolaan, dan kemampuan melihat peluang. Saya memiliki semangat untuk terus belajar, mengembangkan kemampuan komunikasi, bekerja sama dalam tim, serta mencari solusi dari berbagai permasalahan. Ke depannya, saya ingin mengembangkan pengetahuan dan pengalaman di bidang bisnis serta membangun usaha sendiri.';

$skills = [
    ['name' => 'Team Work', 'level' => 0.85],
    ['name' => 'Komunikasi', 'level' => 0.75],
];

$languages = [
    ['name' => 'Indonesia', 'level' => 5],
    ['name' => 'Inggris', 'level' => 2],
    ['name' => 'Korea', 'level' => 2],
];

$hobbies = [
    ['name' => 'Travel', 'level' => 3],
    ['name' => 'Music', 'level' => 4],
    ['name' => 'Gaming', 'level' => 2],
];

$education = [
    [
        'title' => 'SMK',
        'year' => '2024 - Sekarang',
        'subtitle' => 'PPLG',
        'description' => 'Pendidikan menengah kejuruan dengan fokus pada pengembangan perangkat lunak dan teknologi.'
    ],
    [
        'title' => 'MTS',
        'year' => '2021 - 2024',
        'subtitle' => '',
        'description' => 'Menyelesaikan pendidikan sekolah menengah pertama.'
    ],
];

$experience = [
    [
        'company' => 'PROJECT SEKOLAH',
        'year' => '2024 - Sekarang',
        'position' => 'Student Developer',
        'description' => 'Mengikuti dan mengerjakan berbagai project sekolah yang berkaitan dengan teknologi dan pemrograman.'
    ],
    [
        'company' => 'PROJECT KELOMPOK',
        'year' => '2024 - Sekarang',
        'position' => 'Team Member',
        'description' => 'Bekerja sama dengan anggota kelompok dalam mengembangkan project aplikasi.'
    ],
];

function e($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($name) ?> - Curriculum Vitae</title>
    <style>
        * { box-sizing: border-box; }

        :root {
            --cv-dark: #343434;
            --cv-text: #333333;
            --cv-grey: #777777;
            --cv-light-grey: #f5f5f5;
        }

        html, body {
            margin: 0;
            padding: 0;
            background: #ffffff;
            color: var(--cv-text);
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
        }

        .page {
            width: 100%;
            background: #ffffff;
            overflow-x: hidden;
        }

        .header {
            position: relative;
            width: 100%;
            background: var(--cv-dark);
            padding: 35px 40px 75px;
        }

        .header-inner {
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            align-items: center;
        }

        .profile-photo {
            width: 150px;
            height: 150px;
            padding: 6px;
            border: 5px solid #fff;
            border-radius: 50%;
            flex: 0 0 150px;
            overflow: hidden;
            background: #e5e5e5;
        }

        .profile-photo img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .photo-fallback {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--cv-dark);
            font-size: 62px;
        }

        .header-text {
            margin-left: 35px;
        }

        .cv-label {
            color: #d0d0d0;
            font-size: 15px;
            letter-spacing: 1px;
            line-height: 1.2;
        }

        .name {
            margin-top: 8px;
            color: #fff;
            font-size: 32px;
            line-height: 1.15;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .student {
            margin-top: 7px;
            color: #d0d0d0;
            font-size: 15px;
            letter-spacing: 1.5px;
        }

        .back-button {
            position: absolute;
            top: 12px;
            left: 12px;
            width: 48px;
            height: 48px;
            border: 0;
            border-radius: 50%;
            background: #fff;
            color: var(--cv-dark);
            box-shadow: 0 2px 7px rgba(0,0,0,.25);
            cursor: pointer;
            font-size: 27px;
            line-height: 48px;
            text-align: center;
            text-decoration: none;
        }

        .contact-box {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: #fff;
            padding: 13px 25px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 8px 25px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            white-space: nowrap;
            color: var(--cv-text);
            font-size: 11px;
        }

        .contact-icon {
            width: 27px;
            height: 27px;
            flex: 0 0 27px;
            margin-right: 8px;
            border-radius: 50%;
            background: var(--cv-dark);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        .content {
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 4fr 6fr;
            align-items: start;
        }

        .column {
            padding-top: 28px;
            padding-bottom: 35px;
        }

        .left-column { padding-left: 28px; padding-right: 20px; }
        .right-column { padding-left: 20px; padding-right: 28px; }

        .section {
            margin-bottom: 25px;
        }

        .right-column .section {
            margin-bottom: 27px;
        }

        .section:last-child { margin-bottom: 0; }

        .section-title {
            width: 100%;
            height: 34px;
            padding: 0 16px;
            background: var(--cv-dark);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 16px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .section-body {
            margin-top: 14px;
        }

        .profile-text,
        .description {
            color: var(--cv-text);
            font-size: 12px;
            line-height: 1.6;
            text-align: justify;
        }

        .skill-row,
        .language-row,
        .hobby-row {
            display: flex;
            align-items: center;
            margin-bottom: 13px;
        }

        .skill-row:last-child,
        .language-row:last-child,
        .hobby-row:last-child {
            margin-bottom: 0;
        }

        .row-name {
            width: 75px;
            flex: 0 0 75px;
            color: var(--cv-text);
            font-size: 11px;
            font-weight: 600;
        }

        .skill-track {
            flex: 1;
            height: 6px;
            margin-left: 10px;
            background: #e2e2e2;
        }

        .skill-fill {
            height: 6px;
            background: var(--cv-dark);
        }

        .dots {
            display: flex;
            margin-left: 8px;
        }

        .dot {
            width: 7px;
            height: 7px;
            margin-right: 6px;
            border-radius: 50%;
            background: #e1e1e1;
        }

        .dot.active { background: var(--cv-dark); }

        .timeline-item {
            display: grid;
            grid-template-columns: 4fr 2px 7fr;
            column-gap: 0;
            align-items: start;
            margin-bottom: 20px;
        }

        .timeline-item:last-child { margin-bottom: 0; }

        .timeline-meta {
            padding-right: 10px;
        }

        .timeline-title {
            color: var(--cv-text);
            font-size: 12px;
            font-weight: 800;
        }

        .timeline-year {
            color: var(--cv-text);
            font-size: 11px;
            font-weight: 700;
            margin-top: 1px;
        }

        .timeline-line {
            width: 2px;
            height: 75px;
            background: var(--cv-dark);
        }

        .timeline-info {
            padding-left: 15px;
        }

        .timeline-subtitle {
            color: var(--cv-text);
            font-size: 12px;
            font-weight: 700;
        }

        .timeline-description {
            margin-top: 4px;
            color: var(--cv-text);
            font-size: 11px;
            line-height: 1.5;
            text-align: justify;
        }

        .experience-item {
            margin-bottom: 20px;
        }

        .experience-item:last-child { margin-bottom: 0; }

        .experience-top {
            display: grid;
            grid-template-columns: 1fr 2px 1fr;
            column-gap: 0;
            align-items: start;
        }

        .company {
            color: var(--cv-text);
            font-size: 12px;
            font-weight: 800;
            padding-right: 10px;
        }

        .experience-line {
            width: 2px;
            height: 16px;
            background: var(--cv-dark);
        }

        .position {
            color: var(--cv-text);
            font-size: 11px;
            padding-left: 15px;
        }

        .experience-year {
            margin-top: 3px;
            color: var(--cv-text);
            font-size: 11px;
            font-weight: 700;
        }

        .experience-description {
            margin-top: 6px;
            color: var(--cv-text);
            font-size: 11px;
            line-height: 1.5;
            text-align: justify;
        }

        .achievement-title {
            color: var(--cv-text);
            font-size: 12px;
            font-weight: 800;
        }

        .achievement-description {
            margin-top: 5px;
            color: var(--cv-text);
            font-size: 11px;
            line-height: 1.5;
        }

        .footer {
            width: 100%;
            height: 48px;
            background: var(--cv-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 12px;
            letter-spacing: 2px;
            font-weight: 500;
        }

        @media (max-width: 799px) {
            .content {
                display: block;
                max-width: none;
            }

            .left-column,
            .right-column {
                padding-left: 28px;
                padding-right: 28px;
            }
        }

        @media (max-width: 599px) {
            .header {
                padding: 35px 40px 75px;
            }

            .header-inner {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .header-text {
                margin-left: 0;
                margin-top: 20px;
            }

            .name {
                font-size: 27px;
            }

            .contact-box {
                gap: 8px 25px;
            }

            .left-column,
            .right-column {
                padding-left: 28px;
                padding-right: 28px;
            }

            .timeline-item {
                grid-template-columns: 4fr 2px 7fr;
            }
        }

        @media print {
            .back-button { display: none; }
            .page { overflow: visible; }
            body { -webkit-print-color-adjust: exact; print-color-adjust: exact; }
        }
    </style>
</head>
<body>
    <div class="page">
        <header class="header">
            <a class="back-button" href="javascript:history.back()" aria-label="Kembali ke Profil">‹</a>

            <div class="header-inner">
                <div class="profile-photo">
                    <img src="asset/wildan.png" alt="Foto <?= e($name) ?>" onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                    <div class="photo-fallback" style="display:none;">♙</div>
                </div>

                <div class="header-text">
                    <div class="cv-label">CURICULUM VITAE</div>
                    <div class="name"><?= e($name) ?></div>
                    <div class="student">STUDENT</div>
                </div>
            </div>

            <div class="contact-box">
                <div class="contact-item">
                    <span class="contact-icon">✉</span>
                    <span><?= e($email) ?></span>
                </div>
                <div class="contact-item">
                    <span class="contact-icon">☎</span>
                    <span><?= e($phone) ?></span>
                </div>
                <div class="contact-item">
                    <span class="contact-icon">⌖</span>
                    <span><?= e($location) ?></span>
                </div>
                <div class="contact-item">
                    <span class="contact-icon">⌕</span>
                    <span><?= e($portfolio) ?></span>
                </div>
            </div>
        </header>

        <main class="content">
            <section class="column left-column">
                <div class="section">
                    <div class="section-title">
                        <span>PROFIL</span><span>♟</span>
                    </div>
                    <div class="section-body profile-text"><?= e($profile) ?></div>
                </div>

                <div class="section">
                    <div class="section-title">
                        <span>KEMAMPUAN</span><span>⚙</span>
                    </div>
                    <div class="section-body">
                        <?php foreach ($skills as $skill): ?>
                            <div class="skill-row">
                                <span class="row-name"><?= e($skill['name']) ?></span>
                                <div class="skill-track">
                                    <div class="skill-fill" style="width: <?= (float) $skill['level'] * 100 ?>%;"></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="section">
                    <div class="section-title">
                        <span>BAHASA</span><span>●</span>
                    </div>
                    <div class="section-body">
                        <?php foreach ($languages as $language): ?>
                            <div class="language-row">
                                <span class="row-name"><?= e($language['name']) ?></span>
                                <div class="dots">
                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                        <span class="dot <?= $i < $language['level'] ? 'active' : '' ?>"></span>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="section">
                    <div class="section-title">
                        <span>HOBBY</span><span>★</span>
                    </div>
                    <div class="section-body">
                        <?php foreach ($hobbies as $hobby): ?>
                            <div class="hobby-row">
                                <span class="row-name"><?= e($hobby['name']) ?></span>
                                <div class="dots">
                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                        <span class="dot <?= $i < $hobby['level'] ? 'active' : '' ?>"></span>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section class="column right-column">
                <div class="section">
                    <div class="section-title">
                        <span>PENDIDIKAN</span><span>♜</span>
                    </div>
                    <div class="section-body">
                        <?php foreach ($education as $item): ?>
                            <div class="timeline-item">
                                <div class="timeline-meta">
                                    <div class="timeline-title"><?= e($item['title']) ?></div>
                                    <div class="timeline-year"><?= e($item['year']) ?></div>
                                </div>
                                <div class="timeline-line"></div>
                                <div class="timeline-info">
                                    <?php if (!empty($item['subtitle'])): ?>
                                        <div class="timeline-subtitle"><?= e($item['subtitle']) ?></div>
                                    <?php endif; ?>
                                    <div class="timeline-description"><?= e($item['description']) ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="section">
                    <div class="section-title">
                        <span>PENGALAMAN KERJA</span><span>▣</span>
                    </div>
                    <div class="section-body">
                        <?php foreach ($experience as $item): ?>
                            <div class="experience-item">
                                <div class="experience-top">
                                    <div class="company"><?= e($item['company']) ?></div>
                                    <div class="experience-line"></div>
                                    <div class="position"><?= e($item['position']) ?></div>
                                </div>
                                <div class="experience-year"><?= e($item['year']) ?></div>
                                <div class="experience-description"><?= e($item['description']) ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="section">
                    <div class="section-title">
                        <span>PRESTASI</span><span>♛</span>
                    </div>
                    <div class="section-body">
                        <div class="achievement-title">PRESTASI / PENGHARGAAN</div>
                        <div class="achievement-description">
                            Tambahkan prestasi atau penghargaan yang pernah diperoleh.
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer"><?= e($name) ?></footer>
    </div>
</body>
</html>
