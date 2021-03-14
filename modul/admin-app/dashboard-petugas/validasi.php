<?php
include "../../../config/function.php";

$idPetugas = $_SESSION['id_petugas'];
$idPengaduan = $_GET['id'];
$nik = $_GET['nik'];
$judul = $_GET['judul'];
$alamat = $_GET['alamat'];
$isi = $_GET['isi'];
$tanggal = $_GET['tanggal'];
$tanggapan = $_GET['tanggapan'];
$status = '1';

$row = validasi($idPengaduan, $idPetugas ,$nik, $judul, $alamat, $isi, $tanggal, $tanggapan, $status);

if( $row < 0 ){
    echo '<script>alert("Validasi Gagal");window.location.href= "http://'.$server.'modul/admin-app/dashboard-admin/laporanMasyarakat.php"</script>';
}else {
    echo '<script>alert("Laporan Valid");window.location.href= "http://'.$server.'modul/admin-app/dashboard-admin/laporanMasyarakat.php"</script>';
}




?>