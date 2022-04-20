<?php 

 $db = array(
        'server' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'nuochoa'
    );

    $links = mysqli_connect($db['server'], $db['username'], $db['password'], $db['database']);
    
    if(!$links) {
        die('ket noi không thành công'. mysqli_connect_error($links));
    }
    


// $db = mysqli_connect("localhost:8111","root","","perfume_shop");
// mysqli_query($db,'SET NAME UTF8');


function getPro(){
    
    // global $db;
    global $links;
    
    $get_products = "select * from sanpham order by 1 DESC LIMIT 0,8";
    
     //$run_products = mysqli_query($db,$get_products);
     $run_products = mysqli_query($links,$get_products);
    
    while($row_products=mysqli_fetch_array($run_products)){
        
        $pro_id = $row_products['id_sanpham'];
        
        $pro_title = $row_products['ten_sanpham'];
        
        $pro_price = $row_products['gia_sanpham'];
        
        $pro_img = $row_products['anh_sanpham'];
        
        echo "
        
        <div class='col-md-4 col-sm-6 single'>
        
            <div class='product'>
            
                <a href='chitietsp1.php?pro_id=$pro_id'>
                
                    <img class='img-responsive' src='admin_area/product_images/$pro_img' style='height: 300px;'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='chitietsp1.php?pro_id=$pro_id'>

                            $pro_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                         $pro_price VNĐ
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='chitietsp1.php?pro_id=$pro_id'>

                            Chi tiết

                        </a>
                    
                        
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
        
        ";
        
    }
    
}
// <a class='btn btn-primary' href='chitietSP.php?pro_id=$pro_id'>

                        //     <i class='fa fa-shopping-cart'> Thêm vào giỏ hàng</i> 

                        // </a>
function getPCats(){
    // global $db;
    global $links;
    $get_p_cats = "select * from thuonghieu";

     // $run_p_cats = mysqli_query($db,$get_p_cats);
     $run_p_cats = mysqli_query($links,$get_p_cats);

    while ($row_p_cats = mysqli_fetch_array($run_p_cats)){
        $p_cat_id = $row_p_cats['id_nhanhang'];
        $p_cat_title = $row_p_cats['ten_nhanhang'];
        echo "
        <li>
            <a href = 'sanpham1.php?p_cat=$p_cat_id'> $p_cat_title </a>
            </li>
        ";
    }
}

function getCats(){
    // global $db;
    global $links;

    $get_cats = "select * from phanloai";

     // $run_cats = mysqli_query($db,$get_cats);
     $run_cats = mysqli_query($links,$get_cats);

    while ($row_cats = mysqli_fetch_array($run_cats)){
        $cat_id = $row_cats['id_phanloai'];
        $cat_title = $row_cats['ten_phanloai'];
        echo "
        <li>
            <a href = 'sanpham1.php?cat=$cat_id'> $cat_title </a>
            </li>
        ";
    }
}

function getpcatpro(){
    
    // global $db;
    global $links;
    
    if(isset($_GET['p_cat'])){
        
        $p_cat_id = $_GET['p_cat'];
        
        $get_p_cat ="select * from thuonghieu where id_nhanhang='$p_cat_id'";
        
         // $run_p_cat = mysqli_query($db,$get_p_cat);
         $run_p_cat = mysqli_query($links,$get_p_cat);
        
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        
        $p_cat_title = $row_p_cat['ten_nhanhang'];
        
        $p_cat_desc = $row_p_cat['mota_nhanhang'];
        
        $get_products ="select * from sanpham where id_nhanhang='$p_cat_id'";
        
         // $run_products = mysqli_query($db,$get_products);
        $run_products = mysqli_query($links,$get_products);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            echo "
            
                <div class='box'>
                
                    <h1> Không tìm thấy sản phẩm nào trong danh mục sản phẩm này </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
                <div class='box'>
                
                    <h1> $p_cat_title </h1>
                    
                    <p> $p_cat_desc </p>
                
                </div>
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['id_sanpham'];
        
            $pro_title = $row_products['ten_sanpham'];

            $pro_price = $row_products['gia_sanpham'];

            $pro_img = $row_products['anh_sanpham'];
            
            echo "
            
                <div class='col-md-4 col-sm-6 center-responsive'>
        
            <div class='product'>
            
                <a href='chitietsp1.php?pro_id=$pro_id'>
                
                    <img class='img-responsive' src='admin_area/product_images/$pro_img' style='height: 300px;'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='chitietsp1.php?pro_id=$pro_id'>

                            $pro_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                         $pro_price VNĐ
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='chitietsp1.php?pro_id=$pro_id'>

                            Chi tiết

                        </a>
                    
                        <a class='btn btn-primary' href='chitietsp1.php?pro_id=$pro_id'>

                            <i class='fa fa-shopping-cart'> Thêm vào giỏ hàng</i> 

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
            
            ";
            
        }
        
    }
    
}
function getcatpro(){
    
    // global $db;
    global $links;
    
    if(isset($_GET['cat'])){
        
        $cat_id = $_GET['cat'];
        
        $get_cat = "select * from phanloai where id_phanloai='$cat_id'";
        
        // $run_cat = mysqli_query($db,$get_cat);
         $run_cat = mysqli_query($links,$get_cat);
        
        $row_cat = mysqli_fetch_array($run_cat);
        
        $cat_title = $row_cat['ten_phanloai'];
        
        $cat_desc = $row_cat['mota_phanloai'];
        
        $get_cat = "select * from sanpham where id_phanloai='$cat_id'";
        
        // $run_products = mysqli_query($db,$get_cat);

         $run_products = mysqli_query($links,$get_cat);
        
        $count = mysqli_num_rows($run_products);
        
        if($count==0){
            
            
            echo "
            
                <div class='box'>
                
                    <h1> Không tìm thấy sản phẩm </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
                <div class='box'>
                
                    <h1> $cat_title </h1>
                    
                    <p> $cat_desc </p>
                
                </div>
            
            ";
            
        }
        
        while($row_products=mysqli_fetch_array($run_products)){
            
            $pro_id = $row_products['id_sanpham'];
            
            $pro_title = $row_products['ten_sanpham'];
            
            $pro_price = $row_products['gia_sanpham'];
            
            $pro_desc = $row_products['mota_sanpham'];
            
            $pro_img = $row_products['anh_sanpham'];
            
            echo "
            
                <div class='col-md-4 col-sm-6 center-responsive'>
                                    
                    <div class='product'>
                                        
                        <a href='chitietsp1.php?pro_id=$pro_id'>
                                            
                            <img class='img-responsive' src='admin_area/product_images/$pro_img' style='height: 300px;'>
                                            
                        </a>
                                            
                        <div class='text'>
                                            
                            <h3>
                                                
                                <a href='chitietsp1.php?pro_id=$pro_id'> $pro_title </a>
                                                
                            </h3>
                                            
                        <p class='price'>

                           $pro_price VNĐ

                        </p>

                            <p class='buttons'>

                                <a class='btn btn-default' href='chitietsp1.php?pro_id=$pro_id'>

                                Chi tiết

                                </a>

                            </p>
                                            
                        </div>
                                        
                    </div>
                                    
                </div>
            
            ";
            
        }
        
    }
    
}
?>
<!-- <a class='btn btn-primary' href='chitietSP.php?pro_id=$pro_id'>

                                <i class='fa fa-shopping-cart'> Thêm vào giỏ hàng</i> 

                                </a> -->