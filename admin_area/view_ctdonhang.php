<?php 
    
    if(!isset($_SESSION['ten_user'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Danh mục / Xem chi tiết đơn hàng
                
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
                                <th> ID chi tiết đơn hàng </th>
                                <th> ID đơn hàng </th>
                                <th> ID sản phẩm </th>
                                <th> Số lượng </th>
                                <th> Giá </th>
                                <th> Thành tiền </th>
                                <th> Ngày bán </th>
                                <th> Xóa </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        <tbody>
                          <?php
                            $id = $_GET['view_ctdonhang'];

                            $sql = "SELECT * FROM chitietdonhang WHERE id_donhang = '$id'";

                            $result = mysqli_query($links, $sql);
                            if(mysqli_num_rows($result) > 0) {
                              while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                  <tr> 
                                    <td data-th="Price"><?php echo $row['id_chitietdonhang'] ?></td>
                                    <td data-th="Price"><?php echo $row['id_donhang'] ?></td> 
                                    <td data-th="Quantity"><?php echo $row['id_sanpham'] ?></td> 
                                    <td data-th="Subtotal" ><?php echo $row['soluong'] ?></td> 
                                    <td data-th="Subtotal" ><?php echo $row['gia'] ?></td> 
                                    <td data-th="Subtotal" ><?php echo $row['thanhtien'] ?></td> 
                                    <td data-th="Subtotal" ><?php echo $row['ngay_ban'] ?></td> 
                                    <td class="actions" >
                                      <!-- <a href="qltrahang.php"> <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button> </a> -->
                                      <!-- <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button>  -->
                                     <!--  <button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button> -->
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