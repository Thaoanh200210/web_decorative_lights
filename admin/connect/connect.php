<?php
  $mysqli = new mysqli("localhost","root","","nienluancoso");
  mysqli_query($mysqli,"SET NAMES 'UTF8'");

  // Check connection
  if ($mysqli->connect_errno) {
    echo "Bạn đã kết nối lỗi" . $mysqli -> connect_error;
    exit();
  }



?>