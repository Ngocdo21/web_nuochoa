<?php

  require 'admin_area/includes/db.php';

  $sql = "SELECT * FROM khachhang";

  $result = mysqli_query($links, $sql);
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
          
   
   <div id="content">
       <div class="container">
           <div class="col-md-12">
               
               <ul class="breadcrumb">
                   <li>
                       <a href="index.php">Trang</a>
                   </li>
                   <li>
                       Khách hàng
                   </li>
               </ul>
               
           </div>
           
           <div class="col-md-3">
   
               
           </div>
           
           <div class="col-md-12">
              <!--  <div class="box">
                   <h1>Nước Hoa Nam</h1>
                   <p>
                   Nam tính, lịch lãm hay lãng mạn bất kể bạn thuộc tuýt đàn ông nào đi nữa. Với hàng trăm mẫu sản phẩm được chọn lựa kỹ phù hợp với thời tiết Việt Nam, shop không khiển bạn phải thất vọng. Đặt mua nước hoa nam, Shop luôn cam kết 100% sản phẩm tại shop là chính hãng. Trường hợp bạn phát hiển shop bán hàng fake, hàng kém chất lượng shop sẽ đến bù 500% giá trị sản phẩm cho bạn.
                   </p>
               </div> -->
               
               <div class="row">
                   <div class="col-md-4 col-sm-6 center-responsive">
                       
                       <div class="product">
                        <?php
                          if(mysqli_num_rows($result) > 0) {
                          while ($value = mysqli_fetch_assoc($result)) {
                            
                          ?>

                          <a href="chitietSP.php">
                       
                          <img class="img-responsive" src="img/creedaventus.jpg" alt="Product 1">
                       
                      </a>
                   
                   <div class="text">
                       
                       <h3>
                          
                           <?php echo $value['ten_sanpham']?>
                       </h3>
                       
                       <p class="price"><?php echo $value['gia_sanpham']?></p>
                       
                       <p class="button">
                           
                           <a href="chitietsp1.php?id=<?php echo $value['id_sanpham']?>" class="btn btn-default">Chi tiết</a>
                       <!--     <input type="number" name="" value="1"> -->
                            <!-- <a href="giohang1.php?id=<?php echo $value['id_sanpham']?>&&  " class="btn btn-primary">
                               
                               <i class="fa fa-shopping-cart">
                               Thêm vào giỏ hàng
                               </i>
                               </a>  -->
                               
                           
                           <!-- & action = 'add' -->
                       </p>
                       
                   </div>
                   <?php
                        }
                        }
                        ?>
                   
               </div>
              
                   </div>
               
               </div>
               
               <center>
                   <ul class="pagination">
                       <li class="active;"><a href="#">First Page</a></li>
                       <li><a href="#">1</a></li>
                       <li><a href="#">2</a></li>
                       <li><a href="#">3</a></li>
                       <li><a href="#">4</a></li>
                       <li><a href="#">5</a></li>
                       <li><a href="#">Last Page</a></li>
                   </ul>
               </center>
               
           </div>
           
       </div>
   </div>
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
<?php 

    if(isset($_GET['edit_khachhang'])){
        
        $edit_khachhang_id = $_GET['edit_khachhang'];
        
        $edit_khachhang_query = "select * from khachhang where id_khachhang='$edit_khachhang_id'";
        
        $run_edit = mysqli_query($links,$edit_khachhang_query);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $id = $row_edit['id_khachhang'];
        
        $hoten = $row_edit['hoten'];
        
        $sdt = $row_edit['sdt'];

        $email = $row_edit['email'];
        
        $diachi = $row_edit['diachi'];
        
    }

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Product Category
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

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
                        
                            <input value=" <?php echo $hoten ?> " name="hoten" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Số điện thoại
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $sdt ?> " name="sdt" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Email
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $email ?> " name="email" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Địa chỉ
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $diachi ?> " name="diachi" type="text" class="form-control">
                        
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

          if(isset($_POST['update'])){
              
              $hoten = $_POST['hoten'];
              
              $sdt = $_POST['sdt'];

              $email = $_POST['email'];
              
              $diachi = $_POST['diachi'];
              
              $update = "update khachhang set hoten='$hoten',sdt='$sdt', email='$email', diachi='$diachi' where id_khachhang='$id'";
              
              $run_p_cat = mysqli_query($links,$update);
              
              if($run_p_cat){
                  
                  echo "<script>alert('Cập nhật thành công')</script>";
                  
                  echo "<script>window.open('index.php?view_khachhang','_self')</script>";
                  
              }
              
          }

?>



<?php } ?> 