<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../config/koneksi.php';
include "../config/config.php";

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

echo $username;
echo $password;



// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from tb_user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

//cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['peran']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['peran'] = "admin";
		$_SESSION['id'] = $data['id_user'];
		// alihkan ke halaman dashboard admin
		header('location: '.SERVER.'admin');

	// cek jika user login sebagai pegawai
	}else if($data['peran']=="instruktur"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['peran'] = "instruktur";
		$_SESSION['id'] = $data['id_user'];
		// alihkan ke halaman dashboard pegawai
		header('location: '.SERVER.'instruktur');

	// cek jika user login sebagai pengurus
	}else if($data['level']=="asistent"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['peran'] = "asistent";
		$_SESSION['id'] = $data['id_user'];
		// alihkan ke halaman dashboard pengurus
		header('location: '.SERVER.'instruktur');

	}else{

		// alihkan ke halaman login kembali
		header('location: '.SERVER.'login?feedback=gagal');
	}

	
}else{
	header('location: '.SERVER.'login?feedback=gagal');
}



?>