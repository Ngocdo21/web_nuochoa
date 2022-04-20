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
        <h2 style="margin-bottom: 20px;">PHÂN LOẠI THEO GIỚI TÍNH</h2>
        <div class="col col-xs-6 text-right" style="margin: 20px;"> 
          <a href="themmoiloai.php" type="button" class="btn btn-sm btn-primary btn-create">Thêm mới</a> 
        </div>
        <div class="profile-content">
          <?php
          include("includes/db.php");
          $qr = mysqli_query($links,"select * from phanloai") or die("lỗi truy vấn1");
          ?>
          <table id="cart" class="table table-hover table-condensed"> 
            <thead> 
              <tr> 
                <th style="width:15%">Mã giới tính</th> 
                <th style="width:20%">Tên giới tính</th> 
                <th style="width:40%">Mô tả</th>
                <th style="width:10%" >Thao tác</th> 
              </tr> 
            </thead> 
            <tbody>
              <?php
              while ($rs = mysqli_fetch_array($qr)){
              ?>
                <tr>
                  <td><?php echo $rs['id_phanloai'] ?></td>
                  <td><?php echo $rs['ten_phanloai'] ?></td>
                  <td><?php echo $rs['mota_phanloai'] ?></td>
                  <td class="actions">
                    <a href="sualoai.php?id_phanloai=<?php echo $rs['id_phanloai'] ?>"><button class='btn btn-info btn-sm'>Chỉnh sửa</button></a>
                    <a href="includes/xoaloai.php?id_phanloai=<?php echo $rs['id_phanloai'] ?>"><button class='btn btn-danger btn-sm'>Xóa</button></a>
                  </td>
                </tr>
              <?php
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