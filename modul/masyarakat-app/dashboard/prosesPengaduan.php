<?php
include "../../../config/function.php"; 
if( isset( $_POST['submit'] ) ){
    if( kirimPengaduan($_POST) > 0 ){
      echo '<script>alert("Laporan Berhasil Dikirimkan");window,location.href= "http://'.$server.'modul/masyarakat-app/dashboard/lihatPengaduan.php"</script>';
    }else{
      echo '<script>alert("Laporan Gagal Dikirim!");window,location.href= "http://'.$server.'modul/masyarakat-app/dashboard/buatPengaduan.php"</script>';
    }
}



?>