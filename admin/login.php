<?php 
    session_start();
    include("connect/connect.php");
    if(isset($_POST["dangnhap"])){
        $taikhoan = $_POST["username"];
        $matkhau = md5($_POST["password"]);
        $sql = "SELECT * FROM admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0) {
            $_SESSION["dangnhap"] = $taikhoan;
            header("Location:index.php");
        }else{
            // echo '<p style="color:red">Tài khoản hoặc mật khẩu không đúng, vui lòng nhập lại.</p > ';
            $message = "Tài khoản hoặc mật khẩu bạn đã sai, vui lòng nhập lại.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            // header("Location: login.php");
            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <div class="container">
            <div class="border border-info rounded m-4">

                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="" method="post">
                                <h3 class="text-center text-info">ADMIN LOGIN</h3>
                                <div class="form-group">
                                    <label for="username" class="text-info"><i class="fa-solid fa-user"></i>Username:</label><br>
                                    <input type="text" name="username" id="username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info"><i class="fa-solid fa-key"></i>Password:</label><br>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-submit d-flex justify-content-between">
                                    <div class="form-group">
            
                                        <input type="submit" name="dangnhap" class="btn btn-info btn-md" value="Đăng Nhập">
                                    </div>
                                    <!-- <div id="register-link" class="text-right">
                                        <a href="#" class="text-info">Register here</a>
                                    </div> -->
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>