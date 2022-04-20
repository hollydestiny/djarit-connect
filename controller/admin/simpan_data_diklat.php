<?php
//Include file koneksi ke database
include "../../config/koneksi.php";
include "../../config/config.php";

//menerima nilai dari kiriman form input-barang 
$diklat=$_POST["diklat"];
$angkatan=$_POST["angkatan"];
$status=$_POST["status"];
$mulai=$_POST["mulai"];
$selesai=$_POST["selesai"];
$jumlah=0;
 
//Query input menginput data kedalam tabel barang
  $query="INSERT INTO tb_diklat(nama,jumlah_peserta,angkatan,status,tgl_mulai,tgl_selesai) VALUES('$diklat','$jumlah','$angkatan','$status','$mulai','$selesai')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {

	header('location: '.SERVER.'admin/diklat/tambah?feedback=1');
	exit;
  }
else {
	header('location: '.SERVER.'admin/diklat/tambah?feedback=2');	
	exit;
}  

?>