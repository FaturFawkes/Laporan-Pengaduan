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
                                    <div>Laporan Masyarakat
                                        <div class="page-title-subheading">Anda dapat melihat, verifikasi dan menolak laporan dari masyarakat</div>
                                    </div>
                                </div>
                            </div>
                        </div>  
 
                        <!-- KONTENT UTAMA -->
                        <div class="col-md-12 lg-12">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Laporan Masyarakat</h5>
                                <form class="needs-validation" novalidate="" action="validasi.php" method="get">
                                <?php
                            $data = formValidasi($_GET['id']);
                            $row = tanggapanPengaduanCek($_GET['id']);
                        ?> 
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                        <input type="hidden" name="id" value="<?= $_GET['id'];?>">
                                            <label for="nik">NIK Pelapor</label>
                                            <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK Masyarakat" value="<?= $data['nik']; ?>" required="">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Terkait" value="<?= $tanggal = $data['alamat']; ?>" required="">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="tanggal">Tanggal Pengaduan</label>
                                            <input type="text" name="tanggal" class="form-control" id="tanggal" placeholder="Judul Pengaduan" value="<?php $tanggal = $data['tgl_pengaduan'];
                                                echo date("d/F/Y", strtotime($tanggal)); ?>" required="">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="judul">Judul Pengaduan</label>
                                            <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul Pengaduan" value="<?= $data['judul_pengaduan']; ?>" required="">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-5 mb-3">
                                            <div class="position-relative form-group">
                                            <label for="isi" class="">Isi Pengaduan</label>
                                            <textarea name="isi" id="isi" class="form-control" style="width: 400px; height: 250px;" required=""><?= $tanggal = $data['isi_laporan'];?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3 ml-5">
                                            <img src="../../../assets/image/<?= $data['foto']; ?>" alt="Gambar Terkait" style="width: 400px; height: 300px;">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-3">
                                            <label for="judul">Tanggapann</label>
                                            <input type="text" class="form-control" id="judul" placeholder="Tanggapan Pengaduan" value="" name="tanggapan" required="">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Isi tanggapan!
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <a class="btn btn-success" href="validasi.php?id=<?= $data['id_pengaduan']; ?>" style="color:white;" onclick="return confirm('Apakah Anda Yakin?')" type="submit">Validasi</a> -->
                                    <a class="btn btn-primary" href="laporanMasyarakat.php" style="color:white;">Kembali</a>
                                    <a class="btn btn-danger" href="reject.php?id=<?= $data['id_pengaduan']; ?>" style="color:white;" onclick="return confirm('Apakah Anda Yakin?')">Tolak</a>
                                    <button class="btn btn-success" type="submit">Validasi</button>
                                </form>
            
                                <script>
                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                    (function() {
                                        'use strict';
                                        window.addEventListener('load', function() {
                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function(form) {
                                                form.addEventListener('submit', function(event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }
                                                    form.classList.add('was-validated');
                                                }, false);
                                            });
                                        }, false);
                                    })();
                                </script>
                            </div>
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

