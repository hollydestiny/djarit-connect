<?php
//Include file koneksi ke database
include "../../config/koneksi.php";
include "../../config/config.php";

$return_arr = array();

if(isset($_GET['data'])){
    $id = $_GET['data'];

    $query = "SELECT 
    tb_instruktur.id,
    tb_instruktur.nama,
    tb_instruktur.email,
    tb_instruktur.telepon,
    tb_instruktur.jabatan,
    tb_diklat.nama AS diklat,
    tb_instruktur.no_ktp,
    tb_instruktur.no_npwp,
    tb_instruktur.file_ktp,
    tb_instruktur.file_npwp,
    tb_instruktur.cv,
    tb_instruktur.alamat,
    tb_instruktur.foto
    FROM tb_instruktur LEFT JOIN tb_diklat ON tb_diklat.id=tb_instruktur.id_diklat WHERE tb_instruktur.id='$id'";
    $hasil=mysqli_query($koneksi,$query);

    while($row = mysqli_fetch_array($hasil)){
        $id = $row['id'];
        $nama = $row['nama'];
        $email = $row['email'];
        $telepon = $row['telepon'];
        $jabatan = $row['jabatan'];
        $diklat = $row['diklat'];
        $no_ktp = $row['no_ktp'];
        $no_npwp = $row['no_npwp'];
        $file_ktp = $row['file_ktp'];
        $file_npwp = $row['file_npwp'];
        $cv = $row['cv'];
        $alamat = $row['alamat'];
        $foto = $row['foto'];
    
        $return_arr[] = array("id" => $id,
                        "nama" => $nama,
                        "email" => $email,
                        "telepon" => $telepon,
                        "jabatan" => $jabatan,
                        "diklat" => $diklat,
                        "no_ktp" => $no_ktp,
                        "no_npwp" => $no_npwp,
                        "file_ktp" => $file_ktp,
                        "file_npwp" => $file_npwp,
                        "cv" => $cv,
                        "alamat" => $alamat,
                        "foto" => $foto);
    
        // Encoding array in JSON format
        echo json_encode($return_arr);
    }
}
?>