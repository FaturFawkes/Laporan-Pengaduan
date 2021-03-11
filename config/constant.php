<?php
// Base URL
$server = $_SERVER['HTTP_HOST'].'/pengaduan_masyarakat/';

session_start();

// Sidebar
if(  isset($_SESSION['username']) ){
    if( $_SESSION['level'] == "admin"){
        $confirm = "Anda Yakin?";
        $sidebar = '
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse pb-5">
            <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    Dashboard
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                    Data Petugas
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                    Products
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    Customers
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                    Reports
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                    Integrations
                </a>
                </li>
            </ul>
            </div>
        </nav>
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
                                    <a href="index.html" class="">
                                        <i class="metismenu-icon pe-7s-home"></i>
                                        Home
                                    </a>
                                </li>    
                                <li>
                                    <a href="index.html" class="">
                                        <i class="metismenu-icon pe-7s-note"></i>
                                        Buat Pengaduan
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html" class="">
                                        <i class="metismenu-icon pe-7s-note2"></i>
                                        Lihat Pengaduan
                                    </a>
                                </li>   
                                <li>
                                    <a href="index.html" class="">
                                        <i class="metismenu-icon pe-7s-close"></i>
                                        Logout
                                    </a>
                                </li>      
                            </ul>
                        </div>
                    </div>
                </div>
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



