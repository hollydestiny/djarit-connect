<?php
//Include file koneksi ke database
include "../../config/koneksi.php";
include "../../config/config.php";

//menerima nilai dari kiriman form input-barang 
$diklat=$_POST["diklat"];
$kegiatan=$_POST["kegiatan"];
$id=uniqid();
$tanggal=date("Y-m-d");
 
//Query input menginput data kedalam tabel barang
  $query="INSERT INTO tb_kegiatan(id_kegiatan,diklat,kegiatan,tanggal) VALUES('$id','$diklat','$kegiatan','$tanggal')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {

	header('location: '.SERVER.'instruktur/kegiatan/tambah?feedback=1');
	exit;
  }
else {
	header('location: '.SERVER.'instruktur/kegiatan/tambah?feedback=2');
	exit;
}  

?>