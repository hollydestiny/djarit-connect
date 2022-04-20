<?php
//Include file koneksi ke database
include "../../config/koneksi.php";
include "../../config/config.php";

$return_arr = array();

if(isset($_GET['data'])){
    $id = $_GET['data'];

    $query = "SELECT * FROM tb_user WHERE id='$id'";
    $hasil=mysqli_query($koneksi,$query);

    while($row = mysqli_fetch_array($hasil)){
        $id = $row['id'];
        $nama = $row['nama'];
        $email = $row['email'];
        $telepon = $row['telepon'];
    
        $return_arr[] = array("id" => $id,
                        "nama" => $nama,
                        "telepon" => $telepon,
                        "email" => $email);
    
        // Encoding array in JSON format
        echo json_encode($return_arr);
?>