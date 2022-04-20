<?php
//Include file koneksi ke database
include "../../config/koneksi.php";
include "../../config/config.php";

//menerima nilai dari kiriman form input-barang 
$id=$_POST["id"];
$username=$_POST["username"];
$password=$_POST["password"];
$level=$_POST["level"];

$query_nama = mysqli_query($koneksi,"select nama from tb_instruktur where id='$id'");
$data = mysqli_fetch_assoc($query_nama);
$nama = $data['nama'];

// echo $id;
// echo $username;
// echo $password;
// echo $level;
// echo $nama;
 
//Query input menginput data kedalam tabel barang
  $query="INSERT INTO tb_user(id,nama,username,password,level) VALUES('$id','$nama','$username','$password','$level')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {

	header('location: '.SERVER.'admin/user/tambah?feedback=1');
	exit;
  }
else {
	header('location: '.SERVER.'admin/user/tambah?feedback=2');	
	exit;
}  

?>