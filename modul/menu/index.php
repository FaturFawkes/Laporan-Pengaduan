<?php
include "../../config/constant.php";
include "../../config/header.php";

session_destroy();
?>
<head>
<link rel="stylesheet" type="text/css" href="../../assets/login/css/util.css">
<link rel="stylesheet" type="text/css" href="../../assets/login/css/main.css">
<title>MENU UTAMA</title>
</head>

<body  style="background-image: url('../../assets/login/images/bg-01.jpg');">

<div class="container-fluid">
    <div class="row my-5 py-5">
        <div class="col-lg-6 mx-auto">
            <div class="card bg-light">
                <div class="card-body text-center">
                    <div class="card-tittle text-center"><h2>Selamat Datang di Menu Pengaduan</h2></div><hr>
                    <p class="card-text"><h5 class="text-center">Silahkan pilih pengguna</h5></p>

                    <div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" onclick="window.location.href='http://<?=$server ?>modul/masyarakat-app/login'" type="submit">
                            Masyarakat
						</button>
                    </div>
                    <div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" onclick="window.location.href='http://<?=$server ?>modul/admin-app/login'" type="submit">
                            Administrator
						</button>
                    </div>
                    <hr>
                    <p>Desa Fatahillah</p>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>