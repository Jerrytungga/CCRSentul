<?php
include '../database.php';
session_start();
if (!isset($_SESSION['id'])) {
  echo "<script type='text/javascript'>
  alert('Anda harus login terlebih dahulu!');
  window.location = '../login/index.php'
</script>";
} else {
  $id = $_SESSION['id'];
  $get_data = mysqli_query($conn, "SELECT * FROM admin WHERE id='$id'");
  $data = mysqli_fetch_array($get_data);
}

if (isset($_POST['simpan'])) {
  $sumber = $_FILES['gambarutama']['tmp_name'];
  $target = 'images/';
  $nama_gambar = $_FILES['gambarutama']['name'];
if ($nama_gambar != '') {
  if (move_uploaded_file($sumber, $target . $nama_gambar)) {
     $tampilkan_data = mysqli_query ($conn,"INSERT INTO `gambar_utama`(`nama_gambar`) VALUES ('$nama_gambar')");
    
     
  }
}

}
if (isset($_POST['simpan2'])) {
  $sumber = $_FILES['gbr2']['tmp_name'];
  $target = 'images/';
  $nama_gambar_kedua = $_FILES['gbr2']['name'];
if ($nama_gambar_kedua != '') {
  if (move_uploaded_file($sumber, $target . $nama_gambar_kedua)) {
     $tampilkan_data_gbr2 = mysqli_query ($conn,"INSERT INTO `gambar_kedua`(`Nama_gambar2`) VALUES ('$nama_gambar_kedua')");
    
     
  }
}
}

if (isset($_POST['simpan_link'])) {
 $nama_btn = $_POST['nm_btn'];
 $nama_link = $_POST['link'];
 $tampilkan_data_gbr2 = mysqli_query ($conn,"INSERT INTO `link_ccr`(`nama_btn`, `link`) VALUES ('$nama_btn','$nama_link')");
    
}



if (isset($_POST['update'])) {
  $sumber = $_FILES['gantigbrutma']['tmp_name'];
  $target = 'images/';
  $nama_gambar1 = $_FILES['gantigbrutma']['name'];
  $id_gbr_utama = $_POST['idgbrutma'];
if ($nama_gambar1 != '') {
  if (move_uploaded_file($sumber, $target . $nama_gambar1)) {
     $tampilkan_data = mysqli_query ($conn,"UPDATE `gambar_utama` SET `nama_gambar`='$nama_gambar1' WHERE `id`='$id_gbr_utama'");
    
     
  }
}
}


if (isset($_POST['update2'])) {
  $sumber = $_FILES['ganti_gbr2']['tmp_name'];
  $target = 'images/';
  $nama_gambar_2 = $_FILES['ganti_gbr2']['name'];
  $id_gbr_kedua = $_POST['idgbr2'];
if ($nama_gambar_2 != '') {
  if (move_uploaded_file($sumber, $target . $nama_gambar_2)) {
     $tampilkan_data_2 = mysqli_query ($conn,"UPDATE `gambar_kedua` SET `Nama_gambar2`='$nama_gambar_2' WHERE `id`='$id_gbr_kedua'");
    
     
  }
}
}
$gambar_utama = mysqli_query($conn, "SELECT * FROM gambar_utama ");
$data = mysqli_fetch_array($gambar_utama);
$gambar_kedua = mysqli_query($conn, "SELECT * FROM gambar_kedua ");
$data2 = mysqli_fetch_array($gambar_kedua);
$link_ccr = mysqli_query($conn, "SELECT * FROM link_ccr ");
$data_link_ccr = mysqli_fetch_array($link_ccr);
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="CCR SENTUL​, PERLUASAN CCR, Materials">
    <meta name="description" content="">
    <title>ADMINISTRATOR</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
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
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-overlap u-overlap-contrast u-overlap-transparent u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-image u-shading u-header" id="sec-8d2a" data-image-width="3840" data-image-height="2160"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="../keluar.php" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">Keluar</a>
        <h1 class="u-text u-text-body-alt-color u-text-1">CCR SENTUL </h1>
      </div><style class="u-sticky-style" data-style-id="e19e">.u-sticky-fixed.u-sticky-e19e, .u-body.u-sticky-fixed .u-sticky-e19e {
box-shadow: 5px 5px 20px 0 rgba(0,0,0,0.4) !important
}.u-sticky-fixed.u-sticky-e19e:before, .u-body.u-sticky-fixed .u-sticky-e19e:before {
borders: top right bottom left !important
}</style></header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-1a1f">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-tab-links-align-left u-tabs u-tabs-1">
          <ul class="u-border-2 u-border-palette-1-base u-spacing-10 u-tab-list u-unstyled" role="tablist">
            <li class="u-tab-item" role="presentation">
              <a class="active u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="true">Ganti Backgroud</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-2" id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7" aria-selected="false">Link Jurnal CCR</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-3" id="link-tab-2917" href="#tab-2917" role="tab" aria-controls="tab-2917" aria-selected="false">Jurnal Fieltrip</a>
            </li>
            <li class="u-tab-item u-tab-item-4" role="presentation">
              <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-4" id="tab-93fc" href="#link-tab-93fc" role="tab" aria-controls="link-tab-93fc" aria-selected="false">Bahan Injil dan Rawat</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-5" id="link-tab-1369" href="#tab-1369" role="tab" aria-controls="tab-1369" aria-selected="false">Tampilan Halaman Depan</a>
            </li>
          </ul>



          <div class="u-tab-content">
            <div class="u-container-style u-tab-active u-tab-pane u-white u-tab-pane-1" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
              <div class="u-container-layout u-container-layout-1">
                <!-- <a href="https://nicepage.com/html-templates" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-1">Button</a> -->
                <h4 class="u-text u-text-default u-text-1">Ganti Backgroud</h4>
                <img src="images/<?= $data["nama_gambar"]; ?>"  class="img-thumbnail" alt="Cinque Terre" width="100px" height="100px">
                <div class="u-expanded-width u-table u-table-responsive u-table-1">
                  <form action="" method="post" enctype="multipart/form-data">
                    <div>
                      <h4 style="color:red;">Gambar Utama Website</h4><br>
                      <?php
                      if($data['nama_gambar'] == 0){ ?>
                        <input type="file" required name="gambarutama" class="form-control">
                        <button type="submit" name="simpan">Simpan</button>
                        <?php  } else { ?>
                          <input type="file" required name="gantigbrutma" class="form-control">
                          <input type="hidden" name="idgbrutma" value="<?= $data["id"]; ?>">
                          <button type="submit" name="update"  style="background:yellow;">Ganti gambar utama</button>
                    <?php  } ?>
                    </div>
                  </form>
                  <form action="" method="post" enctype="multipart/form-data">
                    <div>
                      <br>
                    <img src="images/<?= $data2["Nama_gambar2"]; ?>"  class="img-thumbnail" alt="Cinque Terre" width="100px" height="100px">
                      <h4 style="color:red;">Gambar Kedua Website</h4><br>
                      <?php
                      if($data2['Nama_gambar2'] == 0){ ?>
                        <input type="file" required name="gbr2" class="form-control">
                        <button type="submit" name="simpan2">Simpan</button>
                        <?php  } else { ?>
                          <input type="file" required name="ganti_gbr2" class="form-control">
                          <input type="hidden" name="idgbr2" value="<?= $data2["id"]; ?>">
                          <button type="submit" name="update2"  style="background:yellow;">Ganti gambar Kedua</button>
                    <?php  } ?>
                  </div>
                </form>















                </div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-tab-pane u-white u-tab-pane-2" id="tab-14b7" role="tabpanel" aria-labelledby="link-tab-14b7">
              <div class="u-container-layout u-valign-top u-container-layout-2">

              <div>
                <form action="" method="post">
                  <input type="text" name="nm_btn"  width="25%">
                  <input type="text" name="link" class="col-4">
                  <button type="submit" name="simpan_link">Simpan</button>

                </form>
              </div>

              <table class="u-table-entity">
                    <colgroup>
                      <col width="25%">
                      <col width="25%">
                      <col width="25%">
                      <col width="25%">
                    </colgroup>
                    <thead class="u-palette-4-base u-table-header u-table-header-2">
                      <tr style="height: 21px;">
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">No </th>
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">Nama Hall </th>
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">LINK</th>
                      </tr>
                    </thead>
                    <tbody class="u-table-body">
                    <?php $i = 1; ?>
                    <?php foreach ($link_ccr as $row) : ?>
                      <tr style="height: 75px;">
                        <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-25"><?= $i?></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell"><?= $row['nama_btn']?></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell"><a href="<?= $row['link']?>"><?= $row['link']?></a></td>
                      
                      </tr>
                    
                      <?php $i++; ?>
                    <?php endforeach; ?>
                    </tbody>
                  </table>







              </div>
            </div>
            <div class="u-container-style u-tab-pane u-white u-tab-pane-3" id="tab-2917" role="tabpanel" aria-labelledby="link-tab-2917">
              <div class="u-container-layout u-container-layout-3">
                <h4 class="u-text u-text-default u-text-3">Be The First To Review This Product!</h4>
                <p class="u-text u-text-default u-text-4">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="" class="u-btn u-button-style u-btn-2">write product review</a>
              </div>
            </div>
            <div class="u-container-style u-tab-pane u-white u-tab-pane-4" id="link-tab-93fc" role="tabpanel" aria-labelledby="tab-93fc">
              <div class="u-container-layout u-container-layout-4">
                <div class="u-expanded-width u-table u-table-responsive u-table-2">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="25%">
                      <col width="25%">
                      <col width="25%">
                      <col width="25%">
                    </colgroup>
                    <thead class="u-palette-4-base u-table-header u-table-header-2">
                      <tr style="height: 21px;">
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">Column 1 </th>
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">Column 2 </th>
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">Column 3 </th>
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">Column 4 </th>
                      </tr>
                    </thead>
                    <tbody class="u-table-body">
                      <tr style="height: 75px;">
                        <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-25">Row 1</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
                      </tr>
                      <tr style="height: 76px;">
                        <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-29">Row 2</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
                      </tr>
                      <tr style="height: 76px;">
                        <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-33">Row 3</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
                      </tr>
                      <tr style="height: 76px;">
                        <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-37">Row 4</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">Description</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="u-container-style u-tab-pane u-white u-tab-pane-5" id="tab-1369" role="tabpanel" aria-labelledby="link-tab-1369">
              <div class="u-container-layout u-container-layout-5">
                <div class="u-expanded-width u-table u-table-responsive u-table-3">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="25%">
                      <col width="25%">
                      <col width="25%">
                      <col width="25%">
                    </colgroup>
                    <thead class="u-grey-50 u-table-header u-table-header-3">
                      <tr style="height: 46px;">
                        <th class="u-border-1 u-border-grey-50 u-table-cell">Column 1 </th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">Column 2 </th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">Column 3 </th>
                        <th class="u-border-1 u-border-grey-50 u-table-cell">Column 4 </th>
                      </tr>
                    </thead>
                    <tbody class="u-table-body">
                      <tr style="height: 71px;">
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">Row 1</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">Description</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">Description</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">Description</td>
                      </tr>
                      <tr style="height: 72px;">
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">Row 2</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">Description</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">Description</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">Description</td>
                      </tr>
                      <tr style="height: 72px;">
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">Row 3</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">Description</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">Description</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">Description</td>
                      </tr>
                      <tr style="height: 72px;">
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">Row 4</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">Description</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">Description</td>
                        <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">Description</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <style class="u-overlap-style">.u-overlap:not(.u-sticky-scroll) .u-header {
background-color: #4d4d4d !important; transparency: 10 !important
}</style>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-e0f9"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the Text Element.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  
</body></html>