 <!-- <?php 
    
    if(!isset($_SESSION['ten_user'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>  -->

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Danh mục / Xem danh sách khách hàng
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  Xem danh mục khách hàng
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> ID khách hàng: </th>
                                <th> Tên khách hàng: </th>
                                <th> Số điện thoại: </th>
                                <th> Email: </th>
                                <th> Địa chỉ: </th>
                                <!-- <th> Từ khóa: </th>
                                <th> Ngày nhập: </th>
                                <th> Số lượng: </th>
                                <th> Xóa Sản phẩm: </th>
                                <th> Sửa Sản phẩm: </th> -->
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        <tbody>
                            <?php
                                // require 'includes/db.php';

                              $sql = "SELECT * FROM khachhang";

                              $result = mysqli_query($links, $sql);
                              if(mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                  ?>
                                    <tr> 
                                      <td data-th="Price"><?php echo $row['id_khachhang'] ?></td> 
                                      <td data-th="Quantity"><?php echo $row['hoten'] ?></td> 
                                      <td data-th="Subtotal" ><?php echo $row['sdt'] ?></td> 
                                      <td data-th="Subtotal" ><?php echo $row['email'] ?></td> 
                                      <td data-th="Subtotal" ><?php echo $row['diachi'] ?></td> 
                                      <td >
                                     <a href="index.php?delete_khachhang=<?php echo $row['id_khachhang']; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Xóa
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_khachhang=<?php echo $row['id_khachhang']; ?>">
                                     
                                        <i class="fa fa-pencil"></i> Sửa
                                    
                                     </a> 
                                      </td> 
                                    </tr> 
                                  <?php
                                }
                              }
                            ?>
                          </tbody>
                        
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>