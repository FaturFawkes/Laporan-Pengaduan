<?php

include "../../../config/function.php";
include "../../../config/header.php";


$username = $_POST['username'];
$password = $_POST['password'];

$nik = $_POST['nik'];

$data = ambilDataMasyarakatLogin($_POST);
$cekRow = mysqli_num_rows($data);
$row = mysqli_fetch_assoc($data);

if ($cekRow > 0 ){
    if($username == $row['username'] and password_verify($password, $row['password']) ){
       
        if($row['status'] == 'aktif'){
            // @session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['level'] = 'masyarakat';
            $_SESSION['nik'] = $nik;
            $_SESSION['nama'] = $row['nama'];
            // echo '<script>sweet("Hello world!");</script>';

            header ("location:http://".$server."modul/masyarakat-app/dashboard");
        }else{
            echo '<script>alert("Akun anda belum aktif silahkan hubungi admin");window.location.href="index.php";</script>';
        }
    }else{
        echo '<script>alert("Cek kembali data anda atau registrasi");window.location.href="index.php";</script>';
    }

}else{
    echo '<script>alert("Cek kembali data anda atau registrasi");window.location.href="index.php";</script>';
}

include "../../../config/footer.php";

?>