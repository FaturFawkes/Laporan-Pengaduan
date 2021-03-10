<?php
include "../../../config/function.php";

// AMBIL DATA NIK 
$ambilNik = ambilDataMasyarakat($_POST['nik']);
$cekNik = mysqli_num_rows($ambilNik);
$row = mysqli_fetch_assoc($ambilNik);

// AMBIL DATA USERNAME
$cekUsername = ambilUsername($_POST['username']);

// CEK NIK DAN USERNAME
if($cekNik > 0){
    echo '<script>alert("NIK sudah ada");window.location.href="index.php";</script>';    
}elseif($cekUsername > 0){
    echo '<script>alert("Username sudah ada");window.location.href="index.php";</script>';    
}else{

    // TAMBAH DATA
    $tambahData = tambahDataMasyarakat($_POST);

    if( $tambahData > 0 ){
        $pesan = "berhasil";
        echo '<script>alert("Pendaftaran berhasil!");window.location.href="index.php?pesan='.$pesan.'";</script>'; 
        header("location:index.php?daftar='berhasil'");
    }
    else{
        $pesan = "gagal";
        echo '<script>alert("Pendaftaran gagal, silahkan coba lagi");window.location.href="index.php?pesan='.$pesan.'";</script>'; 
        // header("location:index.php?daftar='gagag='");
    }
}



?>