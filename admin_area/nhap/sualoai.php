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
        <h2 style="margin-bottom: 20px;">SỬA GIỚI TÍNH</h2>
        <div class="profile-content">
          <table id="cart" class="table table-hover table-condensed"> 
            <thead> 
              <tr> 
                <th style="width:15%">Mã giới tính</th> 
                <th style="width:20%">Tên giới tính</th> 
                <th style="width:30%">Mô tả</th>
              </tr> 
            </thead>
            <?php
                $id = $_GET['id_phanloai'];
                include("includes/db.php");
                $qr = mysqli_query($links,"select * from phanloai where id_phanloai = '$id'") or die("lỗi truy vấn");
                $rs = mysqli_fetch_array($qr);
            ?>
            <form action="includes/sualoai.php" method="post">
                <tr>
                    <td><input type="text" name="id_phanloai" value="<?php echo $rs['id_phanloai'] ?>"></td>
                    <td><input type="text" name="ten_phanloai" value="<?php echo $rs['ten_phanloai'] ?>"></td>
                    <td><input type="text" name="mota_phanloai" value="<?php echo $rs['mota_phanloai'] ?>"></td>
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