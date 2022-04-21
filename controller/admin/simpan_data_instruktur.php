<?php
//Include file koneksi ke database
include "../../config/koneksi.php";
include "../../config/config.php";

//menerima nilai dari kiriman form input-barang 
$nama=$_POST['nama'];
$email=$_POST['email'];
$telepon=$_POST['telepon'];
$jabatan=$_POST['jabatan'];
$diklat=$_POST['diklat'];
$alamat=$_POST['alamat'];
$no_ktp=$_POST['no_ktp'];
$no_npwp=$_POST['no_npwp'];
$cv=$_POST['cv'];

// echo $nama;
// echo $email;
// echo $telepon;
// echo $jabatan;
// echo $diklat;
// echo $alamat;
// echo $no_ktp;
// echo $no_npwp;
// echo $cv;
 
//Query input menginput data kedalam tabel barang
  $query="INSERT INTO tb_instruktur(nama,email,telepon,jabatan,id_diklat,no_ktp,no_npwp,alamat,cv) 
  		  VALUES('$nama','$email','$telepon','$jabatan','$diklat','$no_ktp','$no_npwp','$alamat','$cv')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
  // echo "berhasil";
	header('location: '.SERVER.'admin/instruktur/tambah?feedback=1');
	exit;
  }
else {
	// echo "gagal";
	header('location: '.SERVER.'admin/instruktur/tambah?feedback=2');	
	exit;
}  

?>