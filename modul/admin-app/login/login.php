<?php

include "../../../config/function.php";

$username = $_POST['username'];
$password = $_POST['password'];

$data = loginAdmin($username);
$cekRow = mysqli_num_rows($data);
$row = mysqli_fetch_assoc($data);

// $verify = password_verify($password, $row['password']);

if ($cekRow > 0 ){
    if($username == $row['username'] and $row['level'] == 'petugas'){
        if( $password = $row['password']){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['level'] = 'petugas';
            $_SESSION['id_petugas'] = $row['id'];
            $_SESSION['nama'] = $row['nama_petugas'];
            header ("location:http://".$server."modul/admin-app/dashboard-petugas");
        }else{
            echo '<script>alert("Password Anda Salah");window.location.href="index.php";</script>';
        }
    }elseif($username == $row['username'] and $row['level'] == 'admin'){
        if($row['password'] == $password){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['level'] = 'admin';
        $_SESSION['id_petugas'] = $row['id_petugas'];
        $_SESSION['nama'] = $row['nama_petugas'];
        header ("location:http://".$server."modul/admin-app/dashboard-admin");
        }else{
            echo '<script>alert("password Anda Salah");window.location.href="index.php";</script>';
        }
    }else{
        echo '<script>alert("password Anda Salah");window.location.href="index.php";</script>';
    }
}else{
    echo '<script>alert("Username Anda salah");window.location.href="index.php";</script>';
}
?>