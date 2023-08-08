<?php
include 'database.php';
$link = mysqli_query($conn, "SELECT * FROM link_ccr ");
$gambar_kedua = mysqli_query($conn, "SELECT * FROM gambar_kedua ");
$data2 = mysqli_fetch_array($gambar_kedua);
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="CCR SENTUL​">
    <meta name="description" content="">
    <title>LINK JURNAL</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="LINK-JURNAL.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.14.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="LINK JURNAL">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-gradient u-header u-header" id="sec-8d2a"><div class="u-clearfix u-sheet u-sheet-1">
  <?php include 'navbar.php'; ?>

</header>
    <section class="u-clearfix u-image u-shading u-section-1" style="background-image: url('admin/images/<?= $data2['Nama_gambar2']?>');" id="sec-9e91" data-image-width="3888" data-image-height="2592">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">

          <?php
while ($data = mysqli_fetch_array($link)){ ?>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                <a href="<?= $data['link']?>" class="u-border-2 u-border-palette-3-base u-btn u-button-style u-hover-palette-3-base u-none u-text-body-alt-color u-text-hover-black u-btn-2" data-animation-name="customAnimationIn" data-animation-duration="1000"><?= $data['nama_btn']?></a>
              </div>
            </div>

            
     <?php     }
          ?>

          </div>
        </div>
      </div>
    </section>
    
    
   
  
</body></html>