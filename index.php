<?php 
     session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trang web Bán hàng Đơn giản | NenTang.vn</title>

    <!-- <link src="" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"></link> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/layouts.css">
    <link rel="stylesheet" type="text/css" href="./css/chitietsanpham.css">


    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
    
</head>

<body id="body" style="">
    <!--Include file kết nối database-->
    <style>
        a{
    text-decoration: none;
        }
    </style>
    
    <?php include("./admin/connect/connect.php") ?>
    <!-- header-->
    <?php include("pages/header.php") ?>
    
    <!-- Main -->
    <div class="container content "  style="margin-bottom:250px; padding: 0px 70px ; font-size:15px;">

        <div class="row">
             
            <!--menu-->
            <!-- <?php include("pages/sidebar/sidebar.php") ?> -->

            <!-- Maincontent  -->
            <div class="col-12">
                <?php include("pages/main.php") ?>
            
            </div>
            
            
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

        <div class="row" style="height: 100px;">

          <div class="col gioithieu">
              <div class="tieudegioithieu row">
                <i class="iconcuoi col-3 pl-4 pt-3 fa-solid fa-cart-shopping"> </i>
                <p class="chugioithieu col-9 p-0 mt-4">Miễn phí lắp đặt đơn hàng </p></div>
          </div>

          <div class="col gioithieu">
              <div class="tieudegioithieu row">
              <i class="iconcuoi col-3 pl-5 pt-3 fa-solid fa-phone"></i>
              <p class="chugioithieu col-9 p-0 mt-4">Hỗ trợ 1900 1567 </p></div>
          </div>

          <div class="col gioithieu">
              <div class="tieudegioithieu row">
              <i class="iconcuoi col-3 pl-5 pt-3 fa-solid fa-dollar-sign"></i>
                <p class="chugioithieu col-9 p-0 mt-4"> Hoàn tiền nếu ở đâu rẻ hơn</p></div>
          </div>

          <div class="col gioithieu">
              <div class="tieudegioithieu row">
              <i class="iconcuoi col-3 pl-5 pt-3 fa-solid fa-bag-shopping"></i>
              <p class="chugioithieu col-9 p-0 mt-4"> 
              Đảm bảo hàng chính hãng 
              </p></div>
          </div>

          </div>
        

    </div>
    
    

    <!-- Footer -->
    <?php include("pages/footer.php") ?>
     <!-- Liên kết Jquery -->
     

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
    <script rel="stylesheet" src="./js/giaodien.js"></script> 
</body>
  <!-- <script type="text/JavaScript">
      $(document).ready(function() {

  var back = $(".prev");
  var next = $(".next");
  var steps = $(".step");

  next.bind("click", function() {
    $.each(steps, function(i) {
      if (!$(steps[i]).hasClass('current') && !$(steps[i]).hasClass('done')) {
        $(steps[i]).addClass('current');
        $(steps[i - 1]).removeClass('current').addClass('done');
        return false;
      }
    })
  });
  back.bind("click", function() {
    $.each(steps, function(i) {
      if ($(steps[i]).hasClass('done') && $(steps[i + 1]).hasClass('current')) {
        $(steps[i + 1]).removeClass('current');
        $(steps[i]).removeClass('done').addClass('current');
        return false;
      }
    })
  });

  })

  </script> -->
</html>