<?php

    $active = 'Sản phẩm';
    include("includes/header.php")

?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Trang</a>
                   </li>
                   <li>
                       Tin tức
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           
           <div class="col-md-12"><!-- col-md-9 Begin -->
           <?php 
               
               if(!isset($_GET['p_cat'])){
                   
                   if(!isset($_GET['cat'])){
             
                     echo "

                      <div class='box'>
                          <h1>Blog</h1>
                          <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo deleniti accusamus, consequuntur illum quasi ut. Voluptate a, ipsam repellendus ut fugiat minima? Id facilis itaque autem, officiis veritatis perferendis, quaerat!
                          </p>
                      </div>

                      ";
                       
                   }
                  
                  }
              
              ?>
               
               <div class="row"><!-- row Begin -->
                   
               <?php 
                   
                   // if(!isset($_GET['p_cat'])){
                       
                   //  if(!isset($_GET['cat'])){
                       
                   //     $per_page=6; 
                        
                   //     if(isset($_GET['page'])){
                           
                   //         $page = $_GET['page'];
                           
                   //     }else{
                           
                   //         $page=1;
                           
                   //     }
                       
                   //     $start_from = ($page-1) * $per_page;
                        
                       $get_products = "select * from tintuc ";
                        
                       $run_products = mysqli_query($links,$get_products);
                        
                       while($row_products=mysqli_fetch_array($run_products)){
                           
                           $pro_id = $row_products['id_tintuc'];
   
                           $pro_title = $row_products['ten_tintuc'];

                           $pro_img = $row_products['anh_tintuc'];

                           $pro_date = $row_products['ngay_dang'];

                           $pro_news = $row_products['noidung_tintuc'];
                           
                           echo "
                           
                               <div class='col-md-4 col-sm-6 center-responsive'>
                               
                                   <div class='product'>
                                        <a href='cttintucsp1.php?pro_id=$pro_id'>
                                       
                                           <img class='img-responsive' src='admin_area/product_images/$pro_img' style='height: 300px;'>
                                       
                                       </a>
                                       
                                       <div class='text'>
                                       
                                           <h3>
                                           
                                               <a href='cttintucsp1.php?pro_id=$pro_id'> $pro_title </a>
                                           
                                           </h3>
                                           <p class='price'>
                                           
                                               $pro_date
                                           
                                            </p>

                                       
                                          

                                           <p class='buttons'>

                                               <a class='btn btn-default' href='cttintucsp1.php?pro_id=$pro_id' >

                                                   Chi tiết

                                               </a>

                                              

                                           </p>
                                          
                                       
                                       </div>
                                   
                                   </div>
                               
                               </div>
                           
                           ";
                           
                   }
                   
              ?>
               </div><!-- row Finish -->
               
            
               <?php getpcatpro();
               getcatpro(); ?>   
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>