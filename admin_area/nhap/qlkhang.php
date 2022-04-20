<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Menu</title>
  <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="wrapper">
    <div id="content">
       <div class="container">
          
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           
           <div class="col-md-9" style="margin-top:30px; margin-left: 200px;">
            <h2 style="margin-bottom: 20px;">QUẢN LÝ KHÁCH HÀNG</h2>
            <form action="" method="get">
            <div class="col-md-4 mb-3">
              <?php
                include("includes/db.php");
                if(isset($_GET['q']) && !empty($_GET['q'])){
                  $keyword = $_GET['q'];
                  $sql = "select * from khachhang where id_khachhang like '%$keyword%' or tenkhachhang like '%$keyword%' or sdt like '%$keyword%' or email like '%$keyword%' or diachi like '%$keyword%'";
                }else{
                  $sql = "select * from khachhang";
                }
                $qr = mysqli_query($conn, $sql) or die("Câu truy vấn sai");
              ?>
              <input type="text" name="q" class="form-control" id="address" placeholder="Tìm kiếm khách hàng" value="<?php if(isset($_GET['q'])) { echo $_GET['q']; } ?>" > 
            </div>
            <div class="col-md-4 mb-3">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Lọc</button>
            </div>
            </form>
            <div class="col col-xs-6 text-right" style="margin: 20px;"> 
            <a href="themkhachhang.php" type="button" class="btn btn-sm btn-primary btn-create">Thêm mới</a> 
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
              while ($rs = mysqli_fetch_array($qr)){
                echo "<tr>";
                echo "<td>".$rs["id_khachhang"];
                echo "<td>".$rs["tenkhachhang"];
                echo "<td>".$rs["sdt"];
                echo "<td>".$rs["email"];
                echo "<td>".$rs["diachi"];
                echo "<td class='actions'>
                        <a href='chinhsua.php?id_khachhang=".$rs['id_khachhang']." '><button class='btn btn-info btn-sm'>SỬA</button></a> 
                        <a href='xoakhachhang.php?id_khachhang=".$rs['id_nhanhang']."'><button class='btn btn-danger btn-sm'>XÓA</button></a>
                      </td>";
                echo "</tr>";
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