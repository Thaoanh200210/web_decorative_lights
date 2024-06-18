<style>
    #locsp{
        /* font-family: Georgia; */
        font-weight: bold;
        font-size: 15px;
        border: 2px double ;
        border-radius: 3px;
        background-color: white;
    }
</style>
<div class="col-lg-2 ">

                <p class="mt-3 mb-0  text-center" id="locsp">Lọc theo danh mục</p>
                
                <div class="list-group m-0 " style="font-weight: bold;">
                <?php 
                    $sql_danhmuc ="SELECT * FROM danhmuc ORDER BY id DESC";
                    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                    while($row = mysqli_fetch_array($query_danhmuc)){
                ?>
                    <a style="text-decoration: none;background: #803131; color: white" href="index.php?quanly=danhmucsanpham&id=<?php echo ($row["id"]) ?>" class=" list-group-item border border-white">
                        <?php echo ($row["tendanhmuc"]) ?></a>
                   <?php 
                    }
                   ?>
                </div>

                <div>
                    <p class="mt-5 mb-0 text-center" id="locsp" >Lọc theo giá</p>
                </div>

                <div class="list-group " style="font-weight: bold;">
                <?php 
                    $sql_giasp ="SELECT * FROM giasanpham ORDER BY id_gia DESC";
                    $query_giasp = mysqli_query($mysqli,$sql_giasp);
                    while($row = mysqli_fetch_array($query_giasp)){
                ?>
                    <a style="text-decoration: none;background: #803131; color: white;" href="index.php?quanly=giasanpham&id=<?php echo ($row["id_gia"]) ?>" class=" list-group-item border border-white">
                        <?php echo ($row["khoanggia"]) ?></a>
                   <?php 
                    }
                   ?>
                </div>

</div>