<?php 
    include('../../connect/connect.php');

    //lay gia tri form vừa submit
    
        if(isset($_POST["themdanhmuc"])){
            $tendanhmuc= $_POST['tendanhmuc'];
            $thutu = $_POST['thutu'];
            $sql_them = "INSERT INTO danhmuc(tendanhmuc,thutu) VALUES('".$tendanhmuc."','".$thutu."')";
            mysqli_query($mysqli,$sql_them);
            header('Location:../../index.php?action=quanlydanhmucsanpham&query=lietke');
        }elseif(isset($_POST['suadanhmuc'])){
            $tendanhmuc= $_POST['tendanhmuc'];
            $thutu = $_POST['thutu'];
            $sql_update = "UPDATE danhmuc SET tendanhmuc='".$tendanhmuc."', thutu='".$thutu."' WHERE id='$_GET[iddanhmuc]'";
            mysqli_query($mysqli,$sql_update);
            header('Location:../../index.php?action=quanlydanhmucsanpham&query=lietke');
        }else{
            $id=$_GET['iddanhmuc'];
            $sql_xoa = "DELETE FROM danhmuc WHERE id='".$id."'"; 
            mysqli_query($mysqli,$sql_xoa);
            header('Location:../../index.php?action=quanlydanhmucsanpham&query=lietke');
        }

    
?>