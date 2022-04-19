<?php
//Include file koneksi ke database
include "../../config/koneksi.php";
include "../../config/config.php";

//menerima nilai dari kiriman form input-peserta
$diklat=$_POST["diklat"];
$nama=$_POST["nama"];
$email=$_POST["email"];
$tlp=$_POST["tlp"];
$alamat=$_POST["alamat"];
$prov=$_POST["prov"];
$kota=$_POST["kota"];
$kecamatan=$_POST["kecamatan"];
$agama=$_POST["agama"];
$pendidikan=$_POST["pendidikan"];
$status=$_POST["status"];
$foto=$_POST["foto"];
$id=uniqid();

 
//Query input menginput data kedalam tabel barang
  $query="INSERT INTO tb_peserta(id_peserta,diklat,nama,email,tlp,alamat,provinsi,kota,kecamatan,agama,pendidikan,status,foto) VALUES('$id','$diklat','$nama','$email','$tlp','$alamat','$prov','$kota','$kecamatan','$agama','$pendidikan','$status','$foto')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$query);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {

	header('location: '.SERVER.'admin/peserta/tambah?feedback=1');
	exit;
  }
else {
	header('location: '.SERVER.'admin/peserta/tambah?feedback=2');	
	exit;
}  

?>