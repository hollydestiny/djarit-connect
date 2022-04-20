<?php
//Include file koneksi ke database
include "../../config/koneksi.php";
include "../../config/config.php";

//menerima nilai dari kiriman form input-barang 
$id=$_POST["id"];
$username=$_POST["username"];
$password=$_POST["password"];
$level=$_POST["level"];
$nama=$_POST['nama'];
 
echo $id;
echo $username;
echo $password;
echo $level;
echo $nama;

//Query input menginput data kedalam tabel barang
$query="UPDATE tb_user SET id='$id',nama='$nama',username='$username',password='$password',level='$level' WHERE id='$id'";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	header('location: '.SERVER.'views/admin/user_edit_form.php?feedback=1&data='.$id);
	exit;
  }
else {
	header('location: '.SERVER.'views/admin/user_edit_form.php?feedback=2&data='.$id);	
	exit;
}  

?>