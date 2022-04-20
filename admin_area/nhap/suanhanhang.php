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
        <h2 style="margin-bottom: 20px;">SỬA NHÃN HÀNG</h2>
        <div class="profile-content">
          <table id="cart" class="table table-hover table-condensed"> 
            <thead> 
              <tr> 
                <th style="width:15%">Mã nhãn hàng</th> 
                <th style="width:20%">Tên nhãn hàng</th> 
                <th style="width:30%">Mô tả</th>
              </tr> 
            </thead>
            <?php
                $id = $_GET['id_nhanhang'];
                include("includes/db.php");
                $qr = mysqli_query($links,"select * from thuonghieu where id_nhanhang = '$id'") or die("lỗi truy vấn");
                $rs = mysqli_fetch_array($qr);
            ?>
            <form action="includes/suanhanhang.php" method="post">
                <tr>
                    <td><input type="text" name="id_nhanhang" value="<?php echo $rs['id_nhanhang'] ?>"></td>
                    <td><input type="text" name="ten_nhanhang" value="<?php echo $rs['ten_nhanhang'] ?>"></td>
                    <td><input type="text" name="mota_nhanhang" value="<?php echo $rs['mota_nhanhang'] ?>"></td>
                    <th><input type="submit" value="Update"></th>
                </tr>
            </form>
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