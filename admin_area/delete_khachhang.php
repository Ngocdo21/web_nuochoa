<?php 
    
    if(!isset($_SESSION['ten_user'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_khachhang'])){
        
        $delete_khachhang_id = $_GET['delete_khachhang'];
        
        $delete_khachhang = "delete from khachhang where id_khachhang='$delete_khachhang_id'";
        
        $run_delete = mysqli_query($links,$delete_khachhang);
        
        if($run_delete){
            
            echo "<script>alert('Xóa thành công')</script>";
            
            echo "<script>window.open('index.php?view_khachhang','_self')</script>";
            
        }
        
    }

?>




<?php } ?>