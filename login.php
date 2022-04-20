<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">

</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="validation.php" method="post">
					<span class="login100-form-title p-b-43">
						Đăng nhập
					</span>
					
					
					<div class="mb-3" data-validate="">
  						<label for="exampleFormControlInput1" class="form-label">Tên đăng nhập</label>
  						<input type="text" name = "user_name" class="form-control" id="exampleFormControlInput1" >
					</div>
					
					
					<div class="mb-3" data-validate="">
  						<label for="exampleFormControlInput1" class="form-label">Mật khẩu</label>
  						<input class="form-control" type="password" name="pass" id="exampleFormControlInput1">
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Ghi nhớ đăng nhập
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Quên mật khẩu?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							
								Đăng nhập
							
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							hoặc đăng nhập qua
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</a>	
					</div>
					<div class="text-center text-lg-start mt-4 pt-1">
						<p class="small">Chưa có tài khoản? <a href="customer_register.php"
							class="link-danger">Đăng kí ngay</a></p>
					  </div>

					<!-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
						class="link-danger">Register</a></p> -->
				</form>

				<div class="login100-more" style="background-image: url('login/images/pic1.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>