<?php 
    
    $sql_lietke_danhmucsp = "SELECT * FROM danhmuc ORDER BY thutu DESC";
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>

<div class="row pt-4">


<h2 class=" ">LIỆT KÊ DANH MỤC</h2>
</div>

<div class="row ">
    <a class="col-2 btn btn-warning" href="index.php?action=quanlydanhmucsanpham&query=them">THÊM DANH MỤC</a>


<h2 class="col-10 "></h2>
</div>

    <table class="table table-bordered border border-dark table-info" style="">
        <thead>
            <tr>
            <th class="col border border-success">ID</th>
            <th class="col border border-success">TÊN DANH MỤC</th>
            <th class="col border border-success">QUẢN LÝ</th>
            </tr>
        </thead>
    <?php
    // Hàm lấy ra từng mảng
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
        $i++;
    ?>
        <tbody>
            <tr>
            <td class="col border border-success"><?php echo $i ?></td>
            <td class="col border border-success"><?php echo $row["tendanhmuc"]  ?></td>

            <td class="col border border-success">
                <a class="btn btn-info" href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row["id"] ?>">SỬA</a> | 
                <a class="btn btn-danger" onclick=" return confirm('Bạn có chắc muốn xóa không')" href="modules/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $row["id"] ?>">XÓA </a>
            </td>
        </tr>
    <?php 
     }
    ?>
  </tbody>
    </table>

    