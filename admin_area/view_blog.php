 <?php 
    
    if(!isset($_SESSION['ten_user'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>  

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Danh mục / Xem danh sách blog
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  Xem danh sách blog
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> ID blog: </th>
                                <th> Tên blog: </th>
                                <th> Hình ảnh: </th>
                                <th> Ngày đăng: </th>
                                <th> Nội dung: </th>
                                <th> Xóa blog: </th>
                                <th> Sửa blog: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                // $i=0;
                            
                                $get_pro = "select * from tintuc";
                                
                                $run_pro = mysqli_query($links,$get_pro);
          
                                while($row_pro=mysqli_fetch_array($run_pro)){
                                    
                                    $pro_id = $row_pro['id_tintuc'];
                                    
                                    $pro_title = $row_pro['ten_tintuc'];
                                    
                                    $pro_img = $row_pro['anh_tintuc'];

                                    $pro_date = $row_pro['ngay_dang'];

                                    $pro_news = $row_pro['noidung_tintuc'];
                                    
                                    
                                    // $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $pro_id; ?> </td>
                                <td> <?php echo $pro_title; ?> </td>
                                <td> <img src="product_images/<?php echo $pro_img; ?>" width="60" height="60"></td>
                                <td><?php echo $pro_date; ?> </td>
                                
                                <td> <?php echo $pro_news; ?> </td>
                                <td> 
                                     
                                     <a href="index.php?delete_blog=<?php echo $pro_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Xóa
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_blog=<?php echo $pro_id; ?>">
                                     
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