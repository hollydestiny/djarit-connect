<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "djarit";

$connect = mysqli_connect($server, $user, $pass, $db);

if (!$connect) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
