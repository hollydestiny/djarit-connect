<!DOCTYPE html>
<html lang="en">

<?php include "../../config/config.php"?>
<?php include "../../config/koneksi.php"?>

<?php include "_partials/head.php"?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=SERVER?>instruktur">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">DJarit <sup>admin</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="<?=SERVER?>instruktur">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Log
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-list"></i>
        <span>Kegiatan Diklat</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Menu:</h6>
          <a class="collapse-item" href="<?=SERVER?>instruktur/kegiatan/list">List Log Kegiatan</a>
          <a class="collapse-item" href="<?=SERVER?>instruktur/kegiatan/tambah">Tambah Log Kegiatan</a>
        </div>
      </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include "_partials/topbar.php"?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card mb-3">
            <div class="card-header"> <a href="<?=SERVER?>instruktur/kegiatan/list"><i class="fas fa-arrow-left"></i> Kembali</a> </div>
            <div class="card-body">
              <?php 
              if(isset($_GET['feedback'])){
              $status = $_GET['feedback'];
              if($status == 1){
                  echo "<div class='alert alert-success' role='alert'>Berhasil Disimpan</div>";
               }else if($status == 2){
                  echo "<div class='alert alert-danger' role='alert'>Gagal Disimpan</div>";
               }
              }
              if(isset($_GET['data'])){
              $id = $_GET['data'];
              $query = mysqli_query($koneksi, "SELECT * FROM tb_kegiatan WHERE id='$id'");
              while ($data = mysqli_fetch_array($query)) {
              ?>
              <form action="<?=SERVER?>controller/instruktur/edit_kegiatan.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$data['id']?>" />
                <div class="form-group">
                  <label for="diklat">Diklat*</label>
                  <input class="form-control " type="text" id="diklat" name="diklat" placeholder="Diklat" value="<?= $data['diklat']?>" readonly />
                  <div class="invalid-feedback"> </div>
                </div>
                <input type="hidden" id="instruktur" name="instruktur" value="<?= $data['id_instruktur']?>" />
                <input type="hidden" name="tanggal" value="<?=$data['tanggal']?>" />
                <div class="form-group">
                  <label for="kegiatan">Kegiatan*</label>
                  <textarea class="form-control " type="text" id="kegiatan" name="kegiatan" placeholder="Kegiatan Diklat" required="required" /><?= $data['kegiatan']?></textarea>
                  <div class="invalid-feedback"> </div>
                </div>
                <input class="btn btn-success" type="submit" name="btn" value="Save" /> 
              </form>
              <?php }} ?>
            </div>
            <div class="card-footer small text-muted"> * Wajib diisi </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include "_partials/footer.php"?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php include "_partials/modal.php"?>

  <?php include "_partials/js.php"?>

</body>

</html>

