<?php
//Include file koneksi ke database
include "../../config/koneksi.php";
include "../../config/config.php";

//menerima nilai dari kiriman form input-instruktur
$id=$_POST["id"];
$nama=$_POST["nama"];
$email=$_POST["email"];
$telepon=$_POST["telepon"];
$jabatan=$_POST["jabatan"];
$diklat=$_POST["diklat"];
$no_ktp=$_POST["no_ktp"];
$no_npwp=$_POST["no_npwp"];
$cv=$_POST["cv"];
$alamat=$_POST["alamat"];

// echo $id;
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
$query="UPDATE tb_instruktur SET id='$id',nama='$nama',email='$email',telepon='$telepon',jabatan='$jabatan',id_diklat='$diklat',no_npwp='$no_npwp',cv='$cv',alamat='$alamat',foto='$foto' WHERE id='$id'";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	header('location: '.SERVER.'views/admin/instruktur_edit_form.php?feedback=1&data='.$id);
	exit;
  }
else {
	header('location: '.SERVER.'views/admin/instruktur_edit_form.php?feedback=2&data='.$id);	
	exit;
}  

?>