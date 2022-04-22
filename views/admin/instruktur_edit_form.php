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
    <li class="nav-item active">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-address-card"></i>
        <span>Instruktur</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Menu:</h6>
          <a class="collapse-item" href="<?=SERVER?>admin/instruktur/list">List Instruktur</a>
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
          <a class="collapse-item" href="<?=SERVER?>admin/user/list">List User</a>
          <a class="collapse-item" href="<?=SERVER?>admin/user/tambah">Tambah User</a>
        </div>
      </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Diklat
    </div>
    <li class="nav-item">
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
            <div class="card-header"> <a href="<?=SERVER?>admin/instruktur/list"><i class="fas fa-arrow-left"></i> Kembali</a> </div>
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
              $query = mysqli_query($koneksi, "SELECT tb_instruktur.id_diklat,tb_instruktur.nama, tb_diklat.nama as diklat, tb_instruktur.id, tb_instruktur.email, 
                  tb_instruktur.telepon, tb_instruktur.jabatan, tb_instruktur.no_ktp, tb_instruktur.file_ktp, tb_instruktur.no_npwp, tb_instruktur.file_npwp, tb_instruktur.cv,
                  tb_instruktur.alamat, tb_instruktur.foto 
                  FROM tb_instruktur LEFT JOIN tb_diklat on tb_instruktur.id_diklat=tb_diklat.id WHERE tb_instruktur.id='$id'");
              while ($data = mysqli_fetch_array($query)) {
              ?>
              <form action="<?=SERVER?>controller/admin/edit_instruktur.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?=$data['id']?>" />
                <div class="form-group">
                  <label for="nama">Nama Instruktur*</label>
                  <input class="form-control " type="text" name="nama" placeholder="Nama Instruktur" value="<?=$data['nama']?>" required="required" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="email">Email*</label>
                  <input class="form-control " type="email" name="email" placeholder="Email" value="<?=$data['email']?>" required="required" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="telepon">Nomor Telepon*</label>
                  <input class="form-control " type="number" name="telepon" placeholder="Nomor Telepon" value="<?=$data['telepon']?>" required="required" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="jabatan">Jabatan*</label>
                  <select name="jabatan" class="form-control " id="jabatan">
                    <option value="<?=$data['jabatan']?>"><?php echo $data['jabatan'] ?></option>
                    <option value="instruktur">Instruktur</option>
                    <option value="assistant">Asisten Instruktur</option>
                  </select>
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="diklat">Diklat*</label>
                  <select name="diklat" class="form-control " id="diklat">
                    <option value="<?=$data['id_diklat']?>" name="diklat"><?=$data['diklat']?></option>
                    <?php
                    $query = mysqli_query($koneksi, 'SELECT * FROM tb_diklat');
                    while ($data1 = mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?=$data1['id']?>"><?=$data1['nama']?></option>
                    <?php }?>
                  </select>
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="no_ktp">Nomor KTP*</label>
                  <input class="form-control " type="number" name="no_ktp" placeholder="Nomor KTP" value="<?=$data['no_ktp']?>" required="required" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="no_npwp">Nomor NPWP*</label>
                  <input class="form-control " type="number" name="no_npwp" placeholder="Nomor NPWP" value="<?=$data['no_npwp']?>" required="required" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat*</label>
                  <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Alamat"><?=$data['alamat']?>s</textarea>
                </div>
                <div class="form-group">
                  <label for="cv">CV*</label>
                  <textarea class="form-control" name="cv" id="cv" rows="3" placeholder="CV"><?=$data['cv']?></textarea>
                </div>
                <input type="hidden" name="old_npwp" value="<?=$data['file_npwp']?>" />
                <div class="form-group">
                  <label for="file_npwp">Foto NPWP*</label>
                  <input type="file" class="form-control-file" name="npwp" id="file_npwp" >
                </div>
                <input type="hidden" name="old_ktp" value="<?=$data['file_ktp']?>" />
                <div class="form-group">
                  <label for="file_ktp">Foto KTP*</label>
                  <input type="file" class="form-control-file" name="ktp" id="file_ktp" >
                </div>
                <input type="hidden" name="old_foto" value="<?=$data['foto']?>" />              
                <div class="form-group">
                  <label for="foto">Foto*</label>
                  <input type="file" class="form-control-file" name="foto" id="foto">
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

