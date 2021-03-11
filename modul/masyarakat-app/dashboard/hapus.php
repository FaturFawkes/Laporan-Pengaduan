<?php
include "../../../config/function.php";

$id = $_GET['id'];

$hapus = hapusLaporan($id);

if( $hapus > 0 ){
    echo '<script>alert("Laporan berhasil dihapus");window.location.href= "http://'.$server.'modul/masyarakat-app/dashboard/lihatPengaduan.php"</script>';
}elseif( $hapus < 0 ){
    echo '<script>alert("Laporan gagal dihapus");window.location.href= "http://'.$server.'modul/masyarakat-app/dashboard/lihatPengaduan.php"</script>';}


?>