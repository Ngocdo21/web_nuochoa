<?php 
    
    if(!isset($_SESSION['ten_user'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_khachhang'])){
        
        $edit_khachhang_id = $_GET['edit_khachhang'];
        
        $edit_khachhang_query = "select * from khachhang where id_khachhang='$edit_khachhang_id'";
        
        $run_edit = mysqli_query($links,$edit_khachhang_query);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $id = $row_edit['id_khachhang'];
        
        $hoten = $row_edit['hoten'];
        
        $sdt = $row_edit['sdt'];

        $email = $row_edit['email'];
        
        $diachi = $row_edit['diachi'];
        
    }

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Product Category
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-pencil fa-fw"></i> Edit Product Category
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Họ tên
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $hoten ?> " name="hoten" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Số điện thoại
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $sdt ?> " name="sdt" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Email
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $email ?> " name="email" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Địa chỉ
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $diachi ?> " name="diachi" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                             
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value="Cập nhật" name="update" type="submit" class="form-control btn btn-primary">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php  

          if(isset($_POST['update'])){
              
              $hoten = $_POST['hoten'];
              
              $sdt = $_POST['sdt'];

              $email = $_POST['email'];
              
              $diachi = $_POST['diachi'];
              
              $update = "update khachhang set hoten='$hoten',sdt='$sdt', email='$email', diachi='$diachi' where id_khachhang='$id'";
              
              $run_p_cat = mysqli_query($links,$update);
              
              if($run_p_cat){
                  
                  echo "<script>alert('Cập nhật thành công')</script>";
                  
                  echo "<script>window.open('index.php?view_khachhang','_self')</script>";
                  
              }
              
          }

?>



<?php } ?> 