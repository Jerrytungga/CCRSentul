<?php
include 'database.php';
$gambar_utama = mysqli_query($conn, "SELECT * FROM gambar_utama ");
$data = mysqli_fetch_array($gambar_utama);
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="CCR SENTUL​, PERLUASAN CCR, Materials">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.14.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-overlap u-overlap-contrast u-overlap-transparent u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-image u-shading u-header" id="sec-8d2a" data-image-width="3840" data-image-height="2160"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-text-shadow u-custom-text-shadow-blur u-custom-text-shadow-color u-custom-text-shadow-transparency u-custom-text-shadow-x u-custom-text-shadow-y u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>

<?php include 'navbar.php'; ?>



            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <!-- <h2 class="u-text u-text-body-alt-color u-text-1">CCR SENTUL </h2> -->
      </div></header>
    <section class="u-carousel u-slide u-block-8ab5-1" id="carousel_2b1b" data-interval="5000" data-u-ride="carousel">
      <ol class="u-absolute-hcenter u-carousel-indicators u-block-8ab5-2">
        <li data-u-target="#carousel_2b1b" class="u-active u-grey-30" data-u-slide-to="0"></li>
      </ol>
      <div>
        <div class="u-active u-align-center u-image u-shading u-section-1-1" src="" data-image-width="3840" data-image-height="2160" style="background-image: url('admin/images/<?= $data['nama_gambar']?>');">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h5 class="u-text u-text-1">JUl - DES 2023</h5>
            <h1 class="u-text u-text-default u-title u-text-2">PERLUASAN CCR</h1>
            <blockquote class="u-text u-text-3">Exodus 7:16 Let My people go that they may serve Me</blockquote>
          </div>
        </div>
      </div>
  
    </section>
    <section class="u-align-center u-clearfix u-image u-parallax u-shading u-section-2" id="sec-9455" data-image-width="3840" data-image-height="2160" style="background-image: url('admin/images/<?= $data['nama_gambar']?>');">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Materials</h1>
        <a href="https://nicepage.one" class="u-border-2 u-border-palette-2-base u-btn u-btn-round u-button-style u-hover-palette-2-base u-none u-radius-6 u-text-body-alt-color u-text-hover-white u-btn-1">BUKU GOW </a>
        <h4 class="u-custom-font u-font-lato u-text u-text-default u-text-palette-2-base u-text-2"> "AVAILABLE, BURDEN, AND COMMITMEN​T"</h4>
      </div>
    </section>
    
    
    
  
  
</body></html>