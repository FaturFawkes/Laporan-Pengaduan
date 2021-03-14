<?php
include "../../../config/function.php"; 
include "../../../config/header.php"; 

if( !isset($_SESSION['username']) ){
  echo'<script>alert("Sesi tidak ditemukan");window,location.href= "http://'.$server.'modul/masyarakat-app/login"</script>';
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Dashboard Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

<link rel="stylesheet" href="../../../assets/dashboard/main.css">
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__content"><h4 class="">Laporan Pengaduan</h4>
              
            
        </div>
    </div>  <div class="app-main">
        <?= $sidebar; ?>            
    <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-home icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Home
                                        <div class="page-title-subheading">Ini adalah halaman utama dari website pengaduan online</div>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <!-- KONTENT UTAMA -->
                        <div class="col-md-12 lg-12">
                            <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Selamat Datang <?= $_SESSION['nama']; ?></h4>
                            <p>Ini adalah halaman utama untuk petugas. Disini sudah tersedia fitur-fitur untuk memudahkan masyarakat untuk melakukan penngaduan</p>
                            <hr>
                            <p class="mb-0">Fitur yang dapat anda gunakan adalah :
                            <br>1. Memvalidasi Laporan
                            <br>2. Memberikan Tanggapan untuk laporan
                            <br>3. Verifikasi Akun Masyarakat
                            </p>
                            </div>
                        </div>
                    </div>       
                </div>     
        </div>
    </div>
    <?php include "../../../config/footer.php"; ?>
<script type="text/javascript" src="../../../assets/dashboard/assets/scripts/main.js"></script>
</body>
</html>

