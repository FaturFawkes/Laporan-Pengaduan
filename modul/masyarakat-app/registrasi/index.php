<?php
include "../../../config/constant.php";

session_destroy();
?>

<head>
  <title>REGISTRASI MASYARAKAT</title>

<!-- BOOTSRTAP -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->

<!-- Icons font CSS-->
<link href="../../../assets/registrasi/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="../../../assets/registrasi/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<!-- Font special for pages-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

<!-- Vendor CSS-->
<link href="../../../assets/registrasi/vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="../../../assets/registrasi/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

<!-- Main CSS-->
<link href="../../../assets/registrasi/css/main.css" rel="stylesheet" media="all">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../assets/login/css/main.css">
<!--===============================================================================================-->


</head>
<body>

<?php
if( isset($_GET['pesan']) ){
$pesan = $_GET['pesan'];
    if ( $pesan = "berhasil" ){
?>
<div class="alert alert-success mb-0" role="alert" style=" color: #155724;background-color: #d4edda;
    border-color: #c3e6cb;position: relative;
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
    margin-bottom: 0 !important;">
 Pendaftaran berhasil, tunggu maksimal 2 x 24 jam hingga akun anda aktif!
</div>

<?php }elseif($pesan = "berhasil"){
?>

<div class="alert alert-danger mb-0" role="alert">
 Pendaftaran Gagal!
</div>

<?php } } ?>

<div class="page-wrapper bg-gra-03 p-t-45 p-b-50"  style="background-image: url('../../../assets/login/images/bg-01.jpg');">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">REGISTRASI</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="registrasi.php">
                        <div class="form-row">
                            <div class="name">NIK</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="nik" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nama Lengkap</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nama" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Username</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="username" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Telepon</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="telepon" required>
                                    <label class="label--desc pt-5">Nomor HP</label>
                                </div>
                            </div>
                        </div>
                        <div class="container-login100-form-btn m-t-17">
                            <button class="login100-form-btn" type="submit">
                                Daftar
                            </button>
                        </div>
                        
                        <div class="w-full text-center p-t-55">
                            <span class="txt2">
                                Sudah punya akun?
                            </span>

                            <a href="../login" class="txt2 bo1" style="text-decoration:none;">
                                Login Sekarang
                            </a>
                        </div>
                        <div class="w-full text-center p-t-55">
                            <span class="txt2">
                                Kembali ke 
                            </span>

                            <a href="../../menu" class="txt2 bo1" style="text-decoration:none;">
                                Menu Utama
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
	
<!--===============================================================================================-->
	<script src="../../../assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../../../assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../../../assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="../../../assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../../assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../../../assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="../../../assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../../../assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->

<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="../assets/js/jquery-3.6.0.js"></script>

</body>

</html>