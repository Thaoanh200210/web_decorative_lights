
<?php 
    
    $sql_lietke_dh = "SELECT * FROM cart_details,sanpham WHERE cart_details.id_sanpham = sanpham.id_sanpham 
                    -- 'code' từ trang lietke đem qua
     AND cart_details.code_cart = '$_GET[code]'  ORDER BY cart_details.id_cart_details DESC ";
    $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<div class="row pt-4">
    <h2 class="col-2" ><a  href="index.php?action=quanlydonhang&query=lietke"><i class="fa-solid fa-arrow-left"></i></a></h2>
    <h2 class="col-10 ">XEM ĐƠN HÀNG</h2>
</div>


    <table class="table table-bordered border border-dark table-info" style="background-color: white;">
        <thead>
            <tr>
            <th  class="col border border-success">ID</th>
            <th  class="col border border-success">Mã đơn hàng</th>
            <th  class="col border border-success">Tên sản phẩm</th>
            <th  class="col border border-success">Số lượng</th>
            <th  class="col border border-success">Đơn giá</th>
            <th  class="col border border-success">Thành tiền</th>
        
            </tr>
        </thead>
    <?php
    // Hàm lấy ra từng mảng
    $i=0;
    $tongtien = 0;
    while($row = mysqli_fetch_array($query_lietke_dh)){
        $i++;
        $thanhtien = $row["giasp"]*$row["soluongmua"];
        $tongtien += $thanhtien;
    ?>
        <tbody>
            <tr >
            <td  class="col border border-success"><?php echo $i ?></td>
            <td  class="col border border-success"><?php echo $row["code_cart"]  ?></td>
            <td  class="col border border-success"><?php echo $row["tensanpham"]  ?></td>
            <td  class="col border border-success"><?php echo $row["soluongmua"]  ?></td>
            <td  class="col border border-success"><?php echo number_format( $row["giasp"],0,',','.' ).'vnd' ?></td>
            <td  class="col border border-success"><?php echo  number_format( $row["giasp"]*$row["soluongmua"],0,',','.' ).'vnd' ?></td>
            
        </tr>
    <?php 
     }
    ?>

            <td  class="col border border-success" colspan="6">
                <p>Tổng tiền: <?php echo number_format( $tongtien,0,',','.' ).'vnd' ?> </p>
            </td>
  </tbody>
</table>