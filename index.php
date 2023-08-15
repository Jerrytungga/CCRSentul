<?php
include 'database.php';
$gambar_kedua = mysqli_query($conn, "SELECT * FROM gambar_kedua ");
$data2 = mysqli_fetch_array($gambar_kedua);
$periode = mysqli_query($conn, "SELECT * FROM `periode`");
$periode_ = mysqli_fetch_array($periode);
$bible = mysqli_query($conn, "SELECT * FROM `ayat_alkitab`");
$ayat = mysqli_fetch_array($bible);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CCR</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><h6>CAMPUS & COMMUNITY RESEARCH</h6></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdpYzzp8yybq1gJvNlJfADSjqvyzcmk9yS5BS5STwEjs6Q_gA/viewform?pli=1">Daftar Domba</a></li>
                        <li class="nav-item"><a class="nav-link" href="jurnal.php">LInk Jurnal</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="">Jurnal Fieldtrip</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="https://euaggelion.my.canva.site/rekomendasi-bahan-perlusan">Bahan Injil & Rawat</a></li>
                        <li class="nav-item"><a class="btn btn-danger" href="login/index.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" style="background-image: url('admin/images/<?= $data2['Nama_gambar2']?>');" >
            <div class="container">
                <h5 ><?= $periode_['semester'] ?></h5> <br>
                <h1 class=" text-uppercase">JURNAL PERLUASAN</h1><br><br>
                <h6><?= $ayat['ayat'] ?></h6> <br><br>
                <a class="btn btn-primary btn-xl text-uppercase" href="https://docs.google.com/spreadsheets/d/1a6lcz5G6xbUAURVpmbSxopvEogS2en3jKQhPGttpSS4/edit#gid=0">BUKU GOW</a> <br><br>
                <h6>"AVAILABLE, BURDEN, AND COMMITMEN​T"</h6> <br><br>
            </div>
        </header>
        <!-- Services-->
    

                    
     
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
