<?php
//Include file koneksi ke database
include "../../config/koneksi.php";
include "../../config/config.php";

//menerima nilai dari kiriman form input-barang 
$diklat=$_POST["diklat"];
$kegiatan=$_POST["kegiatan"];
$tanggal=date("Y-m-d");
$instruktur=$_POST["instruktur"];
 
//Query input menginput data kedalam tabel barang
  $query="INSERT INTO tb_kegiatan(diklat,kegiatan,tanggal,id_instruktur) VALUES('$diklat','$kegiatan','$tanggal','$instruktur')";

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