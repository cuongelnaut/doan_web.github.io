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
  <title>Admin|Sản phẩm</title>
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

    a.activetab{
      background: #db5c90;
      text-decoration: none;
      color: rgb(22 22 72);
      box-shadow: none;
      border: 1px solid rgb(22 22 72);
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
      <a class="app-menu__item activetab" href="admin_product.php">
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
      <a class="app-menu__item" href="admin_staff.php">
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
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="admin_product.php">Danh sách sản phẩm</a></li>
        <li class="breadcrumb-item"><a href="admin_product_add.php">Thêm sản phẩm</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Thêm sản phẩm</h3>
          <div class="tile-body">
            
            
            <?php
              include "connect.php";
              $maSP="";
              $tenSP="";
              $Xuatxu="";
              $Slcon="";
              $Gia="";
              $MaDM_SP="";
              $AnhSP="";
              $Mota="";
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(isset($_POST["masp"])) { $maSP = $_POST['masp']; }
                if(isset($_POST["tensp"])) { $tenSP = $_POST['tensp']; }
                if(isset($_POST["xxu"])) { $Xuatxu = $_POST['xxu']; }
                if(isset($_POST["sluong"])) { $Slcon = $_POST['sluong']; }
                if(isset($_POST["gia"])) { $Gia = $_POST['gia']; }
                if(isset($_POST["maDM_SP"])) { $MaDM_SP = $_POST['maDM_SP']; }
                if(isset($_POST["ImageUpload"])) { $AnhSP = $_POST['ImageUpload']; }
                if(isset($_POST["mota"])) { $Mota = $_POST['mota']; }
                $sql = "INSERT INTO sanpham VALUES ('$maSP', '$tenSP','$Xuatxu','$Slcon','$Gia','$MaDM_SP','$AnhSP','$Mota')";
                if ($connect->query($sql) === TRUE) {
                      echo "<div class='p-2 bg-success' >Thêm mã thành công! </div>";
                  } else {
                      echo "<div class='p-2 bg-danger' >Error: " . $sql . "<br>" . $connect->error."</div>";
                  }
                }
                //Đóng database
                $connect->close();
            ?>
            <form class="row" method="post">
              <div class="form-group col-md-4">
                <label class="control-label">Mã sản phẩm </label>
                <input class="form-control" type="text" name="masp" placeholder="">
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Tên sản phẩm</label>
                <input class="form-control" type="text" name="tensp">
              </div>
              <div class="form-group  col-md-4">
                <label class="control-label">Số lượng</label>
                <input class="form-control" type="number" name="sluong">
              </div>
              
              <div class="form-group col-md-4">
                <label for="danhmuc" class="control-label">Danh mục</label>
                <select class="form-control" id="danhmuc" name="maDM_SP">
                <?php
                  include "connect.php";
                  $sql = "SELECT * FROM danhmuc";
                  $results = $connect->query($sql);
                  while($rows = $results->fetch_row())
                  {
                      echo "<option value = $rows[0]>".$rows[1]."</option>";
                  }
                  $connect->close();
                ?>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Giá bán</label>
                <input class="form-control" type="number" name="gia">
              </div>
              <div class="form-group col-md-4">
                <label class="control-label">Xuất xứ</label>
                <input class="form-control" type="text" name="xxu">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Ảnh sản phẩm</label>
                <div id="myfileupload">
                  <input type="file" id="uploadfile" name="ImageUpload" >
                </div>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Mô tả sản phẩm</label>
                <textarea class="form-control" name="mota"></textarea>
                <script></script>
              </div>
              <div>
                <button class="btn btn-save" type="sumbit">Lưu lại</button>
                <a class="btn btn-cancel" href="admin_product.php">Hủy bỏ</a>
              </div>
            </form>
          </div>
          
        </div>
  </main>

</body>
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