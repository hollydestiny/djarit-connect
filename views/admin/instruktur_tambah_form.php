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
                  <label for="id">Nama*</label>
                  <input class="form-control " type="text" name="nama" placeholder="Nama" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="nama">Email*</label>
                  <input class="form-control " type="Email" name="email" placeholder="Email" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="nama">Jabatan*</label>
                  <select name="jabatan" class="form-control " id="jabatan">
                    <option value="">-PILIH-</option>
                    <option value="613720ffd17d3">Instruktur</option>
                    <option value="6137227164874">Asisten Instruktur</option>
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="nama">Materi 1*</label>
                  <input class="form-control " type="text" name="materi 1" placeholder="Materi 1" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="nama">Materi 2*</label>
                  <input class="form-control " type="text" name="materi 2" placeholder="Materi 2" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="nama">Nomor KTP*</label>
                  <input class="form-control " type="text" name="no_ktp" placeholder="Nomor KTP" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="foto">File KTP</label>
                  <input class="form-control-file " type="file" name="file_ktp" />
                  <div class="invalid-feedback"> </div>
                </div>
                <input class="btn btn-success" type="submit" name="btn" value="Save" />
                <div class="form-group">
                  <label for="nama">Nomor NPWP*</label>
                  <input class="form-control " type="text" name="no_npwp" placeholder="Nomor NPWP" />
                  <div class="invalid-feedback"> </div>
                <div/>
                <div class="form-group">
                  <label for="foto">File NPWP</label>
                  <input class="form-control-file " type="file" name="file_npwp" />
                  <div class="invalid-feedback"> </div>
                </div>
                <input class="btn btn-success" type="submit" name="btn" value="Save" />
                <div class="form-group">
                  <label for="nama">CV*</label>
                  <input class="form-control " type="text" name="cv" placeholder="CV" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="nama">Alamat*</label>
                  <input class="form-control " type="text" name="alamat" placeholder="Alamat" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="nama">Portofolio 1*</label>
                  <input class="form-control " type="text" name="portofolio 1" placeholder="Portofolio 1" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="nama">Portofolio 2*</label>
                  <input class="form-control " type="text" name="portofolio 2" placeholder="Portofolio 2" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="foto">Foto</label>
                  <input class="form-control-file " type="file" name="foto" />
                  <div class="invalid-feedback"> </div>
                </div>
                <input class="btn btn-success" type="submit" name="btn" value="Save" />
                <!-- <input type="hidden" name="status" value="0" />
                                      <input type="hidden" name="nilai" value="0" /> -->
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

