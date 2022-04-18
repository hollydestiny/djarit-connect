<?php

include 'config1.php';

error_reporting(0);

session_start();

if (isset($_SESSION['nama'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
  $nama = $_POST['Nama'];
  $email = $_POST['email'];
  $telp = $_POST['telepon'];
  $jabatan = $_POST['jabatan'];
  $m1 = $_POST['materi 1'];
  $m2 = $_POST['materi 2'];
  $ktp = $_POST['no_ktp'];
  $file = $_POST['file_ktp'];
  $no_npwp = $_POST['no_npwp'];
  $file_npwp = $_POST['file_npwp'];
  $cv = $_POST['cv'];
  $alamat = $_POST['alamat'];
  $porto1 = $_POST['portofolio 1'];
  $porto2 = $_POST['portofolio 2'];
  if ($password == $cpassword) {
    $sql = "SELECT * FROM tb_instruktur WHERE email='$email'";
    $result = mysqli_query($connect, $sql);
    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO tb_instruktur (username, password, nama_lengkap, nomor_telepon)
          VALUES ('$username', '$pass', '$Nama', '$telp')";
      $result = mysqli_query($connect, $sql);
      if ($result) {
        echo "<script>alert('Wow! User Registration Completed.')</script>";
        $username = "";
        $pass= "";
        $Nama = "";
        $telp = "";
      } else {
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
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Colorlib Templates">
<meta name="author" content="Colorlib">
<meta name="keywords" content="Colorlib Templates">

<title>Apply for job by Colorlib</title>

<link href="assets/css/form.css" rel="stylesheet" media="all">
<meta name="robots" content="noindex, follow">
<script nonce="ae49511a-0925-42b4-a9af-e2dcb6e5b6aa">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0,z.referrerPolicy="origin",z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>
<body>
<div class="page-wrapper bg-dark p-t-100 p-b-50">
<div class="wrapper wrapper--w900">
<div class="card card-6">
<div class="card-heading">
<h2 class="title">Apply for job</h2>
</div>
<div class="card-body">
<form method="POST">
<div class="form-row">
<div class="name">Full name</div>
<div class="value">
<input class="input--style-6" type="text" name="full_name">
</div>
</div>
<div class="form-row">
<div class="name">Email address</div>
<div class="value">
<div class="input-group">
<input class="input--style-6" type="email" name="email" placeholder="example@email.com">
</div>
</div>
</div>
<div class="form-row">
<div class="name">Message</div>
<div class="value">
<div class="input-group">
<textarea class="textarea--style-6" name="message" placeholder="Message sent to the employer"></textarea>
</div>
</div>
</div>
<div class="form-row">
<div class="name">Upload CV</div>
<div class="value">
<div class="input-group js-input-file">
<input class="input-file" type="file" name="file_cv" id="file">
<label class="label--file" for="file">Choose file</label>
<span class="input-file__info">No file chosen</span>
</div>
<div class="label--desc">Upload your CV/Resume or any other relevant file. Max file size 50 MB</div>
</div>
</div>
</form>
</div>
<div class="card-footer">
<button class="btn btn--radius-2 btn--blue-2" type="submit">Send Application</button>
</div>
</div>
</div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>

<script src="js/global.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6fd9c8aa2d64ffb4","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
