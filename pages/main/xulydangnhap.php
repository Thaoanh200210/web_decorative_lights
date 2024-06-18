<?php
    include('../../admin/connect/connect.php');

    // Nếu không phải là sự kiện đăng ký thì không xử lý
    if (!isset($_POST['dangnhap'])){
        die('');
    }
          
    //Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
          
    //Lấy dữ liệu từ file dangky.php
    $password   = addslashes($_POST['matkhau']);
    $email      = addslashes($_POST['email']);
 
 
          
    //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
    if (!$username || !$password )
    {
        echo " <script>alert('Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>') </script>";
        exit;
    }
    
    //Kiểm tra mật khẩu có đủ 6 số không
    

        // Mã khóa mật khẩu
        $password = md5($password);
          
          
    //Kiểm tra email đã có người dùng chưa
    $sql_email= "SELECT email FROM users WHERE email='".$email."' LIMIT 1";
    $row_email = mysqli_query($mysqli,$sql_email);
    if (mysqli_num_rows($row_email) != 0)
    {
        echo "Email này chưa được đăng ký.<a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    //Kiểm tra dạng nhập vào của ngày sinh
    // if (!preg_match("^[0-9]+/[0-9]+/[0-9]{2,4}", $birthday))
    // {
    //         echo "Ngày tháng năm sinh không hợp lệ. Vui long nhập lại.";
    //         exit;
    //     }
          
    
?>

