<div class="row pt-4">
    <h2 class="col-2 ">
    <a class="btn btn-warning"  href="index.php?action=quanlyadmin&query=admin"><i class="fa-solid fa-arrow-left"></i></a>
    </h2>
    <h2 class="col-10 ">THÊM TÀI KHOẢN ADMIN</h2>
</div>
<table class="table table-bordered border border-success table-success" style="background-color: white" >
    <form action="modules/quanlynguoidung/admin/xuly.php" method="POST">
        <tbody>
            <tr>
                <th  class="col border border-success" >Tên admin</th>
                <td  class="col border border-success" ><input type="text" name="tenadmin"></td>
            </tr>
            <tr>
                <th  class="col border border-success" >password</th>
                <td  class="col border border-success"><input type="password" name="password"></td>
                
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="themadmin" class="btn btn-dark" value="Thêm admin"></td>
            </tr>
        </tbody>
    </form>
</table>