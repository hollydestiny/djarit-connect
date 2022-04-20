<?php
    include "config/config.php";
    // Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
    $project_location = "/djarit-studio";
    $me = $project_location;

    // For get URL PATH
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $me.'/' :
            include "config/koneksi.php";
            require "views/index.php";
            break;
        case $me.'/admin' :
            include "config/koneksi.php";
            require "views/admin/index.php";
            break;
        case $me.'/instruktur' :
            include "config/koneksi.php";
            require "views/instruktur/index.php";
            break;
        case $me.'/admin/instruktur/tambah' :
            require "views/admin/instruktur_tambah_form.php";
            break;
        case $me.'/admin/diklat/tambah' :
            require "views/admin/diklat_tambah_form.php";
            break;
        case $me.'/admin/diklat/tambah?feedback=1' :
            require "views/admin/diklat_tambah_form.php";
            break;
        case $me.'/admin/diklat/tambah?feedback=2' :
            require "views/admin/diklat_tambah_form.php";
            break;
        case $me.'/admin/diklat/list' :
            include "config/koneksi.php";
            require "views/admin/diklat_list.php";
            break;
        case $me.'/admin/diklat/list?feedback=1' :
            include "config/koneksi.php";
            require "views/admin/diklat_list.php";
            break;
        case $me.'/admin/diklat/list?feedback=2' :
            include "config/koneksi.php";
            require "views/admin/diklat_list.php";
            break;
        case $me.'/login' :
            include "config/koneksi.php";
            require "views/login.php";
            break;
        case $me.'/login?feedback=gagal' :
            require "views/login.php";
            break;
        case $me.'/instruktur/kegiatan/list' :
            include "config/koneksi.php";
            require "views/instruktur/kegiatan_list.php";
            break;
        case $me.'/instruktur/kegiatan/list?feedback=1' :
            include "config/koneksi.php";
            require "views/instruktur/kegiatan_list.php";
            break;
        case $me.'/instruktur/kegiatan/list?feedback=2' :
            include "config/koneksi.php";
            require "views/instruktur/kegiatan_list.php";
        case $me.'/instruktur/kegiatan/tambah' :
            include "config/koneksi.php";
            require "views/instruktur/kegiatan_tambah_form.php";
            break;
        case $me.'/instruktur/kegiatan/tambah?feedback=1' :
            include "config/koneksi.php";
            require "views/instruktur/kegiatan_tambah_form.php";
            break;
        case $me.'/instruktur/kegiatan/tambah?feedback=2' :
            include "config/koneksi.php";
            require "views/instruktur/kegiatan_tambah_form.php";
            break;
        default:
            http_response_code(404);
            echo "404";
            break;
    }
    
    // echo $uri_segments[2];
    
    // header("location: ". SERVER . "views/index.php");
    // exit();
?>