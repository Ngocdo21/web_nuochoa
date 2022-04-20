<?php 

    if(!isset($_SESSION['ten_user'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_product'])){
        
        $edit_id = $_GET['edit_product'];
        
        $get_p = "select * from sanpham where id_sanpham='$edit_id'";
        
        $run_edit = mysqli_query($links,$get_p);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $p_id = $row_edit['id_sanpham'];
        
        $p_title = $row_edit['ten_sanpham'];
        
        $p_cat = $row_edit['id_nhanhang'];
        
        $cat = $row_edit['id_phanloai'];
        
        $p_image = $row_edit['anh_sanpham'];   
        
        $p_price = $row_edit['gia_sanpham'];

        $p_quantity = $row_edit['so_luong'];

        $p_keywords = $row_edit['tukhoa_sanpham'];
        
        $p_desc = $row_edit['mota_sanpham'];
        
    }
        
        $get_p_cat = "select * from thuonghieu where id_nhanhang='$p_cat'";
        
        $run_p_cat = mysqli_query($links,$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['ten_nhanhang'];
        
        $get_cat = "select * from phanloai where id_phanloai='$cat'";
        
        $run_cat = mysqli_query($links,$get_cat);
        
        $row_cat = mysqli_fetch_array($run_cat);
        
        $cat_title = $row_cat['ten_phanloai'];

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
                
                <i class="fa fa-dashboard"></i> Danh mục / Sửa thông tin sản phẩm
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Thêm sản phẩm 
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Tên sản phẩm </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_title" type="text" class="form-control" required value="<?php echo $p_title; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Hãng sản xuất </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <select name="product_cat" class="form-control"><!-- form-control Begin -->
                              
                              <option value="<?php echo $p_cat; ?>"> <?php echo $p_cat_title; ?> </option>
                              
                              <?php 
                              
                              $get_p_cats = "select * from thuonghieu";
                              $run_p_cats = mysqli_query($links,$get_p_cats);
                              
                              while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                  
                                  $p_cat_id = $row_p_cats['id_nhanhang'];
                                  $p_cat_title = $row_p_cats['ten_nhanhang'];
                                  
                                  echo "
                                  
                                  <option value='$p_cat_id'> $p_cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Loại </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <select name="cat" class="form-control"><!-- form-control Begin -->
                              
                              <option value="<?php echo $cat; ?>"> <?php echo $cat_title; ?> </option>
                              
                              <?php 
                              
                              $get_cat = "select * from phanloai";
                              $run_cat = mysqli_query($links,$get_cat);
                              
                              while ($row_cat=mysqli_fetch_array($run_cat)){
                                  
                                  $cat_id = $row_cat['id_phanloai'];
                                  $cat_title = $row_cat['ten_phanloai'];
                                  
                                  echo "
                                  
                                  <option value='$cat_id'> $cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Hình ảnh sản phẩm </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img" type="file" class="form-control" required>
                          
                          <br>
                          
                          <img width="70" height="70" src="product_images/<?php echo $p_image; ?>" alt="<?php echo $p_image; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   
                   
                   
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Giá sản phẩm </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_price" type="text" class="form-control" required value="<?php echo $p_price; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->

                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Số lượng </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_quantity" type="text" class="form-control" required value="<?php echo $p_quantity; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Từ khóa sản phẩm </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_keywords" type="text" class="form-control" required value="<?php echo $p_keywords; ?>">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Mô tả sản phẩm </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <textarea name="product_desc" cols="19" rows="6" class="form-control">
                              
                              <?php echo $p_desc; ?>
                              
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
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];
    $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];
    
    $product_img = $_FILES['product_img']['name'];
    
    
    $temp_name = $_FILES['product_img']['tmp_name'];
    
    move_uploaded_file($temp_name,"product_images/$product_img");
    
    $update_product = "update sanpham set id_nhanhang='$product_cat',id_phanloai='$cat',ngay_nhap=NOW(),ten_sanpham='$product_title',anh_sanpham='$product_img',tukhoa_sanpham='$product_keywords',mota_sanpham='$product_desc',gia_sanpham='$product_price',so_luong='$product_quantity' where id_sanpham='$p_id'";
    
    $run_product = mysqli_query($links,$update_product);
    
    if($run_product){
        
       echo "<script>alert('Cập nhật thành công')</script>"; 
        
       echo "<script>window.open('index.php?view_products','_self')</script>"; 
        
    }
    
}

?>


<?php } ?>