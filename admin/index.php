<?php 
    session_start();
    if(!isset($_SESSION["dangnhap"])){
      header("Location:login.php"); 

    }
    
?>

<?php 
    if(isset($_GET['dangxuat'])&& $_GET['dangxuat']==1){
      unset($_SESSION["dangnhap"]);
      header("Location:login.php"); 
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">

<title>
  
   ADMIN
  
</title>

<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->



<link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />


<!-- Nepcha Analytics (nepcha.com) -->
<!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
<script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

  </head>

  <body class="g-sidenav-show  bg-gray-100">
      <?php include ("connect/connect.php") ?>
      
      <div class="container text-center content">
        <div class="row">
        <div class="col-2">
          <!-- sidebar ở đây  -->
                  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

                    <div class="sidenav-header">
                      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5  end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
                      <a class="navbar-brand m-0" href="  " target="_blank">
                        <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
                        <span class="ms-1 font-weight-bold text-white">ANHLIGHT SHOP</span>
                      </a>
                    </div>


                    <hr class="horizontal light mt-0 mb-2">

                      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
                        <ul class="navbar-nav">
                    
                    
                      
                    <li class="nav-item">
                      <a class="nav-link text-white " href="./index.php">
                        
                          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                          </div>
                        
                        <span class="nav-link-text ms-1">Dashboard</span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link text-white " href="index.php?action=quanlynguoidung&query=user">
                        
                          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">person</i>
                          </div>
                        
                        <span class="nav-link-text ms-1">Tài khoản người dùng</span>
                      </a>
                    </li>

                    
                    <li class="nav-item">
                      <a class="nav-link text-white " href="index.php?action=quanlyadmin&query=admin">
                        
                          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">person</i>
                          </div>
                        
                        <span class="nav-link-text ms-1">Quản lý tài khoản admin </span>
                      </a>
                    </li>
                      
                    <li class="nav-item">
                      <a class="nav-link text-white " href="index.php?action=quanlydanhmucsanpham&query=lietke">
                        
                          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">view_in_ar</i>
                          </div>
                        
                        <span class="nav-link-text ms-1">Danh mục</span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link text-white " href="index.php?action=quanlygiatien&query=lietke">
                        
                          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10"> receipt_long</i>
                          </div>
                        
                        <span class="nav-link-text ms-1">Giá tiền</span>
                      </a>
                    </li>
                      
                    <li class="nav-item">
                      <a class="nav-link text-white " href="index.php?action=quanlysanpham&query=lietke">
                        
                          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">view_in_ar</i>
                          </div>
                        
                        <span class="nav-link-text ms-1">Sản phẩm</span>
                      </a>
                    </li>

                    


                    <li class="nav-item">
                      <a class="nav-link text-white " href="index.php?action=quanlydonhang&query=lietke">
                        
                          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">view_in_ar</i>
                          </div>
                        
                        <span class="nav-link-text ms-1">Đơn hàng</span>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link text-white " href="index.php?action=quanlyvanchuyen&query=lietke">
                        
                          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">view_in_ar</i>
                          </div>
                        
                        <span class="nav-link-text ms-1">Vận chuyển</span>
                      </a>
                    </li>


                    <li class="nav-item">
                      <a class="nav-link text-white " href="index.php?action=quanlyweb&query=capnhat">
                        
                          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">view_in_ar</i>
                          </div>
                        
                        <span class="nav-link-text ms-1">Quản lý liên hệ</span>
                      </a>
                    </li>


                      
                        <li class="nav-item mt-3">
                          <h6 class=" text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
                        </li>
                      

                      
                    <li class="nav-item">
                      <a class="nav-link text-white " href="index.php?dangxuat=1">
                        
                          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">login</i>
                          </div>
                        <span>
                        <span class="nav-link-text ms-1" href="">Đăng xuất: <?php if(isset($_SESSION["dangnhap"])){
                                echo $_SESSION["dangnhap"];
                              } ?></span>
                        </span>
                      </a>
                    </li>       
                          
                      </div>
                      
                  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
                
                  </div>
              
                </aside>

          <!-- <main class="main-content border-radius-lg ">

          </main>
     -->
        </div>
                  
          <div class="col-10"> 
                  <?php include("modules/main.php") ?>
          </div>
           
          </div>  

     

<!--   Core JS Files   -->
    <script src="./assets/js/core/popper.min.js" ></script>
    <script src="./assets/js/core/bootstrap.min.js" ></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
  

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js" integrity="sha512-6Cwk0kyyPu8pyO9DdwyN+jcGzvZQbUzQNLI0PadCY3ikWFXW9Jkat+yrnloE63dzAKmJ1WNeryPd1yszfj7kqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      
                CKEDITOR.replace( 'thongtinlienhe' );
                CKEDITOR.replace( 'noidung' );
    </script>

    <!-- Thống kê -->
    <script type="text/javascript">
      // Mỗi lần load trang sẽ chạy hàm thống kê
      // $(document).ready(function(){
      //   thongke();
      //     var char = new Morris.Area({
      //       element: 'chart',
      //       xkey: 'year',
      //       ykeys: ['date', 'order','sales','quantity'],
      //       labels: ['Đơn hàng','Doanh thu','Số lượng bán ra']
      //     });

      //     $('select-date').change(function(){
      //       var thoigian = $(this).val();
      //       if(thoigian=='7ngay'){
      //         var text = '7 ngày qua';
      //       }else if(thoigian=='28ngay'){
      //         var text = '28 ngày qua';
      //       }else if(thoigian=='90ngay'){
      //         var text = '90 ngày qua';
      //       }else{
      //         var text = '365 ngày qua';
      //       }
      //       $('#text-date').text(text);
      //       $.ajax({
      //         url:"modules/thongke.php",
      //         method:"POST",
      //         dataType:"JSON",
      //         data:{thoigian:thoigian},
      //         success: function(data)
      //         {
      //           char.setData(data);
      //           $('#text-date').text(text);
      //         }
      //       });
      //     });
          
      //   function thongke(){
      //     var text = '365 ngày qua';
      //     $('#text-date').text(text);
      //     $.ajax({
      //       url:"modules/thongke.php",
      //       method:"POST",
      //       dataType:"JSON",
      //       success: function(data)
      //       {
      //         char.setData(data);
      //         $('#text-date').text(text);
      //       }
      //     });
      //   }
      // });

      new Morris.Line({

  element: 'chart',

  data: [
    { year: '2023-12-1', order: 5, sales : 400, quantity:2000 },
    { year: '2023-12-1', order: 4, sales : 500, quantity:2000 },
    { year: '2023-10-10', order: 15, sales : 500, quantity:2000 },
    { year: '2023-10-8', order: 15, sales : 500, quantity:1500 },
    { year: '2023-11-1', order: 35, sales : 5400, quantity:2000 },
    { year: '2023-12-29', order: 25, sales : 3500, quantity:21000 },
  ],
  

  xkey: 'year',
  ykeys: ['date', 'order','sales','quantity'],
  labels: ['Đơn hàng','Doanh thu','Số lượng bán ra']
});
      

           
    </script>

<!--  -->

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.1.0"></script>
  </body>

</html>
