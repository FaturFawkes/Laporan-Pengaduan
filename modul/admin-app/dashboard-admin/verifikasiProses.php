<?php
include "../../../config/function.php";

$nik = $_GET['nik'];
$status = $_GET['status'];

$updateStatus = updateStatus($nik, $status);

if($status == 'nonAktif'){
    if( $updateStatus > 0 ){
        echo '<script>alert("Akun dinonaktfikan");window.location.href= "http://'.$server.'modul/admin-app/dashboard-admin/verifikasi.php"</script>';
    }elseif($updateStatus < 0){
        echo '<script>alert("Akun gagal dinonaktfikan");window.location.href= "http://'.$server.'modul/admin-app/dashboard-admin/verifikasi.php"</script>';
    }
}elseif($status == 'aktif'){
    if( $updateStatus > 0 ){
        echo '<script>alert("Akun diaktifkan");window.location.href= "http://'.$server.'modul/admin-app/dashboard-admin/verifikasi.php"</script>';
    }else{
        echo '<script>alert("Akun gagal diaktifkan");window.location.href= "http://'.$server.'modul/admin-app/dashboard-admin/verifikasi.php"</script>';
    }
}elseif($status =='ditolak'){
    if( $updateStatus > 0 ){
        echo '<script>alert("Akun ditolak");window.location.href= "http://'.$server.'modul/admin-app/dashboard-admin/verifikasi.php"</script>';
    }else{
        echo '<script>alert("Akun gagal ditolak");window.location.href= "http://'.$server.'modul/admin-app/dashboard-admin/verifikasi.php"</script>';
    }
}elseif($status =='hapus'){
    $hapus = hapusMasyarakat($nik);
    if( $hapus > 0 ){
        echo '<script>alert("Akun berhasil dihapus");window.location.href= "http://'.$server.'modul/admin-app/dashboard-admin/verifikasi.php"</script>';
    }else{
        echo '<script>alert("Akun gagal dihapus");window.location.href= "http://'.$server.'modul/admin-app/dashboard-admin/verifikasi.php"</script>';
    }
}
?>