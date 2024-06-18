<div class="row pt-4">
    <h2 class="col-2 ">
    <a class="btn btn-warning"  href="index.php?action=quanlydanhmucsanpham&query=lietke"><i class="fa-solid fa-arrow-left"></i></a>
    </h2>
    <h2 class="col-10 ">THÊM DANH MỤC</h2>
</div>
<table  class="table table-bordered border border-dark table-success" style="background-color: white" >
    <form action="modules/quanlydanhmuc/xuly.php" method="POST">
        <tbody>
            <tr >
                <th class="col border border-success" scope="row">Tên danh mục</th>
                <td class="col border border-success"><input type="text" name="tendanhmuc"></td>
            </tr>
            <tr>
                <th class="col border border-success" scope="row">Thứ tự</th>
                <td class="col border border-success"><input type="text" name="thutu"></td>
                
            </tr>
            <tr>
                <td class="col border border-success"  colspan="2"><input  type="submit" class="btn btn-dark" name="themdanhmuc" value="Thêm danh mục sản phẩm"></td>
            </tr>
        </tbody>
    </form>
</table>