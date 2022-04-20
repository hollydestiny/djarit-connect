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
$id=$_POST["id"];
$jumlah=$_POST["jumlah_peserta"];
 
//Query input menginput data kedalam tabel barang
  $query="UPDATE tb_diklat SET id_diklat='$id',nama='$diklat',jumlah_peserta='$jumlah',angkatan='$angkatan',status='$status',tgl_mulai='$mulai',tgl_selesai='$selesai' WHERE id_diklat='$id'";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	header('location: '.SERVER.'views/admin/diklat_edit_form.php?feedback=1&data='.$id);
	exit;
  }
else {
	header('location: '.SERVER.'views/admin/diklat_edit_form.php?feedback=2&data='.$id);	
	exit;
}  

?>