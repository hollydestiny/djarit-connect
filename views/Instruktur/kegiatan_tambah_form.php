</html>
<!DOCTYPE html>
<html lang="en">

<?php include "_partials/head.php"?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include "_partials/sidebar.php"?>
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
              ?>
              <form action="<?=SERVER?>controller/admin/simpan_data_diklat.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="diklat">Nama Diklat*</label>
                  <input class="form-control " type="text" name="diklat" placeholder="Nama Diklat" required="required" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="angkatan">Angkatan*</label>
                  <input class="form-control " type="number" name="angkatan" placeholder="Angkatan Diklat" required="required" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="status">Status Diklat*</label>
                  <select name="status" class="form-control " id="status">
                    <option value="">-PILIH-</option>
                    <option value="0">Pendaftaran</option>
                    <option value="1">Mulai</option>
                    <option value="2">Selesai</option>
                  </select>
                  <div class="invalid-feedback"> </div>
                </div>
                <!-- <input type="hidden" name="status" value="0" />
                <input type="hidden" name="nilai" value="0" /> -->
                <div class="form-group">
                  <label for="mulai">Tgl Mulai Diklat</label>
                  <input class="form-control " type="date" name="mulai" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="selesai">Tgl Selesai Diklat</label>
                  <input class="form-control " type="date" name="selesai" />
                  <div class="invalid-feedback"> </div>
                </div>
                <input class="btn btn-success" type="submit" name="btn" value="Save" /> </form>
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

