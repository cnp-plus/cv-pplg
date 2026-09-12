<?php

// ===================================
// DATA PRIBADI
// ===================================

$nama = "NOVAL FAZRI";
$profesi = "PELAJAR";

$email = "novalfazri7@email.com";
$telepon = "083851214665";
$alamat = "majalengka,Indonesia";

$tentang = "Saya adalah seorang yang baik, ramah, lemah lembut
, suka menolong orang, suka berbagi, tidak pernah berbohong.";


// ===================================
// DATA SKILL
// ===================================

$skills = [

    [
        "nama" => "menggambar",
        "nilai" => 95
    ],

    [
        "nama" => "menulis",
        "nilai" => 85
    ],

    [
        "nama" => "ngedit",
        "nilai" => 75
    ],

    [
        "nama" => "sepak bola",
        "nilai" => 75
    ],

    [
        "nama" => "futsal",
        "nilai" => 70
    ]

];


// ===================================
// DATA PROJECT
// ===================================

$projects = [

    [
        "icon" => "🎣",
        "judul" => "mancing mania",
        "deskripsi" => "mencari kesenangan dan mendapat ikan."
    ],

];

?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>
CV | <?php echo $nama; ?>
</title>


<!-- FONT -->

<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect"
href="https://fonts.gstatic.com"
crossorigin>

<link
href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
rel="stylesheet">


<style>


/* ===================================
   RESET
=================================== */

*{
    margin:0;
    padding:0;

    box-sizing:border-box;

    font-family:'Poppins',sans-serif;
}


/* ===================================
   BODY
=================================== */

body{

    min-height:100vh;

    background:

    radial-gradient(
        circle at top left,
        #2563eb,
        transparent 35%
    ),

    radial-gradient(
        circle at bottom right,
        #7c3aed,
        transparent 35%
    ),

    #0f172a;

    padding:40px 20px;

    color:white;

}


/* ===================================
   BACKGROUND EFFECT
=================================== */

body::before{

    content:"";

    position:fixed;

    width:300px;

    height:300px;

    background:#38bdf8;

    filter:blur(150px);

    opacity:.25;

    top:-100px;

    left:-100px;

}


body::after{

    content:"";

    position:fixed;

    width:300px;

    height:300px;

    background:#a855f7;

    filter:blur(150px);

    opacity:.25;

    bottom:-100px;

    right:-100px;

}


/* ===================================
   CONTAINER
=================================== */

.cv-container{

    position:relative;

    z-index:2;

    max-width:1100px;

    margin:auto;

}


/* ===================================
   HERO
=================================== */

.hero{

    min-height:320px;

    padding:40px;

    border-radius:25px;

    display:flex;

    align-items:center;

    gap:40px;

    background:

    linear-gradient(
        135deg,
        rgba(30,41,59,.9),
        rgba(15,23,42,.9)
    );

    backdrop-filter:blur(20px);

    border:

    1px solid
    rgba(255,255,255,.1);

    box-shadow:

    0 20px 60px
    rgba(0,0,0,.4);

}


/* ===================================
   FOTO
=================================== */

.profile-photo{

    position:relative;

}


.profile-photo img{

    width:190px;

    height:190px;

    object-fit:cover;

    border-radius:50%;

    border:

    5px solid
    rgba(255,255,255,.8);

    box-shadow:

    0 0 0 8px
    rgba(56,189,248,.2),

    0 20px 50px
    rgba(0,0,0,.5);

    transition:.4s;

}


.profile-photo img:hover{

    transform:

    scale(1.05)
    rotate(2deg);

}


/* ===================================
   HERO TEXT
=================================== */

.hero-text h1{

    font-size:48px;

    font-weight:800;

    letter-spacing:2px;

    background:

    linear-gradient(
        90deg,
        #38bdf8,
        #a855f7,
        #ec4899
    );

    -webkit-background-clip:text;

    color:transparent;

}


.hero-text h2{

    font-size:17px;

    margin-top:10px;

    font-weight:400;

    letter-spacing:3px;

    color:#cbd5e1;

}


/* BADGE */

.badge{

    display:inline-block;

    margin-top:18px;

    padding:

    8px 18px;

    border-radius:30px;

    background:

    rgba(56,189,248,.15);

    border:

    1px solid
    rgba(56,189,248,.4);

    color:#38bdf8;

    font-size:13px;

}


/* ===================================
   GRID
=================================== */

.main-grid{

    display:grid;

    grid-template-columns:

    320px 1fr;

    gap:25px;

    margin-top:25px;

}


/* ===================================
   CARD
=================================== */

.card{

    background:

    rgba(30,41,59,.75);

    backdrop-filter:

    blur(20px);

    border:

    1px solid
    rgba(255,255,255,.08);

    border-radius:20px;

    padding:25px;

    box-shadow:

    0 15px 40px
    rgba(0,0,0,.25);

}


/* ===================================
   TITLE
=================================== */

.card-title{

    font-size:16px;

    letter-spacing:1px;

    color:#38bdf8;

    margin-bottom:20px;

    display:flex;

    align-items:center;

    gap:10px;

}


/* ===================================
   CONTACT
=================================== */

.contact{

    display:flex;

    align-items:center;

    gap:12px;

    padding:12px;

    margin-bottom:10px;

    background:

    rgba(255,255,255,.04);

    border-radius:12px;

    color:#cbd5e1;

    font-size:13px;

    transition:.3s;

}


.contact:hover{

    transform:

    translateX(5px);

    background:

    rgba(56,189,248,.1);

}


/* ===================================
   SKILLS
=================================== */

.skill{

    margin-bottom:18px;

}


.skill-top{

    display:flex;

    justify-content:

    space-between;

    font-size:13px;

    margin-bottom:8px;

}


.skill-percent{

    color:#38bdf8;

}


.progress{

    height:8px;

    background:

    rgba(255,255,255,.08);

    border-radius:20px;

    overflow:hidden;

}


.progress-bar{

    height:100%;

    border-radius:20px;

    background:

    linear-gradient(
        90deg,
        #38bdf8,
        #a855f7
    );

    animation:

    loading 2s ease;

}


@keyframes loading{

    from{

        width:0 !important;

    }

}


/* ===================================
   ABOUT
=================================== */

.about-text{

    color:#cbd5e1;

    line-height:1.9;

    font-size:14px;

}


/* ===================================
   PROJECT
=================================== */

.project-grid{

    display:grid;

    grid-template-columns:

    repeat(
        auto-fit,
        minmax(200px,1fr)
    );

    gap:15px;

    margin-top:20px;

}


.project{

    padding:20px;

    border-radius:18px;

    background:

    linear-gradient(
        135deg,
        rgba(56,189,248,.1),
        rgba(168,85,247,.1)
    );

    border:

    1px solid
    rgba(255,255,255,.08);

    transition:.4s;

}


.project:hover{

    transform:

    translateY(-8px);

    box-shadow:

    0 15px 35px
    rgba(0,0,0,.3);

}


.project-icon{

    font-size:30px;

    margin-bottom:10px;

}


.project h3{

    font-size:15px;

    margin-bottom:8px;

}


.project p{

    color:#cbd5e1;

    font-size:12px;

    line-height:1.7;

}


/* ===================================
   EDUCATION
=================================== */

.education{

    padding:18px;

    margin-top:15px;

    border-left:

    3px solid #38bdf8;

    background:

    rgba(255,255,255,.04);

    border-radius:10px;

}


.education h3{

    font-size:15px;

}


.education span{

    display:block;

    margin-top:5px;

    font-size:12px;

    color:#38bdf8;

}


.education p{

    margin-top:8px;

    color:#cbd5e1;

    font-size:13px;

}


/* ===================================
   ANIMATION
=================================== */

.hero{

    animation:

    fadeUp .8s ease;

}


.card{

    animation:

    fadeUp 1s ease;

}


@keyframes fadeUp{

    from{

        opacity:0;

        transform:

        translateY(30px);

    }


    to{

        opacity:1;

        transform:

        translateY(0);

    }

}


/* ===================================
   RESPONSIVE
=================================== */

@media(max-width:800px){

    body{

        padding:20px 10px;

    }


    .hero{

        flex-direction:column;

        text-align:center;

        padding:30px 20px;

    }


    .hero-text h1{

        font-size:32px;

    }


    .hero-text h2{

        font-size:13px;

    }


    .main-grid{

        grid-template-columns:1fr;

    }


    .project-grid{

        grid-template-columns:1fr;

    }


    .profile-photo img{

        width:150px;

        height:150px;

    }

}


</style>


</head>


<body>


<div class="cv-container">


<!-- ===================================
     HERO
=================================== -->

<section class="hero">


    <div class="profile-photo">

        <!-- FOTO -->
        <img
        src="noval.jpeg"
        alt="<?php echo $nama; ?>">

    </div>



    <div class="hero-text">


        <h1>

            <?php echo $nama; ?>

        </h1>


        <h2>

            <?php echo $profesi; ?>

        </h2>


        <div class="badge">

            ORANG BAIK

        </div>


    </div>


</section>



<!-- ===================================
     MAIN GRID
=================================== -->

<div class="main-grid">


<!-- ===================================
     SIDEBAR
=================================== -->

<div>


    <!-- CONTACT -->

    <div class="card">


        <h3 class="card-title">

            📞 KONTAK

        </h3>


        <div class="contact">

            📱

            <?php echo $telepon; ?>

        </div>


        <div class="contact">

            ✉️

            <?php echo $email; ?>

        </div>


        <div class="contact">

            📍

            <?php echo $alamat; ?>

        </div>


    </div>



    <!-- SKILLS -->

    <div
    class="card"
    style="margin-top:25px;">


        <h3 class="card-title">

            💻 SKILLS

        </h3>


        <?php

        foreach($skills as $skill){

        ?>


        <div class="skill">


            <div class="skill-top">


                <span>

                    <?php
                    echo $skill["nama"];
                    ?>

                </span>


                <span class="skill-percent">

                    <?php
                    echo $skill["nilai"];
                    ?>%

                </span>


            </div>



            <div class="progress">


                <div

                class="progress-bar"

                style="width:

                <?php
                echo $skill["nilai"];
                ?>%">

                </div>


            </div>


        </div>


        <?php

        }

        ?>


    </div>


</div>



<!-- ===================================
     CONTENT
=================================== -->

<div>


    <!-- ABOUT -->

    <div class="card">


        <h3 class="card-title">

            👋 TENTANG SAYA

        </h3>


        <p class="about-text">

            <?php
            echo $tentang;
            ?>

        </p>


    </div>



    <!-- EDUCATION -->

    <div
    class="card"
    style="margin-top:25px;">


        <h3 class="card-title">

            🎓 PENDIDIKAN

        </h3>


        <div class="education">


            <h3>

                SMK NEGRI 1 LEUWIMUNDING

            </h3>


            <p>

                Jurusan:
                PPLGl

            </p>


        </div>


    </div>



    <!-- PROJECT -->

    <div
    class="card"
    style="margin-top:25px;">


        <h3 class="card-title">

            🚀 PROJECT

        </h3>


        <div class="project-grid">


        <?php

        foreach($projects as $project){

        ?>


            <div class="project">


                <div class="project-icon">

                    <?php
                    echo $project["icon"];
                    ?>

                </div>


                <h3>

                    <?php
                    echo $project["judul"];
                    ?>

                </h3>


                <p>

                    <?php
                    echo $project["deskripsi"];
                    ?>

                </p>


            </div>


        <?php

        }

        ?>


        </div>


    </div>



    <!-- KELEBIHAN -->

    <div
    class="card"
    style="margin-top:25px;">


        <h3 class="card-title">

            ⭐ KELEBIHAN

        </h3>


        <p class="about-text">

            ⚡ Cepat menggambar

            <br><br>

            🤝 Solidaritas

            <br><br>

            🎯 Bertanggung jawab

            <br><br>

            💡 Memiliki ketertarikan dalam berbisnis

        </p>


    </div>


</div>


</div>


</div>


</body>

</html>