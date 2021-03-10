<?php
include "../../../config/function.php"; 

if( !isset($_SESSION['username']) ){
  echo'<script>alert("Sesi tidak ditemukan");window,location.href= "http://'.$server.'modul/masyarakat-app/login"</script>';
}

?>

<link rel="stylesheet" href="../../../assets/dashboard/main.css">

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.php">LAPORAN PENGADUAN <br> KECAMATAN CILEUNGSI</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 
</header>
<body>
    <div class="container-fluid">
    <div class="row">
    <?= $sidebar; ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Home</h1>
        </div>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Selamat Datang! <?= $_SESSION['nama']; ?></h4>
            <p>Ini adalah halaman utama dari website. Dengan dibuatnya website ini untuk memudahkan masyarakat  dalam melaporkan pengaduan kepada pemerintah. Diharapkan dapat digunakan dengan sebaik-baiknya </p>
            <hr>
            <p class="mb-0">
                Yang dapat anda lakukan adalah :
                <br>1. Melaporkan Pengaduan
                <br>2. Melihat pengaduan anda
            </p>
        </div>
    </main>
  </div>
    </div>
</body>

<?php include "../../../config/footer.php"; ?>
