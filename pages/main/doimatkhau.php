<?php 
  
    if(isset($_POST["doimatkhau"])){
        $email = $_POST["email"];
        $matkhau_cu = md5($_POST["password_cu"]);
        $matkhau_moi = md5($_POST["password_moi"]);
        $sql = "SELECT * FROM users WHERE email='".$email."' AND matkhau='".$matkhau_cu."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0) {
            $sql_update = mysqli_query($mysqli, "UPDATE users SET matkhau='".$matkhau_moi."' ");
            echo '<h5 style="color:green; text-align:center;">Tài khoản đã được thay đổi.</h5 > ';

        }else{
            // echo '<p style="color:red;text-align:center;">Tài khoản hoặc mật khẩu cũ không đúng, vui lòng nhập lại.</p > ';
            $message = "Tài khoản hoặc mật khẩu cũ không đúng, vui lòng nhập lại.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            
        }
    }
?>

<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center border border-info rounded m-4 pb-4" style="background-color: white">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info m-4">ĐỔI MẬT KHẨU</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Tài khoản:</label><br>
                                <input type="text" name="email" placeholder="Email..."  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Mật khẩu cũ:</label><br>
                                <input type="password" name="password_cu" id="password" placeholder="Mật khẩu cũ.." class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Mật khẩu mới:</label><br>
                                <input type="password" name="password_moi" id="password" placeholder="Mật khẩu mới...." class="form-control">
                            </div>
                            <div class="form-submit d-flex justify-content-between">
                                <div class="form-group">
                                    
                                    <input type="submit" name="doimatkhau" class="btn btn-info btn-md" value="Đổi mật khẩu">
                                </div>
                                
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>