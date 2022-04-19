<?php
//Include file koneksi ke database
include "../../config/koneksi.php";
include "../../config/config.php";

//menerima nilai dari kiriman form input-barang 
$diklat=$_POST["diklat"];
$kegiatan=$_POST["kegiatan"];
$id=$_POST["id"];
$tanggal=$_POST["tanggal"];
 
//Query input menginput data kedalam tabel barang
  $query="UPDATE tb_kegiatan SET id_kegiatan='$id',diklat='$diklat',kegiatan='$kegiatan',tanggal='$tanggal' WHERE id_kegiatan='$id'";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	header('location: '.SERVER.'views/instruktur/kegiatan_edit_form.php?feedback=1&data='.$id);
	exit;
  }
else {
	header('location: '.SERVER.'views/instruktur/kegiatan_edit_form.php?feedback=2&data='.$id);	
	exit;
}  

?>