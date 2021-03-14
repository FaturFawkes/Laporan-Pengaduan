<?php
include "../../../config/function.php";

// AMBIL DATA USERNAME
$cekUsername = usernamePetugas($_POST['username']);

// CEK NIK DAN USERNAME
if($cekUsername > 0){
    echo '<script>alert("Username sudah ada");window.location.href="registrasi.php";</script>';    
}else{
    // TAMBAH DATA
    $tambahData = tambahPetugas($_POST);

    if( $tambahData > 0 ){
        $pesan = "berhasil";
        echo '<script>window.location.href="daftarPetugas.php?pesan='.$pesan.'";</script>'; 
    }
    else{
        $pesan = "gagal";
        echo '<script>alert("Pendaftaran gagal, silahkan coba lagi");window.location.href="daftarPetugas.php?pesan='.$pesan.'";</script>'; 
    }
}



?>