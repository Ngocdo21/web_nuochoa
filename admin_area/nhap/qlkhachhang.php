<?php

  require 'includes/db.php';

  $sql = "SELECT * FROM khachhang";

  $result = mysqli_query($links, $sql);

    // if(isset($_GET['delete_id']))
    // {
    //    $sql_query="DELETE FROM khachhang WHERE id_khachhang =".$_GET['delete_id'];
    //    mysqli_query($links, $sql_query);
    //    header("Location: $_SERVER[PHP_SELF]");
    //   include("xoakhachhang.php");
    // }


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
              <h2 style="margin-bottom: 20px;">QUẢN LÝ KHÁCH HÀNG</h2>
            <div class="row">
            <div class="col-md-4 mb-3">
              <select class="custom-select d-block w-100" id="country" >
                <option value="">Lọc khách hàng</option>
              </select>
            </div>
            <div class="col-md-4 mb-3">
              <input type="text" class="form-control" id="address" placeholder="Tìm kiếm khách hàng" > 
            </div>
            <div class="col-md-4 mb-3">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Lọc</button>
            </div>
            <div class="col col-xs-6 text-right" style="margin: 20px;"> 
            <a href="khachhang/themkhachhang.php" type="button" class="btn btn-sm btn-primary btn-create">Thêm mới</a> 
          </div>
            <div class="profile-content">
          <table id="cart" class="table table-hover table-condensed"> 
      <thead> 
        <tr>
          <th style="width:15%">Mã khách hàng</th> 
          <th style="width:15%">Họ tên</th> 
          <th style="width:12%">Số điện thoại</th> 
          <th style="width:18%" >Email</th> 
          <th style="width:30%">Địa chỉ</th> 
          <th style="width:10%"> Thao Tác</th>
        </tr> 
      </thead> 
      <tbody>
        <?php
          if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <tr> 
                  <td data-th="Price"><?php echo $row['id_khachhang'] ?></td> 
                  <td data-th="Quantity"><?php echo $row['tenkhachhang'] ?></td> 
                  <td data-th="Subtotal" ><?php echo $row['sdt'] ?></td> 
                  <td data-th="Subtotal" ><?php echo $row['email'] ?></td> 
                  <td data-th="Subtotal" ><?php echo $row['diachi'] ?></td> 
                  <td class="actions" >
                    <a href="khachhang/cskhachhang.php?id_khachhang=<?php echo $row['id_khachhang']; ?>" name ="update"> <button class="btn btn-info btn-sm">Chỉnh Sửa</button> </a>
                    
                    <a href="khachhang/xoa.php?id_khachhang=<?php echo $row['id_khachhang']; ?>" >
                      <button class="btn btn-danger">Xóa</button></a>

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
	<!--  -->   <!-- <script src="js/jquery-331.min.js"></script>     
  <script src="js/bootstrap-337.min.js"></script>  -->
  <!-- <script>
    function delete_id(id_khachhang) {
        if (confirm('Bạn có đồng ý xóa sản phẩm ?')) {
            window.location.href = 'qlkhachhang.php?delete_id=' + id_khachhang;
        }
    }
</script> -->
</body>
</html>
