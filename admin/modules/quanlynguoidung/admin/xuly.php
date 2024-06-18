<?php 
    include('../../../connect/connect.php');

    //lay gia tri form vừa submit
    
        if(isset($_POST["themadmin"])){
            $tenadmin= $_POST['tenadmin'];
            $password = $_POST['password'];
            $password = md5($password);
            $sql_them = "INSERT INTO admin(username,password) VALUES('".$tenadmin."','".$password."')";
            mysqli_query($mysqli,$sql_them);
            header('Location:../../../index.php?action=quanlyadmin&query=admin');
        }elseif(isset($_POST['suaadmin'])){
            $tenadmin= $_POST['username'];
            $matkhau_cu = md5($_POST["matkhau_cu"]);
            $matkhau_moi = md5($_POST["matkhau_moi"]);
            // $sql_update = "UPDATE admin SET username='".$tenadmin."' WHERE id_admin='$_GET[idadmin]'";
            $sql = "SELECT * FROM admin WHERE username='".$tenadmin."' AND password='".$matkhau_cu."' LIMIT 1";
            $row = mysqli_query($mysqli,$sql);
            $count = mysqli_num_rows($row);
            if($count > 0) {
                $sql_update = mysqli_query($mysqli, "UPDATE admin SET password='".$matkhau_moi."' ");
                echo '<p style="color:green">Tài khoản đã được thay đổi.</p > ';
                // mysqli_query($mysqli,$sql_update);
                // header('Location:../../../index.php?action=quanlyadmin&query=admin');
            }else{
                echo '<p style="color:red">Tài khoản hoặc mật khẩu cũ không đúng, vui lòng nhập lại.</p > ';
            }
            
        }else{
            $id=$_GET['idadmin'];
            $sql_xoa = "DELETE FROM admin WHERE id_admin='".$id."'"; 
            mysqli_query($mysqli,$sql_xoa);
            header('Location:../../../index.php?action=quanlyadmin&query=admin');
        }

    
?>