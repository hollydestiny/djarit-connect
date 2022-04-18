<?php

include 'config1.php';

error_reporting(0);

session_start();

if (isset($_SESSION['nama'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $telp = $_POST['telepon'];
  $jabatan = $_POST['jabatan'];
  $m1 = $_POST['materi 1'];
  $m2 = $_POST['materi 2'];
  $no_ktp = $_POST['no_ktp'];
  $file_ktp = $_POST['file_ktp'];
  $no_npwp = $_POST['no_npwp'];
  $file_npwp = $_POST['file_npwp'];
  $cv = $_POST['cv'];
  $alamat = $_POST['alamat'];
  $porto1 = $_POST['portofolio 1'];
  $porto2 = $_POST['portofolio 2'];
  $id = uniqid();
    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO tb_instruktur (nama, email, telepon, jabatan, 'materi 1', 'materi 2', no_ktp, file_ktp, no_npwp, file_np, cv, alamat,   
      'portofolio 1', 'portofolio 2')
          VALUES ('$nama','$email','$telp','$jabatan','$m1','$m2','$no_ktp','$file_ktp','$no_npwp','$file_npwp','$cv','$alamat','$porto1','$porto2')";
      $result = mysqli_query($connect, $sql);
      if ($result) {
        echo "<script>alert('Wow! User Registration Completed.')</script>";
        $nama = "";
        $email= "";
        $telp = "";
        $m1 = "";
        $m2 = "";
        $no_ktp = "";
        $file_ktp = "";
        $no_npwp = "";
        $file_npwp = "";
        $cv = "";
        $alamat = "";
        $porto1 = "";
        $porto2 = "";
        echo "<script>alert('Woops! Something Wrong Went.')</script>";
      }
    } else {
      echo "<script>alert('Woops! Email Already Exists.')</script>";
    }

  } else {
    echo "<script>alert('Password Not Matched.')</script>";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="style.css">

  <title>Register Form </title>
</head>
<body  style="background-image: 2.jpg;">
  <div class="container">
    <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
      <div class="input-group">
        <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
      </div>
      <div class="input-group">
        <input type="password" placeholder="password" name="password" value="<?php echo $_POST['password']; ?>" required>
      </div>
      <div class="input-group">
        <input type="text" placeholder="Nama Lengkap" name="nama_lengkap" value="<?php echo $Nama?>" required>
            </div>
            <div class="input-group">
        <input type="text" placeholder="Nomor Telefon" name="nomor_telepon" value="<?php echo $telp ?>" required>
      </div>
      <div class="input-group">
        <button name="submit" class="btn" >Register </button></a> 
      </div>
    </form>
  </div>
</body>
</html>
