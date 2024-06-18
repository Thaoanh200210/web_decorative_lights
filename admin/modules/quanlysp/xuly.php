<?php 
    include('../../connect/connect.php');


   
    //lay gia tri form vừa submit
    
        if(isset($_POST["themsanpham"])){
            $tensanpham= $_POST['tensanpham'];
            $masp= $_POST['masp'];
            $giasp = $_POST['giasp'];
            $giasanpham= $_POST['giasanpham'];
            $soluong = $_POST['soluong'];
            $hinhanh = $_FILES['hinhanh']['name'];
            $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
            $tomtat = $_POST['tomtat'];
            $noidung = $_POST['noidung'];
            $danhmuc = $_POST['danhmuc'];

            $sql_them = "INSERT INTO sanpham(tensanpham,masp,giasp,soluong,hinhanh,tomtat,noidung,id_danhmuc,id_gia_sp) 
            VALUES('".$tensanpham."','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."',
            '".$danhmuc."','".$giasanpham."')";
            mysqli_query($mysqli,$sql_them);
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
            header('Location:../../index.php?action=quanlysanpham&query=lietke');

        }elseif(isset($_POST['suasanpham'])){
            $tensanpham= $_POST['tensanpham'];
            $masp= $_POST['masp'];
            $giasp = $_POST['giasp'];
            $giasanpham= $_POST['giasanpham'];
            $soluong = $_POST['soluong'];
            $hinhanh = $_FILES['hinhanh']['name'];
            $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
            $tomtat = $_POST['tomtat'];
            $noidung = $_POST['noidung'];
            $danhmuc = $_POST['danhmuc'];
            if($hinhanh!=''){
                move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
                $sql = "SELECT * FROM sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
                $query = mysqli_query($mysqli,$sql);
                    while($row = mysqli_fetch_array($query)){
                        unlink('uploads/'.$row['hinhanh']);
                    }
                $sql_update = "UPDATE sanpham SET tensanpham='".$tensanpham."', masp='".$masp."', giasp ='".$giasp."',
                soluong ='".$soluong."',hinhanh ='".$hinhanh."',tomtat ='".$tomtat."',noidung ='".$noidung."',id_danhmuc='".$danhmuc."',id_gia_sp ='".$giasanpham."' WHERE id_sanpham='$_GET[idsanpham]'";
                
            }else{
                $sql_update = "UPDATE sanpham SET tensanpham='".$tensanpham."', masp='".$masp."', giasp ='".$giasp."',
                soluong ='".$soluong."',tomtat ='".$tomtat."',noidung ='".$noidung."',id_danhmuc='".$danhmuc."',id_gia_sp ='".$giasanpham."' WHERE id_sanpham='$_GET[idsanpham]'";
          
            }
             mysqli_query($mysqli,$sql_update);
            header('Location:../../index.php?action=quanlysanpham&query=lietke');

        }else{
            $id=$_GET['idsanpham'];
            $sql = "SELECT * FROM sanpham WHERE id_sanpham = '$id' LIMIT 1";
            $query = mysqli_query($mysqli,$sql);
            while($row = mysqli_fetch_array($query)){
                unlink('uploads/'.$row['hinhanh']);
            }
            $sql_xoa = "DELETE FROM sanpham WHERE id_sanpham='".$id."'"; 
            mysqli_query($mysqli,$sql_xoa);
            header('Location:../../index.php?action=quanlysanpham&query=lietke');
        }

        
    
    
    
      


?>