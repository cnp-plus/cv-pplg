<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>My CV - Azzahra</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family: Arial, sans-serif;
    background:#ffe6f0;
    color:#7b4058;
}

/* =========================
   LOADING SCREEN
========================= */

#loading{
    position:fixed;
    inset:0;
    z-index:9999;
    background:
        linear-gradient(rgba(255,220,235,.90),rgba(255,220,235,.90)),
        repeating-linear-gradient(
            0deg,
            transparent,
            transparent 45px,
            rgba(255,255,255,.7) 46px
        );

    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;

    transition:1s;
}

.loading-box{
    width:330px;
    max-width:90%;
    padding:35px 25px;
    background:#fff4f8;
    border:4px solid #f5b5ca;
    border-radius:30px;
    text-align:center;
    box-shadow:0 10px 30px rgba(180,80,120,.20);
}

.loading-title{
    font-size:34px;
    font-weight:bold;
    color:#e878a2;
    letter-spacing:3px;
}

.loading-subtitle{
    margin-top:8px;
    font-size:15px;
    color:#a85d78;
}

.heart{
    font-size:45px;
    margin:15px 0;
    animation:heart 1s infinite;
}

@keyframes heart{
    0%,100%{
        transform:scale(1);
    }
    50%{
        transform:scale(1.2);
    }
}

.loading-bar{
    width:100%;
    height:13px;
    background:#f9d2df;
    border-radius:20px;
    overflow:hidden;
    margin-top:20px;
}

.loading-progress{
    width:0%;
    height:100%;
    background:#ed91b2;
    border-radius:20px;
    animation:loading 3s forwards;
}

@keyframes loading{
    from{
        width:0%;
    }

    to{
        width:100%;
    }
}

.loading-text{
    margin-top:12px;
    font-size:13px;
}

/* =========================
   CV
========================= */

#cv{
    display:none;
    min-height:100vh;
    padding:25px 15px;
}

.cv-container{
    max-width:900px;
    margin:auto;
    background:#fff8fb;
    border:5px solid #f3b1c8;
    border-radius:25px;
    overflow:hidden;
    box-shadow:0 10px 35px rgba(160,70,100,.20);
}

/* HEADER */

.header{
    background:#ffd5e3;
    padding:30px;
    text-align:center;
    position:relative;
}

.header h1{
    font-size:42px;
    color:#d96791;
    letter-spacing:6px;
}

.header p{
    font-size:20px;
    color:#9b5670;
    margin-top:5px;
}

/* FOTO */

.photo-area{
    text-align:center;
    padding:25px 20px 10px;
}

.photo-frame{
    width:190px;
    height:220px;
    margin:auto;
    padding:8px;
    background:white;
    border:5px solid #efa7c0;
    border-radius:20px;
    transform:rotate(-2deg);
    box-shadow:5px 7px 15px rgba(120,60,80,.20);
}

.photo-frame img{
    width:100%;
    height:100%;
    object-fit:cover;
    border-radius:12px;
}

.content{
    padding:25px;
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;
}

.card{
    background:#ffeaf2;
    border:2px dashed #e79bb6;
    border-radius:20px;
    padding:22px;
}

.card h2{
    display:inline-block;
    background:#f5a9c2;
    color:white;
    padding:10px 25px;
    border-radius:30px;
    font-size:19px;
    margin-bottom:15px;
}

.card p{
    line-height:1.7;
    font-size:15px;
}

.info{
    margin:8px 0;
}

.info b{
    color:#c95c83;
}

.footer{
    text-align:center;
    padding:20px;
    background:#ffd5e3;
    color:#a45170;
}

/* MOBILE */

@media(max-width:650px){

    .header h1{
        font-size:32px;
    }

    .content{
        grid-template-columns:1fr;
    }

    .card{
        padding:18px;
    }
}
</style>
</head>

<body>

<!-- =========================
     LOADING
========================= -->

<div id="loading">

    <div class="loading-box">

        <div class="loading-title">
            azzahra imutt
        </div>

        <div class="loading-subtitle">
            My Personal CV
        </div>

        <div class="heart">
            💗
        </div>

        <div class="loading-bar">
            <div class="loading-progress"></div>
        </div>

        <div class="loading-text">
            Loading my profile...
        </div>

    </div>

</div>


<!-- =========================
     HALAMAN CV
========================= -->

<div id="cv">

    <div class="cv-container">

        <div class="header">

            <h1>azzahra meita putri</h1>

            <p>My Personal Curriculum Vitae</p>

        </div>


        <!-- FOTO -->

        <div class="photo-area">

            <div class="photo-frame">

                <img src="zahra.jpeg" alt="Foto Profil">

            </div>

        </div>


        <div class="content">


            <!-- DATA DIRI -->

            <div class="card">

                <h2>🌷 DATA DIRI</h2>

                <div class="info">
                    <b>Nama:</b> Azzahra Meita Putri
                </div>

                <div class="info">
                    <b>Kelas:</b> XII PPLG 1
                </div>

                <div class="info">
                    <b>Alamat:</b> Jabar, Jawa barat
                </div>

                <div class="info">
                    <b>Tempat, Tanggal Lahir:</b> majalengka,11 mei 2009
                </div>
                <div class="info">
                    <b>No Telpon</b> 081324541311
                </div>
                <div class="info">
                    <b>IG</b> azzahrameitaputri_11
                </div>

            </div>


            <!-- ABOUT ME -->

            <div class="card">

                <h2>💗 ABOUT ME</h2>

                <p>
                    Saya adalah seorang siswa yang sedang
                    belajar dan mengembangkan kemampuan
                    di bidang teknologi dan pemrograman.
                    Saya suka mencoba hal-hal baru dan
                    terus belajar untuk menjadi lebih baik.
                </p>

            </div>


            <!-- HOBBY -->

            <div class="card">

                <h2>🎧 HOBBY</h2>

                <p>
                    Hobby saya adalah jalan-jalan,
                    mendengarkan musik, dan mencoba
                    berbagai hal baru.
                </p>

            </div>


            <!-- CITA-CITA -->

            <div class="card">

                <h2>🌸 CITA-CITA</h2>

                <p>
                    Saya ingin menjadi seseorang yang
                    sukses dan dapat membanggakan
                    orang-orang di sekitar saya.
                </p>

            </div>


            <!-- MOTTO -->

            <div class="card">

                <h2>✨ MOTTO HIDUP</h2>

                <p>
                    "Mimpi besar dimulai dari keberanian
                    untuk melangkah."
                </p>

            </div>


            <!-- PENDIDIKAN -->

            <div class="card">

                <h2>📚 PENDIDIKAN</h2>

                <p>
                    <b>Sekolah:</b><br>
                    SMKN 1 LEUWIMUNDING
                </p>

                <p>
                    <b>Jurusan:</b><br>
                    Pengembangan Perangkat Lunak
                    dan Gim (PPLG)
                </p>

            </div>

        </div>


        <div class="footer">

            💕 Thank you for visiting my CV 💕

        </div>

    </div>

</div>


<script>

setTimeout(function(){

    document.getElementById("loading").style.opacity = "0";

    setTimeout(function(){

        document.getElementById("loading").style.display = "none";

        document.getElementById("cv").style.display = "block";

    },1000);

},3500);

</script>

</body>
</html>