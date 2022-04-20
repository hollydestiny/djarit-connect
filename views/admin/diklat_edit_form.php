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
    <li class="nav-item ">
      <a class="nav-link" href="<?=SERVER?>instruktur">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Identity
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-address-card"></i>
        <span>Instruktur</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Menu:</h6>
          <a class="collapse-item" href="buttons.html">List Instruktur</a>
          <a class="collapse-item" href="<?=SERVER?>admin/instruktur/tambah">Tambah Instruktur</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-user"></i>
        <span>User</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Menu:</h6>
          <a class="collapse-item" href="utilities-color.html">List User</a>
          <a class="collapse-item" href="utilities-border.html">Tambah User</a>
        </div>
      </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Diklat
    </div>
    <li class="nav-item active">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDiklat" aria-expanded="true" aria-controls="collapseDiklat">
        <i class="fas fa-fw fa-address-card"></i>
        <span>Jenis Diklat</span>
      </a>
      <div id="collapseDiklat" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Menu:</h6>
          <a class="collapse-item" href="<?=SERVER?>admin/diklat/list">List Diklat</a>
          <a class="collapse-item" href="<?=SERVER?>admin/diklat/tambah">Tambah Diklat</a>
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
            <div class="card-header"> <a href="<?=SERVER?>admin/diklat/list"><i class="fas fa-arrow-left"></i> Kembali</a> </div>
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
              $query = mysqli_query($koneksi, "SELECT * FROM tb_diklat WHERE id_diklat='$id'");
              while ($data = mysqli_fetch_array($query)) {
              ?>
              <form action="<?=SERVER?>controller/admin/edit_diklat.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$data['id_diklat']?>" />
                <div class="form-group">
                  <label for="diklat">Nama Diklat*</label>
                  <input class="form-control " type="text" name="diklat" placeholder="Nama Diklat" value="<?=$data['nama']?>" required="required" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="angkatan">Angkatan*</label>
                  <input class="form-control " type="number" name="angkatan" placeholder="Angkatan Diklat" value="<?=$data['angkatan']?>" required="required" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="status">Status Diklat*</label>
                  <select name="status" class="form-control " id="status">
                    <option value="<?=$data['status']?>"><?php if($data['status']==0){echo "Pendaftaran";}else if($data['status']==1){echo "Mulai";}else if($data['status']==2){echo "Selesai";} ?></option>
                    <option value="0">Pendaftaran</option>
                    <option value="1">Mulai</option>
                    <option value="2">Selesai</option>
                  </select>
                  <div class="invalid-feedback"> </div>
                </div>
                <input type="hidden" name="jumlah_peserta" value="<?=$data['jumlah_peserta']?>" />
                <div class="form-group">
                  <label for="mulai">Tgl Mulai Diklat</label>
                  <input class="form-control " type="date" value="<?=$data['tgl_mulai']?>" name="mulai" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="selesai">Tgl Selesai Diklat</label>
                  <input class="form-control " type="date" value="<?=$data['tgl_selesai']?>" name="selesai" />
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

