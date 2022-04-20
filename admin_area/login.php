<?php 

    session_start();
    include("includes/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nước hoa</title>
    <link rel="shortcut icon" type="image/webp" href="product_images/icon.webp">
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
   
   <div class="container"><!-- container begin -->
       <form action="" class="form-login" method="post"><!-- form-login begin -->
           <h2 class="form-login-heading"> Admin Login </h2>
           
           <input type="text" class="form-control" placeholder="Email Address" name="ten_user" required>
           
           <input type="password" class="form-control" placeholder="Your Password" name="password" required>
           
           <button type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login"><!-- btn btn-lg btn-primary btn-block begin -->
               
               Login
               
           </button><!-- btn btn-lg btn-primary btn-block finish -->
           
       </form><!-- form-login finish -->
   </div><!-- container finish -->
    
</body>
</html>


<?php 

    if(isset($_POST['admin_login'])){
        
        $admin_email = mysqli_real_escape_string($links,$_POST['ten_user']);
        
        $admin_pass = mysqli_real_escape_string($links,$_POST['password']);
        
        $get_admin = "select * from user where ten_user='$admin_email' AND password='$admin_pass'";
        
        $run_admin = mysqli_query($links,$get_admin);
        
        $count = mysqli_num_rows($run_admin);
        
        if($count==1){
            
            $_SESSION['ten_user']=$admin_email;
            
            echo "<script>alert('Chào mừng trở lại')</script>";
            
            echo "<script>window.open('index.php?dashboard','_self')</script>";
            
        }else{
            
            echo "<script>alert('Email or Password is Wrong !')</script>";
            
        }
        
    }

?>