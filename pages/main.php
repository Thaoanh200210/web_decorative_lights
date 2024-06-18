<div class="col">

        


        <?php 
             if(empty($_REQUEST)){
                echo'
                
                ';
             }
        ?>


               <!-- Trình chiếu chuyển 2 ảnh -->
          
               


                <!-- Hiển thị sản phẩm-->
                <!-- Kiểm tra xem url có tồn tại hay không, có để chuyển trang-->
                <?php 
                if(isset($_GET['quanly'])){
                    $tam = $_GET['quanly'];
                }else{
                    $tam ='';
                }

                if($tam =='danhmucsanpham'){
                    include("main/danhmuc.php");
                }elseif($tam=='giasanpham'){
                    include("main/giasanpham.php");
                }elseif($tam=='giohang'){
                    include("main/giohang.php");
                }elseif($tam=='gioithieu'){
                    include("main/gioithieu.php");
                }elseif($tam=='sanpham'){
                    include("main/sanpham.php");
                }elseif($tam=='dangky'){
                    include("main/dangky.php");
                }elseif($tam=='dangnhap'){
                    include("main/login.php");
                }elseif($tam=='thanhtoan'){
                    include("main/thanhtoan.php");
                }elseif($tam=='thanhtoan'){
                    include("main/thanhtoan.php");
                }elseif($tam=='camon'){
                    include("main/camon.php");
                }elseif($tam=='doimatkhau'){
                    include("main/doimatkhau.php");
                }elseif($tam=='lienhe'){
                    include("main/lienhe.php");
                }elseif($tam=='timkiem'){
                    include("main/timkiem.php");
                }elseif($tam=='vanchuyen'){
                    include("main/vanchuyen.php");
                }elseif($tam=='thongtinthanhtoan'){
                    include("main/thongtinthanhtoan.php");
                }elseif($tam=='donhangdadat'){
                    include("main/chitietdonhang.php");
                }else{
                    include("main/index.php");
                }
                ?>
                <!-- /.row Product List -->

            </div>