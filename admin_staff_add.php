<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="fonts/css/all.css">
  <link rel="stylesheet" href="fonts/css/all.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="shortcut icon" type="image/png" href="pic/icon.ico"/>
  <title>Welcome to LT&CT!</title>
  <style>
    .tile-footer-menu {
      position: absolute;
      bottom: 2%;
      text-align: center;
      color: #FFF;
      text-shadow: 1px 1px #b94971, 2px 2px #b94971, 3px 3px #b94971,
        -1px -1px #8d6cb9, -2px -1px #8d6cb9, -3px -1px #8d6cb9;
      font: Bold 20px Sketch_Block;
      -webkit-transition: all 0.12s ease-out;
      -moz-transition: all 0.12s ease-out;
      -o-tramsition: all 0.12s ease-out;
      padding: 0 20px;
    }

    .menu-bar {
      font-size: 30px;
      padding: 5px 10px;
    }

    body {
      position: relative;
      width: 100%;
    }

    aside.hide {
      width: 0;
    }

    main.expand {
      width: calc(100% - 30px);
      left: 10px;
    }

    .menu-bar:hover {
      background-color: #d57e9dc7;
      border-radius: 5px;
    }

    a.app-menu__item:focus {
      outline: none;
    }
  </style>
</head>

<body class="app">
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="pic/admin.jpg" width="50px" alt="User Image">
    <div>
      <p class="h5"><b>Hello Admin!</b></p>
      <a href="admin_login.php" class="text-light" >Đăng xuất<i class="p-1 fa-solid fa-right-from-bracket"></i></a>
    </div>
  </div>
  <hr>
  <ul class="app-menu">
    <li>
      <a class="app-menu__item" href="admin_statistic.php">
        <i class="app-menu__icon fa-solid fa-chart-line"></i>
        <span class="app-menu__label">Thống kê</span>
      </a>
    </li>
    <li>
      <a class="app-menu__item" href="admin_order.php" >
        <i class="app-menu__icon fa-solid fa-cart-shopping"></i>
        <span class="app-menu__label">Đơn hàng</span>
      </a>
    </li>
    <li>
      <a class="app-menu__item" href="admin_product.php">
        <i class="app-menu__icon fa-solid fa-store"></i>
        <span class="app-menu__label">Sản phẩm</span>
      </a>
    </li>
    <li>
      <a class="app-menu__item" href="admin_customer.php">
        <i class="app-menu__icon fa-solid fa-user"></i>
        <span class="app-menu__label">Khách hàng</span>
      </a>
    </li>
    <li>
      <a class="app-menu__item activetab" href="admin_staff.php">
        <i class="app-menu__icon fa-solid fa-users"></i>
        <span class="app-menu__label">Nhân viên</span>
      </a>
    </li>
    <hr>
    <li>
      <a class="app-menu__item" href="admin_sale.php">
        <i class="app-menu__icon fa-solid fa-list-check"></i>
        <span class="app-menu__label">Quản lý mã</span>
      </a>
    </li>
    <li>
      <a class="app-menu__item" href="admin_setup.php">
        <i class="app-menu__icon fa-solid fa-gear"></i>
        <span class="app-menu__label">Cài đặt</span>
      </a>
    </li>
    <li>
      <p class="tile-footer-menu">Chào mừng đến cửa hàng nội thất LT&CT!</p>
    </li>
  </ul>
</aside>
  <main class="app-content">
    <header class="main-header">
      <a class="menu-bar" href="#">
        <i class="fa-solid fa-bars"></i>
      </a>
    </header>
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item"><a href="admin_staff.php">Danh sách nhân viên</a></li>
        <li class="breadcrumb-item"><a href="admin_staff_add.php">Thêm nhân viên</a></li>
      </ul>
      <div id="clock"></div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Thêm nhân viên</h3>
          <div class="tile-body">
            
            <?php
              include "connect.php";
              $maNV ="";
              $ten="";
              $gioitinh="";
              $anh="";
              $SDT="";
              $ngaysinh="";
              $diachi="";
              $ngayvl="";
              $email="";
              $chucvu="";
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(isset($_POST["maNV"])) { $maNV = $_POST['maNV']; }
                if(isset($_POST["ten"])) { $ten = $_POST['ten']; }
                if(isset($_POST["gioitinh"])) { $gioitinh = $_POST['gioitinh']; }
                if(isset($_POST["ImageUpload"])) { $anh = $_POST['ImageUpload']; }
                if(isset($_POST["email"])) { $email = $_POST['email']; }
                if(isset($_POST["SDT"])) { $SDT = $_POST['SDT']; }
                if(isset($_POST["ngaysinh"])) { $ngaysinh = $_POST['ngaysinh']; }
                if(isset($_POST["diachi"])) { $diachi = $_POST['diachi']; }
                if(isset($_POST["ngayvl"])) { $ngayvl = $_POST['ngayvl']; }
                if(isset($_POST["chucvu"])) { $chucvu = $_POST['chucvu']; }

              $sql = "INSERT INTO nhanvien VALUES ('$maNV', '$ten', '$gioitinh','$anh','$SDT','$ngaysinh','$diachi','$ngayvl','$email','$chucvu')";

                    if ($connect->query($sql) === TRUE) {
                        echo "<div class='p-2 bg-success' >Thêm dữ liệu thành công!</div>";
                    } else {
                        echo "<div class='p-2 bg-danger' >Error: " . $sql . "<br>" . $connect->error."</div>";
                    }
                }
                //Đóng database
                $connect->close();
            ?>
            <form class="row" method="post">
              <div class="form-group col-md-4">
                <label class="control-label">ID nhân viên</label>
                <input class="form-control" type="text" name="maNV" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Họ và tên</label>
                <input class="form-control" type="text" name="ten" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Giới tính</label>
                <select class="form-control" id="exampleSelect2" name="gioitinh" required>
                  <option value="Nam">Nam</option>
                  <option value="Nữ">Nữ</option>
                  <option value="Khác">Khác</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Địa chỉ email</label>
                <input class="form-control" type="text" name="email" required>
              </div>
              <div class="form-group  col-md-4">
                <label class="control-label">Số điện thoại</label>
                <input class="form-control" type="text" name="SDT" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Ngày sinh</label>
                <input class="form-control" type="date" name="ngaysinh">
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Địa chỉ thường trú</label>
                <input class="form-control" type="text" name="diachi" required>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Ngày vào làm</label>
                <input class="form-control" type="date" name="ngayvl">
              </div>
              <div class="form-group  col-md-4">
                <label for="exampleSelect1" class="control-label">Chức vụ</label>
                <select class="form-control" id="exampleSelect1" name="chucvu">
                  <option value="Bán hàng">Bán hàng</option>
                  <option value="Tư vấn">Tư vấn</option>
                  <option value="Dịch vụ">Dịch vụ</option>
                  <option value="Thu ngân">Thu ngân</option>
                  <option value="Quản kho">Quản kho</option>
                  <option value="Bảo trì">Bảo trì</option>
                  <option value="Kiểm hàng">Kiểm hàng</option>
                  <option value="Bảo vệ">Bảo vệ</option>
                  <option value="Tạp vụ">Tạp vụ</option>
                </select>
              </div>

              <div class="form-group col-md-12">
                <label class="control-label">Ảnh 3x4 nhân viên</label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="ImageUpload" onchange="readURL(this);" />
                </div>
                <div id="thumbbox">
                  <img height="300" width="300" alt="Thumb image" id="thumbimage" style="display: none" />
                  <a class="removeimg" href="javascript:"></a>
                </div>
                <div id="boxchoice">
                  <a href="javascript:" class="Choicefile"><i class='bx bx-upload'></i></a>
                  <p style="clear:both"></p>
                </div>

              </div>
              <div>
                <button class="btn btn-save" type="submit">Thêm</button>
                <a class="btn btn-cancel" href="admin_staff.php">Hủy bỏ</a>
              </div>
              </form>
          </div>
      </div>
    </div>
  </main>
</body>

  <!--MODAL-->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="row">
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Tạo chức vụ mới</h5>
              </span>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Nhập tên chức vụ mới</label>
              <input class="form-control" type="text" required>
            </div>
          </div>
          <BR>
          <button class="btn btn-save" type="button">Thêm</button>
          <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
          <BR>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!--MODAL-->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
  const aside = document.querySelector('aside');
  const toggle_menu = document.querySelector('.menu-bar');
  const main = document.querySelector('main');

  toggle_menu.onclick = function () {
    aside.classList.toggle('hide');
    main.classList.toggle('expand');
  };
</script>

</html>