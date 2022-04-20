 <?php 
    
    if(!isset($_SESSION['ten_user'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>  

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Danh mục / Xem danh sách sản phẩm
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  Xem danh mục sản phẩm
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> ID Sản phẩm: </th>
                                <th> Tên sản phẩm: </th>
                                <th> Hình ảnh: </th>
                                <th> Giá: </th>
                               <!--  <th> Đã bán: </th> -->
                                <th> Từ khóa: </th>
                                <th> Ngày nhập: </th>
                                <th> Số lượng: </th>
                                <th> Xóa Sản phẩm: </th>
                                <th> Sửa Sản phẩm: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_pro = "select * from sanpham";
                                
                                $run_pro = mysqli_query($links,$get_pro);
          
                                while($row_pro=mysqli_fetch_array($run_pro)){
                                    
                                    $pro_id = $row_pro['id_sanpham'];
                                    
                                    $pro_title = $row_pro['ten_sanpham'];
                                    
                                    $pro_img = $row_pro['anh_sanpham'];
                                    
                                    $pro_price = $row_pro['gia_sanpham'];

                                    $pro_quantity= $row_pro['so_luong'];

                                    $pro_keywords = $row_pro['tukhoa_sanpham'];
                                    
                                    $pro_date = $row_pro['ngay_nhap'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $pro_title; ?> </td>
                                <td> <img src="product_images/<?php echo $pro_img; ?>" width="60" height="60"></td>
                                <td> $ <?php echo $pro_price; ?> </td>
                                <td> <?php echo $pro_keywords; ?> </td>
                                <td> <?php echo $pro_date ?> </td>
                                <td> <?php echo $pro_quantity ?> </td>
                                <td> 
                                     
                                     <a href="index.php?delete_product=<?php echo $pro_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Xóa
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_product=<?php echo $pro_id; ?>">
                                     
                                        <i class="fa fa-pencil"></i> Sửa
                                    
                                     </a> 
                                    
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>