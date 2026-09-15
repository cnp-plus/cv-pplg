<?php

/*
|--------------------------------------------------------------------------
| DATA CV
|--------------------------------------------------------------------------
| Ganti data di bagian ini untuk memperbarui isi CV.
| Tidak perlu mencari-cari teks di seluruh HTML.
|--------------------------------------------------------------------------
*/

$name = "SARTONO TEGAR";
$role = "UI/UX Enthusiast";
$secondaryRole = "Frontend Learner";

$location = "Cirebon, Jawa Barat, Indonesia";

$about = "Saya adalah seorang pelajar yang memiliki ketertarikan pada UI/UX dan pengembangan frontend. Saya senang mempelajari teknologi, mengeksplorasi ide visual, dan mengubah konsep menjadi antarmuka yang sederhana, jelas, dan mudah digunakan.";

$school = "SMKN 1 LEUWIMUNDING";
$major = "Pengembangan Perangkat Lunak dan Gim (PPLG)";
$educationPeriod = "2024 sampai Sekarang";

$educationDescription = "Menempuh pendidikan dengan fokus pada pemrograman, teknologi digital, pengembangan perangkat lunak, pemecahan masalah, dan pengembangan antarmuka digital.";

$nativeLanguage = "Bahasa Indonesia";

$email = "sartonotegarpriyatna@gmail.com";
$phone = "085xxxxxxxx";
$github = "Hazeee28";
$instagram = "@garrr29";

$profileImage = "./assets/Profile.jpg";
$cvFile = "./assets/cv.pdf";

$currentYear = date("Y");


/*
|--------------------------------------------------------------------------
| SKILLS
|--------------------------------------------------------------------------
*/

$skills = [
    "HTML" => 85,
    "CSS" => 80,
    "JavaScript" => 65,
    "Design" => 85,
    "Teamwork" => 85,
    "Problem Solving" => 80,
    "Creative Thinking" => 85
];


/*
|--------------------------------------------------------------------------
| EXPERIENCE
|--------------------------------------------------------------------------
*/

$experiences = [
    [
        "number" => "01",
        "type" => "Project Experience",
        "title" => "Cinema Booking App UI Design",
        "year" => "2025",
        "description" => "Merancang konsep antarmuka untuk aplikasi pemesanan tiket bioskop menggunakan Canva, dengan perhatian pada tata letak, hierarki visual, dan alur penggunaan.",
        "metadata" => [
            [
                "label" => "Tools",
                "value" => "Canva"
            ],
            [
                "label" => "Area",
                "tags" => [
                    "UI Design",
                    "Layout",
                    "Visual Hierarchy",
                    "User Flow"
                ]
            ]
        ]
    ],
    [
        "number" => "02",
        "type" => "Project Experience",
        "title" => "Personal Portfolio Website",
        "year" => "2025-Sekarang",
        "description" => "Merancang dan mengembangkan website portfolio pribadi, mulai dari proses perancangan antarmuka hingga implementasi frontend.",
        "metadata" => [
            [
                "label" => "Technologies",
                "tags" => [
                    "HTML",
                    "CSS",
                    "JavaScript"
                ]
            ],
            [
                "label" => "Area",
                "tags" => [
                    "UI Design",
                    "Frontend Development",
                    "Visual Implementation"
                ]
            ]
        ]
    ]
];

?>
<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="CV online <?= htmlspecialchars($name) ?> sebagai UI/UX Enthusiast dan Frontend Learner."
    >

    <title><?= htmlspecialchars($name) ?> | CV</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- ==================== HEADER ==================== -->

    <header class="site-header" id="site-header">

        <div class="container nav-container">

            <a href="#about" class="brand">

                <span class="brand-mark">Hz</span>

                <span class="brand-name">
                    <?= htmlspecialchars($name) ?>
                </span>

            </a>


            <button
                class="nav-toggle"
                id="nav-toggle"
                type="button"
                aria-label="Buka navigasi"
                aria-expanded="false"
                aria-controls="main-nav"
            >
                <span></span>
                <span></span>
                <span></span>
            </button>


            <nav class="main-nav" id="main-nav">

                <a href="#about" class="nav-link active">
                    About
                </a>

                <a href="#education" class="nav-link">
                    Education
                </a>

                <a href="#skills" class="nav-link">
                    Skills
                </a>

                <a href="#experience" class="nav-link">
                    Experience
                </a>

                <a href="#contact" class="nav-link">
                    Contact
                </a>

            </nav>

        </div>

    </header>


    <main>

        <!-- ==================== ABOUT ==================== -->

        <section class="section hero-section" id="about">

            <div class="container hero-grid">

                <div class="hero-content reveal">

                    <span class="eyebrow">
                        Profil
                    </span>


                    <h1 class="hero-title">
                        <?= htmlspecialchars($name) ?>
                    </h1>


                    <div class="hero-role">

                        <span>
                            <?= htmlspecialchars($role) ?>
                        </span>

                        <span class="role-dot"></span>

                        <span>
                            <?= htmlspecialchars($secondaryRole) ?>
                        </span>

                    </div>


                    <div class="hero-divider"></div>


                    <div class="about-block">

                        <span class="section-label">
                            About Me
                        </span>

                        <p class="hero-description">
                            <?= htmlspecialchars($about) ?>
                        </p>

                    </div>


                    <div class="hero-actions">

                        <a
                            href="<?= htmlspecialchars($cvFile) ?>"
                            class="button button-primary"
                            download
                        >
                            Download CV

                            <span class="button-arrow">
                                ↗
                            </span>

                        </a>


                        <a
                            href="#contact"
                            class="button button-secondary"
                        >
                            Contact Me
                        </a>

                    </div>


                    <div class="hero-meta">

                        <div>

                            <span class="meta-label">
                                Fokus
                            </span>

                            <span class="meta-value">
                                UI/UX dan Frontend
                            </span>

                        </div>


                        <div>

                            <span class="meta-label">
                                Lokasi
                            </span>

                            <span class="meta-value">
                                <?= htmlspecialchars($location) ?>
                            </span>

                        </div>

                    </div>

                </div>


                <div class="hero-visual reveal reveal-delay-1">

                    <div class="profile-frame">

                        <span class="profile-accent accent-one"></span>
                        <span class="profile-accent accent-two"></span>


                        <div class="profile-photo">

                            <img
                                src="<?= htmlspecialchars($profileImage) ?>"
                                alt="Foto profil <?= htmlspecialchars($name) ?>"
                                id="profile-image"
                            >


                            <div
                                class="image-placeholder"
                                id="image-placeholder"
                            >
                                <span>PROFILE</span>
                                <small>PHOTO</small>
                            </div>

                        </div>


                        <div class="profile-caption">

                            <span class="caption-line"></span>

                            <span>
                                <?= htmlspecialchars($name) ?>
                            </span>

                        </div>

                    </div>


                    <div class="floating-note">

                        <span class="floating-dot"></span>

                        Terus belajar dan berkembang

                    </div>

                </div>

            </div>

        </section>


        <!-- ==================== EDUCATION ==================== -->

        <section class="section section-soft" id="education">

            <div class="container">

                <div class="section-heading reveal">

                    <div>

                        <span class="eyebrow">
                            Latar Belakang
                        </span>

                        <h2>
                            Education
                        </h2>

                    </div>


                    <p>
                        Ringkasan latar belakang pendidikan dan kemampuan bahasa
                        yang sedang dikembangkan.
                    </p>

                </div>


                <div class="education-grid">

                    <div class="education-column reveal">

                        <span class="section-label">
                            Education
                        </span>


                        <div class="timeline">

                            <article class="timeline-item">

                                <span class="timeline-marker"></span>


                                <div class="timeline-content">

                                    <span class="timeline-period">
                                        <?= htmlspecialchars($educationPeriod) ?>
                                    </span>


                                    <h3>
                                        <?= htmlspecialchars($school) ?>
                                    </h3>


                                    <p class="timeline-major">
                                        <?= htmlspecialchars($major) ?>
                                    </p>


                                    <p>
                                        <?= htmlspecialchars($educationDescription) ?>
                                    </p>

                                </div>

                            </article>

                        </div>

                    </div>


                    <div class="languages-column reveal reveal-delay-1">

                        <span class="section-label">
                            Languages
                        </span>


                        <div class="language-list">

                            <div class="language-item">

                                <div class="language-top">

                                    <span class="language-name">
                                        <?= htmlspecialchars($nativeLanguage) ?>
                                    </span>

                                    <span class="language-level">
                                        Native
                                    </span>

                                </div>


                                <div class="language-line">

                                    <span class="language-line-fill native"></span>

                                </div>

                            </div>


                            <div class="language-item">

                                <div class="language-top">

                                    <span class="language-name">
                                        Bahasa Inggris
                                    </span>

                                    <span class="language-level">
                                        Currently Learning
                                    </span>

                                </div>


                                <div class="language-line">

                                    <span class="language-line-fill learning"></span>

                                </div>

                            </div>


                            <div class="language-item">

                                <div class="language-top">

                                    <span class="language-name">
                                        Mandarin
                                    </span>

                                    <span class="language-level">
                                        Currently Learning
                                    </span>

                                </div>


                                <div class="language-line">

                                    <span class="language-line-fill learning short"></span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- ==================== SKILLS ==================== -->

        <section class="section" id="skills">

            <div class="container">

                <div class="section-heading reveal">

                    <div>

                        <span class="eyebrow">
                            Kemampuan
                        </span>

                        <h2>
                            Skills
                        </h2>

                    </div>


                    <p>
                        Indikator berikut merupakan gambaran kemampuan secara
                        visual dan bukan hasil pengukuran formal.
                    </p>

                </div>


                <div class="skills-layout">

                    <div class="skills-intro reveal">

                        <span class="section-label">
                            Technical dan Personal
                        </span>


                        <h3>
                            Perpaduan
                            <span>teknologi</span>
                            dan kreativitas.
                        </h3>


                        <p>
                            Menggabungkan dasar pengembangan frontend,
                            desain antarmuka, kerja sama tim, pemecahan
                            masalah, dan kemampuan berpikir kreatif.
                        </p>

                    </div>


                    <div class="skills-list reveal reveal-delay-1">

                        <?php foreach ($skills as $skillName => $skillValue): ?>

                            <div
                                class="skill-item"
                                data-skill="<?= $skillValue ?>"
                            >

                                <div class="skill-header">

                                    <span>
                                        <?= htmlspecialchars($skillName) ?>
                                    </span>

                                    <span class="skill-percent">
                                        <?= $skillValue ?>%
                                    </span>

                                </div>


                                <div class="skill-track">

                                    <span class="skill-progress"></span>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

        </section>


        <!-- ==================== EXPERIENCE ==================== -->

        <section class="section section-soft" id="experience">

            <div class="container">

                <div class="section-heading reveal">

                    <div>

                        <span class="eyebrow">
                            Pengalaman Praktis
                        </span>

                        <h2>
                            Experience
                        </h2>

                    </div>


                    <p>
                        Pengalaman berbasis proyek yang diperoleh melalui
                        proses belajar desain dan pengembangan frontend.
                    </p>

                </div>


                <div class="experience-list">

                    <?php foreach ($experiences as $experience): ?>

                        <article class="experience-item reveal">

                            <div class="experience-index">
                                <?= htmlspecialchars($experience["number"]) ?>
                            </div>


                            <div class="experience-main">

                                <div class="experience-top">

                                    <div>

                                        <span class="experience-type">
                                            <?= htmlspecialchars($experience["type"]) ?>
                                        </span>


                                        <h3>
                                            <?= htmlspecialchars($experience["title"]) ?>
                                        </h3>

                                    </div>


                                    <span class="experience-period">
                                        <?= htmlspecialchars($experience["year"]) ?>
                                    </span>

                                </div>


                                <p class="experience-description">
                                    <?= htmlspecialchars($experience["description"]) ?>
                                </p>


                                <div class="experience-meta">

                                    <?php foreach ($experience["metadata"] as $meta): ?>

                                        <div class="metadata-group">

                                            <span class="metadata-label">
                                                <?= htmlspecialchars($meta["label"]) ?>
                                            </span>


                                            <?php if (isset($meta["value"])): ?>

                                                <span class="metadata-value">
                                                    <?= htmlspecialchars($meta["value"]) ?>
                                                </span>

                                            <?php endif; ?>


                                            <?php if (isset($meta["tags"])): ?>

                                                <div class="tag-list">

                                                    <?php foreach ($meta["tags"] as $tag): ?>

                                                        <span>
                                                            <?= htmlspecialchars($tag) ?>
                                                        </span>

                                                    <?php endforeach; ?>

                                                </div>

                                            <?php endif; ?>

                                        </div>

                                    <?php endforeach; ?>

                                </div>

                            </div>

                        </article>

                    <?php endforeach; ?>

                </div>

            </div>

        </section>


        <!-- ==================== CONTACT ==================== -->

        <section class="section contact-section" id="contact">

            <div class="container">

                <div class="contact-header reveal">

                    <span class="eyebrow">
                        Hubungi Saya
                    </span>


                    <h2>
                        Contact.
                    </h2>


                    <p>
                        Terbuka untuk komunikasi profesional, kolaborasi,
                        kesempatan belajar, maupun peluang pengembangan diri.
                    </p>

                </div>


                <div class="contact-grid">

                    <a
                        href="mailto:<?= htmlspecialchars($email) ?>"
                        class="contact-item reveal"
                    >

                        <div class="contact-icon">

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <rect
                                    x="3"
                                    y="5"
                                    width="18"
                                    height="14"
                                    rx="2"
                                ></rect>

                                <path d="m3 7 9 6 9-6"></path>

                            </svg>

                        </div>


                        <div class="contact-content">

                            <span>Email</span>

                            <strong>
                                <?= htmlspecialchars($email) ?>
                            </strong>

                        </div>


                        <span class="contact-arrow">
                            ↗
                        </span>

                    </a>


                    <a
                        href="tel:<?= htmlspecialchars($phone) ?>"
                        class="contact-item reveal reveal-delay-1"
                    >

                        <div class="contact-icon">

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18
                                    2 19.79 19.79 0 0 1-8.63-3.07
                                    19.5 19.5 0 0 1-6-6A19.79
                                    19.79 0 0 1 2.12 4.18
                                    2 2 0 0 1 4.11 2h3a2 2
                                    0 0 1 2 1.72c.12.9.33 1.78
                                    .62 2.63a2 2 0 0 1-.45
                                    2.11L8 9.73a16 16 0 0 0
                                    6 6l1.27-1.27a2 2 0 0 1
                                    2.11-.45c.85.29 1.73.5
                                    2.63.62A2 2 0 0 1 22
                                    16.92z"
                                ></path>
                            </svg>

                        </div>


                        <div class="contact-content">

                            <span>Phone</span>

                            <strong>
                                <?= htmlspecialchars($phone) ?>
                            </strong>

                        </div>


                        <span class="contact-arrow">
                            ↗
                        </span>

                    </a>


                    <a
                        href="<?= htmlspecialchars($github) ?>"
                        class="contact-item reveal reveal-delay-2"
                        target="_blank"
                        rel="noopener noreferrer"
                    >

                        <div class="contact-icon">

                            <svg
                                viewBox="0 0 24 24"
                                fill="currentColor"
                            >
                                <path
                                    d="M12 .5C5.65.5.5 5.65.5 12c0
                                    5.08 3.29 9.39 7.86 10.91.58.11
                                    .79-.25.79-.56v-2.17c-3.2.7-3.87
                                    -1.35-3.87-1.35-.52-1.34-1.28-1.7
                                    -1.28-1.7-1.04-.71.08-.69.08-.69
                                    1.15.08 1.76 1.18 1.76 1.18
                                    1.03 1.76 2.7 1.25 3.36.95.1-.74
                                    .4-1.25.73-1.54-2.55-.29-5.23
                                    -1.28-5.23-5.68 0-1.26.45-2.28
                                    1.18-3.08-.12-.29-.51-1.46.11-3.04
                                    0 0 .96-.31 3.15 1.18a10.92 10.92
                                    0 0 1 5.73 0c2.19-1.49 3.15-1.18
                                    3.15-1.18.62 1.58.23 2.75.11
                                    3.04.73.8 1.18 1.82 1.18 3.08
                                    0 4.41-2.69 5.39-5.25 5.67.41
                                    .35.78 1.03.78 2.08v3.08c0 .3.21
                                    .67.8.56A11.52 11.52 0 0 0 23.5
                                    12C23.5 5.65 18.35.5 12 .5z"
                                ></path>
                            </svg>

                        </div>


                        <div class="contact-content">

                            <span>GitHub</span>

                            <strong>
                                <?= htmlspecialchars($github) ?>
                            </strong>

                        </div>


                        <span class="contact-arrow">
                            ↗
                        </span>

                    </a>


                    <a
                        href="<?= htmlspecialchars($instagram) ?>"
                        class="contact-item reveal reveal-delay-3"
                        target="_blank"
                        rel="noopener noreferrer"
                    >

                        <div class="contact-icon">

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <rect
                                    x="3"
                                    y="3"
                                    width="18"
                                    height="18"
                                    rx="5"
                                ></rect>

                                <circle
                                    cx="12"
                                    cy="12"
                                    r="4"
                                ></circle>

                                <circle
                                    cx="17.5"
                                    cy="6.5"
                                    r="1"
                                    fill="currentColor"
                                    stroke="none"
                                ></circle>
                            </svg>

                        </div>


                        <div class="contact-content">

                            <span>Instagram</span>

                            <strong>
                                <?= htmlspecialchars($instagram) ?>
                            </strong>

                        </div>


                        <span class="contact-arrow">
                            ↗
                        </span>

                    </a>

                </div>

            </div>

        </section>

    </main>


    <!-- ==================== FOOTER ==================== -->

    <footer class="site-footer">

        <div class="container footer-inner">

            <div class="footer-brand">

                <span class="brand-mark">
                    Hz
                </span>

                <span>
                    <?= htmlspecialchars($name) ?>
                </span>

            </div>


            <p>
                © <?= htmlspecialchars($currentYear) ?>
                <?= htmlspecialchars($name) ?>.
                Dibuat menggunakan HTML, CSS, JavaScript, dan PHP.
            </p>


            <a href="#about" class="back-to-top">
                Kembali ke atas ↑
            </a>

        </div>

    </footer>


    <script src="script.js"></script>

</body>
</html>
