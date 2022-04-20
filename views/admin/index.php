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

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Diklat</div>
                      <?php
                          $diklat = mysqli_query($koneksi,"select * from tb_diklat");
                          // menghitung jumlah data yang ditemukan
                          $cek_diklat = mysqli_num_rows($diklat);
                       ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$cek_diklat?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Peserta Diklat</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">200</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Instruktur</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">30</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Diklat Berjalan</div>
                      <?php
                          $diklat = mysqli_query($koneksi,"select * from tb_diklat where status='1'");
                          // menghitung jumlah data yang ditemukan
                          $cek_diklat = mysqli_num_rows($diklat);
                       ?>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$cek_diklat?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Content Row -->

          <div class="row">
          </div>
          <!-- Content Row -->

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables Kegiatan Diklat</h1>
          <p class="mb-4">Tabel ini menampilkan data log kegiatan yang dibuat oleh instruktur mengenai kegiatna diklat</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Kegiatan Diklat</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="50px">No.</th>
                      <th>Jenis Diklat</th>
                      <th width="800px">Log Kegiatan</th>
                      <th>Instruktur</th>
                      <th width="200px">Tanggal</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php
                    $no = 1;
                    $query = mysqli_query($koneksi, 
                    "SELECT 
                      tb_kegiatan.diklat,
                      tb_kegiatan.kegiatan,
                      tb_kegiatan.tanggal,
                      tb_instruktur.nama AS nama
                    FROM tb_kegiatan
                    LEFT JOIN tb_instruktur ON tb_kegiatan.id_instruktur=tb_instruktur.id");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                      <td><?=$no++?></td>
                      <td><?=$data['diklat']?></td>
                      <td><?=$data['kegiatan']?></td>
                      <td><?=$data['nama']?></td>
                      <td><?=$data['tanggal']?></td>
                    </tr>
                    <?php } ?>                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="card mb-3">
            <div class="card-header"> <i class="fas fa-exclamation-triangle"></i> Cacatan Developer</div>
            <div class="card-body">
              <p><b>tb_diklat</b> berelasi dengan <b>tb_instruktur</b>, <b>tb_instruktur</b> merupakan bagian dari <b>tb_diklat</b> dimana <b>tb_instruktur</b>('many') dan
                <b>tb_diklat</b> ('one')
              </p>
              <p><b>tb_instruktur.id_diklat</b> merupakan <b>Foreign Key</b> dari <b>tb_diklat.id</b> (reference key) dengan option <b>CASCADE</b></p>

              <p><b>CASE</b> : apabila data diklat dihapus semua data instruktur dan asistent yang terkait juga akan terhapus</p>

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

</body>

</html>
