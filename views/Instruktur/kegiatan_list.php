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
           <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Tabel Kegiatan</h6>
            </div>
            <div class="card-body">
              <?php 
              if(isset($_GET['feedback'])){
              $status = $_GET['feedback'];
              if($status == 1){
                  echo "<div class='alert alert-success' role='alert'>Berhasil Dihapus</div>";
               }else if($status == 2){
                  echo "<div class='alert alert-danger' role='alert'>Gagal Dihapus</div>";
               }
              }
              ?>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="50px">No</th>
                      <th>Nama Diklat</th>
                      <!-- <th>Instruktur</th> -->
                      <th width="600px">Kegiatan</th>
                      <th>Tanggal</th>
                      <th width="250px">Aksi</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php
                    $id=$_SESSION['id'];
                    $no = 1;
                    // $query = mysqli_query($koneksi, 'SELECT * FROM tb_kegiatan');
                    $query = mysqli_query($koneksi, 
                      "SELECT 
                        tb_kegiatan.id,
                        tb_kegiatan.diklat AS diklat,
                        tb_kegiatan.kegiatan AS kegiatan,
                        tb_kegiatan.tanggal AS tanggal,
                        tb_instruktur.nama AS instruktur
                      FROM tb_kegiatan
                      LEFT JOIN tb_instruktur ON tb_kegiatan.id_instruktur=tb_instruktur.id
                      WHERE tb_kegiatan.id_instruktur='$id'");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                      <td>
                        <?php echo $no++ ?>
                      </td>
                      <td>
                        <?php echo $data['diklat'] ?>
                      </td>
                      <!-- <td>
                        <?php echo $data['instruktur'] ?>
                      </td> -->
                      <td>
                        <?php echo $data['kegiatan'] ?>
                      </td>
                      <td>
                        <?php echo $data['tanggal'] ?>
                      </td>
                                            
                      <td width="200px">
                         <a href="<?=SERVER.'views/instruktur/kegiatan_edit_form.php?data='.$data['id']?>"
                         class="btn btn-small"><i class="fas fa-edit"></i> Perbarui</a>
                         <?php $url_bro = SERVER.'controller/instruktur/delete_kegiatan.php?data='.$data['id'];?>
                         <a onclick="deleteConfirm('<?= $url_bro?>')"
                            href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anda Yakin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
              </div>
            </div>
          </div>
        </div>

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

  <script>
  function deleteConfirm(url)
  {
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
  </script>

</body>

</html>

