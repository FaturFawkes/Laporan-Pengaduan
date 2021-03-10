<?php
include "../../../config/header.php"; 
include "../../../config/function.php"; 

if( !isset($_SESSION['username'] ) && !isset($_SESSION['nik'])){
  echo'<script>alert("Sesi tidak ditemukan");window,location.href= "http://'.$server.'modul/masyarakat-app/login"</script>';
}

$nik = $_SESSION['nik'];
echo "$nik";

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
            <h1 class="h2">Buat Pengaduan</h1>
        </div>
        <div class="col-md-12 lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body"><h5 class="card-title mb-4">Form Pengaduan</h5>
                    <form class="" action="prosesPengaduan.php" method="post" enctype="multipart/form-data">
                        <div class="position-relative form-group"><label for="judul" class="">Judul Pengaduan</label><input name="judul" id="judul" placeholder="Ex: Jalan Berlubang" type="text" class="form-control" required></div>
                        <div class="position-relative form-group"><label for="alamat" class="">Alamat Peninjauan</label><textarea name="alamat" id="alamat" class="form-control" required></textarea></div>
                        <div class="position-relative form-group"><label for="isi" class="">Isi Laporan</label><textarea name="isi" id="isi" class="form-control" required></textarea></div>
                        <div class="position-relative form-group"><label for="gambar" class="">Foto</label><input name="gambar" id="gambar" type="file" accept=".jpg,.png,.jpeg,.gif" class="form-control-file" required>
                            <small class="form-text text-muted">Tolong kirim foto dengan kualitas baik (Maksimal 5 MB)</small>
                        </div>
                        <button class="mt-1 btn btn-primary" type="submit" name='submit'>Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
  </div>
    </div>
</body>

<?php include "../../../config/footer.php"; ?>
