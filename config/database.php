<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "pengaduan_masyarakat";

$conn = mysqli_connect($host, $username, $password, $db);

if( !$conn ){
    echo "Koneksi Gagal".mysqli_connect_error();
}