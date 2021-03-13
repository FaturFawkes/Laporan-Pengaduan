<?php
include "../../../config/function.php";

$id = $_GET['id'];
$row = hapusPetugas($id);

if( $row > 0 ){
    echo '<script>alert("Akun berhasil dihapus");window.location.href= "http://'.$server.'modul/admin-app/dashboard-admin/daftarPetugas.php"</script>';
}else {
    echo '<script>alert("Laporan gagal dihapus");window.location.href= "http://'.$server.'modul/admin-app/dashboard-admin/daftarPetugas.php"</script>';
}

?>