<?php 

    if(!isset($_SESSION['ten_user'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_blog'])){
        
        $edit_id = $_GET['edit_blog'];
        
        $get_p = "select * from tintuc where id_tintuc='$edit_id'";
        
        $run_edit = mysqli_query($links,$get_p);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $p_id = $row_edit['id_tintuc'];
        
        $p_title = $row_edit['ten_tintuc'];
        
        $p_image = $row_edit['anh_tintuc'];   
        
        $p_date = $row_edit['ngay_dang'];

        $p_news = $row_edit['noidung_tintuc'];
        
    }
        
        // $get_p_cat = "select * from thuonghieu where id_nhanhang='$p_cat'";
        
        // $run_p_cat = mysqli_query($links,$get_p_cat);
        
        // $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        // $p_cat_title = $row_p_cat['ten_nhanhang'];
        
        // $get_cat = "select * from phanloai where id_phanloai='$cat'";
        
        // $run_cat = mysqli_query($links,$get_cat);
        
        // $row_cat = mysqli_fetch_array($run_cat);
        
        // $cat_title = $row_cat['ten_phanloai'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Products </title>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Danh mục / Sửa thông tin blog
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Thêm blog 
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Tên blog </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_title" type="text" class="form-control" required value="<?php echo $p_title; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Hình ảnh tin tức </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img" type="file" class="form-control" required>
                          
                          <br>
                          
                          <img width="70" height="70" src="product_images/<?php echo $p_image; ?>" alt="<?php echo $p_image; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   
                   
                   
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Ngày đăng </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_price" type="text" class="form-control" required value="<?php echo $p_date; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Nội dung tin tức </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <textarea name="product_desc" cols="19" rows="6" class="form-control">
                              
                              <?php echo $p_news; ?>
                              
                          </textarea>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="update" value="Cập nhật" type="submit" class="btn btn-primary form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
   
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
</body>
</html>


<?php 

if(isset($_POST['update'])){
    
    $product_title = $_POST['product_title'];
    $product_date = $_POST['product_price'];
    $product_news = $_POST['product_desc'];
    
    $product_img = $_FILES['product_img']['name'];
    
    
    $temp_name = $_FILES['product_img']['tmp_name'];
    
    move_uploaded_file($temp_name,"product_images/$product_img");
    
    $update_product = "update tintuc set ten_tintuc='$product_title',anh_tintuc='$product_img',ngay_dang='$productt_date',noidung_tintuc='$product_news' where id_tintuc='$p_id'";
    
    $run_product = mysqli_query($links,$update_product);
    
    if($run_product){
        
       echo "<script>alert('Cập nhật thành công')</script>"; 
        
       echo "<script>window.open('index.php?view_blog','_self')</script>"; 
        
    }
    
}

?>


<?php } ?>