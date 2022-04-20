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
            <h2 style="margin-bottom: 20px;">QUẢN LÝ NHÃN HÀNG</h2>
            <form action="" method="get">
            <div class="col-md-4 mb-3">
              <?php
                include("includes/db.php");
                if(isset($_GET['q']) && !empty($_GET['q'])){
                  $keyword = $_GET['q'];
                  $sql = "select * from thuonghieu where id_nhanhang like '%$keyword%' or ten_nhanhang like '%$keyword%' or mota_nhanhang like '%$keyword%'";
                }else{
                  $sql = "select * from thuonghieu";
                }
                $qr = mysqli_query($links, $sql) or die("Câu truy vấn sai");
              ?>
              <input type="text" name="q" class="form-control" id="address" placeholder="Tìm kiếm nhãn hàng" value="<?php if(isset($_GET['q'])) { echo $_GET['q']; } ?>" > 
            </div>
            <div class="col-md-4 mb-3">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Lọc</button>
            </div>
            </form>
            <div class="col col-xs-6 text-right" style="margin: 20px;"> 
            <a href="themmoinhanhang.php" type="button" class="btn btn-sm btn-primary btn-create">Thêm mới</a> 
            </div>
            <div class="profile-content">
          <table id="cart" class="table table-hover table-condensed"> 
      <thead> 
        <tr> 
          <th style="width:15%">Mã nhãn hàng</th> 
          <th style="width:20%">Tên nhãn hàng</th> 
          <th style="width:40%">Mô tả</th>
          <th style="width:10%" >Thao tác</th> 
        </tr> 
      </thead> 
      <tbody>
      <?php
              while ($rs = mysqli_fetch_array($qr)){
                ?>
                <tr>
                  <td><?php echo $rs['id_nhanhang'] ?>
                  <td><?php echo $rs['ten_nhanhang'] ?>
                  <td><?php echo $rs['mota_nhanhang'] ?>
                  <td class='actions'>
                    <a href="suanhanhang.php?id_nhanhang=<?php echo $rs['id_nhanhang'] ?>" name ="update"> <button class="btn btn-info btn-sm">Chỉnh Sửa</button> </a>
                    <!-- <a href="suanhanhang.php?id_nhanhang=<?php echo $rs['id_nhanhang'] ?>"><button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button></a>  -->
                    <a href="includes/xoanhanhang.php?id_nhanhang=<?php echo $rs['id_nhanhang'] ?>"><button class="btn btn-danger btn-sm">Xóa</button></a>
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