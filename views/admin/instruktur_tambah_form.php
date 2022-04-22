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
              ?>
              <form action="<?=SERVER?>controller/admin/simpan_data_instruktur.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nama">Nama*</label>
                  <input class="form-control " type="text" name="nama" placeholder="Nama Instruktur" reqired/>
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="email">Email*</label>
                  <input class="form-control " type="email" name="email" placeholder="Email" required/>
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="telepon">Nomor Telepon*</label>
                  <input class="form-control " type="number" name="telepon" placeholder="08523456789" required />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="jabatan">Jabatan*</label>
                  <select name="jabatan" class="form-control " id="jabatan" required>>
                    <option value="">-PILIH-</option>
                    <option value="instruktur">Instruktur</option>
                    <option value="assitant">Assistant Instruktur</option>
                  </select>
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="diklat">Instruktur Diklat*</label>
                  <select name="diklat" class="form-control " id="jabatan" required>>
                    <option value="">-PILIH-</option>
                    <?php
                    $query = mysqli_query($koneksi, 'SELECT * FROM tb_diklat');
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <option value="<?=$data['id']?>"><?=$data['nama']?></option>
                  <?php }?>
                  </select>
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat*</label>
                  <input class="form-control " type="text" name="alamat" placeholder="Alamat" required />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="no_ktp">Nomor KTP*</label>
                  <input class="form-control " type="number" name="no_ktp" placeholder="Nomor KTP" required />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="no_npwp">Nomor NPWP*</label>
                  <input class="form-control " type="number" name="no_npwp" placeholder="Nomor NPWP" required />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="cv">CV*</label>
                  <textarea class="form-control" type="text" name="cv" placeholder="CV anda" required></textarea> 
                  <div class="invalid-feedback"> </div>
                </div>

                <div class="form-group">
                  <label for="ktp">File KTP</label>
                  <input class="form-control-file " type="file" name="ktp" />
                  <div class="invalid-feedback"> </div>
                </div>
                
                <div class="form-group">
                  <label for="npwp">File NPWP</label>
                  <input class="form-control-file " type="file" name="npwp" />
                  <div class="invalid-feedback"> </div>
                </div>
                                
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

