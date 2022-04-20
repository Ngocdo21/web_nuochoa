<?php
  include_once 'db.php';
  if(isset($_POST['btn-save']))
  {
    $id_khachhang = $_POST['id_khachhang'];
    $tenkhachhang = $_POST['tenkhachhang'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    
    $sql_query = "INSERT INTO khachhang(id_khachhang, tenkhachhang, sdt, email, diachi ) VALUES('$id_khachhang','$tenkhachhang','$sdt', '$email', '$diachi')";
    if(mysqli_query($links, $sql_query)){
      header("location: ../qlkhachhang.php");
    }
    
    /*if(mysqli_query($links, $sql_query))
    {
    ?>
    <script type="text/javascript">
    alert('Data Are Inserted Successfully ');
    window.location.href='qlkhachhang.php';
    </script>
    <?php
  }
  else
  {
    ?>
    <script type="text/javascript">
    alert('error occured while inserting your data');
    </script>
    <?php
  }*/
  // sql query execution function
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nước hoa</title>
    <link rel="shortcut icon" type="image/webp" href="product_images/icon.webp">
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
   
   <div id="content">
       <div class="container">
          

           <div class="col-md-3">
   
   <?php 
    
    include("sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->
           <form method="post" action="">
           <div class="col-md-9" style="margin-top:30px;"><!-- col-md-9 Begin -->
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
            <div class="profile-content">
          <table id="cart" class="table table-hover table-condensed"> 
      <thead> 
        <tr>
          <th style="width:20%">Mã khách hàng hàng</th> 
          <th style="width:20%">Họ tên</th> 
          <th style="width:15%">Số điện thoại</th> 
          <th style="width:15%" >Email</th> 
          <th style="width:20%">Địa chỉ</th> <!-- 
          <th style="width:10%"> Thao Tác</th> -->
        </tr> 
      </thead> 
      <tbody>
        <tr> 
          <td data-th="Price"  ><input type="text" name="id_khachhang"></td> 
          <td data-th="Quantity" > <input type="text" name="tenkhachhang"></td> 
          <td data-th="Subtotal" > <input type="text" name="sdt"></td> 
          <td data-th="Subtotal" > <input type="text" name="email"></td> 
           <td data-th="Subtotal" > <input type="text" name="diachi"></td> 
          <!-- <td class="actions" >
            <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button> 
        <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
          </td>  -->
        </tr> 
      </tbody>
  </table>
        </div>     
      </div>  
          <div class="col col-xs-6 text-right"> 
            <button type="submit" name="btn-save"> <strong>SAVE</strong></button> 
          </div>   
      </div>
      </form>
      </div>
      </div> 
          
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>