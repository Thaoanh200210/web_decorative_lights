<?php
include('../../connect/connect.php');
if (isset($_GET["code"])) {
    $code_cart = $_GET["code"];
    $sql_update = "UPDATE cart SET cart_status=0 WHERE code_cart = '" . $code_cart . "'";
    $query = mysqli_query($mysqli, $sql_update);
    $sql_minius = "SELECT * FROM cart, cart_details WHERE cart.code_cart = cart_details.code_cart
        AND cart.code_cart = $code_cart";
    $query_minius = mysqli_query($mysqli, $sql_minius);
    while ($row_minus = mysqli_fetch_array($query_minius)) {
        $idpro = $row_minus['id_sanpham'];
        $sql_select = "SELECT * FROM sanpham WHERE id_sanpham = $idpro";
        $query_select = mysqli_query($mysqli, $sql_select);
        $row_select = mysqli_fetch_array($query_select);
        $remain = $row_select['soluong'] - $row_minus['soluongmua'];
        $sql_up = "UPDATE sanpham SET soluong = $remain WHERE id_sanpham = $idpro";
        $query_up = mysqli_query($mysqli, $sql_up);
    }
    header("Location:../../index.php?action=quanlydonhang&query=lietke");
}