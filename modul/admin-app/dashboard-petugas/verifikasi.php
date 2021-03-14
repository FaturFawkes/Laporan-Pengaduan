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
    <title>Verifikasi Masyarakat</title>
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
                            <div>Verifikasi Masyarkat
                                <div class="page-title-subheading">Anda dapat melihat, aktifkan dan nonaktifkan akun masyarakat</div>
                            </div>
                        </div>
                    </div>
                </div>  

                <!-- KONTENT UTAMA -->
                <?php
                $penggunaAktif = totalMasyarakat('aktif');
                $penggunaNonAktif = totalMasyarakat('nonAktif');
                ?>
                <div class="row pl-3">
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-3 widget-content bg-night-fade">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Pengguna Aktif</div>
                                    <div class="widget-subheading">Masyarakat Desa</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white"><span><?= $penggunaAktif; ?></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-3 widget-content bg-arielle-smile">
                            <div class="widget-content-wrapper text-white">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Pengguna Non Aktif</div>
                                    <div class="widget-subheading">Menunggu untuk diaktifkan</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-white"><span><?= $penggunaNonAktif; ?></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 lg-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <table class="mb-0 table table-striped" id="data-table-masyarakat">
                                <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">NIK</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Password</th>
                                    <th class="text-center">Telepon</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                // MENAMPILKAN LAPORAN MASYARAKAT
                                $daftarMasyarakat = daftarMasyarakat();
                                $i = 1;
                                foreach ( $daftarMasyarakat as $data ):
                                ?>
                                <tr class="text-center">
                                    <td scope="row" class="text-center"><?=$i;?></td>
                                    <td scope="row"><?=$data['nik'];?></td>
                                    <td scope="row"><?= $data['nama'];?></td>
                                    <td scope="row"><?=$data['username'];?></td>
                                    <td scope="row"><?=$data['password'];?></td>
                                    <td scope="row"><?=$data['telp'];?></td>
                                    <td>
                                        <?php
                                            if($data['status'] == 'aktif'){
                                            echo '<p class="text-muted">Akun sudah aktif</p>';
                                            }elseif($data['status'] == 'nonAktif'){
                                            echo "Akun belum aktif";
                                            }elseif($data['status'] == 'ditolak'){
                                            echo '<p class="text-muted">Akun Ditolak</p>';
                                            }
                                        ?>
                                    </td>
                                    <td>
                                    <?php

                                    if($data['status'] == 'nonAktif'){
                                    ?>
                                        <a href="verifikasiProses.php?nik=<?= $data['nik']; ?>&status=aktif" class="btn btn-success px-2 my-1">Aktifkan</a>
                                        <a href="verifikasiProses.php?nik=<?= $data['nik']; ?>&status=ditolak" class="btn btn-danger px-3 my-1" onclick="return confirm('Apakah Anda yakin?')">Tolak</a>
                                    <?php
                                    }elseif($data['status'] == 'aktif'){
                                    ?>
                                        <a href="verifikasiProses.php?nik=<?= $data['nik']; ?>&status=nonAktif" class="btn btn-warning p-1" style="color: white" onclick="return confirm('Apakah Anda yakin?')">Non Aktifkan</a>
                                    <?php   
                                    }elseif($data['status'] == 'ditolak'){
                                        ?>
                                            <a href="verifikasiProses.php?nik=<?= $data['nik']; ?>&status=aktif" class="btn btn-success  m-1">Aktifkan</a>
                                            <a href="verifikasiProses.php?nik=<?= $data['nik']; ?>&status=hapus" class="btn btn-danger m-1 px-3" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                                        <?php   
                                        }
                                        ?>
                                    </td>
                                </tr>
                                    <?php
                                    $i++;
                                endforeach;
                                    ?>
                                </tbody>
                            </table>
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

