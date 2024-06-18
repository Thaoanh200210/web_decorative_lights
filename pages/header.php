
<?php 
    $sql_danhmuc ="SELECT * FROM danhmuc ORDER BY id DESC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);

?>
<?php 
    if(isset($_GET["dangxuat"])&&$_GET["dangxuat"]==1){
        unset($_SESSION["dangky"]);
    }
?>

<style>
    #tieude{
        font-weight: bold;
        color: white;
    }

    * {margin: 0; padding: 0}
    .menu {background: #333;height: 40px}
    .menu li{float: left; list-style: none; margin-right: 10px; padding: 10px 5px; width: 120px}
    .menu li:hover {background: #222;}
    .menu li a{color: #fff; text-decoration: none}
    .menu li ul li{display:none; width: 100px ;margin-top: 10px}
    .menu li:hover ul li{display: block}

   

</style>
<div class="col">
    <div class="row" style="background-image: url(./img/hinhnen1.jpg);" height="80px">
        
    <div id="tieude" style="height:100px; "  class="navbar-brand pl-4  col-12 pt-3"  href="https://nentang.vn">ANHLIGHT-SHOP </div>
    </div>

    <div class="row bg-secondary">
        <div class="col-8 text text-center">
            <nav class="navbar navbar-expand-lg navbar-dark bg-secondary  sticky-top text text-center"  style="height: 50px; color:black" style="font-family: 'UTMSwissCondensed';">
            
            <div class="container pt-4" height="40px" style="font-weight: bold; font-size:17px">
            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" height="40px" width="100%" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link  mr-2" href="index.php"><i class="fa-solid fa-house"></i> Trang chủ
                            </a>
                        </li>
                        
                        <li class="nav-item active">
                            <a class="nav-link  mr-2" href="index.php?quanly=gioithieu">Giới thiệu
                            </a>
                        </li>

                        <!-- Hiển thị danh mục -->
                        <div class="dropdown nav-item active " >
                        <a class=" mr-3 dropdown-toggle" style="height: 50%;border:none;   margin-top: 8px; background:#6c757d;color:white"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Danh mục đèn
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php 
                            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                            ?>

                        <li class="nav-item active">
                            <a class="nav-link" style="background: #803131;" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc["id"] ?>">
                            
                            <?php echo $row_danhmuc['tendanhmuc'] ?>
                            </a>
                        </li>


                        <?php 
                            }
                        ?>
                        </div>
                        </div>


                        
                            
                        <!-- Hiển thị lọc theo giá -->
                        <div class="dropdown nav-item active " >
                        <a class=" mr-2 dropdown-toggle" style="height: 50%;   margin-top: 8px; border:none;background:#6c757d; color:white;font: 18px; font-family:Arial, Helvetica, sans-serif"  type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Giá đèn
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: 270px">
                            <?php 
                            $sql_giasp ="SELECT * FROM giasanpham ORDER BY id_gia DESC";
                            $query_giasp = mysqli_query($mysqli,$sql_giasp);
                            while($row = mysqli_fetch_array($query_giasp)){
                            ?>

                            <li class="nav-item active">
                                <a class="nav-link" style="text-decoration: none;background: #803131;" href="index.php?quanly=giasanpham&id=<?php echo ($row["id_gia"]) ?>" class="list-group-item border border-dark">
                                <?php echo ($row["khoanggia"]) ?></a>
                            </li>

                            <?php 
                                }
                            ?>
                        </div>
                        </div>

                        <!-- giỏ hàng -->
                        <li class="nav-item active ">
                            <a class="nav-link  mr-2" href="index.php?quanly=giohang"><i class="fa-solid fa-cart-shopping"></i> Giỏ hàng</a>
                        </li>

                        <?php 
                            if(isset($_SESSION["dangky"])){
                        ?>
                            <li class="nav-item active">
                                <a class="nav-link  mr-2" href="index.php?dangxuat=1">Đăng xuất</a>
                                
                            </li>

                            <li class="nav-item active">
                            <a class="nav-link  mr-2" href="index.php?quanly=doimatkhau"><i class="fa-solid fa-user"></i>Thay đổi mật khẩu</a>
                                
                            </li>

                            
                        <?php 
                        } else {
                        ?>
                            <li class="nav-item active">
                            <a class="nav-link  mr-2" href="index.php?quanly=dangky"><i class="fa-solid fa-user"></i> Đăng ký</a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link  mr-2" href="index.php?quanly=dangnhap"><i class="fa-solid fa-user"></i> Đăng nhập</a>
                            </li>

                        <?php 
                        }
                        ?>
                        
                    </ul>
                </div>
            </div>
            </nav>
        </div>

        <div class="col-4 m-0 pr-5">
            <nav class="navbar navbar-light bg-white justify-content-between border border-dark m-2  rounded" >
                        <a class="navbar-brand"></a>
                        <form class="form-inline" action="index.php?quanly=timkiem" method="POST">
                            <input class="form-control mr-sm-2"  type="text" placeholder="Tìm kiếm" style="max-width: 320px;" name="tukhoa" aria-label="Search">
                            <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="timkiem" value="Tìm kiếm"></input>
                        </form>
            </nav>
        </div>

    </div>
</div>
