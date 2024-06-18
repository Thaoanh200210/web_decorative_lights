<?php 
    
    $sql_lietke_user = "SELECT * FROM users ORDER BY id_dangky DESC";
    $query_lietke_user = mysqli_query($mysqli,$sql_lietke_user);
?>

<div class="container">
    <div class="row">
        <h2 class=" p-4 mt-2 mb-2">LIỆT KÊ DANH SÁCH KHÁCH HÀNG</h2>
    </div>
      
        
        
</div>

    <table class="table table-bordered border border-success table-success" style="background-color: white;">
        <thead>
            <tr>
            <th class="col border border-success">ID</th>
            <th class="col border border-success">Tên khách hàng</th>
            <th class="col border border-success">Email</th>
            <th class="col border border-success">Địa chỉ</th>
            <th class="col border border-success">Số điện thoại</th>
            </tr>
        </thead>
    <?php
    // Hàm lấy ra từng mảng
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_user)){
        $i++;
    ?>
        <tbody>
            <tr>
            <td class="col border border-success" ><?php echo $i ?></td>
            <td class="col border border-success" ><?php echo $row["tenkhachhang"]  ?></td>
            <td class="col border border-success" ><?php echo $row["email"]  ?></td>
            <td class="col border border-success" ><?php echo $row["diachi"]  ?></td>
            <td class="col border border-success" ><?php echo $row["sodienthoai"]  ?></td>
        </tr>
    <?php 
     }
    ?>


  </tbody>
</table>