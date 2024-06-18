
<div class="row"> 

<?php 
  // unset($_SESSION['dangky']);
    if(isset($_SESSION["dangky"])){
                  // hiện tên người đăng nhập từ file login
      echo '<h2 class=" ml-4 mt-2 btn btn-success" >Xin chào: '.'<span  style="">'.$_SESSION["dangky"].'</span></h2>' ;
    }
    
?>

</div>



<div class="container pb-2">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix mt-2">
    <div class="step current font-weight-bold"> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
    <div class="step font-weight-bold "> <span><a href="index.php?quanly=vanchuyen" >Vận chuyển</a></span> </div>
    <div class="step font-weight-bold "> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
    <!-- <div class="step font-weight-bold "> <span><a href="index.php?quanly=donhangdadat" >Lịch sử đơn hàng</a><span> </div> -->
   
  </div>


  
</div>


<table class="table border border-dark text-center rounded" style="background-color: white" >
  <thead >
    <tr >
      <th class="border border-dark" scope="col">ID</th>
      <th class="border border-dark"  scope="col">Mã SP</th>
      <th class="border border-dark" scope="col">Tên sản phẩm</th>
      <th class="border border-dark" scope="col">Hình ảnh</th>
      <th class="border border-dark" scope="col">Số lượng</th>
      <th class="border border-dark" scope="col">Giá sản phẩm</th>
      <th class="border border-dark" scope="col">Thành tiền</th>
      <th class="border border-dark" scope="col">Quản lý</th>
    </tr>
  </thead>
  <?php 
    //thêm để lưu sess từ bên kia truyền qua
    if(isset($_SESSION["cart"])){
        $i=0;
        $tongtien = 0;
        foreach($_SESSION["cart"] as $cart_item){
            $thanhtien = $cart_item["soluong"]* $cart_item["giasp"];
            $tongtien = $tongtien + $thanhtien;
        $i++;
  
?>
  <tbody class="border border-dark font-weight-bold">

    <tr>
      <td class="border border-dark"><?php echo $i ?></td>
      <td class="border border-dark"><?php  echo $cart_item["masp"] ?></td>
      <td class="border border-dark"><?php  echo $cart_item["tensanpham"] ?></td>
      <td class="border border-dark"><img src="../../nienluancoso/admin/modules/quanlysp/uploads/<?php echo $cart_item["hinhanh"] ?>" width="150px" alt=""></td>
      <td class="border border-dark" style="text-align:center;font-size: 20px;">
        <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item["id"]?>"><i style="font-size: 25px;" class="fa-solid fa-plus"></i></a>
        <?php  echo $cart_item["soluong"] ?>
        <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item["id"]?>"><i style="font-size: 25px;" class="fa-solid fa-minus"></i></a>
    
      </td>
      <td class="border border-dark"><?php  echo number_format($cart_item["giasp"],0,',','.').'vnd' ?></td>
      <td class="border border-dark"><?php  echo number_format($thanhtien,0,',','.').'vnd' ?></td>
      <td class="border border-dark mt-3 btn btn-dark"><a style="color:white; text-decoration: none;" href="pages/main/themgiohang.php?xoa=<?php echo $cart_item["id"]?>">XÓA</a></td>
    </tr>
  
  </tbody>
  <?php 
   }
   ?>
   <tr >
        <td class="border border-dark" colspan="8">
            <p class="font-weight-bold " >TỔNG TIỀN: <?php echo number_format($tongtien,0,',','.').'vnd' ?></p>
            <p class="font-weight-bold  btn btn-dark"><a style="color:white; text-decoration: none;" href="pages/main/themgiohang.php?xoatatca=1">XÓA TẤT CẢ</a></p>
            <div style="clear:both;"></div>
            <?php 
              if(isset($_SESSION["dangky"])){
            ?>
                  <p class="font-weight-bold  btn btn-dark "  style="text-align:center; "><a style="color:white; text-decoration: none;" href="index.php?quanly=vanchuyen">HÌNH THỨC VẬN CHUYỂN</a></p>
            <?php
              }else{
            ?>
                <p class="font-weight-bold  btn btn-dark" style="text-align:center"><a style="color:white; text-decoration: none;" href="index.php?quanly=dangky">ĐĂNG KÝ ĐẶT HÀNG</a></p>
            <?php
              }
            ?>
            
            
        </td>
   </tr>
   <?php 
    }else{
    ?> 
    <tr>
        <td class="border border-dark " style="font-weight: bold;"><p>Hiện tại giỏ hàng trống</p></td>
    </tr>
    <?php
    }
   ?>
</table>

