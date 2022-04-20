<?php
require 'admin_area/includes/db.php';
session_start();
if (isset($_GET['pro_id'])) {
    $id = $_GET['pro_id'];
}
$data = mysqli_query($links, "SELECT * FROM tintuc WHERE id_tintuc = $id ");
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

    <div class="col-lg-12" id="cttt">
        <div id="d2">
            <div class="d2">


                <!--  <div class="ds1"> -->
                <h1><?php echo $item['ten_tintuc'] ?></h1>
                <div class="anh"><img src="admin_area/product_images/<?php echo $item['anh_tintuc'] ?>" alt title style="width: 500px; height: 500px; "></div>

                <!--  </div> -->
                <!--     <div class="ds2"> -->


                <!-- <div class="huong">
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
                    </div> -->
                <!--   </div> -->
                <div class="mota">

                    <?php echo $item['noidung_tintuc'] ?>
                </div>

            </div>

        </div>



    </div>

    <div>
        <?php
        include("includes/footer.php");
        ?>
    </div>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


</body>

</html>