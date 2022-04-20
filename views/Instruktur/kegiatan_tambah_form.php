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
              ?>
              <form action="<?=SERVER?>controller/instruktur/simpan_data_kegiatan.php" method="post" enctype="multipart/form-data">
                  <?php
                      $id = $_SESSION['id'];
                      $query = mysqli_query($koneksi, 
                      "SELECT 
                        tb_diklat.nama,
                        tb_diklat.id_diklat,
                        tb_instruktur.nama AS instruktur
                      FROM tb_diklat
                      LEFT JOIN tb_instruktur ON tb_diklat.id_diklat=tb_instruktur.diklat
                      WHERE tb_instruktur.id_instruktur='$id'");
                      while ($data = mysqli_fetch_array($query)) {
                      ?>
                      <div class="form-group">
                        <label for="diklat">Diklat</label>
                        <input class="form-control " type="text" id="diklat" name="diklat" placeholder="Diklat" value="<?= $data['nama']?>" readonly />
                        <div class="invalid-feedback"> </div>
                      </div>
                     <?php }?>

                <div class="form-group">
                  <label for="kegiatan">Kegiatan*</label>
                  <textarea class="form-control " type="text" name="kegiatan" placeholder="Kegiatan Diklat" required="required" /></textarea>
                  <div class="invalid-feedback"> </div>
                </div>
                <input type="hidden" name="instruktur" value="<?=$_SESSION['id']?>" />
                <!-- <input type="hidden" name="status" value="0" />
                <input type="hidden" name="nilai" value="0" /> -->
                <!-- <div class="form-group">
                  <label for="selesai">Tgl Selesai Diklat</label>
                  <input class="form-control " type="date" name="selesai" />
                  <div class="invalid-feedback"> </div>
                </div> -->
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

