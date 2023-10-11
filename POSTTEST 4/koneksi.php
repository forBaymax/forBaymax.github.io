<?php

$server = "localhost";
$user = "root";
$password = "";
$name = "praktikum";

$koneksi = mysqli_connect($server, $user, $password, $name);

if (!$koneksi) {    
    die("Gagal konek ke database : ". mysqli_connect_error());
}


?>