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
                      $query = mysqli_query($koneksi, "SELECT * FROM tb_instruktur WHERE id='$id'");
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
                  <?php
                  $id = $data['id'];
                  $query = mysqli_query($koneksi, 
                  "SELECT 
                    tb_diklat.nama
                  FROM tb_diklat
                  LEFT JOIN tb_instruktur ON tb_diklat.id=tb_instruktur.id_diklat
                  WHERE tb_instruktur.id='$id'");
                  while ($data1 = mysqli_fetch_array($query)) {
                  ?>
                  <input class="form-control " type="text" value="<?=$data1['nama']?>" readonly />
                  <?php }  ?>
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
          <div class="card mb-3">
            <div class="card-header"> <i class="fas fa-exclamation-triangle"></i> Cacatan Developer</div>
            <div class="card-body">
              <p><b>tb_kegiatan</b> berelasi dengan <b>tb_instruktur</b>, <b>tb_kegiatan</b> merupakan bagian dari <b>tb_instruktur</b> dimana <b>tb_instruktur</b>('one') dan
                <b>tb_kegiatan</b> ('many')
              </p>
              <p><b>tb_kegiatan.id_instruktur</b> mertupakan <b>Foreign Key</b> dari <b>tb_instruktur.id</b> (reference key) denan option <b>CASCADE</b></p>

              <p>Dalam Foreign Key Options tersebut ada 4 pilihan pengaturan antara lain: </p>
              <p><b>RESCRICT</b> adalah jika kita menghapus atau merubah baris data dalam tabel A maka tidak akan diperbolehkan jika pada tabel B masih ditemukan relasi datanya. InnoDB dapat menolak perintah perubahan atau penghapusan tersebut.</p>
              <p><b>CASCADE</b> adalah jika kita menghapus atau merubah baris data dalam tabel A secara otomatis akan menghapus atau merubah baris yang sesuai dalam tabel B.</p>
              <p><b>SET NULL</b> adalah jika kita menghapus atau merubah baris data dalam tabel A secara otomatis akan merubah baris pada tabel B menjadi NULL pada kolom yang terelasi. Hal ini dapat dilakukan jika kolom foreign key tidak memiliki pengaturan NOT NULL.</p>
              <p><b>NO ACTION</b> dalam standar SQL, NO ACTION berarti tidak merubah apapun pada tabel anak jika kita merubah data pada salah satu tabelnya.</p>

              <p><b>CASE</b> : apabila data instrukur dihapus semua data kegiatan yang terkait juga akan terhapus</p>

              <p><b>PENTING</b> : intruktur/user yang login hanya dapat menulis/mengisi tabel kegiatan <b>HANYA</b> pada diklat yang terkait dengan instruktur</p>

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
