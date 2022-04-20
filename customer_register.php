<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng ký</title>
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
				<form class="login100-form validate-form" action="registration.php" method="post">
					<span class="login100-form-title p-b-43">
						Đăng ký
					</span>
					
					
					<div class="mb-3" data-validate="">
  						<label for="exampleFormControlInput1" class="form-label">Tên đăng nhập</label>
  						<input type="text" name="user_name" class="form-control" id="exampleFormControlInput1" >
					</div>

                    <div class="mb-3" data-validate="">
  						<label for="exampleFormControlInput1" class="form-label">Họ và tên</label>
  						<input type="text" name ="hoten" class="form-control" id="exampleFormControlInput1">
					</div>

                    <div class="mb-3" data-validate="">
  						<label for="exampleFormControlInput1" class="form-label">Số điện thoại</label>
  						<input type="text" name = "sdt" class="form-control" id="exampleFormControlInput1" >
					</div>

                    <div class="mb-3" data-validate="">
  						<label for="exampleFormControlInput1" class="form-label" data-validate = "Valid email is required: ex@abc.xyz">Email</label>
  						<input type="text" name="email" class="form-control" id="exampleFormControlInput1" >
					</div>
                    <div class="mb-3" data-validate="">
  						<label for="exampleFormControlInput1" class="form-label">Địa chỉ</label>
  						<input type="text" name = "diachi" class="form-control" id="exampleFormControlInput1" >
					</div>
                    <div class="mb-3" data-validate="">
  						<label for="exampleFormControlInput1" class="form-label">Mật khẩu</label>
  						<input type="password" name="pass" class="form-control" id="exampleFormControlInput1" >
					</div>

                    <!-- <div class="mb-3" data-validate="">
  						<label for="exampleFormControlInput1" class="form-label">Nhập lại mật khẩu</label>
  						<input type="password" name="re-pass" class="form-control" id="exampleFormControlInput1" >
					</div> -->
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Đăng ký
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