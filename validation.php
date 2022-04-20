<?php
session_start();
$links = new mysqli('localhost','root','','nuochoa') or die ('Kết nối thất bại');  
    mysqli_query($links,'SET NAME UTF8');

$user_name = $_POST['user_name'];

$pass = $_POST['pass'];

$query = "select * from khachhang where ten_user = '$user_name' && matkhau = '$pass'";

$result  = mysqli_query($links,$query);

$num = mysqli_num_rows($result);

$item = mysqli_fetch_array($result);

if($num == 1){
	//echo "<script>alert('Tên đăng nhập đã tồn tại!')</script>";
	echo "<script>window.open('taikhoan1.php?ten=$user_name','_self')</script>";
}else{
	echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu')</script>";
        echo "<script>window.open('login.php','_self')</script>";
}
?>