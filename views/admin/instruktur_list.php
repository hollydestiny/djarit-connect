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
              <h6 class="m-0 font-weight-bold text-primary">Data Tabel Instruktur</h6>
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
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Telepon</th>
                      <th>Jabatan</th>
                      <th width="300px">Aksi</th>
                    </tr>
                  </thead>
                  
                  <tbody id="show_data">
                    <?php
                    $no = 1;
                    $query = mysqli_query($koneksi, 'SELECT * FROM tb_instruktur');
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                      <td>
                        <?php echo $no++ ?>
                      </td>
                      <td>
                        <?php echo $data['nama'] ?>
                      </td>
                      <td>
                        <?php echo $data['email'] ?>
                      </td>
                      <td>
                        <?php echo $data['telepon'] ?>
                      </td>
                      <td>
                        <?php echo $data['jabatan'] ?>
                      </td>

                      <td width="200px">
                         <a href="javascript:;" data="<?php echo $data['id']?>"
							           class="btn btn-small item_detail"><i class="fas fa-eye"></i> Detail</a>
                         <a href="<?=SERVER.'views/admin/instruktur_edit_form.php?data='.$data['id']?>"
                         class="btn btn-small"><i class="fas fa-edit"></i> Perbarui</a>
                         <?php $url_bro = SERVER.'controller/admin/delete_instruktur.php?data='.$data['id'];?>
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
  <script>
    $(document).ready(function(){
        $('#show_data').on('click','.item_detail',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?=SERVER?>controller/admin/detail_instruktur.php",
                dataType : "JSON",
                data : {data:id},
                success: function(response){
                	$('#detailModal').modal('show');
                  var len = response.length;
                  for(var i=0; i<len; i++){
                    var id = response[i].id;
                    var nama = response[i].nama;
                    var email = response[i].email;
                    var telepon = response[i].telepon;

                    $('[name="id"]').val(id);
                    $('[name="nama"]').val(nama);
                    $('[name="email"]').val(email);
                    $('[name="telepon"]').val(telepon);
                    $('[name="jabatan"]').val(response[i].jabatan);
                    $('[name="diklat"]').val(response[i].diklat);
                    $('[name="no_ktp"]').val(response[i].no_ktp);
                    $('[name="no_npwp"]').val(response[i].no_npwp);
                    $('[name="cv"]').val(response[i].cv);
                    $('[name="alamat"]').val(response[i].alamat);
                    var dir_file = "<?=SERVER?>assets/img/upload/file/";
                    document.getElementById("file_ktp").href=dir_file.concat(response[i].file_ktp);
                    document.getElementById("file_npwp").href=dir_file.concat(response[i].file_npwp);
                    var dir_foto = "<?=SERVER?>assets/img/upload/foto/";
                    var gambar = dir_foto.concat(response[i].foto);
                    $('#foto_instruktur').attr('src', gambar);
                  }
                }
            });
        });
    });
  </script>

</body>

</html>

