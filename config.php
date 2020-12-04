<?php

$server = "localhost";
$user = "admin";
$password = "admin";
$nama_database = "pendaftaran_siswa";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>