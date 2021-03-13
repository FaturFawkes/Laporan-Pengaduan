<?php
include "../../../config/function.php"; 
include "../../../config/header.php"; 

if( !isset($_SESSION['username']) ){
  echo'<script>alert("Sesi tidak ditemukan");window,location.href= "http://'.$server.'modul/masyarakat-app/login"</script>';
}

?>

<link rel="stylesheet" href="../../../assets/dashboard/main.css">

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Detail Laporan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

<link href="./main.css" rel="stylesheet"></head>
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
                                        <i class="pe-7s-note icon-gradient bg-amy-crisp">
                                        </i>
                                    </div>
                                    <div>Detail Pengaduan 
                                        <div class="page-title-subheading">Anda dapat melihat tanggapan dari Admin jika sudah ditanggapi</div>
                                    </div>
                                </div>
                            </div>
                        </div>  

                        <!-- KONTENT UTAMA -->
                        <?php
                          $id = $_GET['id'] ;
                          $tanggapan = lihatTanggapanPengaduan($id);


                          $pengaduan = lihatPengaduanDetail($id);
                          $data = mysqli_fetch_assoc($pengaduan);

                        ?>
                        <div class="col-md-12 lg-12">
                          <div class="main-card mb-3 card">
                            <div class="card-body"><h5 class="card-title pl-2">Gambar Terkait</h5>
                              <div class="row">
                                  <div class="col-md-6">
                                  <img src="../../../assets/image/<?= $data['foto']; ?>" style="width:400px;height:420px;" alt="Gambar Lokasi">
                                </div>
                                <div class="col-md-5">
                                <div class="main-card mb-3 card">
                                            <div class="card-body">
                                            <h5 class="card-title"><b>Detail Laporan</b></h5>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><h6><b>Judul : <?= $data['judul_pengaduan']; ?></b></h6></li>
                                                <li class="list-group-item">
                                                <h6>
                                                    <b>Tanggal : 
                                                    <?php 
                                                        $tanggal = $data['tgl_pengaduan']; 
                                                        echo date("d/F/Y", strtotime($tanggal));
                                                    ?>
                                                    </b>
                                                </h6>
                                                </li>
                                                <li class="list-group-item"><h6><b>Alamat : <?= $data['alamat']; ?></b></h6></li>
                                                <li class="list-group-item"><h6><b>Isi Laporan: <?= $data['isi_laporan']; ?></b></h6></li>
                                                <li class="list-group-item">
                                                <h6><b>Status : 
                                                <?php
                                                    if($data['status'] == 0){
                                                    echo "Laporan Belum diproses";
                                                    }elseif($data['status'] == 1){
                                                    echo "Laporan sedang dalam proses pengecekan";
                                                    }elseif($data['status'] == 2){
                                                    echo "Laporan Diterima";
                                                    }else{
                                                    echo "Laporan Ditolak (Tidak Valid)";
                                                    }
                                                ?>
                                                    </b>
                                                </h6>
                                                </li>
                                                <?php
                                                    $idPengaduan = $data['id_pengaduan'];
                                                    echo '<script>
                                                    function tolak() {
                                                        var r = confirm("Apakah anda yakin?");
                                                        if (r == true) {
                                                            window,location.href= "http://'.$server.'modul/masyarakat-app/dashboard/hapus.php?id='.$idPengaduan.'";
                                                        } else {
                                                            window,location.href= "#";
                                                        }
                                                        }
                                                    </script>';
                                                ?>
                                                <li class="list-group-item">
                                                       <?php
                                                            $id = $_GET['id'] ;
                                                            $cekTanggapan = tanggapanPengaduanCek($id);
                                                            $tanggapan = tanggapan($id);

                                                            if($cekTanggapan == 1){
                                                            
                                                        ?>

                                                        <h6><b>Tanggapan : <?= $tanggapan['tanggapan']; ?></b></h6>
                                                        <br><p class="text-muted">Ditanggapi Oleh : 
                                                        <?= $tanggapan['nama_petugas'];?>
                                                        </p>
                                                        
                                                        <?php
                                                            }
                                                        ?>
                                                        </li>
                                            </ul>

                                            </div>
                                        </div>
                                </div>
                                <a class="btn btn-outline-primary my-3" href="../../../modul/admin-app/dashboard-admin/laporanMasyarakat.php">Kembali</a>
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

