<?php 
    
    if(!isset($_SESSION['ten_user'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_p_cat'])){
        
        $delete_p_cat_id = $_GET['delete_p_cat'];
        
        $delete_p_cat = "delete from thuonghieu where id_nhanhang='$delete_p_cat_id'";
        
        $run_delete = mysqli_query($links,$delete_p_cat);
        
        if($run_delete){
            
            echo "<script>alert('Xóa thành công')</script>";
            
            echo "<script>window.open('index.php?view_p_cats','_self')</script>";
            
        }
        
    }

?>




<?php } ?>