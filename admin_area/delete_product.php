<?php 
    
    if(!isset($_SESSION['ten_user'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_product'])){
        
        $delete_id = $_GET['delete_product'];
        
        $delete_pro = "delete from sanpham where id_sanpham='$delete_id'";
        
        $run_delete = mysqli_query($links,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('Xóa thành công')</script>";
            
            echo "<script>window.open('index.php?view_products','_self')</script>";
            
        }
        
    }

?>

<?php } ?>