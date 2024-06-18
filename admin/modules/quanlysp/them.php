<div class="row pt-4">
    <h2 class="col-2 ">
    <a class="btn btn-warning"  href="index.php?action=quanlysanpham&query=lietke"><i class="fa-solid fa-arrow-left"></i></a>
    </h2>
    <h2 class="col-10 ">THÊM SẢN PHẨM</h2>
</div>
<table class="table table-bordered border border-success table-success" style="background-color: white">
    <form action="modules/quanlysp/xuly.php" method="POST" enctype="multipart/form-data">
        <tbody>
            <tr>
                <th scope="row">Tên sản phẩm </th>
                <td><input type="text" name="tensanpham"></td>
            </tr>
            <tr>
                <th scope="row">Mã sản phẩm </th>
                <td><input type="text" name="masp"></td>
            </tr>
            <tr>
                <th scope="row">Giá sản phẩm </th>
                <td><input type="text" name="giasp"></td>
            </tr>

            <tr>
                <th scope="row">Chọn mức giá sản phẩm</th>
                <td>
                    <select name="giasanpham">
                        <?php 
                        $sql_giasanpham ="SELECT * FROM giasanpham ORDER BY id_gia DESC";
                        $query_giasanpham = mysqli_query($mysqli,$sql_giasanpham);
                        while($row = mysqli_fetch_array($query_giasanpham)){
                        ?>
                        <option value="<?php echo $row['id_gia'] ?>"><?php echo $row['khoanggia'] ?></option>
                        <?php
                        } 
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <th scope="row">Số lượng </th>
                <td><input type="text" name="soluong"></td>
            </tr>
            <tr>
                <th scope="row">Hình ảnh </th>
                <td><input type="file" name="hinhanh"></td>
            </tr>

            <tr>
                <th scope="row"> Tóm tắt </th>
                <td><textarea rows="2" cols="50" style="resize:none"  name="tomtat" ></textarea></td>
            </tr>

            <tr>
                <th scope="row"> Miêu tả </th>
                <td><textarea rows="4" cols="50" style="resize:none" name="noidung" ></textarea></td>
            </tr>
            <tr>
                <th scope="row">Chọn danh mục sản phẩm</th>
                <td>
                    <select name="danhmuc">
                        <?php 
                        $sql_danhmuc ="SELECT * FROM danhmuc ORDER BY id DESC";
                        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                        while($row = mysqli_fetch_array($query_danhmuc)){
                        ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['tendanhmuc'] ?></option>
                        <?php
                        } 
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="themsanpham" class="btn btn-dark" value="Thêm sản phẩm"></td>
            </tr>
        </tbody>
    </form>
</table>