<?php 

    session_start();
    include("includes/db.php");
    
      if(!isset($_SESSION['ten_user'])){
        
          echo "<script>window.open('login.php','_self')</script>";
        
      }else{
        
         $admin_session = $_SESSION['ten_user'];
        
         $get_admin = "select * from user where ten_user='$admin_session'";
        
         $run_admin = mysqli_query($links,$get_admin);
        
         $row_admin = mysqli_fetch_array($run_admin);
        
         $admin_id = $row_admin['id_user'];
        
    //     $admin_name = $row_admin['admin_name'];
        
         $admin_email = $row_admin['ten_user'];
        
    //     $admin_image = $row_admin['admin_image'];
        
    //     $admin_country = $row_admin['admin_country'];
        
    //     $admin_about = $row_admin['admin_about'];
        
    //     $admin_contact = $row_admin['admin_contact'];
        
    //     $admin_job = $row_admin['admin_job'];
        
         $get_products = "select * from sanpham";
        
         $run_products = mysqli_query($links,$get_products);
        
         $count_products = mysqli_num_rows($run_products);
        
    //     $get_customers = "select * from customers";
        
    //     $run_customers = mysqli_query($con,$get_customers);
        
    //     $count_customers = mysqli_num_rows($run_customers);
        
         $get_p_categories = "select * from thuonghieu";
        
         $run_p_categories = mysqli_query($links,$get_p_categories);
        
         $count_p_categories = mysqli_num_rows($run_p_categories);


         $get_donhang = "select * from donhang";
        
         $run_donhang = mysqli_query($links,$get_donhang);
        
         $count_donhang = mysqli_num_rows($run_donhang);


         $get_khachhang = "select * from khachhang";
        
         $run_khachhang = mysqli_query($links,$get_khachhang);
        
         $count_khachhang = mysqli_num_rows($run_khachhang);
        
    //     $get_pending_orders = "select * from pending_orders";
        
    //     $run_pending_orders = mysqli_query($con,$get_pending_orders);
        
    //     $count_pending_orders = mysqli_num_rows($run_pending_orders);

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
</head>
<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
            <?php
                
                if(isset($_GET['dashboard'])){
                        
                    include("dashboard.php");
                    
            }   if(isset($_GET['insert_product'])){
                    
                    include("insert_product.php");
                    
            }   if(isset($_GET['view_products'])){
                    
                    include("view_products.php");
                    
            }   if(isset($_GET['delete_product'])){
                    
                    include("delete_product.php");
                    
            }   if(isset($_GET['edit_product'])){
                    
                    include("edit_product.php");
                    
            }   if(isset($_GET['insert_p_cat'])){
                    
                    include("insert_p_cat.php");
                    
            }   if(isset($_GET['view_p_cats'])){
                    
                    include("view_p_cats.php");
                    
            }   if(isset($_GET['delete_p_cat'])){
                    
                    include("delete_p_cat.php");
                    
            }   if(isset($_GET['edit_p_cat'])){
                    
                    include("edit_p_cat.php");
                    
            }   if(isset($_GET['insert_cat'])){
                    
                    include("insert_cat.php");
                    
            }   if(isset($_GET['view_cats'])){
                    
                    include("view_cats.php");
                    
            }   if(isset($_GET['edit_cat'])){
                    
                    include("edit_cat.php");
                    
            }   if(isset($_GET['delete_cat'])){
                    
                    include("delete_cat.php");
                    
            }   if(isset($_GET['insert_slide'])){
                    
                    include("insert_slide.php");
                    
            }   if(isset($_GET['view_slides'])){
                    
                    include("view_slides.php");
                    
            }   if(isset($_GET['delete_slide'])){
                    
                    include("delete_slide.php");
                    
            }   if(isset($_GET['edit_slide'])){
                    
                    include("edit_slide.php");
                    
            }   if(isset($_GET['view_khachhang'])){
                    
                    include("view_khachhang.php");
            }if(isset($_GET['delete_khachhang'])){
                    
                    include("delete_khachhang.php");
            }
            if(isset($_GET['edit_khachhang'])){
                    
                    include("edit_khachhang.php");
            }if(isset($_GET['insert_khachhang'])){
                    
                    include("insert_khachhang.php");
            }if(isset($_GET['view_donhang'])){
                    
                    include("view_donhang.php");
            }if(isset($_GET['view_ctdonhang'])){
                    
                    include("view_ctdonhang.php");
            } 
            if(isset($_GET['view_nguoidung'])){
                    
                    include("view_nguoidung.php");
            }if(isset($_GET['insert_nguoidung'])){
                    
                    include("insert_nguoidung.php");
            }if(isset($_GET['delete_nguoidung'])){
                    
                    include("delete_nguoidung.php");
            }if(isset($_GET['edit_nguoidung'])){
                    
                    include("edit_nguoidung.php");
            }if(isset($_GET['edit_blog'])){
                    
                    include("edit_blog.php");
            }if(isset($_GET['view_blog'])){
                    
                    include("view_blog.php");
            }if(isset($_GET['insert_blog'])){
                    
                    include("insert_blog.php");
            }if(isset($_GET['delete_blog'])){
                    
                    include("delete_blog.php");
            }if(isset($_GET['view_thongke'])){
                    
                    include("../admin_area/test/report1.php");
            }
        
                ?>
                
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>           
</body>
</html>
<?php } ?>