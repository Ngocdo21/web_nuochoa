<nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top begin -->
    <div class="navbar-header"><!-- navbar-header begin -->
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><!-- navbar-toggle begin -->
            
            <span class="sr-only">Toggle Navigation</span>
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button><!-- navbar-toggle finish -->
        
        <a href="index.php?dashboard" class="navbar-brand">Admin</a>
        
    </div><!-- navbar-header finish -->
    
    <ul class="nav navbar-right top-nav"><!-- nav navbar-right top-nav begin -->
        
        <li class="dropdown"><!-- dropdown begin -->
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle begin -->
                
                <i class="fa fa-user"></i> ADMIN <b class="caret"></b>
                
            </a><!-- dropdown-toggle finish -->
            
            <ul class="dropdown-menu"><!-- dropdown-menu begin -->
                <li><!-- li begin -->
                    <a href="index.php?view_nguoidung"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-user"></i> Hồ sơ
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li><!-- li begin -->
                    <a href="index.php?view_products"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-envelope"></i> Sản phẩm
                        
                        <span class="badge"><?php echo $count_products; ?></span>
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li><!-- li begin -->
                    <a href="index.php?view_khachhang"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-users"></i> Khách hàng
                        <span class="badge"><?php echo $count_khachhang; ?></span>
                        
                      <!--   <span class="badge">11</span> -->
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li><!-- li begin -->
                    <a href="index.php?view_cats"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Danh mục sản phẩm
                        
                        <span class="badge"><?php echo $count_p_categories; ?></span>
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li class="divider"></li>
                
                <li><!-- li begin -->
                    <a href="logout.php"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-power-off"></i> Đăng xuất
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
            </ul><!-- dropdown-menu finish -->
            
        </li><!-- dropdown finish -->
        
    </ul><!-- nav navbar-right top-nav finish -->
    
    <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse begin -->
        <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav begin -->
            <li><!-- li begin -->
                <a href="index.php?dashboard"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-dashboard"></i> Danh mục
                        
                </a><!-- a href finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#products"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-tag"></i> Sản phẩm
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="products" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_product"> Thêm sản phẩm </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_products"> Xem danh sách sản phẩm </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#p_cat"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-edit"></i> Danh mục sản phẩm
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="p_cat" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_p_cat"> Thêm danh mục sản phẩm</a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_p_cats"> Xem danh mục sản phẩm</a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#cat"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-book"></i> Loại sản phẩm
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="cat" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_cat"> Thêm loại sản phẩm </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_cats"> Xem loại sản phẩm</a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#slides"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Slides
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="slides" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_slide"> Thêm Slide </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_slides"> Xem Slides </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
             <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#khachhang"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-users"></i> Khách hàng
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="khachhang" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_khachhang"> Thêm hách hàng </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_khachhang"> Xem danh sách khách hàng </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="index.php?view_donhang"><!-- a href begin -->
                    <i class="fa fa-fw fa-book"></i> Xem Đơn hàng
                </a><!-- a href finish -->
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="../admin_area/test/report1.php">
                 <!-- <a href="index.php?view_thongke"> --> <!-- a href begin -->
                    <i class="fa fa-fw fa-book"></i> Xem Thống Kê
                </a><!-- a href finish -->
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#blog"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Blog
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="blog" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_blog"> Thêm Blog </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_blog"> Xem Blog </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#users"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-users"></i> Người dùng
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="users" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_nguoidung"> Thêm Người dùng </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_nguoidung"> Xem Người dùng </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="logout.php"><!-- a href begin -->
                    <i class="fa fa-fw fa-power-off"></i> Đăng xuất
                </a><!-- a href finish -->
            </li><!-- li finish -->
            
        </ul><!-- nav navbar-nav side-nav finish -->
    </div><!-- collapse navbar-collapse navbar-ex1-collapse finish -->
    
</nav><!-- navbar navbar-inverse navbar-fixed-top finish -->