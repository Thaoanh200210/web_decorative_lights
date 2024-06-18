<?php 
    
    $sql_lietke_sp = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc = danhmuc.id ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<div class="row pt-4">
<h2 class=" ">LIỆT KÊ SẢN PHẨM</h2>
</div>

<div class="row ">
    <a class="col-2 btn btn-warning" href="index.php?action=quanlysanpham&query=them">THÊM SẢN PHẨM</a>


<h2 class="col-10 "></h2>
</div>


    <table class="table table-bordered border border-dark table-info " style="background-color: white; ">
        <thead>
            <tr>
            <th class="col border border-success" >ID</th>
            <th class="col border border-success" >Tên sản phẩm</th>
            <th class="col border border-success" >Hình ảnh</th>
            <th class="col border border-success" >Giá sản phẩm</th>
            <th class="col border border-success" >Số lượng</th>
            <th class="col border border-success" >Mã sản phẩm</th>
            <th class="col border border-success" >Danh mục</th>
            <th class="col border border-success" >Quản lý</th>
            </tr>
        </thead>
    <?php
    // Hàm lấy ra từng mảng
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_sp)){
        $i++;
    ?>
        <tbody>
            <tr>
            <td class="col border border-success"><?php echo $i ?></td>
            <td class="col border border-success"><?php echo $row["tensanpham"]  ?></td>
            <td class="col border border-success"><img src="modules/quanlysp/uploads/<?php echo $row["hinhanh"]?>" width="200px" height="200px"></td>
            <td class="col border border-success"><?php echo $row["giasp"]  ?></td>
            <td class="col border border-success"><?php echo $row["soluong"]  ?></td>
            <td class="col border border-success"><?php echo $row["masp"]  ?></td>
            <td class="col border border-success"><?php echo $row["tendanhmuc"]  ?></td>
            <td class="col border border-success">
                <a class="btn btn-info" href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row["id_sanpham"] ?>">SỬA</a> | 
                <a class="btn btn-danger" onclick=" return confirm('Bạn có chắc muốn xóa không')" href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row["id_sanpham"] ?>">XÓA </a>
            </td>
        </tr>
    <?php 
     }
    ?>
  </tbody>
</table>