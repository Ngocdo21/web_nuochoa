<?php

  require 'includes/db.php';

  $sql = "SELECT * FROM khachhang";

  $result = mysqli_query($links, $sql);

  if(!$result) {
    die('loi'.mysqli_error($links));
  }

  if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }
  }

?>