<div class="">

    <!--Kiểm tra chuyển hướng các trang-->
    <?php 
                if(isset($_GET['action']) && $_GET['query']){
                    $tam = $_GET['action'];
                    $query = $_GET['query'];
                }else{
                    $tam ='';
                    $query='';
                }

                if($tam =='quanlydanhmucsanpham' && $query=='them'){
                    include("modules/quanlydanhmuc/them.php");
                    

                }elseif($tam =='quanlydanhmucsanpham' && $query=='sua' ){
                    include("modules/quanlydanhmuc/sua.php");

                }elseif($tam =='quanlydanhmucsanpham' && $query=='lietke' ){
                    include("modules/quanlydanhmuc/lietke.php");

                }elseif($tam =='quanlygiatien' && $query=='them' ){
                    include("modules/quanlygiatien/them.php");

                }elseif($tam =='quanlygiatien' && $query=='sua' ){
                    include("modules/quanlygiatien/sua.php");

                }elseif($tam =='quanlygiatien' && $query=='lietke' ){
                    include("modules/quanlygiatien/lietke.php");

                }elseif($tam =='quanlynguoidung' && $query=='them' ){
                    include("modules/quanlynguoidung/admin/them.php");
                    include("modules/quanlynguoidung/admin/lietke.php");

                }elseif($tam =='quanlynguoidung' && $query=='sua' ){
                    include("modules/quanlynguoidung/admin/sua.php");

                }elseif($tam =='quanlynguoidung' && $query=='user' ){
                    include("modules/quanlynguoidung/user/lietke.php");

                }elseif($tam =='quanlyadmin' && $query=='admin' ){
                    include("modules/quanlynguoidung/admin/lietke.php");

                }elseif($tam =='quanlyadmin' && $query=='them' ){
                    include("modules/quanlynguoidung/admin/them.php");

                }elseif($tam =='quanlysanpham' && $query=='them' ){
                    include("modules/quanlysp/them.php");
        

                }elseif($tam =='quanlysanpham' && $query=='lietke' ){
                    include("modules/quanlysp/lietke.php");
                    
                }elseif($tam =='quanlysanpham' && $query=='sua' ){
                    include("modules/quanlysp/sua.php");
                    
                }elseif($tam =='quanlydonhang' && $query=='lietke' ){
                    include("modules/quanlydonhang/lietke.php");
                    
                }elseif($tam =='donhang' && $query=='xemdonhang' ){
                    include("modules/quanlydonhang/xemdonhang.php");
                    
                }elseif($tam =='quanlyvanchuyen' && $query=='lietke' ){
                    include("modules/quanlyvanchuyen/lietke.php");
                    
                }elseif($tam =='quanlyvanchuyen' && $query=='xemvanchuyen' ){
                    include("modules/quanlyvanchuyen/xemvanchuyen.php");
                    
                }elseif($tam =='quanlyweb' && $query=='capnhat' ){
                    include("modules/quanlyweb/quanly.php");
                    
                }
                else{
                    include("modules/dashboard.php");
                }
                ?>

</div>