<?php

  require 'includes/db.php';

  $id = $_GET['id_donhang'];

  $sql = "SELECT * FROM chitietdonhang WHERE id_donhang = '$id'";

  $result = mysqli_query($links, $sql);


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menu</title>
  <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="wrapper">
    <?php include("includes/sidebar.php") ?>
    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="col-md-9" style="margin-top:30px; margin-left: 320px;">
              <h2 style="margin-bottom: 20px;">QUẢN LÝ CHI TIẾT ĐƠN HÀNG</h2>
             <div class="row">
            <div class="col-md-3 mb-4">
              <select class="custom-select d-block w-100" id="country" >
                <option value="">Lọc đơn hàng</option>
              </select>
            </div>
            <div class="col-md-3 mb-4">
              <select class="custom-select d-block w-100" id="country" >
                <option value="">Trạng Thái</option>
                <option>Hoàn thành</option>
                <option>Đang xử lý</option>
                <option>Đang giao</option>
                <option>Hủy đơn</option>
              </select>
            </div>
            <div class="col-md-3 mb-4">
              <input type="text" class="form-control" id="address" placeholder="Tìm kiếm đơn hàng" > 
            </div>
            <div class="col-md-3 mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit" style="margin-bottom :20px;">Lọc</button>
            </div>
            <div class="profile-content"  >
          <table id="cart" class="table table-hover table-condensed" > 
      <thead> 
        <tr> 
          <th style="width:10%">Mã chi tiết đơn hàng</th> 
          <th style="width:20%">Mã hóa đơn</th> 
          <th style="width:15%">Mã sản phẩm</th> 
          <th style="width:15%" >Số lượng</th> 
          <th style="width:10%">Giá bán</th> 
          <th style="width:10%"> Thành tiền</th>
          <th style="width:20%"> Ngày mua</th>
        </tr> 
      </thead> 
      <tbody>
        <?php
          $id = $_GET['id_donhang'];

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
  </table> 
        </div>    
      </div>   
      </div>
      </div>
    </div>
  </div>
  <script src="js/jquery-331.min.js"></script>     
  <script src="js/bootstrap-337.min.js"></script>    
</body>
</html>