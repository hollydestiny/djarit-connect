<?php

 //inisialiisasi konstanta
 define("SERVER", "http://" . $_SERVER['SERVER_NAME'] . "/djarit-studio/");
 define("SITE_NAME", "DJarit Studio");
 define("TAGLINE", "We Create Website Based On Your Needs");

 function url(){
    return sprintf(
      "%s://%s%s",
      isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
      $_SERVER['SERVER_NAME'],
      $_SERVER['REQUEST_URI']
    );
 }

$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);

//  echo $uri_segments[0]; // for www.example.com/user/account you will get 'user'
//  echo url();
//  echo $_SERVER['DOCUMENT_ROOT'];

?>