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
        <h2 style="margin-bottom: 20px;">THÊM GIỚI TÍNH</h2>
        <div class="profile-content">
          <table id="cart" class="table table-hover table-condensed"> 
            <thead> 
              <tr> 
                <th style="width:15%">Mã giới tính</th> 
                <th style="width:20%">Tên giới tính</th> 
                <th style="width:30%">Mô tả</th>
              </tr> 
            </thead> 
            <form action="includes/themmoiloai.php" method="post">
                <tr>
                    <td><input type="text" name="id_phanloai"></td>
                    <td><input type="text" name="ten_phanloai"></td>
                    <td><input type="text" name="mota_phanloai"></td>
                    <th><input type="submit" value="Thêm"></th>
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