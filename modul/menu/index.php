<?php
include "../../config/constant.php";
include "../../config/header.php";

session_destroy();
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card bg-warning">
                <div class="card-body text-center">
                    <div class="card-tittle text-center"><h2>Selamat Datang di Menu Pengaduan</h2></div><hr>
                    <p class="card-text"><h5 class="text-center">Silahkan pilih pengguna</h5></p>
                    <a href="http://<?=$server ?>modul/masyarakat-app/login" class="btn btn-success">Masyarakat</a>
                    <a href="http://<?=$server ?>modul/admin-app/login" class="btn btn-success">Administrator</a>
                    <hr>
                    <p>Desa Fatahillah</p>
                </div>
            </div>
        </div>
    </div>
</div>