<?php 
    
    if(!isset($_SESSION['ten_user'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Danh mục / Xem đơn hàng
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags fa-fw"></i> Xem danh sách đơn hàng
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> ID đơn hàng </th>
                                <th> Tên khách hàng </th>
                                <th> Số điện thoại </th>
                                <th> Địa chỉ </th>
                                <th> Ngày tạo đơn </th>
                                <th> Tổng tiền </th>
                                <th> Ghi chú </th>
                                <th> Xem chi tiết </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM donhang";

                                $result = mysqli_query($links, $sql);
                              if(mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                  ?>
                                    <tr> 
                                      <td data-th="Price"><?php echo $row['id_donhang'] ?></td> 
                                      <td data-th="Quantity"><?php echo $row['ten_khachhang'] ?></td> 
                                      <td data-th="Subtotal" ><?php echo $row['sdt'] ?></td> 
                                      <td data-th="Subtotal" ><?php echo $row['diachi'] ?></td> 
                                      <td data-th="Subtotal" ><?php echo $row['ngaytaodon'] ?></td> 
                                      <td data-th="Subtotal" ><?php echo $row['tongtien'] ?></td> 
                                      <td data-th="Subtotal" ><?php echo $row['ghichu'] ?></td> 
                                      <td >
                                     <a href="index.php?view_ctdonhang=<?php echo $row['id_donhang']; ?>">
                                     
                                        <i class="glyphicon glyphicon-eye-open"></i> Xem chi tiết 
                                    
                                     </a> 
                                     
                                </td>
                                    </tr> 
                                  <?php
                                }
                              }
                            ?>
                          </tbody>
                       
                        
                    </table><!-- tabel tabel-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


<?php } ?>