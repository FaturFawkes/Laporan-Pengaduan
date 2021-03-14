<?php
// Base URL
$server = $_SERVER['HTTP_HOST'].'/pengaduan_masyarakat/';

session_start();

// Sidebar
if(  isset($_SESSION['username']) ){
    if( $_SESSION['level'] == "admin"){
        $confirm = "Apakah Anda Yakin?";
        $sidebar = '
        <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo ">
                        <div class="logo-src"></div><h4>Laporan Pengaduan</h4>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="http://'.$server.'modul/admin-app/dashboard-admin/" class="">
                                        <i class="metismenu-icon pe-7s-home"></i>
                                        Home
                                    </a>
                                </li>    
                                <li>
                                    <a href="http://'.$server.'modul/admin-app/dashboard-admin/laporanMasyarakat.php" class="">
                                        <i class="metismenu-icon pe-7s-note"></i>
                                        Laporan Pengaduan
                                    </a>
                                </li>
                                <li>
                                    <a href="http://'.$server.'modul/admin-app/dashboard-admin/verifikasi.php" class="">
                                        <i class="metismenu-icon pe-7s-id"></i>
                                        Verifikasi Masyarakat
                                    </a>
                                </li>   
                                <li>
                                    <a href="http://'.$server.'modul/admin-app/dashboard-admin/daftarPetugas.php" class="">
                                        <i class="metismenu-icon pe-7s-note2"></i>
                                        Daftar Petugas
                                    </a>
                                </li>   
                                <li>
                                    <a href="http://'.$server.'modul/admin-app/dashboard-admin/registrasi.php" class="">
                                        <i class="metismenu-icon pe-7s-add-user"></i>
                                        Registrasi
                                    </a>
                                </li>   
                                <li>
                                    <a class="" onclick="logout()">
                                        <i class="metismenu-icon pe-7s-close"></i>
                                        Logout
                                    </a>
                                </li>      
                            </ul>
                        </div>
                    </div>
                </div>
                <script>
                          function logout() {
                              var r = confirm("Apakah anda yakin?");
                              if (r == true) {
                                  window,location.href= "http://'.$server.'modul/admin-app/login";
                              } else {
                                  window,location.href= "#";
                              }
                            }
                          </script>
        ';
    } elseif( $_SESSION['level'] == "petugas"){
        $confirm = "Anda Yakin?";
        $sidebar = '
            <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo ">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="http://'.$server.'modul/admin-app/dashboard-petugas/" class="">
                                        <i class="metismenu-icon pe-7s-home"></i>
                                        Home
                                    </a>
                                </li>    
                                <li>
                                    <a href="http://'.$server.'modul/admin-app/dashboard-petugas/laporanMasyarakat.php" class="">
                                        <i class="metismenu-icon pe-7s-note"></i>
                                        Laporan Pengaduan
                                    </a>
                                </li>
                                <li>
                                    <a href="http://'.$server.'modul/admin-app/dashboard-petugas/verifikasi.php" class="">
                                        <i class="metismenu-icon pe-7s-id"></i>
                                        Verifikasi Masyarakat
                                    </a>
                                </li>     
                                <li>
                                    <a class="" onclick="logout()">
                                        <i class="metismenu-icon pe-7s-close"></i>
                                        Logout
                                    </a>
                                </li>      
                            </ul>
                        </div>
                    </div>
                </div>
                <script>
                        function logout() {
                            var r = confirm("Apakah anda yakin?");
                            if (r == true) {
                                window,location.href= "http://'.$server.'modul/admin-app/login";
                            } else {
                                window,location.href= "#";
                            }
                            }
                        </script>
            ';
    }elseif( $_SESSION['level'] == "masyarakat"){
        $confirm = "Apakah Anda Yakin?";
        $sidebar = '
        <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo ">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="http://'.$server.'modul/masyarakat-app/dashboard/" class="">
                                        <i class="metismenu-icon pe-7s-home"></i>
                                        Home
                                    </a>
                                </li>    
                                <li>
                                    <a href="http://'.$server.'modul/masyarakat-app/dashboard/buatPengaduan.php" class="">
                                        <i class="metismenu-icon pe-7s-note"></i>
                                        Buat Pengaduan
                                    </a>
                                </li>
                                <li>
                                    <a href="http://'.$server.'modul/masyarakat-app/dashboard/lihatPengaduan.php" class="">
                                        <i class="metismenu-icon pe-7s-note2"></i>
                                        Lihat Pengaduan
                                    </a>
                                </li>   
                                <li>
                                    <a class="" onclick="logout()">
                                        <i class="metismenu-icon pe-7s-close"></i>
                                        Logout
                                    </a>
                                </li>      
                            </ul>
                        </div>
                    </div>
                </div>
                <script>
                          function logout() {
                              var r = confirm("Apakah anda yakin?");
                              if (r == true) {
                                  window,location.href= "http://'.$server.'modul/masyarakat-app/login";
                              } else {
                                  window,location.href= "#";
                              }
                            }
                          </script>
        ';
    }else{
        echo "Maaf anda tidak terdaftar";
    }
}

?>



