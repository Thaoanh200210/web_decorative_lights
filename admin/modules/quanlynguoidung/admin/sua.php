
<?php 
    $sql_sua_admin = "SELECT * FROM admin WHERE id_admin='$_GET[idadmin]' LIMIT 1";
    $query_sua_admin = mysqli_query($mysqli,$sql_sua_admin);

    


?>

<div class="row pt-4">
    <h2 class="col-2 ">
    <a class="btn btn-warning"  href="index.php?action=quanlyadmin&query=admin"><i class="fa-solid fa-arrow-left"></i></a>
    </h2>
    <h2 class="col-10 ">SỬA TÀI KHOẢN ADMIN</h2>
</div>
<table class="table table-bordered border border-success table-success" style="background-color: white">
    <form action="modules/quanlynguoidung/admin/xuly.php?idadmin=<?php echo $_GET['idadmin'] ?>" method="POST">
        <?php 
        while($dong = mysqli_fetch_array($query_sua_admin)){
        ?>
        <tbody>
            <tr>
                <th class="col border border-success" >Tên tài khoản</th>
                <td class="col border border-success"><input type="text" name="username" value="<?php echo $dong["username"] ?>"></td>
            </tr>
            <tr>
                <th class="col border border-success" >Mật khẩu cũ</th>
                <td class="col border border-success"><input type="password" name="matkhau_cu" placeholder="Mật khẩu cũ.."></td>
            </tr>
            <tr>
                <th class="col border border-success" >Mật khẩu mới</th>
                <td class="col border border-success"><input type="password" name="matkhau_moi" placeholder="Mật khẩu mới.."></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" class="btn btn-dark" name="suaadmin" value="Sửa admin"></td>
            </tr>
        </tbody>
        <?php
        } 
        ?>
    </form>
</table>