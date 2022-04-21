<?php
ob_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'djarit';

$koneksi = mysqli_connect($host, $user, $pass, $database);

// if ($koneksi){
// 	echo "Database MYSQL <b>berhasil</b> dikoneksikan<br>";
// }else {
// 	echo"Database  MYSQL <b>gagal</b> dikoneksikan<br>";
// }

// $hasil=mysqli_select_db($koneksi,$database);
// if ($hasil){
// 	echo "Database $database berhasil dipilih";
// }else {
// 	echo "Database $database gagal dipilih";
// }
?>