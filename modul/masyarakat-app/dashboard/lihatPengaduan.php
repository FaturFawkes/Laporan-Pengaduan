<?php
include "../../../config/function.php";
if( !isset($_SESSION['username']) ){
  echo'<script>alert("Sesi tidak ditemukan");window,location.href= "http://'.$server.'modul/masyarakat-app/login"</script>';
}

?>

<head>
<!-- MAIN CSS DASHBOARD-->
<link rel="stylesheet" href="../../../assets/dashboard/main.css">

<!-- DATATABLE -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/> -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.bootstrap4.min.css"/>

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
            <h1 class="h2">Pengaduan Anda</h1>
        </div>
        <div class="col-md-12 lg-12">
          <div class="main-card mb-3 card">
              <div class="card-body"><h5 class="card-title">Table striped</h5>
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
                      $pengaduan = (lihatPengaduan($_SESSION['nik']));
                      $i = 1;
                      foreach ( $pengaduan as $data):
                        // var_dump($data);
                      ?>
                      <tr>
                          <td scope="row"><?=$i;?></td>
                          <td><?=$data['tgl_pengaduan'];?></td>
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
                                  window,location.href= "http://'.$server.'modul/masyarakat-app/dashboard/hapus.php";
                              } else {
                                  window,location.href= "http://'.$server.'modul/masyarakat-app/dashboard/lihatPengaduan.php";
                              }
                            }
                          </script>';
                          ?>
                            <a href="detail.php?id=<?=$data['id_pengaduan'];?>" class="btn btn-warning pr-3">Details</a>
                            <?php
                            if($data['status'] == 0):
                              $id = $data['id_pengaduan'];
                            echo '<button class="btn btn-danger pr-3" onclick="hapus()">Hapus</button>';
                           
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
    </main>
  </div>
    </div>

    <?php
      include "../../../config/footer.php";
    ?>
</body>