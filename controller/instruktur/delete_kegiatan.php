<?php
//Include file koneksi ke database
include "../../config/koneksi.php";
include "../../config/config.php";

if(isset($_GET['data'])){
$id = $_GET['data'];
 
//Query input menginput data kedalam tabel barang
  $query="DELETE FROM tb_kegiatan WHERE id_kegiatan='$id' ";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
	if ($hasil) {
	  	// echo "berhasil";
		header('location: '.SERVER.'instruktur/kegiatan/list?feedback=1');
		exit;
	}
	else {
		// echo "gagal";
		header('location: '.SERVER.'instruktur/kegiatan/list?feedback=2');
		exit;
	} 
} 

?>