
<?php 
    $sql_sua_danhmucsp = "SELECT * FROM danhmuc WHERE id='$_GET[iddanhmuc]' LIMIT 1";
    $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>

<div class="row pt-4">
    <h2 class="col-2 ">
    <a class="btn btn-warning"  href="index.php?action=quanlydanhmucsanpham&query=lietke"><i class="fa-solid fa-arrow-left"></i></a>
    </h2>
    <h2 class="col-10 ">SỬA DANH MỤC</h2>
</div>
<table class="table table-bordered border border-dark table-success" style="background-color: white" >
    <form action="modules/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>" method="POST">
        <?php 
        while($dong = mysqli_fetch_array($query_sua_danhmucsp)){
        ?>
        <tbody>
            <tr>
                <th class="border border-dark" scope="row">Tên danh mục</th>
                <td class="border border-dark"><input type="text" name="tendanhmuc" value="<?php echo $dong["tendanhmuc"] ?>"></td>
            </tr>
            <tr>
                <th class="border border-dark" scope="row">Thứ tự</th>
                <td class="border border-dark"><input type="text" name="thutu"  value="<?php echo $dong["thutu"] ?>"></td>
                
            </tr>
            <tr>
                <td class="border border-dark" colspan="2"><input type="submit" class="btn btn-dark" name="suadanhmuc" value="Sửa danh mục sản phẩm"></td>
            </tr>
        </tbody>
        <?php
        } 
        ?>
    </form>
</table>