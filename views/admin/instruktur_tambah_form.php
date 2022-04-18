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
            <div class="card-header"> <a href="https://sip-pkl.monlab.site/index.php/admin/siswa/"><i class="fas fa-arrow-left"></i> Kembali</a> </div>
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="id">NIS*</label>
                  <input class="form-control " type="number" name="id" placeholder="Nomor Induk Siswa" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="nama">Nama*</label>
                  <input class="form-control " type="text" name="nama" placeholder="Nama Siswa" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="jurusan">Jurusan*</label>
                  <select name="jurusan" class="form-control " id="jurusan">
                    <option value="">-PILIH-</option>
                    <option value="613720ffd17d3">Terknik Kendaraan Ringan</option>
                    <option value="6137227164874">Teknik Sepeda Motor</option>
                    <option value="6139dc1666e67">Teknik Multimedia</option>
                    <option value="613f3b6c63986">Teknik Konstruksi Gedung </option>
                    <option value="62349135108d5">Teknik Gambar Sipil Arsitektur</option>
                    <option value="6234914f4aab1">Teknik Audio Video</option>
                    <option value="623491761db4e">Teknik Instalasi Tenaga Listrik</option>
                    <option value="6234918d39230">Teknik Las dan Fabrikasi Logam</option>
                    <option value="623491a39f3b1">Teknik Pemesinan</option>
                  </select>
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="kelas">Kelas*</label>
                  <select name="kelas" class="form-control " id="kelas">
                    <option value="">-PILIH-</option>
                  </select>
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="tlp">Telepon</label>
                  <input class="form-control " type="number" name="tlp" placeholder="Nomor Telepon" />
                  <div class="invalid-feedback"> </div>
                </div>
                <!-- <input type="hidden" name="status" value="0" />
                                      <input type="hidden" name="nilai" value="0" /> -->
                <div class="form-group">
                  <label for="foto">Foto</label>
                  <input class="form-control-file " type="file" name="foto" />
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

