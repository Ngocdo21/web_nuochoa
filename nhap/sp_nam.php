<?php

  require 'admin_area/includes/db.php';

  $sql = "SELECT * FROM sanpham";

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
   
   <div id="top">
       
       <div class="container">
           
           <div class="col-md-6 offer">
               
               <a href="#" class="btn btn-success btn-sm">Welcome</a>
               <a href="checkout.php">4 Items In Your Cart | Total Price: $300 </a>
               
           </div>
           
           <div class="col-md-6">
               
               <ul class="menu">
                   
                   <li>
                       <a href="customer_register.php">Register</a>
                   </li>
                   <li>
                       <a href="checkout.php">My Account</a>
                   </li>
                   <li>
                       <a href="cart.php">Go To Cart</a>
                   </li>
                   <li>
                       <a href="checkout.php">Login</a>
                   </li>
                   
               </ul>
               
           </div>
           
       </div>
       
   </div>
   
   <div id="navbar" class="navbar navbar-default">
       
       <div class="container">
           
           <div class="navbar-header">
               
               <a href="index.php" class="navbar-brand home">
                   
                    <img src="images/logo.png" style="margin-top:-20px;width: 275px;height: 100px;" alt="M-dev-Store Logo" class="hidden-xs">
                   <img src="images/logo.png" style="width: 275px;height: 100px;" alt="M-dev-Store Logo Mobile" class="visible-xs">
                   
               </a>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div>
           
           <div class="navbar-collapse collapse" id="navigation">
               
               <div class="padding-nav">
                   
                   <ul class="nav navbar-nav left">
                       
                       <li>
                           <a href="index.php">Trang chủ</a>
                       </li>
                       <li class="active">
                           <a href="sanpham.php">Sản phẩm</a>
                       </li>
                       <li>
                           <a href="checkout.php">Tài khoản</a>
                       </li>
                       <li>
                           <a href="cart.php">Giỏ hàng</a>
                       </li>
                       <li>
                           <a href="contact.php">Tin tức</a>
                       </li>
                       
                   </ul>
                   
               </div>
               
               <a href="cart.php" class="btn navbar-btn btn-primary right">
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span>4 Items In Your Cart</span>
                   
               </a>
               
               <div class="navbar-collapse collapse right">
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                       
                       <span class="sr-only">Toggle Search</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button>
                   
               </div>
               
               <div class="collapse clearfix" id="search">
                   <form method="get" action="results.php" class="navbar-form">
                       
                       <div class="input-group">
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn">
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary">
                               
                               <i class="fa fa-search"></i>
                               
                           </button>
                           
                           </span>
                           
                       </div>
                       
                   </form>
                   
               </div>
               
           </div>
           
       </div>
       
   </div>
   
   <div id="content">
       <div class="container">
           <div class="col-md-12">
               
               <ul class="breadcrumb">
                   <li>
                       <a href="index.php">Trang</a>
                   </li>
                   <li>
                       Sản phẩm
                   </li>
               </ul>
               
           </div>
           
           <div class="col-md-3">
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div>
           
           <div class="col-md-9">
               <div class="box">
                   <h1>Nước Hoa Nam</h1>
                   <p>
                   Nam tính, lịch lãm hay lãng mạn bất kể bạn thuộc tuýt đàn ông nào đi nữa. Với hàng trăm mẫu sản phẩm được chọn lựa kỹ phù hợp với thời tiết Việt Nam, shop không khiển bạn phải thất vọng. Đặt mua nước hoa nam, Shop luôn cam kết 100% sản phẩm tại shop là chính hãng. Trường hợp bạn phát hiển shop bán hàng fake, hàng kém chất lượng shop sẽ đến bù 500% giá trị sản phẩm cho bạn.
                   </p>
               </div>
               
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