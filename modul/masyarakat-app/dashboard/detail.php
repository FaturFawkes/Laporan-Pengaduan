<?php
include "../../../config/function.php";
if( !isset($_SESSION['username']) ){
  echo'<script>alert("Sesi tidak ditemukan");window,location.href= "http://'.$server.'modul/masyarakat-app/login"</script>';
}
?>

<head>
<!-- MAIN CSS DASHBOARD-->
<link rel="stylesheet" href="../../../assets/dashboard/main.css">


</head>

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
            <h1 class="h2">Detail Pengaduan</h1>
        </div>
        <div class="col-md-10 lg-10 mx-auto">
            <div class="card-shadow-primary border mb-3 card card-body border-primary">
                <h5 class="card-title">Primary Card Shadow</h5>
                <div class="col-md-6 m-0 p-0">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, fuga, accusamus expedita obcaecati, commodi minus aut porro magnam aspernatur esse ipsum temporibus nisi dolores sapiente optio repellendus ipsa similique animi.
                </div>
            </div>
        </div>
    </main>
  </div>
    </div>
</body>

<?php include "../../../config/footer.php"; ?>
