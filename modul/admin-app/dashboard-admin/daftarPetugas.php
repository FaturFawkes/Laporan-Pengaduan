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
    <title>Daftar Petugas</title>
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
                                    <div>Daftar Petugas
                                        <div class="page-title-subheading">Anda dapat melihat dan menghapus akun petugas</div>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <!-- KONTENT UTAMA -->
                        <?php
                            if( isset($_GET['pesan']) ){
                            $pesan = $_GET['pesan'];
                                if ( $pesan = "berhasil" ){
                            ?>
                            <div class="row">
                                <div class="alert alert-success col-md-12 lg-12 mb-3" role="alert" style=" color: #155724;background-color: #d4edda;
                                    border-color: #c3e6cb;position: relative;
                                    padding: 0.75rem 1.25rem;
                                    margin-bottom: 1rem;
                                    border: 1px solid transparent;
                                    border-radius: 0.25rem;
                                    margin-bottom: 0 !important;">
                                Pendaftaran berhasil
                                </div>

                                <?php }elseif($pesan = "berhasil"){
                                ?>

                                <div class="alert alert-danger mb-0" role="alert">
                                Pendaftaran Gagal!
                                </div>
                            </div>

                        <?php } } ?>

                        <div class="col-md-12 lg-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <table class="mb-0 table table-striped" id="data-table-admin" data-export-title="Data petugas <?= date('d-m-Y') ?>">
                                        <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">ID Petugas</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Username</th>
                                            <th class="text-center">Password</th>
                                            <th class="text-center">Telepon</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        // MENAMPILKAN LAPORAN MASYARAKAT
                                        $daftarPetugas = daftarPetugas();
                                        
                                        $i = 1;
                                        foreach ( $daftarPetugas as $data ):
                                        ?>
                                        <tr class="text-center">
                                            <td scope="row" class="text-center"><?=$i;?></td>
                                            <td scope="row"><?=$data['id_petugas'];?></td>
                                            <td scope="row"><?= $data['nama_petugas'];?></td>
                                            <td scope="row"><?=$data['username'];?></td>
                                            <td scope="row"><?=$data['password'];?></td>
                                            <td scope="row"><?=$data['telp'];?></td>
                                            <td>
                                                <a href="hapusPetugas.php?id=<?= $data['id_petugas']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
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
                </div>     
        </div>
    </div>
    <?php include "../../../config/footer.php"; ?>
<script type="text/javascript" src="../../../assets/dashboard/assets/scripts/main.js"></script>
</body>
</html>

