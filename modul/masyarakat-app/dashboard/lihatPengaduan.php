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
    <title>Lihat Pengaduan</title>
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
                          <i class="pe-7s-note2 icon-gradient bg-amy-crisp">
                          </i>
                      </div>
                      <div>Pengaduan Anda
                          <div class="page-title-subheading">Anda dapat melihat pengaduan anda disini dan dapat menghapusnya jika belum diproses</div>
                      </div>
                  </div>
              </div>
          </div> 
          <!-- KONTENT UTAMA -->
          <div class="col-lg-12 lg-12">
                <?php 
                $nik = $_SESSION['nik'];
                $laporanDiterima = totalLaporanUser('2', $nik);
                $laporanDiproses = totalLaporanUser('1', $nik);
                $laporanDitolak = totalLaporanUser('3', $nik);
                $laporanValidasi = totalLaporanUser('0', $nik);
                ?>
          <div class="row p-2">
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Laporan Diterima</div>
                                    <div class="widget-subheading">Diterima Oleh Pemerintah Desa</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success"><span><?= $laporanDiterima; ?></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="card mb-3 widget-content">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Belum Divalidasi</div>
                                    <div class="widget-subheading">Menunggu untuk validasi</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-primary"><span><?= $laporanValidasi; ?></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Laporan Diproses</div>
                                        <div class="widget-subheading">Menunggu konfirmasi pemerintah</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-warning"><span><?= $laporanDiproses; ?></span></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Laporan Ditolak</div>
                                        <div class="widget-subheading">Tidak Diterima Pemerintah</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-danger"><span><?= $laporanDitolak; ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          <div class="col-lg-12 lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <table class="mb-0 table table-striped" id="data-table-masyarakat">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Pengaduan</th>
                            <th>Judul</th>
                            <th>Alamat</th>
                            <th>Isi</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        // MENAMPILKAN LAPORAN USER SENDIRI
                        $pengaduan = (lihatPengaduan($_SESSION['nik']));
                        $i = 1;
                        foreach ( $pengaduan as $data):
                        ?>
                        <tr>
                            <td scope="row"><?=$i;?></td>
                            <td>
                              <?php
                              $tanggal = $data['tgl_pengaduan'];
                              echo date("d/F/Y", strtotime($tanggal));
                              ?>
                            </td>
                            <td><?=$data['judul_pengaduan'];?></td>
                            <td><?=$data['alamat'];?></td>
                            <td><?=$data['isi_laporan'];?></td>
                            <td><?php
                              if($data['status'] == 0){
                                echo "Laporan Belum diproses";
                              }elseif($data['status'] == 1){
                                echo "Laporan sedang dalam proses pengecekan";
                              }elseif($data['status'] == 2){
                                echo "Laporan Diterima";
                              }
                            ?></td>
                            <td>
                            <?php
                            echo '<script>
                            function hapus() {
                                var r = confirm("Apakah anda yakin?");
                                if (r == true) {
                                    window,location.href= "http://'.$server.'modul/masyarakat-app/dashboard/hapus.php?id='.$data['id_pengaduan'].'";
                                } else {
                                    window,location.href= "#";
                                }
                              }
                            </script>';
                            ?>
                              <a href="detail.php?id=<?=$data['id_pengaduan'];?>" class="btn btn-warning pr-3">Details</a>
                              <?php
                              if($data['status'] == 0):
                                $id = $data['id_pengaduan'];
                              ?>
                              <a href="hapus.php?id=<?=  $data['id_pengaduan'] ?>" class="btn btn-danger pr-3 my-2" onclick="return confirm('Apakah Anda yakin?')">Hapus</button>
                              <?php
                              endif;
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
    <?php include "../../../config/footer.php"; ?>
<script type="text/javascript" src="../../../assets/dashboard/assets/scripts/main.js"></script>
</body>
</html>

