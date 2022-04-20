<?php
session_start();
$links = new mysqli('localhost','root','','nuochoa') or die ('Kết nối thất bại');  
    mysqli_query($links,'SET NAME UTF8');

$user_name = $_POST['user_name'];
$hoten = $_POST['hoten'];
$sdt = $_POST['sdt'];
$email = $_POST['email'];
$diachi = $_POST['diachi'];
$pass = $_POST['pass'];

$query = "select * from khachhang where ten_user = '$user_name'";

$result  = mysqli_query($links,$query);

$num = mysqli_num_rows($result);
if($num == 1){
	echo "<script>alert('tên tài khoản đã tồn tại!')</script>";
	echo "<script>window.open('customer_register.php','_self')</script>";
}else{
	// $reg = "insert into user (ten_user,password) values('$user_name','$pass')";
	// mysqli_query($con,$reg);
	$reg2 = "insert into khachhang (hoten,sdt,email,diachi,ten_user, matkhau) values('$hoten','$sdt','$email','$diachi', '$user_name', '$pass')";
	mysqli_query($links,$reg2);
	echo "<script>alert('Đăng ký thành công! Đăng nhập ngay!')</script>";
        echo "<script>window.open('login.php','_self')</script>";
}
?>