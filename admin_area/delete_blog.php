<?php 
    
    if(!isset($_SESSION['ten_user'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_blog'])){
        
        $delete_id = $_GET['delete_blog'];
        
        $delete_pro = "delete from tintuc where id_tintuc='$delete_id'";
        
        $run_delete = mysqli_query($links,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('Xóa thành công')</script>";
            
            echo "<script>window.open('index.php?view_blog','_self')</script>";
            
        }
        
    }

?>

<?php } ?>