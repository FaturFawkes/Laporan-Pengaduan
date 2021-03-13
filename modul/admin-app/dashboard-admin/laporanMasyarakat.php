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
    <title>Laporan Masyarakat</title>
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
                                        <div class="page-title-subheading">Anda dapat melihat, validasi dan menolak laporan dari masyarakat</div>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <!-- KONTENT UTAMA -->
                        <div class="col-md-12 lg-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <table class="mb-0 table table-striped" id="data-table-admin" data-export-title="Laporan Pengaduan <?= date('d-m-Y') ?>">
                                        <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">NIK</th>
                                            <th class="text-center">Tanggal Pengaduan</th>
                                            <th class="text-center">Judul</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        // MENAMPILKAN LAPORAN MASYARAKAT
                                        $pengaduan = (daftarPengaduan());
                                        $i = 1;
                                        foreach ( $pengaduan as $data):
                                        ?>
                                        <tr class="text-center">
                                            <td scope="row" class="text-center"><?=$i;?></td>
                                            <td><?=$data['nik'];?></td>
                                            <td class="text-center">
                                                <?php
                                                $tanggal = $data['tgl_pengaduan'];
                                                echo date("d/F/Y", strtotime($tanggal));
                                                ?>
                                            </td>
                                            <td><?=$data['judul_pengaduan'];?></td>
                                            <td>
                                                <?php
                                                    if($data['status'] == 0){
                                                    echo "Laporan Belum diproses";
                                                    }elseif($data['status'] == 1){
                                                    echo "Dalam proses peninjauan";
                                                    }elseif($data['status'] == 2){
                                                    echo '<p class="text-muted">Laporan Diterima</p>';
                                                    }else{
                                                    echo '<p class="text-muted">Laporan Ditolak (Tidak Valid)</p>';
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                            <?php
                                            // echo '<script>
                                            // function tolak() {
                                            //     var r = confirm("Apakah anda yakin?");
                                            //     if (r == true) {
                                            //         window,location.href= "http://'.$server.'modul/admin-app/dashboard-admin/hapus.php?id='.$data['id_pengaduan'].'";
                                            //     } else {
                                            //         window,location.href= "http://'.$server.'modul/admin-app/dashboard-admin/lihatLaporan.php/#";
                                            //     }
                                            // }
                                            // </script>
                                            // <script>
                                            // function terima() {
                                            //     var r = confirm("Apakah anda yakin?");
                                            //     if (r == true) {
                                            //         window,location.href= "http://'.$server.'modul/admin-app/dashboard-admin/accLaporan.php?id='.$data['id_pengaduan'].'";
                                            //     } else {
                                            //         window,location.href= "http://'.$server.'modul/admin-app/dashboard-admin/lihatLaporan.php/#";
                                            //     }
                                            // }
                                            // </script>';
                                            if($data['status'] == 0){
                                            ?>
                                                <a href="formValidasi.php?id=<?= $data['id_pengaduan']; ?>" class="btn btn-success px-2 my-1">Validasi</a>
                                                <a href="reject.php?id=<?= $data['id_pengaduan']; ?>" class="btn btn-danger px-3 my-1" onclick="return confirm('Apakah Anda yakin?')">Tolak</a>
                                            <?php
                                            }elseif($data['status'] == 1){
                                            ?>
                                                <a href="accLaporan.php?id=<?= $data['id_pengaduan']; ?>" class="btn btn-success" onclick="return confirm('Apakah Anda yakin?')">Terima</a>
                                                <a href="reject.php?id=<?= $data['id_pengaduan']; ?>" class="btn btn-danger "onclick="return confirm('Apakah Anda yakin?')">Tolak</a>
                                                <a href="detail.php?id=<?= $data['id_pengaduan']; ?>" class="btn btn-primary my-2 px-5">Detail</a>
                                            <?php   
                                            }elseif($data['status'] == 2){
                                            ?>
                                                <a href="" class="btn btn-light disabled mb-2">Diterima</a>
                                                <a href="detail.php?id=<?= $data['id_pengaduan']; ?>" class="btn btn-primary my-1 px-3">Detail</a>
                                            <?php
                                            }elseif($data['status'] == 3){
                                            ?>
                                                <a href="" class="btn btn-light disabled mb-2">Ditolak</a>
                                                <a href="detail.php?id=<?= $data['id_pengaduan']; ?>" class="btn btn-primary px-3">Detail</a>
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
                </div>     
        </div>
    </div>
    <?php include "../../../config/footer.php"; ?>
<script type="text/javascript" src="../../../assets/dashboard/assets/scripts/main.js"></script>
</body>
</html>

