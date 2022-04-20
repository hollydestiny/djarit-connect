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
            <div class="card-body">
                    <?php
                      $id = $_SESSION['id'];
                      $query = mysqli_query($koneksi, "SELECT * FROM tb_instruktur WHERE id_instruktur='$id'");
                      $data = mysqli_fetch_assoc($query);
                    ?>
              <form action="<?=SERVER?>controller/admin/simpan_data_diklat.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="diklat">Nama</label>
                  <input class="form-control " type="text" name="diklat" value="<?=$data['nama']?>" readonly/>
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="angkatan">Email</label>
                  <input class="form-control " type="text" value="<?=$data['email']?>" readonly />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="angkatan">Telepon</label>
                  <input class="form-control " type="text" value="<?=$data['telepon']?>" readonly />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="angkatan">Jabatan</label>
                  <input class="form-control " type="text" value="<?=$data['jabatan']?>" readonly />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="angkatan">Instruktur Diklat</label>
                  <input class="form-control " type="text" value="<?=$data['diklat']?>" readonly />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="angkatan">Alamat</label>
                  <input class="form-control " type="text" value="<?=$data['alamat']?>" readonly />
                  <div class="invalid-feedback"> </div>
                </div>
              </form>
            </div>
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
