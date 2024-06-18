<?php 
    
    $sql_lietke_admin = "SELECT * FROM admin ORDER BY id_admin DESC";
    $query_lietke_admin = mysqli_query($mysqli,$sql_lietke_admin);
?>

<div class="row pt-4">

<h2 class="col ">LIỆT KÊ TÀI KHOẢN ADMIN</h2>
</div>

<div class="row pt-1">
    <a class="col-2 btn btn-warning" href="index.php?action=quanlyadmin&query=them">THÊM TÀI KHOẢN</a>

<h2 class="col-10 "></h2>
</div>

    <table class="table table-bordered table-info" style="background-color: white;">
        <thead>
            <tr>
            <th class="col border border-success" >ID</th>
            <th class="col border border-success" >Tên admin</th>
            <th class="col border border-success" >Quản lý</th>
            </tr>
        </thead>
    <?php
    // Hàm lấy ra từng mảng
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_admin)){
        $i++;
    ?>
        <tbody>
            <tr>
            <td class="col border border-success"><?php echo $i ?></td>
            <td class="col border border-success"><?php echo $row["username"]  ?></td>

            <td class="col border border-success">
                <a class="btn btn-info" href="?action=quanlynguoidung&query=sua&idadmin=<?php echo $row["id_admin"] ?>">SỬA</a> | 
                <a class="btn btn-danger" onclick=" return confirm('Bạn có chắc muốn xóa không')" id="delete_button" href="modules/quanlynguoidung/admin/xuly.php?idadmin=<?php echo $row["id_admin"] ?>">XÓA </a>
            </td>
        </tr>
    <?php 
     }
    ?>

   
  </tbody>
</table>