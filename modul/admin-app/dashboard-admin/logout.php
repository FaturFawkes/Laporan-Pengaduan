<?php
include "../../../config/constant.php";
session_destroy();

header("location:http://".$server."modul/admin-app/login");

?>
