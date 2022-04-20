<?php
   require 'admin_area/includes/db.php';
  session_start();
  if(isset($_GET['pro_id'])){
    $id = $_GET['pro_id'];
  }
  $data = mysqli_query($links, "SELECT * FROM sanpham WHERE id_sanpham = '$id' ");
  // if($data){
  $item = mysqli_fetch_array($data);
  // var_dump($item);
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nước hoa</title>
    <link rel="shortcut icon" type="image/webp" href="admin_area/product_images/icon.webp">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/chitietSP.css">
</head>
<body>
  <?php 
    
    include("includes/header.php");
    
    ?> 
   
   <div id="content">
       <div id="d2">
            <div class="d2">
              
             
             <div class="ds1">
                    <div class="anhsp"><img src="admin_area/product_images/<?php echo $item['anh_sanpham']?>" alt title style="width: 400px; height: 400px; margin-left: 100px;"></div>
                    <div class="mota">
                        <h3>Mô tả</h3>
                          <?php echo $item['mota_sanpham']?>
                    </div>
               </div>
               <div class="ds2"> 
                    <h1><?php echo $item['ten_sanpham']?></h1>
                    <p style="font-size: 25px;"><?php echo $item['gia_sanpham']?></p>
                    <form id="add-to-cart-form" action="giohang1.php?action=add" method="POST">
                         
                        <input type="text" value="1" name="quantity[<?=$item['id_sanpham']?>]" id="soluong"  /><br/>
                        <div class="ctsp_mua">
                            <input type="submit" value="Mua sản phẩm" />
                        </div>
                    </form>
                    <div class="huong">
                        <h3>Hương</h3>
                        <div class="ph">
                            <div class="ph1">
                                <div id="text1"><h3>tone hương</h3></div>
                                <div id="text2"><h3>hương gỗ, hương trái cây</h3></div>
                            </div>
                            <div class="ph1">
                                <div id="text1"><h3>hương đầu</h3></div>
                                <div id="text2"><h3>cam bergamot, quả dứa, quả lý chua đen, táo xanh</h3></div>
                            </div>
                            <div class="ph1">
                                <div id="text1"><h3>hương giữa</h3></div>
                                <div id="text2"><h3>cây hoắc hương, gỗ bu-lô, hoa hồng, hoa nhài morocco</h3></div>
                            </div>
                            <div class="ph1">
                                <div id="text1"><h3>hương cuối</h3></div>
                                <div id="text2"><h3>hương vani, long dien hương, reey sòi, xạ hương</h3></div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>

        </div>
        <div id="d3">
        <?php
        include('includes/db.php');
        $qr = mysqli_query($links,"select * from sanpham,thuonghieu where sanpham.id_nhanhang=thuonghieu.id_nhanhang LIMIT 6 ") or die("lỗi truy vấn");
        ?>
            <h3>Sản phẩm liên quan</h3>
            <div class="splq">
            <?php
                while ($rs = mysqli_fetch_array($qr)){
            ?>
                <a href="">
                    <div class="nh1">
                        <div class="anhsp"><img src="admin_area/product_images/<?php echo $rs['anh_sanpham'] ?>" alt title ></div>
                        <div class="tensp">
                            <b><?php echo $rs['ten_sanpham'] ?></b>
                            <p style="margin-top: 0px;"><?php echo $rs['ten_nhanhang'] ?></p>
                            <b style="color: #9b0e62;"><?php echo number_format($rs['gia_sanpham']) ?>VNĐ</b>
                        </div>
                    </div>
                </a>
            <?php
                }
                ?>               
            </div>
        </div>

       </div>
   </div>   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>