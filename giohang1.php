<?php
session_start();
//include 'includes/header.php';
require 'includes/db.php';
if (!isset($_SESSION["cart"])) {
  $_SESSION["cart"] = array();
}
$error = false;
$success = false;
if (isset($_GET['action'])) {
  function update_cart($add = false)
  {
    foreach ($_POST['quantity'] as $id => $quantity) {
      if ($quantity == 0) {
        unset($_SESSION["cart"][$id]);
      } else {
        if ($add) {
          $_SESSION["cart"][$id] += $quantity;
        } else {
          $_SESSION["cart"][$id] = $quantity;
        }
      }
    }
  }
  switch ($_GET['action']) {
    case "add": //them sp vào gio hàng trong chi tiet sp
      update_cart(true);
      header('Location: giohang1.php');
      break;
    case "delete": //xóa sp kho gio hang
      if (isset($_GET['id'])) {
        unset($_SESSION["cart"][$_GET['id']]);
      }
      header('Location: giohang1.php');
      break;
    case "submit":
      // var_dump($_POST);exit;
      // echo "djk";exit;
      if (isset($_POST['update_click'])) { //cập nhật lại giỏ hàng
        update_cart();
        header('Location: giohang1.php');
      } elseif ($_POST['order_click']) { //đặt hàng
        //var_dump($_POST); exit;
        if (empty($_POST['ten'])) {
          $error = "Bạn chưa nhập tên của người nhận";
        } elseif (empty($_POST['sdt'])) {
          $error = "Bạn chưa nhập số điện thoại của người nhận";
        } elseif (empty($_POST['diachi'])) {
          $error = "Bạn chưa nhập địa chỉ của người nhận";
        } else if (empty($_POST['quantity'])) {
          $error = "giỏ hàng rỗng";
        }
        if ($error == false && !empty($_POST['quantity'])) { //đưa tt vào db
          //var_dump(implode(",",  array_keys($_POST['quantity']))); exit;
          //SELECT * FROM `sanpham` WHERE `id_sanpham` IN (2,5)
          $products = mysqli_query($links, "SELECT * FROM `sanpham` WHERE `id_sanpham` IN (" . implode(",",  array_keys($_POST['quantity'])) . ")");
          $total = 0;
          $orderProducts = array();
          while ($row = mysqli_fetch_array($products)) {
            //var_dump($_POST['quantity'][$row['id_sanpham']]); exit;
            $orderProducts[] = $row;
            $total += $row['gia_sanpham'] * $_POST['quantity'][$row['id_sanpham']];
          }
          //var_dump($_POST['ten']); exit;
          //đưa vào db đơn hàng
          $insert_donhang = mysqli_query($links, "INSERT INTO `donhang` (`id_donhang`, `ten_khachhang`, `sdt`, `diachi`, `ngaytaodon`, `tongtien`, `ghichu`) VALUES (NULL, '" . $_POST['ten'] . "', '" . $_POST['sdt'] . "', '" . $_POST['diachi'] . "', current_timestamp(), '" . $total . "', '" . $_POST['ghichu'] . "');");

          //lấy id đơn hàng từ db đơn hàng
          $id_donhang = $links->insert_id;
          $insertString = " ";
          foreach ($orderProducts as $key => $products) {
            $insertString .= "(NULL, '" . $id_donhang . "', '" . $products['id_sanpham'] . "', '" . $_POST['quantity'][$products['id_sanpham']] . "', '" . $products['gia_sanpham'] . "', '" . $products['gia_sanpham'] * $_POST['quantity'][$products['id_sanpham']] . "', current_timestamp())";
            if ($key != count($orderProducts) - 1) {
              $insertString .= ",";
            }
          }
          //var_dump($insertString); exit;
          //đưa vào db đơn hàng
          $insert_donhang = mysqli_query($links, "INSERT INTO `chitietdonhang` (`id_chitietdonhang`, `id_donhang`, `id_sanpham`, `soluong`, `gia`, `thanhtien`, `ngay_ban`) VALUES " . $insertString . ";");
          $success = "ĐẶT HÀNG THÀNH CÔNG!";
        }
      }

      break;
  }
}
if (!empty($_SESSION["cart"])) {
  //"SELECT * FROM 'sanpham' WHERE 'id_sanpham' IN ()"
  //var_dump(implode(",", array_keys($_SESSION["cart"])) ); exit;

  $products = mysqli_query($links, "SELECT * FROM `sanpham` WHERE `id_sanpham` IN (" . implode(",", array_keys($_SESSION["cart"])) . ")");

  //var_dump($result); exit;
}


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
    <?php if (!empty($error)) { ?>
      <!--  </div> -->
      <?php echo $error ?>. <a href="javascript:history.back()">quay lại</a>
    <?php } elseif (!empty($success)) { ?>

      <!--  </div> -->
      <?php echo $success ?>. <a href="javascript:history.back()">quay lại</a>
    <?php } else { ?>

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
            <?php
            if (!empty($products)) {
              $total = 0;
              $num = 1;
              while ($row = mysqli_fetch_array($products)) {
            ?>

                <tbody>

                  <tr>
                    <td data-th="Price"><?php echo $num++;  ?></td>
                    <td data-th="Product">
                      <div class="row">
                        <!-- <div class="col-sm-2 hidden-xs">
                <img src="  " alt="" width = "50px">
              </div>  -->
                        <div class="col-sm-10">
                          <h4 class="nomargin">
                            <?php echo $row['ten_sanpham'] ?>
                          </h4>
                          <!-- <p>EDP 5Ml</p>  -->
                        </div>
                      </div>
                    </td>
                    <td data-th="Price"><?php echo number_format($row['gia_sanpham']) ?></td>
                    <td data-th="Quantity">

                      <input class="form-control text-center" type="text" value="<?php echo $_SESSION["cart"][$row['id_sanpham']] ?>" name="quantity[<?php echo $row['id_sanpham'] ?>]" />

                    </td>
                    <td data-th="Subtotal" class="text-center"><?php echo number_format($row['gia_sanpham'] * $_SESSION["cart"][$row['id_sanpham']]) ?></td>
                    <td class="actions" data-th="">
                      <a href="giohang1.php?action=delete&id=<?php echo $row['id_sanpham'] ?>" class="btn btn-danger">Xóa</a>
                    </td>

                  </tr>
                <?php
                $total +=  $row['gia_sanpham'] * $_SESSION["cart"][$row['id_sanpham']];
                $num++;
              } ?>
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
                  <td data-th="Quantity" >&nbsp</td>
                  <td data-th="Subtotal" class="text-center"><?php echo number_format($total) ?></td>
                  <td class="actions" data-th=""> &nbsp</td>

                </tr>
              <?php
            }
              ?>

              <!--  <tr> 
          <td class="hidden-xs text-center"><strong>Tổng tiền </strong></td> 
        </tr> -->


                </tbody>
          </table>
          <div class="update-cart">
            <input type="submit" name="update_click" value="Cập nhật" />
          </div>
          <div>
            <!-- <form action="/action_page.php">
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
        </form> -->

            <div class="container_2">
              <form action="/action_page.php">
                <div class="row">
                  <div class="col-25">
                    <label for="fname">Người nhận</label>
                  </div>
                  <div class="col-75">
                    <input type="text" id="fname" name="ten" ">
                  </div>
                </div>
                <div class=" row">
                    <div class="col-25">
                      <label for="lname">Số điện thoại</label>
                    </div>
                    <div class="col-75">
                      <input type="text" id="lname" name="sdt"">
                  </div>
                </div>
                <div class=" row">
                      <div class="col-25">
                        <label for="country">Địa chỉ</label>
                      </div>
                      <div class="col-75">
                        <input type="text" id="lname"  name="diachi"">
                  </div>
                </div>
                <div class=" row">
                        <div class="col-25">
                          <label for="subject">ghi chú</label>
                        </div>
                        <div class="col-75">
                          <textarea id="subject" name="ghichu" style="height:200px"></textarea>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <input type="submit"name="order_click" value="Đặt hàng">
                      </div>
              </form>
            </div>
          </div>
          <!--  <div><label>Người nhận: </label><input type="text" value="" name="ten" /></div>
                    <div><label>Điện thoại: </label><input type="text" value="" name="sdt" /></div>
                    <div><label>Địa chỉ: </label><input type="text" value="" name="diachi" /></div>
                    <div><label>Ghi chú: </label><textarea name="ghichu" cols="50" rows="7" ></textarea></div>
                    <input type="submit" name="order_click" value="Đặt hàng" />
                    <div> -->

      </div>
    <?php } ?>
  </div>











  <?php

  include("includes/footer.php");

  ?>

  <script src="js/jquery-331.min.js"></script>
  <script src="js/bootstrap-337.min.js"></script>


</body>

</html>