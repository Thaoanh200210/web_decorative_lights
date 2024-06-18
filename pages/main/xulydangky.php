<?php
    include('../../admin/connect/connect.php');

    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['dangky'])){
        die('');
    }
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $username   = addslashes($_POST['hovaten']);
    $password   = addslashes($_POST['matkhau']);
    $email      = addslashes($_POST['email']);
    $address   = addslashes($_POST['diachi']);
    $phone  = addslashes($_POST['sodienthoai']);
 
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$password || !$email || !$address || !$phone)
    {
        
        echo( "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>");
        exit;
    }
    
    //Kiểm tra mật khẩu có đủ 6 số không
    $kiemtra_matkhau = "/^[A-Za-z0-9]{6,}$/";
    if(!preg_match($kiemtra_matkhau,$password)){
        echo "Mật khẩu phải từ 6 số trở lên.";
        exit;
    }

        // Mã khóa mật khẩu
        $password = md5($password);
          
    //Kiểm tra tên đăng nhập này đã có người dùng chưa
    $sql_ten = "SELECT tenkhachhang FROM users WHERE tenkhachhang='".$username."' LIMIT 1";
    $row_ten = mysqli_query($mysqli,$sql_ten);

    if (mysqli_num_rows($row_ten) > 0){
        echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác.<a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra xem số điện thoại đủ 10 số không
    $kiemtra_phone = "/^[0-9]{10,11}$/";
    if(!preg_match($kiemtra_phone,$phone)){
        echo "Số điện thoại phải từ 10 số trở lên";
    }
    


    //Kiểm tra email có đúng định dạng hay không
    $kiemtra_email = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/";
    if (!preg_match($kiemtra_email, $email))
    {
        echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
          
    //Kiểm tra email đã có người dùng chưa
    $sql_email= "SELECT email FROM users WHERE email='".$email."' LIMIT 1";
    $row_email = mysqli_query($mysqli,$sql_email);
    if (mysqli_num_rows($row_email) > 0)
    {
        echo "Email này đã có người dùng. Vui lòng chọn Email khác.<a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //Kiểm tra dạng nhập vào của ngày sinh
    // if (!preg_match("^[0-9]+/[0-9]+/[0-9]{2,4}", $birthday))
    // {
    //         echo "Ngày tháng năm sinh không hợp lệ. Vui long nhập lại.";
    //         exit;
    //     }
          
    //Lưu thông tin thành viên vào bảng
    $sql_dangky = "INSERT INTO users(tenkhachhang,email,diachi,matkhau,sodienthoai) 
    VALUES('".$username."','".$email."','".$address."','".$password."','".$phone."') ";

    $query_dangky = mysqli_query($mysqli, $sql_dangky);

    if($query_dangky){
      echo '<p style="color:green"> Bạn đã đăng ký thành công </p> ';
      echo "<a href='javascript: history.go(-1)'>Trở lại trang vừa rồi</a>";
      $_SESSION["dangky"] = $username;
      $_SESSION["id_khachhang"] = mysqli_insert_id($mysqli);
      $_SESSION["email"] = $email;
    //   echo "<script>window.open('index.php','_SELF')</script> ";
   
  }
?>
