<?php
include "../../../config/constant.php";
session_destroy();

header("location:http://".$server."modul/masyarakat-app/login");

?>
