<?php 
    $sql_pro ="SELECT * FROM sanpham WHERE sanpham.id_gia_sp='$_GET[id]' ORDER BY id_sanpham DESC";
    $query_pro = mysqli_query($mysqli,$sql_pro);
    //lấy tên danh mục
    $sql_cate ="SELECT * FROM giasanpham WHERE giasanpham.id_gia='$_GET[id]' LIMIT 1";
    $query_cate = mysqli_query($mysqli,$sql_cate);
    $row_title = mysqli_fetch_array($query_cate);

?>
<style>
    /* #tieude{
    font-weight: bold;
    font-size:40px;
    font-family: Georgia; */

    .tieude{
        text-align: center;
        /* font-family: Georgia; */
        font-weight: bold;
        font-size: 25px;
        /* border: 2px double ; */
        border-radius: 3px;
        background-color: white;
        width: 600px;
        margin-left: 7px;
        padding-left: 1px;
  }
    #ten{
        /* font-family: 'Courier New', Courier, monospace; */
        box-shadow:  0px 2px 10px rgba(0, 0, 0,0.7);;
    }

</style>

<div class="container" style="padding:0px 50px">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-9">
        <h3 class="text-center  mt-3 tieude rounded" > Lọc theo khoảng giá : <?php echo $row_title["khoanggia"] ?> </h3>

        </div>
    </div>
    <div class="row">
        <div class="col-3">
        <div class="card mt-3">
                    <article class="card-group-item">
                        <header class="card-header"><h6 class="title" style="font-weight: bold;font-size:20px;">DANH MỤC ĐÈN</h6></header>
                        <div class="filter-content">
                            <div class="list-group list-group-flush">
                            <?php 
                                $sql_danhmuc ="SELECT * FROM danhmuc ORDER BY id DESC";
                                $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                                while($row = mysqli_fetch_array($query_danhmuc)){
                            ?>

                            <a style="text-decoration: none;font-weight: bold;font-size:17px;" href="index.php?quanly=danhmucsanpham&id=<?php echo ($row["id"]) ?>" class="list-group-item  border border-white"><?php echo ($row["tendanhmuc"]) ?>  </a>

                            <?php 
                            }
                            ?>
                        </div>  <!-- list-group .// -->
                        </div>
                    </article> <!-- card-group-item.// -->
                   
                </div> <!-- card.// -->



                <!-- khoảng giá -->
                <div class="card mt-3">
                    <article class="card-group-item">
                        <header class="card-header"><h6 class="title" style="font-weight: bold;font-size:20px;">KHOẢNG GIÁ</h6></header>
                        <div class="filter-content">
                            <div class="list-group list-group-flush">
                            <?php 
                                $sql_giasp ="SELECT * FROM giasanpham ORDER BY id_gia DESC";
                                $query_giasp = mysqli_query($mysqli,$sql_giasp);
                                while($row = mysqli_fetch_array($query_giasp)){
                            ?>

                            <a style="text-decoration: none;font-weight: bold;font-size:17px;" 
                            href="index.php?quanly=giasanpham&id=<?php echo ($row["id_gia"]) ?>" 
                            class="list-group-item  border border-white">
                            <?php echo ($row["khoanggia"]) ?>  </a>

                            <?php 
                            }
                            ?>
                        </div>  <!-- list-group .// -->
                        </div>
                    </article> <!-- card-group-item.// -->
                   
                </div> <!-- card.// -->
              
                

        </div>

        <div class="col">
            <div class="row">
                            <?php
                                while($row_pro = mysqli_fetch_array($query_pro)){
                            ?>
                                <div class="col-lg-4 col-md-6 mb-4  mt-2 ">
                                    <div class="card h-100 border border-warning">
                                        <a href="index.php?quanly=sanpham&id=<?php echo $row_pro["id_sanpham"] ?>" class="text text-dark" style="text-decoration: none;">
                                            <div style="height: 200px; width:100%;">
                                                <img class="" style="width:100%; height: 100%;" src="../../nienluancoso/admin/modules/quanlysp/uploads/<?php echo $row_pro["hinhanh"] ?>" alt="">
                                            </div >   
                                            <div class="card-body m-2 text-center">
                                                    <p href="#" class="card-title text-uppercase"><?php echo $row_pro['tensanpham'] ?></p>
                                                    <p href="#" class="card-title "> Mã: <?php echo $row_pro['masp'] ?></p>
                                                    <h6 class="">Giá: <?php echo number_format($row_pro['giasp'],0,',','.').'vnd'?></h6>
                                                    <p href="#" class="card-text"><?php echo $row_pro['tomtat'] ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>     

                            <?php
                                }
                            ?>

            </div>
        </div>
    </div>
</div>