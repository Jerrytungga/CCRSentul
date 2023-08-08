<?php
include 'database.php';
$gambar_kedua = mysqli_query($conn, "SELECT * FROM gambar_kedua ");
$data2 = mysqli_fetch_array($gambar_kedua);
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="CCR SENTUL​">
    <meta name="description" content="">
    <title>DAFTAR DOMBA</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="DAFTAR-DOMBA.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.14.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="DAFTAR DOMBA">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-gradient u-header u-header" id="sec-8d2a"><div class="u-clearfix u-sheet u-sheet-1">
  <?php include 'navbar.php'; ?>  

</header>
    <section class="u-clearfix u-image u-shading u-section-1"  style="background-image: url('admin/images/<?= $data2['Nama_gambar2']?>');" id="sec-5bb8" data-image-width="3888" data-image-height="2592">
      <div class="u-clearfix u-sheet u-sheet-1">
        <blockquote class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-white u-text-1">Gembalakanlah kawanan domba Allah yang ada padamu, jangan dengan paksa, tetapi dengan sukarela sesuai dengan kehendak Allah, dan jangan karena mau mencari keuntungan, tetapi dengan pengabdian diri. Janganlah kamu berbuat seolah-olah kamu mau memerintah atas mereka yang dipercayakan kepadamu, tetapi hendaklah kamu menjadi teladan bagi kawanan domba itu.<br>
          <br> 1 Petrus 5:2-3&nbsp;TB<br>
        </blockquote>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSdpYzzp8yybq1gJvNlJfADSjqvyzcmk9yS5BS5STwEjs6Q_gA/viewform?pli=1" class="u-btn u-btn-round u-button-style u-color-scheme-summer-time u-palette-3-base u-radius-50 u-btn-1" data-animation-name="customAnimationIn" data-animation-duration="1000">Link Daftar Domba</a>
      </div>
    </section>
</body></html>