<?php 

  //   if(isset($_POST["dangky"])){
  //     $tenkhachhang = $_POST["hovaten"];
  //     $email = $_POST["email"];
  //     $dienthoai = $_POST["sodienthoai"];
  //     $matkhau = md5($_POST["matkhau"]);
  //     $diachi = $_POST["diachi"];
  //     $sql_dangky = "INSERT INTO users(tenkhachhang,email,diachi,matkhau,sodienthoai) 
  //     VALUES('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."') ";

  //     $query_dangky = mysqli_query($mysqli, $sql_dangky);

  //     if($query_dangky){
  //       echo '<p style="color:green"> Bạn đã đăng ký thành công </p>';
  //       $_SESSION["dangky"] = $tenkhachhang;
  //       $_SESSION["id_khachhang"] = mysqli_insert_id($mysqli);
  //       echo "<script>window.open('index.php','_SELF')</script> ";
  //   }
  // }

  
?>




<form action="pages/main/xulydangky.php" method="POST">
    <section class="h-100 ">
      <div class="container py-2 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            <div class="card card-registration my-0">
              <div class="row g-0">
                <div class="col-xl-6 d-none d-xl-block">
                  <img height="730px" width="530px" src="../../nienluancoso/img/dangky.png"
                    alt="Sample photo" class="anhdangky"
                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                </div>
                <div class="col-xl-6">
                  <div class="card-body p-md-5 text-info">
                    <h3 class="mb-5 text-uppercase ">Đăng ký tài khoản </h3>


                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example8"><i class="fa-solid fa-user"></i> Họ và tên</label>
                      <input type="text" name="hovaten"  class="form-control form-control-lg" />
                      
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example9"><i class="fa-regular fa-envelope"></i> Email</label>
                      <input type="email"  name="email" class="form-control form-control-lg" />
                      
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example90"><i class="fa-solid fa-location-dot"></i> Địa chỉ</label>
                      <input type="text" id="diachi" name="diachi" class="form-control form-control-lg" />
                      
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example99"><i class="fa-solid fa-key"></i> Mật khẩu</label>
                      <input type="password" name="matkhau"  class="form-control form-control-lg" />
                      
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example97"><i class="fa-solid fa-phone"></i> Số điện thoại</label>
                      <input type="text" name="sodienthoai"  class="form-control form-control-lg" />
                      
                    </div>

                    <div class="form-outline mb-4">
                      
                      <input  style="text-align:center;" type="submit" name="dangky" class="btn btn-warning btn-lg ms-2"  value="Đăng ký"></input>
                     
                    </div>
                    <a name="dangnhap" style="font-size: large;" href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản        </a>
                    <div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</form>
