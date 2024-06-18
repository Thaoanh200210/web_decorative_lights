<?php 
  
    if(isset($_POST["dangnhap"])){
        $email = $_POST["email"];
        $matkhau = $_POST["password"];

        if (!$email || !$matkhau )
        {
            $message = "Vui lòng nhập đầy đủ thông tin.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            // echo '<p style="color:red">Vui lòng nhập đầy đủ thông tin.</p > ';
            // exit;
        }else {

        $kiemtra_email = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/";
        if (!preg_match($kiemtra_email, $email))
        {
            $message = "Email này không hợp lệ. Vui lòng nhập email khác.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        // echo '<p style="color:red"> Email này không hợp lệ. Vui lòng nhập email khác. </p > ';
        // exit;
        }

        //Kiểm tra mật khẩu có đủ 6 số không
        $kiemtra_matkhau = "/^[A-Za-z0-9]{6,}$/";
        if(!preg_match($kiemtra_matkhau,$matkhau)){
            $message = "Mật khẩu phải từ 6 số trở lên, vui lòng nhập lại.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            // echo '<p style="color:red"> Mật khẩu phải từ 6 số trở lên.</p > ';
            // exit;
        } 
        $matkhau = md5($matkhau);

        $sql = "SELECT * FROM users WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0) {
            $row_data = mysqli_fetch_array($row);
            // lấy được tên khách hàng ra để hiện qua bên giỏ hàng chào mừng khách hàng.
            $_SESSION["dangky"] = $row_data["tenkhachhang"];
            $_SESSION["email"] = $row_data['email'];
            $_SESSION["id_khachhang"] = $row_data["id_dangky"];
            echo "<script>window.open('index.php','_SELF')</script> ";

        }else{
            // echo '<p style="color:red">Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại.</p > ';
            $message = "Tài khoản hoặc mật khẩu bạn đã sai, vui lòng nhập lại.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            
        }
    }}
?>

<body>
    <div id="login" >
        <div class="container" >
            <div class="border border-info rounded m-4" style="background-color: white">

                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="" method="post">
                                <h3 class="text-center text-info m-4">ĐĂNG NHẬP KHÁCH HÀNG</h3>
                                <div class="form-group">
                                    <label for="username" class="text-info"><i class="fa-solid fa-user"></i> Tài khoản:</label><br>
                                    <input type="email" name="email" placeholder="Email..."  class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info"><i class="fa-solid fa-key"></i> Mật khẩu:</label><br>
                                    <input type="password" name="password" id="password" placeholder="Mật khẩu...." class="form-control">
                                </div>
                                <div class="form-submit d-flex justify-content-between">
                                    <div class="form-group">
                                        
                                        
                                        
                                        <input type="submit" name="dangnhap" class="btn btn-info btn-md" value="Đăng Nhập">
                                    </div>
                                    <div id="register-link" class="text-right">
                                        <a href="index.php?quanly=dangky" class="text-info">Register here</a>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

