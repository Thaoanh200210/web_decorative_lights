<?php 
    include('../../connect/connect.php');


    //lay gia tri form vừa submit
    //cập nhật thongtinlienhe vào bảng liên hệ từ id lấy từ trang quanly
    
        if(isset($_POST['submitlienhe'])){
            $thongtinlienhe= $_POST['thongtinlienhe'];
            $id = $_GET['id'];
            $sql_update = "UPDATE lienhe SET thongtinlienhe='".$thongtinlienhe."' WHERE id='$id'";
            mysqli_query($mysqli,$sql_update);
            header('Location:../../index.php?action=quanlyweb&query=capnhat');
        }

        
    
    
    
      


?>