<?php 
    //nếu tồn tại cái get trang thì lấy trang gán vào page, 
    //cho begin bằng 0 rồi lấy page rồi tính sau đó gán cho begin
    // if(isset($_GET["trang"])){
    //     $page = $_GET["trang"];
    // }else{
    //     $page = "";
    // }
    // if($page == "" || $page == 1){
    //     $begin = 0;
    // }else{
    //     $begin = ($page*8) - 8;
    // }
    // $sql_pro ="SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id ORDER BY id_sanpham DESC LIMIT $begin,8";
    // $query_pro = mysqli_query($mysqli,$sql_pro);


    // $sql_select_pro = "SELECT * FROM tbl_sanpham";
    // $stmt_select_pro = $pdo->prepare($sql_select_pro);
    // $stmt_select_pro->execute();
    // $count_pro = $stmt_select_pro->rowCount();
    // $page = ceil($count_pro / 8);
    

    $sql_trang= mysqli_query($mysqli,"SELECT * FROM sanpham");
    $row_count = mysqli_num_rows($sql_trang);
    $page = ceil($row_count/8);
    
    if (isset($_GET['number_page'])) {
        $number_page = $_GET['number_page'];
    } else {
        $number_page = 0;
    }
    if ($number_page == 0 || $number_page == 1) {
        $begin = 0;
    } else {
        $begin = ($number_page * 8) - 8;
    }
    
    // $sql_select = "SELECT * FROM sanpham,danhmuc ORDER BY sanpham.id_danhmuc=danhmuc.id DESC LIMIT $begin,8";
    // $stmt = $pdo->prepare($sql_select);
    // $stmt->execute();
    $sql_pro ="SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc=danhmuc.id ORDER BY id_sanpham DESC LIMIT $begin,8";
    $query_pro = mysqli_query($mysqli,$sql_pro);

?>
<style>
    .tenden{
        text-align: center;
        color: black;
        background-color: white;
        margin-left: 4px;
        margin-right: 1px;
        height: 40px;
    }
    .theatenden {
        display: block;
        padding-top: 8px;
        font-size: 17px;

    }
</style>
<div class="container">

    <div class="row mt-3 p-0" style="height: 300px">
        <div class="col-3 p-0 " >
            <div  style="height: 260px" class="hinhanh m-0 pl-1 pr-1 pt-0 pb-0"><img height="260px" width="280px" src="./img/trangchu1.jpg" alt=""></div>
            <div class="tenden "><a style="color:black;text-decoration: none;" class="theatenden" href="index.php?quanly=danhmucsanpham&id=20">Đèn ốp trần</a></div>
        </div>

        <div class="col-3 p-0 ">
            <div style="height: 260px" class="hinhanh m-0 pl-1 pr-1 pt-0 pb-0"><img height="260px" width="280px" src="./img/trangchu5.jpg" alt=""></div>
            <div class="tenden"><a style="color:black;text-decoration: none;" class="theatenden" href="index.php?quanly=danhmucsanpham&id=23">Đèn treo tường</a></div>
        </div>

        <div class="col-3 p-0 ">
            <div style="height: 260px" class="hinhanh m-0 pl-1 pr-1 pt-0 pb-0"><img height="260px" width="280px" src="./img/trangchu2.jpg" alt=""></div>
            <div class="tenden"><a style="color:black;text-decoration: none;" class="theatenden" href="index.php?quanly=danhmucsanpham&id=21">Đèn chùm</a></div>
        </div>

        <div class="col-3 p-0 ">
            <div style="height: 260px" class="hinhanh m-0 pl-1 pr-1 pt-0 pb-0"><img height="260px" width="280px" src="./img/trangchu3.jpg" alt=""></div>
            <div class="tenden"><a style="color:black;text-decoration: none;" class="theatenden" href="index.php?quanly=danhmucsanpham&id=19">Đèn trang trí</a></div>
        </div>

    </div>

    <div class="row-12 mt-7 pt-7">

    <style>
    @-webkit-keyframes my {
        0% { color: #F8CD0A; } 
        50% { color: #fff;  } 
        100% { color: #F8CD0A;  } 
        }
        @-moz-keyframes my { 
            0% { color: #F8CD0A;  } 
            50% { color: #fff;  }
            100% { color: #F8CD0A;  } 
        }
        @-o-keyframes my { 
            0% { color: #F8CD0A; } 
            50% { color: #fff; } 
            100% { color: #F8CD0A;  } 
        }
        @keyframes my { 
            0% { color: #F8CD0A;  } 
            50% { color: #fff;  }
            100% { color: #F8CD0A;  } 
        } 
        .tieude {
                background:white;
                font-size:24px;
                font-weight:bold;
            -webkit-animation: my 2000ms infinite;
            -moz-animation: my 5000ms infinite; 
            -o-animation: my 3000ms infinite; 
            animation: my 5000ms infinite;
            font-size: 30px;
            text-align: center;
        }
    </style>
    <h3 class="text-center mt-3 pt-2  tieude rounded" >SẢN PHẨM MỚI NHẤT</h3>
    </div>

    <div class="row  m-1 rounded" style=" ">
                <?php
                    while($row_pro = mysqli_fetch_array($query_pro)){
                ?>
                        <div class="col-lg-3 col-md-6 mb-3  mt-4 " >
                            <div class="card h-100 border border-warning " style="box-shadow: 0px 2px 10px rgba(255, 215, 0,0.7);" >
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




      

<div class="row text-center">
        <div class="col"></div>
        <div class="col my-3 ms-5 ps-5">
            <div class="text-center ms-5 ps-5">
                <nav aria-label="Page navigation example ">
                    <ul class="pagination "  style="    margin-left: 90px;">
                        <li class="page-item me-2 mt-1">
                            <a class="page-link" href="index.php?number_page=<?= $number_page - 1?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php
                        for ($i = 1; $i <= $page; $i++) :
                            if ($number_page == '') :
                                $number_page = 1;
                        ?>
                                <li class="me-2 <?php if ($i == $number_page) : echo 'active';
                                                endif ?>  page-item p-0"><a class="text-decoration-none page-link" href="index.php?number_page=<?= $i ?>"><?= $i ?></a></li>
                            <?php else : ?>
                                <li class="me-2 <?php if ($i == $number_page) : echo 'active';
                                                endif ?>  page-item p-0"><a class="text-decoration-none page-link" href="index.php?number_page=<?= $i ?>"><?= $i ?></a></li>
                        <?php
                            endif;
                        endfor
                        ?>
                        <li class="page-item">
                            <a class="page-link mt-1" href="index.php?number_page=<?= $number_page + 1?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="col"></div>
</div>



</div>
