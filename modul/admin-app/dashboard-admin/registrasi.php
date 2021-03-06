<?php
include "../../../config/constant.php";

?>

<head>
  <title>REGISTRASI PETUGAS</title>

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

<div class="page-wrapper bg-gra-03 p-t-45 p-b-50"  style="background-image: url('../../../assets/login/images/bg-01.jpg');">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">REGISTRASI PETUGSA</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="registrasiProses.php">
                        <div class="form-row">
                            <div class="name">Nama Lengkap</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nama">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Username</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="username">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Telepon</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="telepon">
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
							Kembali ke
						</span>

						<a href="index.php" class="txt2 bo1" style="text-decoration:none;">
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