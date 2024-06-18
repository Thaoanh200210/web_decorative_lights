<?php 
    session_start();
    include("../../admin/connect/connect.php");
    require('../../mail/sendmail.php');
    require('../../carbon/autoload.php');
    use Carbon\Carbon;
    $now = Carbon::now('Asia/Ho_Chi_Minh');
    $id_khachhang = $_SESSION["id_khachhang"];
    //hàm random số
    $code_order =rand(0,9999);
    $insert_cart = "INSERT INTO cart(id_khachhang,code_cart,cart_status,cart_date) VALUES('".$id_khachhang."','".$code_order."',1,'".$now."') ";
    $cart_query = mysqli_query($mysqli,$insert_cart);
    if($cart_query){
        //thêm giỏ hàng chi tiết - vòng lặp lấy từng phần tử trong giỏ hàng 
        foreach($_SESSION["cart"] as $key=> $value){
            $id_sanpham = $value["id"];
            $soluong = $value["soluong"];
            $insert_order_details = "INSERT INTO cart_details(id_sanpham,code_cart,soluongmua) 
            VALUES('".$id_sanpham."','".$code_order."','".$soluong."') ";
            mysqli_query($mysqli,$insert_order_details);

        }
        $tieude = 'Đặt hàng website AnhLight shop đã thành công';
        $noidung = "<p>Cảm ơn quý khách đã đặt hàng tại cửa hàng chúng tôi. Với mã đơn hàng:".$code_order."</p>";
        $noidung .= " <h4>Đơn hàng đặt bao gồm :</h4>";
        
        foreach($_SESSION['cart'] as $key => $value){
            $noidung = "<ul style='border:1px solid blue; margin:10px'>
                <li>".$value['masp']."</li>
                <li>".$value['tensanpham']."</li>
                <li>".number_format($value['giasp'],0,',','.')."</li>
                <li>".$value['soluong']."</li>
            </ul>";
        }

        $maildathang = $_SESSION['email'];
        $mail = new Mailer();
        $mail->dathangmail($tieude,$noidung,$maildathang);
    }

    unset($_SESSION["cart"]);
    echo '<script>window.open("../../index.php?quanly=camon","_SELF")</script>';

?>

<p>Thanh toán giỏ hàng</p>
