<?php
include "../../../config/function.php";

$id = $_GET['id'];
$status = '1';

$row = gantiStatus($id, $status);

if( $row > 0 ){
    echo '<script>alert("Laporan Valid");window.location.href= "http://'.$server.'modul/admin-app/dashboard-admin/laporanMasyarakat.php"</script>';
}else {
    echo '<script>alert("Validasi Gagal");window.location.href= "http://'.$server.'modul/admin-app/dashboard-admin/laporanMasyarakat.php"</script>';
}




?>