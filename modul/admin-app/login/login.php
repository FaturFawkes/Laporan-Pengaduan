<?php

include "../../../config/function.php";

$username = $_POST['username'];
$password = $_POST['password'];

$data = loginAdmin($username);
$cekRow = mysqli_num_rows($data);
$row = mysqli_fetch_assoc($data);


if ($cekRow > 0 ){
    if($username == $row['username'] and $password == $row['password']){
        if($row['level'] == 'petugas'){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['level'] = 'petugas';
            $_SESSION['id_petugas'] = $row['id'];
            $_SESSION['nama'] = $row['nama_petugas'];
            header ("location:http://".$server."modul/admin-app/dashboard-petugas");
        }elseif($row['level'] == 'admin'){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['level'] = 'admin';
            $_SESSION['id_petugas'] = $row['id_petugas'];
            $_SESSION['nama'] = $row['nama_petugas'];
            header ("location:http://".$server."modul/admin-app/dashboard-admin");
        }else{
            echo '<script>alert("Akun tidak ditemukan");window.location.href="index.php";</script>';
        }
    }else{
        echo '<script>alert("Password Anda salah");window.location.href="index.php";</script>';
    }

}else{
    echo '<script>alert("Username Anda salah");window.location.href="index.php";</script>';
}
?>