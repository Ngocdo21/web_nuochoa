<?php

  require 'includes/db.php';

  $sql = "SELECT * FROM ctdonhang";

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
            <h2 style="margin-bottom: 20px;">CHI TIẾT ĐƠN HÀNG</h2>
            <!-- <div class="col-md-4 mb-3">
              <select class="custom-select d-block w-100" id="country" >
                <option value="">Lọc đơn hàng</option>
              </select>
            </div>
            <div class="col-md-4 mb-3">
              <input type="text" class="form-control" id="address" placeholder="Tìm kiếm đơn hàng" > 
            </div>
            <div class="col-md-4 mb-3">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Lọc</button>
            </div> -->
            <div class="profile-content">
          <table id="cart" class="table table-hover table-condensed"> 
      <thead> 
        <tr> 
          <th style="width:15%">Mã đơn hàng</th> 
          <th style="width:15%">Tên khách hàng</th> 
          <th style="width:15%">Tên sản phẩm</th> 
          <th style="width:10%" >Số lượng</th> 
          <th style="width:15%">Gía</th> 
          <th style="width:15%">Thành tiền</th>
          <th style="width:15%">Thao tác</th>
        </tr> 
      </thead> 
      <tbody>
        <?php
          if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <tr> 
                  <td data-th="Price"><?php echo $row['madonhang'] ?></td> 
                  <td data-th="Quantity"><?php echo $row['tenkhachhang'] ?></td> 
                  <td data-th="Subtotal" ><?php echo $row['tensanpham'] ?></td> 
                  <td data-th="Subtotal" ><?php echo $row['soluong'] ?></td> 
                  <td data-th="Subtotal" ><?php echo $row['gia'] ?></td> 
                  <td data-th="Subtotal" ><?php echo $row['thanhtien'] ?></td> 
                  <td class="actions" >
                    <!-- <a href="delete.php?makhachhang=<?php echo $row['makhachhang']; ?>"> <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button> </a> -->
                    <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button> 
                    <button class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>
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
	<script src="js/jquery-331.min.js"></script>     
	<script src="js/bootstrap-337.min.js"></script>    
</body>
</html>