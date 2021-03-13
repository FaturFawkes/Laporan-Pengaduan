<?php

include "../../../config/function.php";

session_destroy();
?>
<head>
<link rel="icon" type="image/png" href="../../../assets/login/images/icons/favicon.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../../assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../../assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../../assets/login/css/main.css">
<!--===============================================================================================-->

<title>LOGIN MASYARAKAT</title>
</head>

<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../../../assets/login/images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">

				<form class="login100-form validate-form flex-sb flex-w" action="login.php" method="post">
					<span class="login100-form-title p-b-53">
						LOGIN
					</span>
					<div class="form-ro"></div>
                    <div class="p-t-31 p-b-9">
						<span class="txt1">
							NIK
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="NIK is required">
						<input class="input100" type="number" name="nik" required>
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="input100" type="text" name="username" required>
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>

					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" required>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit">
							Masuk
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Belum punya akun?
						</span>

						<a href="../registrasi" class="txt2 bo1">
							Daftar Sekarang
						</a>
					</div>
				</form>
				<div class="w-full text-center p-t-55">
						<span class="txt2">
							Kembali ke
						</span>

						<a href="../../menu" class="txt2 bo1">
							Menu utama
						</a>
					</div>

			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
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