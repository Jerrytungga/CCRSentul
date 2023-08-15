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


if (isset($_POST['simpan_link'])) {
  $nama_btn = $_POST['nm_btn'];
  $nama_link = $_POST['link'];
  $tampilkan_data_gbr2 = mysqli_query ($conn,"INSERT INTO `link_ccr`(`nama_btn`, `link`) VALUES ('$nama_btn','$nama_link')");
     
 }
 
 
 if (isset($_POST['hapus'])) {
  $hapus = $_POST['hapus'];
  $hapus_data_ = mysqli_query ($conn,"DELETE FROM `link_ccr` WHERE id='$hapus'");
     
 }
 



if (isset($_POST['updatesemester'])) {
  $id__ = $_POST['id'];
  $smst = $_POST['_semester'];
  $update_semester = mysqli_query ($conn,"UPDATE `periode` SET `semester`='$smst' WHERE `id`='$id__'");
     
 }
if (isset($_POST['updateayat'])) {
  $id_A = $_POST['id_'];
  $ayat_alkitab = $_POST['ayat_'];
  $hapus_data_ = mysqli_query ($conn,"UPDATE `ayat_alkitab` SET `ayat`='$ayat_alkitab' WHERE `id`='$id_A'");
     
 }

 $gambar_kedua = mysqli_query($conn, "SELECT * FROM gambar_kedua ");
$data2 = mysqli_fetch_array($gambar_kedua);

$periode = mysqli_query($conn, "SELECT * FROM `periode`");
$periode_ = mysqli_fetch_array($periode);
$bible = mysqli_query($conn, "SELECT * FROM `ayat_alkitab`");
$ayat = mysqli_fetch_array($bible);
$link_ccr = mysqli_query($conn, "SELECT * FROM link_ccr ");
$data_link_ccr = mysqli_fetch_array($link_ccr);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    
    </ul>
  </nav>
  <!-- /.navbar -->

<?php
include 'sidebar.php';
?>





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Periode</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Periode</a></li>
              <!-- <li class="breadcrumb-item active">DataTables</li> -->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Periode Semester</h5>
        <p class="card-text text-bg-success"><?= $periode_['semester'] ?></p>
        <form action="" method="post">
          <input type="text" name="_semester" VALUE="<?= $periode_['semester'] ?>">
          <input type="hidden" name="id" VALUE="<?= $periode_['id'] ?>">
              <button name="updatesemester" type="submit" class="btn btn-warning">Update</button>
        </form>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Ayat Alkitab</h5>
        <p class="card-text text-bg-success"><?= $ayat['ayat'] ?></p>
        <form action="" method="post">
          <input type="text" class="col-7" name="ayat_" VALUE="<?= $ayat['ayat'] ?>">
          <input type="hidden" name="id_" VALUE="<?= $ayat['id'] ?>">
              <button name="updateayat" type="submit" class="btn btn-warning">Update</button>
        </form>
      </div>
    </div>
  </div>
  
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
       
        <img class="m-4" src="images/<?= $data2["Nama_gambar2"]; ?>" alt="..."  width="100px" height="100px">
        <form action="" method="post" enctype="multipart/form-data">
       <?php
        if($data2['Nama_gambar2'] == 0){ ?>
          <input type="file" required name="gbr2" >
          <button type="submit" name="simpan2">Simpan</button>
          <?php  } else { ?>
          <input type="file" required name="ganti_gbr2">
          <input type="hidden" name="idgbr2" value="<?= $data2["id"]; ?>"> <br><br>
          <button type="submit" name="update2"  style="background:yellow;">Ganti gambar</button>
          <?php  } ?> </form>
      </div>
    </div>
  </div>
  

</div>
           
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
      
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable</h3> <br>
                <form action="" method="post">
                  <input type="text" name="nm_btn"  class="col-4"  placeholder="Nama Hall">
                  <input type="text" name="link"  class="col-5"  placeholder="Link Perluasan">
                  <button type="submit" name="simpan_link">Simpan</button>

                </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Hall</th>
                    <th>Nama Link</th>
                    <th>Tindakan</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                    <?php foreach ($link_ccr as $row) : ?>
                  <tr>
                    <td><?= $i?></td>
                    <td><?= $row['nama_btn']?>
                    </td>
                    <td><a href="<?= $row['link']?>"><?= $row['link']?></a></td>
                    <td>  <form action="" method="post">
                          <button type="submit" value="<?= $row['id']?>" name="hapus">Hapus</button>
                         </form></td>
                  </tr>
                   
                  <?php $i++; ?>
                    <?php endforeach; ?>
                  </tbody>
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>



  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
   
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
