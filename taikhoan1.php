<?php

  require 'includes/db.php';

    $id = $_GET['ten'];
    $sql = "SELECT * FROM khachhang WHERE ten_user = '$id'";
    $result_set = mysqli_query($links, $sql);
    $fetched_row = mysqli_fetch_array($result_set);
  //}

          if(isset($_POST['update'])){
              
              // $id_khachhang = $_POST['id_khachhang'];
                $tenkhachhang = $_POST['hoten'];
                $sdt = $_POST['sdt'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $danhgia = $_POST['danh_gia'];
                $ten_user = $_POST['ten_user'];
                $matkhau = $_POST['matkhau'];
              
              $update = "update khachhang set hoten='$tenkhachhang',sdt='$sdt', email='$email', diachi='$diachi', danh_gia='$danhgia', ten_user ='$ten_user', matkhau='$matkhau' where ten_user='$id'";
              
              $run_p_cat = mysqli_query($links,$update);
              
              if($run_p_cat){
                  
                  echo "<script>alert('Cập nhật thành công')</script>";
                  
                  echo "<script>window.open('index.php?view_khachhang','_self')</script>";
                  
              }
              
          }
  if(isset($_POST['btn-save']))
  {
    $id_khachhang = $_POST['id_khachhang'];
    $tenkhachhang = $_POST['hoten'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $danhgia = $_POST['danh_gia'];
    $ten_user = $_POST['ten_user'];
    $matkhau = $_POST['matkhau'];
    
    $sql_query = "UPDATE khachhang SET  hoten='$tenkhachhang', sdt='$sdt', email='$email', diachi='$diachi', danh_gia = '$danhgia', ten_user ='$ten_user', matkhau = '$matkhau' WHERE id_khachhang='$id_khachhang'";
     if(mysqli_query($con, $sql_query)){
      header("location: shop.php");
    } else echo "sai!";
    
    
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nước hoa</title>
    <link rel="shortcut icon" type="image/webp" href="admin_area/product_images/icon.webp">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php 
         include("includes/header.php");
     ?>
       
     
<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-pencil fa-fw"></i> Edit Product Category
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Họ tên
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->

                            <input type="text" name="hoten" value="<?php echo $fetched_row['hoten']; ?>" >
                        
                           <!--  <input value="  " name="hoten" type="text" class="form-control"> -->
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Số điện thoại
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                            <input type="text" name="sdt" value="<?php echo $fetched_row['sdt']; ?>" >
                        
                           <!--  <input value=" " name="sdt" type="text" class="form-control"> -->
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Email
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                            <input type="text" name="email" value="<?php echo $fetched_row['email']; ?>" >
                            <!-- <input value=" " name="email" type="text" class="form-control"> -->
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Địa chỉ
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                            <input type="text" name="diachi" value="<?php echo $fetched_row['diachi']; ?>" >
                            <!-- <input value="  " name="diachi" type="text" class="form-control"> -->
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Đánh giá shop
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                            
                            <textarea type='text' name="danh_gia" id="" cols="30" rows="10" class="form-control"><?php echo $fetched_row['danh_gia']; ?>
                                
                            </textarea>
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Tên đăng nhập
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                            <input type="text" name="ten_user" value="<?php echo $fetched_row['ten_user']; ?>" >
                            <!-- <input value=" " name="ten_user" type="text" class="form-control"> -->
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Mật khẩu 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                            <input type="password" name="matkhau" value="<?php echo $fetched_row['matkhau']; ?>" >
                            <!-- <input value="" name="matkhau" type="password" class="form-control"> -->
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                             
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value="Cập nhật" name="update" type="submit" class="form-control btn btn-primary">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->
<?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>