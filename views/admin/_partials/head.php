<?php 
 
session_start();
 
if (!isset($_SESSION['level'])=='admin') {
    header('Location: '.SERVER.'login');
}
 
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Dashboard</title>

  <link href="<?=SERVER?>assets/img/logo.svg" rel="icon">

  <!-- Custom fonts for this template-->
  <link href="<?=SERVER?>assets/vendor/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?=SERVER?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?=SERVER?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>