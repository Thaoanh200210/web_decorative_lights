<?php 
    session_start();
    include('../../admin/connect/connect.php');

    //them số lượng
    if(isset($_GET["cong"])){
        $id=$_GET["cong"];
        foreach($_SESSION["cart"] as $cart_item){
            //neu xét cái id khác cái id đã lấy không làm gì hết
            if($cart_item["id"]!=$id){
                $product[]=array( "tensanpham"=>$cart_item["tensanpham"],"id"=>$cart_item["id"],
                "soluong"=>$cart_item['soluong'],"giasp"=>$cart_item["giasp"],"hinhanh"=>$cart_item["hinhanh"],"masp"=>$cart_item["masp"]);
                $_SESSION["cart"]= $product;
            }else{
            // khi chọn được id thì nếu tangsoluong dưới 20 thì cứ tăng lên 1
            $tangsoluong = $cart_item["soluong"]+1;
                if($cart_item["soluong"]<=20){
                  
                    $product[]=array( "tensanpham"=>$cart_item["tensanpham"],"id"=>$cart_item["id"],
                    "soluong"=>$tangsoluong,"giasp"=>$cart_item["giasp"],"hinhanh"=>$cart_item["hinhanh"],"masp"=>$cart_item["masp"]);
               
                }else{
                    //nguoc lai giữ nguyên
                    $product[]=array( "tensanpham"=>$cart_item["tensanpham"],"id"=>$cart_item["id"],
                    "soluong"=>$cart_item['soluong'] + 1,"giasp"=>$cart_item["giasp"],"hinhanh"=>$cart_item["hinhanh"],"masp"=>$cart_item["masp"]);
               
                }
                $_SESSION["cart"]= $product;
            }

        }
        header("Location:../../index.php?quanly=giohang");
    }
    //trừ số lượng
    if(isset($_GET["tru"])){
        $id=$_GET["tru"];
        foreach($_SESSION["cart"] as $cart_item){
            //neu xét cái id khác cái id đã lấy không làm gì hết
            if($cart_item["id"]!=$id){
                $product[]=array( "tensanpham"=>$cart_item["tensanpham"],"id"=>$cart_item["id"],
                "soluong"=>$cart_item['soluong'],"giasp"=>$cart_item["giasp"],"hinhanh"=>$cart_item["hinhanh"],"masp"=>$cart_item["masp"]);
                $_SESSION["cart"]= $product;
            }else{
            // khi chọn được id thì nếu tangsoluong dưới 20 thì cứ tăng lên 1
            $tangsoluong = $cart_item["soluong"]-1;
                if($cart_item["soluong"]>0){
                   
                    $product[]=array( "tensanpham"=>$cart_item["tensanpham"],"id"=>$cart_item["id"],
                    "soluong"=>$tangsoluong,"giasp"=>$cart_item["giasp"],"hinhanh"=>$cart_item["hinhanh"],"masp"=>$cart_item["masp"]);
               
                }else{
                    //nguoc lai giữ nguyên
                    $product[]=array( "tensanpham"=>$cart_item["tensanpham"],"id"=>$cart_item["id"],
                    "soluong"=>$cart_item['soluong'] + 1,"giasp"=>$cart_item["giasp"],"hinhanh"=>$cart_item["hinhanh"],"masp"=>$cart_item["masp"]);
               
                }
                $_SESSION["cart"]= $product;
            }

        }
        header("Location:../../index.php?quanly=giohang");
    }
    //xoa mot san pham
    if(isset($_SESSION["cart"]) && isset($_GET["xoa"])){
        $id=$_GET["xoa"];
        foreach($_SESSION["cart"] as $cart_item){
            //kiem tra xem nếu khác id thì đưa vào mảng vd ta lấy id 9 thì có 8-9-10 nó sẽ truyền 8 và 10 vào mảng. bỏ đi 9 
            if($cart_item["id"]!=$id){
                $product[]=array( "tensanpham"=>$cart_item["tensanpham"],"id"=>$cart_item["id"],
                "soluong"=>$cart_item['soluong'] + 1,"giasp"=>$cart_item["giasp"],"hinhanh"=>$cart_item["hinhanh"],"masp"=>$cart_item["masp"]);
                
            }
            $_SESSION["cart"] = $product;
            header("Location:../../index.php?quanly=giohang");
        }

    }

    //xóa sản phẩm
    if(isset($_GET['xoatatca']) && $_GET['xoatatca']==1){
        unset($_SESSION["cart"]);
        header('Location:../../index.php?quanly=giohang');
    }
    // thêm sản phẩm vào giỏ hàng
    if(isset($_POST["themgiohang"])){
        //session_destroy();
        $id = $_GET["idsanpham"];
        $soluong = 1;
        $sql = "SELECT * FROM sanpham WHERE id_sanpham = '".$id."' LIMIT 1";
        $query = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array($query);
            if($row){
                // thêm các giá trị vào mảng giỏ hàng mới
                $new_product = array(array("tensanpham"=>$row["tensanpham"],"id"=>$id,
                "soluong"=>$soluong,"giasp"=>$row["giasp"],"hinhanh"=>$row["hinhanh"],"masp"=>$row["masp"] ));

                //kiểm tra session giỏ hàng tồn tại
                if(isset($_SESSION["cart"])){
                    $found = false;
                    foreach($_SESSION["cart"] as $cart_item){
                        //kiểm tra xem dữ liệu trùng
                        if($cart_item["id"]==$id){
                            $product[]=array( "tensanpham"=>$cart_item["tensanpham"],"id"=>$cart_item["id"],
                            "soluong"=>$cart_item['soluong'] + 1,"giasp"=>$cart_item["giasp"],"hinhanh"=>$cart_item["hinhanh"],"masp"=>$cart_item["masp"]);
                            $found =true;
                        }else{
                            //neu du lieu khong trung
                            $product[]=array( "tensanpham"=>$cart_item["tensanpham"],"id"=>$cart_item["id"],
                            "soluong"=>$soluong,"giasp"=>$cart_item["giasp"],"hinhanh"=>$cart_item["hinhanh"],"masp"=>$cart_item["masp"]);
                        
                        }

                    }
                    if($found == false){
                        //liên kết du lieu new_product voi product 
                        $_SESSION["cart"]= array_merge($product,$new_product);
                    }else{
                        $_SESSION["cart"] = $product;
                    }

                }else{
                    // chưa thì thêm vào
                    $_SESSION["cart"] = $new_product;
                }
            }

         header("Location:../../index.php?quanly=giohang");   
    }
?>