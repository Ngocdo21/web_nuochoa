<?php
  session_start();
  //include 'includes/header.php';
  require 'includes/db.php';
 
  include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giỏ hàng</title>
    <link rel="shortcut icon" type="image/webp" href="admin_area/product_images/icon.webp">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
   
      <div class="container"> 
       
       <!--  <div id="notify-msg"> -->
      
                  
<div class="col-md-12">
         <form action="giohang1.php?action=submit" method="POST"> 
  <table id="cart" class="table table-hover table-condensed"> 
      <thead> 
        <tr> 
          <th style="width:10%">STT</th> 
          <th style="width:35%">Tên sản phẩm</th> 
          <th style="width:10%">Giá</th> 
          <th style="width:15%">Số lượng</th> 
          <th style="width:20%" class="text-center">Thành tiền</th> 
          <th style="width:10%"> </th> 
        </tr> 
      </thead> 
     
      <tbody>
       
          <tr> 
           <td data-th="Price">jhjhj</td>
          <td data-th="Product"> 
            <div class="row"> 
              <!-- <div class="col-sm-2 hidden-xs">
                <img src="  " alt="" width = "50px">
              </div>  -->
              <div class="col-sm-10"> 
                  <h4 class="nomargin">
                    kỵyku
                  </h4> 
                    <!-- <p>EDP 5Ml</p>  -->
              </div> 
            </div> 
          </td> 
          <td data-th="Price">ỵghgh</td> 
            <td data-th="Quantity">
      
                <input class="form-control text-center" type = "text" value= "1" name="hjgh"  /> 
                
            </td> 
            <td data-th="Subtotal" class="text-center">hjhjgjh</td> 
            <td class="actions" data-th="">
              <a href="giohang1.php?action=delete&id=<?php echo $row['id_sanpham'] ?>" class="btn btn-danger" >Xóa</a>
            </td>
         
        </tr>
     
        <tr> 
           <td data-th="Price">&nbsp</td>
          <td data-th="Product"> 
            <div class="row"> 
              <!-- <div class="col-sm-2 hidden-xs">
                <img src="  " alt="" width = "50px">
              </div>  -->
              <div class="col-sm-10"> 
                  <h4 class="nomargin">
                    Tổng tiền
                  </h4> 
                    <!-- <p>EDP 5Ml</p>  -->
              </div> 
            </div> 
          </td> 
          <td data-th="Price">&nbsp</td> 
            <td data-th="Quantity">&nbsp</td> 
            <td data-th="Subtotal" class="text-center">30000</td> 
            <td class="actions" data-th=""> &nbsp</td>
         
        </tr>
     
         
       <!--  <tr> 
          <td class="hidden-xs text-center"><strong>Tổng tiền </strong></td> 
        </tr> -->
        
        
      </tbody>
    </table>
    <div class="update-cart">
      <input type="submit" name="update_click" value="Cập nhật" />
    </div>
    <div>
       <form action="/action_page.php">
                    <label for="fname">Người nhận:</label>
                    <input type="text" value="" name="ten" id="fname">
                    <br>
                    <label for="lname">Điện thoại:</label>
                    <input type="text" id="lname" name="sdt" >
                    <br>
                    <label for="country">Địa chỉ</label>
                    <input type="text" id="lname" name="diachi">
                    <br>
                    <label for="country">Ghi chú</label>
                      <textarea name="ghichu" cols="50" rows="7" ></textarea>
                    <div class="update-cart">
                    <input type="submit" name="order_click" value="Đặt hàng">
                    </div>
        </form>
    </div>
                   <!--  <div><label>Người nhận: </label><input type="text" value="" name="ten" /></div>
                    <div><label>Điện thoại: </label><input type="text" value="" name="sdt" /></div>
                    <div><label>Địa chỉ: </label><input type="text" value="" name="diachi" /></div>
                    <div><label>Ghi chú: </label><textarea name="ghichu" cols="50" rows="7" ></textarea></div>
                    <input type="submit" name="order_click" value="Đặt hàng" />
                    <div> -->
                         
  </div>  
       
</div>











   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>