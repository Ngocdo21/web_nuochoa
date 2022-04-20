<?php 
    
    if(!isset($_SESSION['ten_user'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_cat'])){
        
        $delete_cat_id = $_GET['delete_cat'];
        
        $delete_cat = "delete from phanloai where id_phanloai='$delete_cat_id'";
        
        $run_delete = mysqli_query($links,$delete_cat);
        
        if($run_delete){
            
            echo "<script>alert('Xóa thành công')</script>";
            
            echo "<script>window.open('index.php?view_cats','_self')</script>";
            
        }
        
    }

?>




<?php } ?>