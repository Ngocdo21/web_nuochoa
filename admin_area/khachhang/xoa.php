<?php
  include_once 'db.php';
  // if(isset($_POST['btn-save']))
  // {
    $id_khachhang = $_GET['id_khachhang'];
    
    $sql_query = "delete from khachhang where id_khachhang = '$id_khachhang'";
    if(mysqli_query($links, $sql_query)){
      header("location: ../qlkhachhang.php");
    }
  //}
?>