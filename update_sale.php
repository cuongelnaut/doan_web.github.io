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
  <link rel="shortcut icon" type="image/png" href="pic/icon.ico" />
  <title>Admin|Mã giảm giá</title>
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

    a.activetab {
      background: #db5c90;
      text-decoration: none;
      color: rgb(22 22 72);
      box-shadow: none;
      border: 1px solid rgb(22 22 72);
    }

    .Choicefile {
      display: block;
      background: #14142B;
      border: 1px solid #fff;
      color: #fff;
      width: 150px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      padding: 5px 0px;
      border-radius: 5px;
      font-weight: 500;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>

<body class="app">
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="pic/admin.jpg" width="50px"
        alt="User Image">
      <div>
        <p class="h5"><b>Hello Admin!</b></p>
        <a href="admin_login.php" class="text-light">Đăng xuất<i class="p-1 fa-solid fa-right-from-bracket"></i></a>
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
        <a class="app-menu__item" href="admin_order.php">
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
        <a class="app-menu__item" href="admin_staff.php">
          <i class="app-menu__icon fa-solid fa-users"></i>
          <span class="app-menu__label">Nhân viên</span>
        </a>
      </li>
      <hr>
      <li>
        <a class="app-menu__item activetab" href="admin_sale.php">
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
        <li class="breadcrumb-item"><a href="admin_sale.php">Danh sách sản phẩm</a></li>
        <li class="breadcrumb-item">Chỉnh sửa</li>
      </ul>
      <div id="clock"></div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
        <?php
            include "connect.php";
            $magg = $_GET['magg'];
          echo "<h3 class='tile-title text-center'>Sửa thông tin mã $magg</h3>";
          echo "<div class='tile-body'>";
            
            $sql = "SELECT * FROM magiamgia where MaGG='$magg'";
            $results = $connect->query($sql);
            $rows = $results->fetch_row();
            if (isset($_GET['submit']) && ($_GET['submit']) == 'Sửa') {
                $giatri = $_GET['giatri'];
                $apdung = $_GET['apdung'];
                $sluong = $_GET['sluong'];
                $handung = $_GET['handung'];
                $sql = "UPDATE magiamgia SET Giatri='$giatri', Ngayhh='$handung', SL ='$sluong', Adung = '$apdung' where MaGG='$magg'";
                if ($connect->query($sql) === TRUE) {
                  echo "<div class='p-2 bg-success' >Cập nhật thành công!</div>";
  
              } else {
                  echo "<div class='p-2 bg-danger' >Chỉnh sửa thất bại!</div>";
  
              }
              }
            echo "<form class='row' method='set' action='#'>";
            echo "<div class='form-group col-md-6'>";
            echo "<label class='control-label'>Mã giảm giá </label>";
            echo "<input class='form-control' type='text' name='magg' value='$rows[0]' readonly>";
            echo "</div>";
            echo "<div class='form-group  col-md-6'>";
            echo "<label class='control-label'>Giá trị khuyển mãi</label>";
            echo "<input class='form-control' type='number' name='giatri' value='$rows[3]'>";
            echo "</div>";
            echo "<div class='form-group  col-md-6'>";
            echo "<label class='control-label'>Giá trị đơn hàng áp dụng</label>";
            echo "<input class='form-control' type='text' name='apdung' value='$rows[4]'>";
            echo "</div>";
            echo "<div class='form-group  col-md-6'>";
            echo "<label class='control-label'>Số lượng</label>";
            echo "<input class='form-control' type='number' name='sluong' value='$rows[2]'>";
            echo "</div>";
            echo "<div class='form-group  col-md-6'>";
            echo "<label class='control-label'>Hạn dùng</label>";
            echo "<input class='form-control' type='date' name='handung' value='$rows[1]'>";
            echo "</div>";
            echo "<div class='form-group  col-md-12'>";
            echo "<input class='btn btn-save' type='submit' name='submit' value='Sửa'>";
            echo "<a class='btn btn-cancel' href='admin_sale.php'>Trở về</a>";
            echo "</div>";
            echo "</form>";
            
            //Đóng database
            $connect->close();
            ?>
          </div>
        </div>
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