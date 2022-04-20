<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
    <div class="panel-heading"><!-- panel-heading Begin -->
        <h3 class="panel-title">Hãng</h3>
    </div><!-- panel-heading Finish -->

    <div class="panel-body"><!-- panel-body Begin -->
        <?php
            include('includes/db.php');
            $qr = mysqli_query($links,"select * from thuonghieu") or die("lỗi truy vấn");
        ?>
        <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->
        <?php
            while ($rs = mysqli_fetch_array($qr)){
        ?>
            <li><a href="hang.php?id=<?php echo $rs['id_nhanhang'] ?>"><?php echo $rs['ten_nhanhang'] ?></a></li>
        <?php
            }
        ?>      
        </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
    </div><!-- panel-body Finish -->
    
</div><!-- panel panel-default sidebar-menu Finish -->


<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
    <div class="panel-heading"><!-- panel-heading Begin -->
        <h3 class="panel-title">Loại</h3>
    </div><!-- panel-heading Finish -->
    
    <div class="panel-body"><!-- panel-body Begin -->
        <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->
            
        <?php
            include('includes/db.php');
            $qr = mysqli_query($links,"select * from phanloai") or die("lỗi truy vấn");
        ?>
        <ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->
        <?php
            while ($rs = mysqli_fetch_array($qr)){
        ?>
            <li><a href="loai.php?id=<?php echo $rs['id_phanloai'] ?>"><?php echo $rs['ten_phanloai'] ?></a></li>
        <?php
            }
        ?>     
            
        </ul><!-- nav nav-pills nav-stacked category-menu Finish -->
    </div><!-- panel-body Finish -->
    
</div><!-- panel panel-default sidebar-menu Finish -->