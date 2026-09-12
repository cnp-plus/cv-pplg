<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CV Dwi Rafi Mazdudin</title>


    <style>

        /* ==================================================
           COLOR
        ================================================== */

        :root {

            --cream: #ead9a7;

            --cream-light: #f4e8c5;

            --white: #f8f8f8;

            --black: #1b1b1b;

            --black-soft: #292929;

            --orange: #f59e00;

            --orange-light: #ffb52e;

            --text: #202020;

            --muted: #666666;

        }


        /* ==================================================
           RESET
        ================================================== */

        * {

            margin: 0;

            padding: 0;

            box-sizing: border-box;

            font-family:
                "Segoe UI",
                Arial,
                sans-serif;

        }


        /* ==================================================
           BODY
        ================================================== */

        body {

            min-height: 100vh;

            padding: 30px 10px;

            position: relative;

            overflow-x: hidden;

            background:

                linear-gradient(
                    120deg,
                    #ead9a7,
                    #f4e8c5,
                    #e1c982,
                    #f6e9bd
                );

            background-size: 400% 400%;

            animation:
                backgroundMove
                12s
                ease-in-out
                infinite;

        }


        /* ==================================================
           BACKGROUND ANIMATION CONTAINER
        ================================================== */

        .background-animation {

            position: fixed;

            inset: 0;

            overflow: hidden;

            z-index: 0;

            pointer-events: none;

        }


        /* ==================================================
           BLACK CIRCLE 1
        ================================================== */

        .bg-circle-1 {

            position: absolute;

            width: 330px;

            height: 330px;

            border-radius: 50%;

            background: #000000;

            opacity: 0.14;

            filter: blur(35px);

            top: -80px;

            left: -80px;

            animation:
                blackMoveOne
                8s
                ease-in-out
                infinite
                alternate;

        }


        /* ==================================================
           BLACK CIRCLE 2
        ================================================== */

        .bg-circle-2 {

            position: absolute;

            width: 300px;

            height: 300px;

            border-radius: 50%;

            background: #111111;

            opacity: 0.12;

            filter: blur(40px);

            right: -80px;

            top: 35%;

            animation:
                blackMoveTwo
                10s
                ease-in-out
                infinite
                alternate;

        }


        /* ==================================================
           BLACK CIRCLE 3
        ================================================== */

        .bg-circle-3 {

            position: absolute;

            width: 250px;

            height: 250px;

            border-radius: 50%;

            background: #000000;

            opacity: 0.13;

            filter: blur(35px);

            left: 35%;

            bottom: -80px;

            animation:
                blackMoveThree
                9s
                ease-in-out
                infinite
                alternate;

        }


        /* ==================================================
           BACKGROUND MOVEMENT
        ================================================== */

        @keyframes backgroundMove {

            0% {

                background-position:
                    0% 50%;

            }

            50% {

                background-position:
                    100% 50%;

            }

            100% {

                background-position:
                    0% 50%;

            }

        }


        /* ==================================================
           BLACK CIRCLE ANIMATION 1
        ================================================== */

        @keyframes blackMoveOne {

            0% {

                transform:
                    translate(0, 0)
                    scale(1);

            }

            50% {

                transform:
                    translate(280px, 160px)
                    scale(1.25);

            }

            100% {

                transform:
                    translate(520px, 40px)
                    scale(0.85);

            }

        }


        /* ==================================================
           BLACK CIRCLE ANIMATION 2
        ================================================== */

        @keyframes blackMoveTwo {

            0% {

                transform:
                    translate(0, 0)
                    scale(1);

            }

            50% {

                transform:
                    translate(-250px, -150px)
                    scale(1.25);

            }

            100% {

                transform:
                    translate(-80px, -320px)
                    scale(0.8);

            }

        }


        /* ==================================================
           BLACK CIRCLE ANIMATION 3
        ================================================== */

        @keyframes blackMoveThree {

            0% {

                transform:
                    translate(0, 0)
                    scale(1);

            }

            50% {

                transform:
                    translate(200px, -140px)
                    scale(1.3);

            }

            100% {

                transform:
                    translate(-230px, 60px)
                    scale(0.8);

            }

        }


        /* ==================================================
           CV CONTAINER
        ================================================== */

        .cv {

            position: relative;

            z-index: 1;

            width: min(850px, 100%);

            min-height: 1050px;

            margin: auto;

            display: grid;

            grid-template-columns:
                58%
                42%;

            background: white;

            box-shadow:
                0 18px 45px
                rgba(0, 0, 0, 0.28);

        }


        /* ==================================================
           LEFT SIDE
        ================================================== */

        .left {

            background: #f7f7f7;

            padding:
                28px
                25px
                25px;

        }


        /* ==================================================
           PROFILE
        ================================================== */

        .profile {

            display: grid;

            grid-template-columns:
                145px
                1fr;

            gap: 25px;

            align-items: center;

            margin-bottom: 30px;

        }


        /* ==================================================
           PHOTO
        ================================================== */

        .photo {

            width: 140px;

            height: 140px;

            border-radius: 50%;

            border:
                5px solid
                var(--black);

            overflow: hidden;

            background: #dddddd;

            box-shadow:
                0 6px 15px
                rgba(0,0,0,0.18);

        }


        .photo img {

            width: 100%;

            height: 100%;

            object-fit: cover;

            display: block;

        }


        /* ==================================================
           PROFILE TEXT
        ================================================== */

        .profile-text h1 {

            font-size: 32px;

            line-height: 1.05;

            font-weight: 900;

            color: var(--black);

            margin-bottom: 10px;

        }


        .profile-text p {

            color: var(--orange);

            font-size: 15px;

            font-weight: 800;

            line-height: 1.4;

        }


        /* ==================================================
           SECTION TITLE
        ================================================== */

        .section-title {

            background: var(--orange);

            color: #171717;

            text-align: center;

            font-size: 16px;

            font-weight: 900;

            letter-spacing: 3px;

            padding: 10px;

            margin:
                20px 0
                18px;

        }


        /* ==================================================
           CONTENT ITEM
        ================================================== */

        .item {

            display: grid;

            grid-template-columns:
                90px
                1fr;

            gap: 15px;

            margin-bottom: 24px;

        }


        /* ==================================================
           DATE
        ================================================== */

        .date {

            font-size: 12px;

            font-weight: 800;

            color: #222222;

            line-height: 1.5;

        }


        /* ==================================================
           ITEM TITLE
        ================================================== */

        .item-content h3 {

            font-size: 16px;

            font-weight: 900;

            color: #222222;

            margin-bottom: 7px;

        }


        /* ==================================================
           ITEM TEXT
        ================================================== */

        .item-content p {

            font-size: 13px;

            color: var(--muted);

            line-height: 1.55;

        }


        /* ==================================================
           LIST
        ================================================== */

        .item-content ul {

            margin-top: 8px;

            padding-left: 18px;

        }


        .item-content li {

            font-size: 12.5px;

            color: var(--muted);

            line-height: 1.6;

            margin-bottom: 3px;

        }


        /* ==================================================
           RIGHT SIDE
        ================================================== */

        .right {

            position: relative;

            overflow: hidden;

            padding:
                30px
                28px;

            color: white;

            background:

                linear-gradient(
                    180deg,
                    #292929 0%,
                    #181818 100%
                );

        }


        /* ==================================================
           ORANGE HEADER
        ================================================== */

        .orange-line {

            position: absolute;

            top: 20px;

            left: 0;

            right: 0;

            height: 105px;

            background: var(--orange);

            z-index: 0;

        }


        /* ==================================================
           RIGHT NAME
        ================================================== */

        .right-name {

            position: relative;

            z-index: 1;

            padding:
                55px
                10px
                0;

            margin-bottom: 55px;

        }


        .right-name h1 {

            font-size: 34px;

            font-weight: 900;

            color: white;

            letter-spacing: 1px;

        }


        .right-name p {

            color: #161616;

            font-size: 14px;

            font-weight: 900;

            letter-spacing: 2px;

            margin-top: 5px;

        }


        /* ==================================================
           RIGHT SECTION
        ================================================== */

        .right-section {

            position: relative;

            z-index: 1;

            margin-bottom: 38px;

        }


        .right-section h2 {

            display: inline-block;

            min-width: 155px;

            text-align: center;

            border:
                2px solid
                var(--orange);

            color: white;

            font-size: 14px;

            letter-spacing: 2px;

            padding:
                9px
                14px;

            margin-bottom: 20px;

        }


        /* ==================================================
           CONTACT
        ================================================== */

        .contact p {

            font-size: 13px;

            line-height: 1.6;

            color: #eeeeee;

            margin-bottom: 16px;

        }


        .contact strong {

            display: block;

            color: var(--orange);

            font-size: 11px;

            letter-spacing: 1.5px;

            margin-bottom: 3px;

        }


        /* ==================================================
           SKILLS
        ================================================== */

        .skill {

            margin-bottom: 22px;

        }


        .skill-name {

            font-size: 12px;

            font-weight: 800;

            color: white;

            text-transform: uppercase;

            margin-bottom: 7px;

        }


        /* SKILL BACKGROUND */

        .skill-bar {

            width: 100%;

            height: 9px;

            border:
                1px solid
                var(--orange);

            background:
                #101010;

            overflow: hidden;

        }


        /* SKILL LEVEL */

        .skill-level {

            height: 100%;

            background:

                linear-gradient(
                    90deg,
                    #f59e00,
                    #ffb52e
                );

        }


        /* ==================================================
           SOCIAL
        ================================================== */

        .social {

            position: relative;

            z-index: 1;

            border-top:
                1px solid
                rgba(255,255,255,0.2);

            padding-top: 18px;

            margin-top: 20px;

            display: flex;

            justify-content: center;

            gap: 25px;

        }


        .social span {

            color: var(--orange);

            font-size: 12px;

            font-weight: 900;

            letter-spacing: 1px;

        }


        /* ==================================================
           RESPONSIVE TABLET / HP
        ================================================== */

        @media (max-width: 750px) {

            body {

                padding: 10px;

            }


            .cv {

                grid-template-columns:
                    1fr;

            }


            .profile {

                grid-template-columns:
                    120px
                    1fr;

                gap: 15px;

            }


            .photo {

                width: 115px;

                height: 115px;

            }


            .profile-text h1 {

                font-size: 26px;

            }


            .right {

                min-height: 700px;

            }

        }


        /* ==================================================
           RESPONSIVE SMALL HP
        ================================================== */

        @media (max-width: 480px) {

            .profile {

                grid-template-columns:
                    1fr;

                text-align: center;

            }


            .photo {

                margin: auto;

            }


            .item {

                grid-template-columns:
                    70px
                    1fr;

            }


            .profile-text h1 {

                font-size: 28px;

            }

        }

    </style>

</head>


<body>


    <!-- ==================================================
         BACKGROUND ANIMATION
    ================================================== -->

    <div class="background-animation">

        <div class="bg-circle-1"></div>

        <div class="bg-circle-2"></div>

        <div class="bg-circle-3"></div>

    </div>



    <!-- ==================================================
         CV
    ================================================== -->

    <div class="cv">


        <!-- ==================================================
             LEFT SIDE
        ================================================== -->

        <div class="left">


            <!-- PROFILE -->

            <div class="profile">


                <!-- FOTO -->

                <div class="photo">

                    <img
                        src="IMG_1029.jpg"
                        alt="Foto Dwi Rafi Mazdudin"
                    >

                </div>


                <!-- NAMA -->

                <div class="profile-text">

                    <h1>

                        Dwi Rafi
                        <br>
                        Mazdudin

                    </h1>


                    <p>

                        Creative Student |
                        Japanese Learner

                    </p>

                </div>


            </div>



            <!-- ==================================================
                 PENDIDIKAN
            ================================================== -->

            <div class="section-title">

                PENDIDIKAN

            </div>


            <div class="item">


                <div class="date">

                    2024 -<br>
                    Sekarang

                </div>


                <div class="item-content">


                    <h3>

                        SMK Negeri 1 Leuwimunding

                    </h3>


                    <p>

                        <b>
                            Rekayasa Perangkat Lunak (RPL)
                        </b>

                        | Japanese Class

                    </p>


                    <ul>

                        <li>
                            Mempelajari pemrograman
                            dan pengembangan aplikasi
                        </li>

                        <li>
                            Mempelajari Bahasa Jepang
                            level N4 - N5
                        </li>

                        <li>
                            Mempelajari cara menulis Kanji
                        </li>

                    </ul>


                </div>

            </div>



            <!-- ==================================================
                 EXPERIENCE
            ================================================== -->

            <div class="section-title">

                EXPERIENCE

            </div>



            <!-- WEB DEVELOPMENT -->

            <div class="item">


                <div class="date">

                    2024 -<br>
                    Sekarang

                </div>


                <div class="item-content">


                    <h3>

                        Web Development Project

                    </h3>


                    <p>

                        Membuat website sederhana
                        menggunakan HTML, CSS,
                        PHP, dan MySQL.

                    </p>


                </div>

            </div>



            <!-- GRAPHIC DESIGN -->

            <div class="item">


                <div class="date">

                    2024 -<br>
                    Sekarang

                </div>


                <div class="item-content">


                    <h3>

                        Graphic Design & Video Editing

                    </h3>


                    <p>

                        Mengerjakan berbagai proyek
                        desain grafis dan editing video
                        untuk tugas maupun proyek pribadi.

                    </p>


                </div>

            </div>



            <!-- JAPANESE -->

            <div class="item">


                <div class="date">

                    2024 -<br>
                    Sekarang

                </div>


                <div class="item-content">


                    <h3>

                        Japanese Language Learning

                    </h3>


                    <p>

                        Mempelajari Bahasa Jepang
                        tingkat dasar N5 - N4,
                        termasuk Hiragana,
                        Katakana, dan Kanji.

                    </p>


                </div>

            </div>


        </div>



        <!-- ==================================================
             RIGHT SIDE
        ================================================== -->

        <div class="right">


            <!-- ORANGE HEADER -->

            


            <!-- NAMA -->

            <div class="right-name">

                <h1>

                

                </h1>


                <p>

                    

                </p>

            </div>



            <!-- ==================================================
                 CONTACT
            ================================================== -->

            <div class="right-section contact">


                <h2>

                    CONTACT ME

                </h2>


                <p>

                    <strong>
                        ADDRESS
                    </strong>

                    Blok Selasa, Garawani,<br>

                    Sumberaya, Majalengka

                </p>


                <p>

                    <strong>
                        PHONE
                    </strong>

                    082495567541

                </p>


                <p>

                    <strong>
                        INSTAGRAM
                    </strong>

                    @duirff111

                </p>


            </div>



            <!-- ==================================================
                 PRO SKILLS
            ================================================== -->

            <div class="right-section">


                <h2>

                    PRO SKILLS

                </h2>



                <!-- BASIC JAPANESE -->

                <div class="skill">

                    <div class="skill-name">

                        Basic Japanese N5

                    </div>


                    <div class="skill-bar">

                        <div
                            class="skill-level"
                            style="width: 55%;">

                        </div>

                    </div>

                </div>



                <!-- GRAPHIC DESIGN -->

                <div class="skill">

                    <div class="skill-name">

                        Graphic Design

                    </div>


                    <div class="skill-bar">

                        <div
                            class="skill-level"
                            style="width: 70%;">

                        </div>

                    </div>

                </div>



                <!-- VIDEO EDITING -->

                <div class="skill">

                    <div class="skill-name">

                        Video Editing

                    </div>


                    <div class="skill-bar">

                        <div
                            class="skill-level"
                            style="width: 75%;">

                        </div>

                    </div>

                </div>



                <!-- PROGRAMMING -->

                <div class="skill">

                    <div class="skill-name">

                        Programming

                    </div>


                    <div class="skill-bar">

                        <div
                            class="skill-level"
                            style="width: 60%;">

                        </div>

                    </div>

                </div>


            </div>



            <!-- ==================================================
                 SOCIAL
            ================================================== -->

            


        </div>


    </div>


</body>

</html>