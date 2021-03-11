<?php include "../../../config/footer.php"; ?>
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
    <title>Buat Pengaduan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
<link rel="stylesheet" href="../../../assets/dashboard/main.css">
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
                                        <i class="pe-7s-note icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Buat Laporan Pengaduan Anda
                                        <div class="page-title-subheading">Isi keluhan anda atau laporkan jika ada suatu masalah yang berkaitan dengan desa di Form dibawah ini</div>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <!-- KONTENT UTAMA -->
                        <div class="col-md-12 lg-12">
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
                        </div>
                    </div>       
                </div>     
        </div>
    </div>
    <?php include "../../../config/footer.php"; ?>
<script type="text/javascript" src="../../../assets/dashboard/assets/scripts/main.js"></script>
</body>
</html>


