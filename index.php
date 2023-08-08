<?php
include 'database.php';
$gambar_utama = mysqli_query($conn, "SELECT * FROM gambar_utama ");
$data = mysqli_fetch_array($gambar_utama);
$gambar_kedua = mysqli_query($conn, "SELECT * FROM gambar_kedua ");
$data2 = mysqli_fetch_array($gambar_kedua);
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<?php include 'head.php'; ?>
<body data-home-page="HOME.html" data-home-page-title="HOME" class="u-body u-overlap u-overlap-contrast u-xl-mode" data-lang="en">
  
  <header class="u-clearfix u-gradient u-header u-header" id="sec-8d2a"><div class="u-clearfix u-sheet u-sheet-1">
<?php include 'navbar.php'; ?>
        
       

</header>
    <section class="u-align-center u-clearfix u-image u-parallax u-shading u-section-1"  style="background-image: url('admin/images/<?= $data2['Nama_gambar2']?>');" id="sec-1a1f" data-image-width="3008" data-image-height="2000">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h4 class="u-custom-font u-font-merriweather u-text u-text-1">JUL - DES 2023</h4>
        <h3 class="u-custom-font u-font-merriweather u-text u-text-2">JURNAL <span style="font-weight: 700; font-style: italic;">CCR</span> SENTUL
        </h3>
        <h3 class="u-custom-font u-font-merriweather u-text u-text-3"> Exodus 7:16 Let My people go that they may serve Me</h3>
        <div class="u-border-3 u-border-palette-3-base u-expanded-width-xs u-line u-line-horizontal u-line-1"></div>
        <h3 class="u-custom-font u-font-merriweather u-text u-text-4"> Materials</h3>
        <a href="https://docs.google.com/spreadsheets/d/1a6lcz5G6xbUAURVpmbSxopvEogS2en3jKQhPGttpSS4/edit#gid=0" class="u-border-2 u-border-hover-white u-border-palette-3-base u-btn u-btn-round u-button-style u-hover-palette-3-base u-none u-radius-6 u-text-body-alt-color u-text-hover-white u-btn-1" data-animation-name="customAnimationIn" data-animation-duration="1000">BUKU GOW</a>
        <h3 class="u-custom-font u-font-merriweather u-text u-text-5"> "AVAILABLE, BURDEN, AND COMMITMEN​T"</h3>
      </div>
    </section>


    <style class="u-overlap-style">.u-overlap:not(.u-sticky-scroll) .u-header {
background-color: #4d4d4d !important; transparency: 10 !important
}</style>
    
    
  
  
</body></html>