<?php
include("includes/db.php");
include("functions/functions.php");
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
    <style>
        a {
            font-size: 16px;
            color: #337ab7;
            text-decoration: none;
        }

        #content .product .text p.price {
            font-size: 16px;
            text-align: center;
            font-weight: 400;
        }

        .button {
            text-align: center;
            clear: both;
        }

        .ds1 .mota {
            text-align: center;
            width: 600px;
            height: 300px;
        }

        #d3 .splq {
            display: flex;
            justify-content: center;
            width: 1200px;
            height: 320px;
            margin: auto;
        }

        .nh1 {
            float: left;
            width: 310px;
            height: 310px;
            margin-left: 10px;
            border: 1px solid #E6E6E6;
        }

        .anhsp {
            margin-top: 15px;
            width: 100%;
            height: 250px;
            overflow: hidden;
        }

        .tensp {
            margin-top: 10px;
            width: 100%;
            text-align: center;
            background: #FFF;
        }

        .nomargin {
            font-size: 14px;
        }

        .buttons {
            display: flex;
            justify-content: center;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 7px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container_2 {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        #soluong {
            width: 60%;
        }

        .ctsp_mua {
            margin-top: 20px;
            display: flex;
            justify-content: start;
        }

        #d2 {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 1600px;
            margin-top: 100px;
        }
        .d2 h1{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .anh {
            display: flex;
            justify-content: center;
        }
        .mota{
            margin-top:100px;
            display: flex;
            justify-content: center;
            text-align: justify;
        }
        #cttt{
            background-color: #f2f2f2;
        }
        nav{
            display: flex;
            justify-content: center;
            text-align: justify;
        }
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

<body>

    <div id="top">
        <!-- Top Begin -->

        <div class="container">
            <!-- container Begin -->

            <div class="col-md-6 offer">
                <!-- col-md-6 offer Begin -->

                <a href="#" class="btn btn-success btn-sm">Welcome</a>
                <!--  <a href="checkout.php">4 Items In Your Cart | Total Price: $300 </a> -->

            </div><!-- col-md-6 offer Finish -->

            <div class="col-md-6">
                <!-- col-md-6 Begin -->

                <ul class="menu">
                    <!-- cmenu Begin -->

                    <li>
                        <a href="customer_register.php">Đăng Ký</a>
                    </li>
                    <li>
                        <a href="taikhoan.php">Tài Khoản</a>
                    </li>
                    <li>
                        <a href="giohang1.php">Giỏ Hàng</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>

                </ul><!-- menu Finish -->

            </div><!-- col-md-6 Finish -->

        </div><!-- container Finish -->

    </div><!-- Top Finish -->

    <div id="navbar" class="navbar navbar-default">
        <!-- navbar navbar-default Begin -->

        <div class="container">
            <!-- container Begin -->

            <div class="navbar-header">
                <!-- navbar-header Begin -->

                <a href="index.php" class="navbar-brand home">
                    <!-- navbar-brand home Begin -->

                    <img src="images/logo.png" style="margin-top:-20px;width: 275px;height: 100px;" alt="M-dev-Store Logo" class="hidden-xs">
                    <img src="images/logo.png" style="width: 275px;height: 100px;" alt="M-dev-Store Logo Mobile" class="visible-xs">

                </a><!-- navbar-brand home Finish -->

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                    <span class="sr-only">Toggle Navigation</span>

                    <i class="fa fa-align-justify"></i>

                </button>

                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

                    <span class="sr-only">Toggle Search</span>

                    <i class="fa fa-search"></i>

                </button>

            </div><!-- navbar-header Finish -->

            <div class="navbar-collapse collapse" id="navigation">
                <!-- navbar-collapse collapse Begin -->

                <div class="padding-nav">
                    <!-- padding-nav Begin -->

                    <ul class="nav navbar-nav left">
                        <!-- nav navbar-nav left Begin -->

                        <li class="<?php if ($active == 'Trang chủ') echo "active"; ?>">
                            <a href="index.php">Trang chủ</a>
                        </li>
                        <li class="<?php if ($active == 'Sản phẩm') echo "active"; ?>">
                            <a href="sanpham1.php">Sản phẩm</a>
                        </li>
                        <li class="<?php if ($active == 'Tài khoản') echo "active"; ?>">
                            <a href="taikhoan1.php">Tài khoản</a>
                        </li>
                        <li class="<?php if ($active == 'Tin tức') echo "active"; ?>">
                            <a href="tintuc.php">Blog</a>
                        </li>

                    </ul><!-- nav navbar-nav left Finish -->

                </div><!-- padding-nav Finish -->

                <a href="giohang1.php" class="btn navbar-btn btn-primary right">
                    <!-- btn navbar-btn btn-primary Begin -->

                    <i class="fa fa-shopping-cart"></i>

                    <span>Giỏ Hàng</span>

                </a><!-- btn navbar-btn btn-primary Finish -->

                <div class="navbar-collapse collapse right">
                    <!-- navbar-collapse collapse right Begin -->

                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                        <!-- btn btn-primary navbar-btn Begin -->

                        <span class="sr-only">Tìm Kiếm</span>

                        <i class="fa fa-search"></i>

                    </button><!-- btn btn-primary navbar-btn Finish -->

                </div><!-- navbar-collapse collapse right Finish -->

                <div class="collapse clearfix" id="search">
                    <!-- collapse clearfix Begin -->

                    <form method="get" action="results.php" class="navbar-form">
                        <!-- navbar-form Begin -->

                        <div class="input-group">
                            <!-- input-group Begin -->

                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>

                            <span class="input-group-btn">
                                <!-- input-group-btn Begin -->

                                <button type="submit" name="search" value="Search" class="btn btn-primary">
                                    <!-- btn btn-primary Begin -->

                                    <i class="fa fa-search"></i>

                                </button><!-- btn btn-primary Finish -->

                            </span><!-- input-group-btn Finish -->

                        </div><!-- input-group Finish -->

                    </form><!-- navbar-form Finish -->

                </div><!-- collapse clearfix Finish -->

            </div><!-- navbar-collapse collapse Finish -->

        </div><!-- container Finish -->

    </div><!-- navbar navbar-default Finish -->