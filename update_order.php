<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='stylesheet' href='fonts/css/all.css'>
  <link rel='stylesheet' href='fonts/css/all.min.css'>
  <link rel='stylesheet' href='css/main.css'>
  <script src='js/jquery-3.2.1.min.js'></script>
  <script src='js/popper.min.js'></script>
  <script src='js/bootstrap.min.js'></script>
  <link rel='shortcut icon' type='image/png' href='pic/icon.ico'/>
  <title>Admin|Đơn hàng</title>
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
    a.activetab{
      background: #db5c90;
      text-decoration: none;
      color: rgb(22 22 72);
      box-shadow: none;
      border: 1px solid rgb(22 22 72);
    }
  </style>
</head>

<body class='app'>
  <div class='app-sidebar__overlay' data-toggle='sidebar'></div>
  <aside class='app-sidebar'>
  <div class='app-sidebar__user'><img class='app-sidebar__user-avatar' src='pic/admin.jpg' width='50px' alt='User Image'>
    <div>
      <p class='h5'><b>Hello Admin!</b></p>
      <a href='admin_login.php' class='text-light' >Đăng xuất<i class='p-1 fa-solid fa-right-from-bracket'></i></a>
    </div>
  </div>
  <hr>
  <ul class='app-menu'>
    <li>
      <a class='app-menu__item' href='admin_statistic.php'>
        <i class='app-menu__icon fa-solid fa-chart-line'></i>
        <span class='app-menu__label'>Thống kê</span>
      </a>
    </li>
    <li>
      <a class='app-menu__item activetab' href='admin_order.php' >
        <i class='app-menu__icon fa-solid fa-cart-shopping'></i>
        <span class='app-menu__label'>Đơn hàng</span>
      </a>
    </li>
    <li>
      <a class='app-menu__item' href='admin_product.php'>
        <i class='app-menu__icon fa-solid fa-store'></i>
        <span class='app-menu__label'>Sản phẩm</span>
      </a>
    </li>
    <li>
      <a class='app-menu__item' href='admin_customer.php'>
        <i class='app-menu__icon fa-solid fa-user'></i>
        <span class='app-menu__label'>Khách hàng</span>
      </a>
    </li>
    <li>
      <a class='app-menu__item' href='admin_staff.php'>
        <i class='app-menu__icon fa-solid fa-users'></i>
        <span class='app-menu__label'>Nhân viên</span>
      </a>
    </li>
    <hr>
    <li>
      <a class='app-menu__item' href='admin_sale.php'>
        <i class='app-menu__icon fa-solid fa-list-check'></i>
        <span class='app-menu__label'>Quản lý mã</span>
      </a>
    </li>
    <li>
      <a class='app-menu__item' href='admin_setup.php'>
        <i class='app-menu__icon fa-solid fa-gear'></i>
        <span class='app-menu__label'>Cài đặt</span>
      </a>
    </li>
    <li>
      <p class='tile-footer-menu'>Chào mừng đến cửa hàng nội thất LT&CT!</p>
    </li>
  </ul>
</aside>
  <main class='app-content'>
    <header class='main-header'>
      <a class='menu-bar' href='#'>
        <i class='fa-solid fa-bars'></i>
      </a>
    </header>
    <div class='app-title'>
      <ul class='app-breadcrumb breadcrumb side'>
        <li class='breadcrumb-item'><a href='admin_order.php'>Danh sách đơn hàng</a></li>
        <li class='breadcrumb-item'>Chỉnh sửa</li>
      </ul>
    </div>
    <div class='row'>
      <div class='col-md-12'>
        <div class='tile'>
        <?php
              include 'connect.php';
              $maDH=$_GET['madh'];
              echo "<h3 class='tile-title text-center'>Sửa thông tin đơn hàng $maDH</h3>";
              echo "<div class='tile-body'>";

              $makh='';
              $masp='';
              $soluong='';
              $ngaydh='';
              $magg='';
              $thtien='';
              if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(isset($_POST['makh'])) { $makh = $_POST['makh']; }
                if(isset($_POST['masp'])) { $masp = $_POST['masp']; }
                if(isset($_POST['soluong'])) { $soluong = $_POST['soluong']; }
                if(isset($_POST['ngaydh'])) { $ngaydh = $_POST['ngaydh']; }
                if(isset($_POST['magg'])) { $magg = $_POST['magg']; }
                if(isset($_POST['thtien'])) { $thtien = $_POST['thtien']; }

              $sql = "UPDATE donhang 
                      SET MaKH='$makh', 
                        MaSP='$masp',
                        Soluong='$soluong',
                        NgDH='$ngaydh',
                        Magg='$magg',
                        Thtien='$thtien'
                      WHERE maDH='$maDH'";

                    if ($connect->query($sql) === TRUE) {
                        echo "<div class='p-2 bg-success' >Cập nhật thành công!</div>";

                    } else {
                        echo "<div class='p-2 bg-danger' >Chỉnh sửa thất bại!</div>";

                    }
                }

                $connect->close();
            ?>
            <form class='row' method='post'>
              <?php
                  include 'connect.php';
                  $maDH=$_GET['madh'];
                  $sql = "SELECT * FROM donhang WHERE maDH='$maDH'";
                  $results = $connect->query($sql);
                  $rows = $results->fetch_row();
                echo "<div class='form-group col-md-6'>";
                echo "<label class='control-label'>Mã đơn hàng </label>";
                echo "<input class='form-control' type='text' value='$rows[0]' readonly>";
                echo "</div>";
                echo "<div class='form-group col-md-6'>";
                echo "<label class='control-label'>Khách hàng</label>";
                echo "<select class='form-control' name='makh' value='$rows[1]' required>";
                $sql1 = "SELECT * FROM khachhang";
                  $results1 = $connect->query($sql1);
                  while($rows1 = $results1->fetch_row())
                { 
                  echo "<option value='$rows1[0]'>$rows1[0]</option>";
                }
                echo "</select>";
                echo "</div>";
                echo "<div class='form-group col-md-6'>";
                echo "<label class='control-label'>Mặt hàng</label>";
                echo "<select class='form-control' name='masp' value='$rows[2]' required>";
                $sql2 = "SELECT * FROM sanpham";
                  $results2 = $connect->query($sql2);
                  while($rows2 = $results2->fetch_row())
                { 
                  echo "<option value='$rows2[0]'>$rows2[1]</option>";
                }
                echo "</select>";
                echo "</div>";
                echo "<div class='form-group col-md-6'>";
                echo "<label class='control-label'>Số lượng</label>";
                echo "<input class='form-control' type='number' name='soluong' value='$rows[3]' required>";
                echo "</div>";
                echo "<div class='form-group  col-md-6'>";
                echo "<label class='control-label'>Ngày đặt</label>";
                echo "<input class='form-control' type='date' name='ngaydh' value='$rows[4]' required>";
                echo "</div>";
                echo "<div class='form-group col-md-6'>";
                echo "<label class='control-label'>Mã giảm giá</label>";
                echo "<select class='form-control' name='magg' value='$rows[5]' required>";
                $sql3 = "SELECT * FROM magiamgia";
                  $results3 = $connect->query($sql3);
                  while($rows3 = $results3->fetch_row())
                { 
                  echo "<option value='$rows3[0]'>$rows3[0]</option>";
                }
                echo "<option value='NULL'>Không</option>";
                echo "</select>";
                echo "</div>";
                echo "<div class='form-group col-md-6'>";
                echo "<label class='control-label'>Thành tiền</label>";
                echo "<input class='form-control' type='number' name='thtien' value='$rows[6]' required>";
                echo "</div>";
                echo "<div class='form-group col-md-6'>";
                echo "<label class='control-label'>Tình trạng</label>";
                echo "<select class='form-control' name='tinhtrang' value='$rows[7]' required>";
                echo "<option value='Giao thành công'>Hoàn thành</option>";
                echo "<option value='Chờ thanh toán'>Chờ thanh toán</option>";
                echo "<option value='Đang giao'>Đang vận chuyển</option>";
                echo "<option value='Đã hủy'>Đã hủy</option>";
                echo "</select>";

                echo "</div>";
                echo "<div>";
                echo "<button class='btn btn-save' type='submit'>Sửa</button>";
                echo "<a class='btn btn-cancel' href='admin_order.php'>Trở về</a>";
                $connect->close();
            ?>
              </div>
              </form>
          </div>
      </div>
    </div>
  </main>
</body>


<script type='module' src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
<script nomodule src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>
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