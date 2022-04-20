<?php 
    
    if(!isset($_SESSION['ten_user'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['delete_nguoidung'])){
        
        $delete_nguoidung_id = $_GET['delete_nguoidung'];
        
        $delete_nguoidung = "delete from user where id_user='$delete_nguoidung_id'";
        
        $run_delete = mysqli_query($links,$delete_nguoidung);
        
        if($run_delete){
            
            echo "<script>alert('Xóa thành công')</script>";
            
            echo "<script>window.open('index.php?view_nguoidung','_self')</script>";
            
        }
        
    }

?>




<?php } ?>