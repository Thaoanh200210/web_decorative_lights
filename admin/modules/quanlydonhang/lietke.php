
<?php 
    
    $sql_lietke_dh = "SELECT * FROM cart,users WHERE cart.id_khachhang = users.id_dangky ORDER BY id_cart DESC";
    $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>

<h2 class="pt-2 mt-2">LIỆT KÊ ĐƠN HÀNG</h2>

    <table class="table border border-success rounded table-success" style="background-color: white;margin-left: -50px">
        <thead>
            <tr>
            <th class="col-1 border border-success">ID</th>
            <th class="col-1 border border-success">Mã đơn hàng</th>
            <th class="col border border-success">Tên khách hàng</th>
            <th class="col border border-success">Địa chỉ</th>
            <th class="col border border-success">Email</th>
            <th class="col border border-success">Số điện thoại</th>
            <th class="col border border-success">Ngày đặt</th>
            <th class="col border border-success">Tình trạng</th>
        
            <th class="col border border-success">Quản lý</th>
            </tr>
        </thead>
    <?php
    // Hàm lấy ra từng mảng
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_dh)){
        $i++;
    ?>
        <tbody>
            <tr>
            <td class="col border border-success"  ><?php echo $i ?></td>
            <td class="col border border-success" ><?php echo $row["code_cart"]  ?></td>
            <td class="col border border-success" ><?php echo $row["tenkhachhang"]  ?></td>
            <td class="col border border-success" ><?php echo $row["diachi"]  ?></td>
            <td class="col border border-success" ><?php echo $row["email"]  ?></td>
            <td class="col border border-success" ><?php echo $row["sodienthoai"]  ?></td>
            <td class="col border border-success"  ><?php echo $row["cart_date"]  ?></td>
            <td class="col border border-success" >
                <?php 
                if($row["cart_status"]== 1){
                        // Khi trạng thái bằng 1 sẽ là đơn hàng mới và lấy code_cart trong bảng cart của đơn hàng để so sánh
                    echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Đơn hàng mới</a>';
                }else{
                    echo 'Đã xử lý';
                }
                ?>
            </td>
           
            <td class="col border border-success">
                <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row["code_cart"] ?>">Xem đơn hàng</a> 
            </td>
        </tr>
    <?php 
     }
    ?>
  </tbody>
</table>