<?php
include "../../../config/function.php";

$id = $_GET['id'];
$status = '2';

$row = gantiStatus($id, $status);

if( $row > 0 ){
    echo '<script>alert("Laporan berhasil diterima");window.location.href= "http://'.$server.'modul/admin-app/dashboard-admin/laporanMasyarakat.php"</script>';
}else {
    echo '<script>alert("Laporan gagal diterima");window.location.href= "http://'.$server.'modul/admin-app/dashboard-admin/laporanMasyarakat.php"</script>';
}




?>