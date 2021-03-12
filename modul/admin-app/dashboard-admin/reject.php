<?php
include "../../../config/function.php";

$id = $_GET['id'];
$status = '3';

$row = gantiStatus($id, $status);

if( $row > 0 ){
    echo '<script>alert("Laporan berhasil ditolak");window.location.href= "http://'.$server.'modul/admin-app/dashboard-admin/laporanMasyarakat.php"</script>';
}else {
    echo '<script>alert("Laporan gagal ditolak");window.location.href= "http://'.$server.'modul/admin-app/dashboard-admin/laporanMasyarakat.php"</script>';
}




?>