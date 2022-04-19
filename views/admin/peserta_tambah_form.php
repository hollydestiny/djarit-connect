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
            <div class="card-header"> <a href="<?=SERVER?>admin/peserta/list"><i class="fas fa-arrow-left"></i> Kembali</a> </div>
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
              <form action="<?=SERVER?>controller/admin/simpan_data_peserta.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="diklat">Diklat*</label>
                  <select name="diklat" id="diklat" class="form-control">
                    <option disabled selected>-Pilih-</option>
                    <?php 
                        $query = mysqli_query($koneksi, 'SELECT * FROM tb_diklat');
                        while ($data = mysqli_fetch_array($query)) {                          
                    ?>
                    <option value="<?=$data['id_diklat']?>"><?=$data['nama']?></option> 
                    
                    <?php
                      }
                    ?>
                  </select>
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="peserta">Nama Peserta*</label>
                  <input class="form-control " type="text" name="peserta" placeholder="Nama Peserta" required="required" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="email">Email*</label>
                  <input class="form-control " type="text" name="email" placeholder="Email" required="required" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="tlp">Nomor Telepon*</label>
                  <input class="form-control " type="text" name="tlp" placeholder="Nomor Telepon" required="required" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat*</label>
                  <input class="form-control " type="text" name="alamat" placeholder="Alamat" required="required" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="prov">Provinsi*</label>
                  <input class="form-control " type="text" name="prov" placeholder="Provinsi" required="required" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="kota">Kota*</label>
                  <input class="form-control " type="text" name="kota" placeholder="Kabupaten/Kota" required="required" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="kecamatan">Kecamatan*</label>
                  <input class="form-control " type="text" name="kecamatan" placeholder="Kecamatan" required="required" />
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="agama">Agama*</label>
                  <select name="agama" class="form-control " id="agama">
                    <option value="">-PILIH-</option>
                    <option value="0">Islam</option>
                    <option value="1">Protestan</option>
                    <option value="2">Katolik</option>
                    <option value="3">Buddha</option>
                    <option value="4">Hindu</option>
                  </select>
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="pendidikan">Pendidikan*</label>
                  <select name="agama" class="form-control " id="agama">
                    <option value="">-PILIH-</option>
                    <option value="0">S3</option>
                    <option value="1">S2</option>
                    <option value="2">S1</option>
                    <option value="3">D4</option>
                    <option value="4">D3</option>
                    <option value="5">D2</option>
                    <option value="6">D1</option>
                    <option value="7">SMA/Sederajat</option>
                    <option value="8">SMP/Sederajat</option>
                    <option value="9">SD/Sederajat</option>
                  </select>
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group">
                  <label for="status">Status*</label>
                  <select name="status" class="form-control " id="status">
                    <option value="">-PILIH-</option>
                    <option value="0">Diterima</option>
                    <option value="1">Ditolak</option>
                  </select>
                  <div class="invalid-feedback"> </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 form-group contact-forms mb-12">
                    <label>Foto*</label>
                    <input type="file" name="foto" class="form-control" required="" autocomplete="">
                </div>
                <!-- <input type="hidden" name="status" value="0" />
                <input type="hidden" name="nilai" value="0" /> -->
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

