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
  <title>Admin|Thống kê</title>
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
      <a class="app-menu__item activetab" href="admin_statistic.php">
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
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="admin_statistic.php"><b>Thống kê dữ liệu</b></a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-3">
        <a href="admin_staff.php">
        <div class="widget-small primary coloured-icon">
          <div class="icon"><i class="fa-solid fa-user"></i></div>
          <div class="info">
            <h4>Tổng Nhân viên</h4>
            <?php
                  include "connect.php";
                  $sql = "SELECT count(*) FROM nhanvien";
                  $results = $connect->query($sql);
                  $rows = $results->fetch_row();
                  echo "<p><b>".$rows[0]." nhân viên</b></p>";
                  $connect->close();
                  ?>
          </div>
        </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-3">
      <a href="admin_order.php">
        <div class="widget-small info coloured-icon">
          <div class="icon"><i class="fa-solid fa-tags"></i></div>
          <div class="info">
            <h4>Tổng sản phẩm</h4>
            <?php
                  include "connect.php";
                  $sql = "SELECT count(*) FROM sanpham";
                  $results = $connect->query($sql);
                  $rows = $results->fetch_row();
                  echo "<p><b>".$rows[0]." sản phẩm</b></p>";
                  $connect->close();
            ?>
          
          </div>
        </div>
      </a>
      </div>
      <div class="col-md-6 col-lg-3">
      <a href="admin_order.php">
        <div class="widget-small warning coloured-icon">
          <div class="icon"><i class="fa-solid fa-cart-shopping"></i></div>
          <div class="info">
            <h4>Tổng đơn hàng</h4>
            <?php
                  include "connect.php";
                  $sql = "SELECT count(*) FROM donhang";
                  $results = $connect->query($sql);
                  $rows = $results->fetch_row();
                  echo "<p><b>".$rows[0]." đơn hàng</b></p>";
                  $connect->close();
            ?>
          </div>
        </div>
      </a>
      </div>
      <div class="col-md-6 col-lg-3">
      <a href="admin_customer.php">
        <div class="widget-small danger coloured-icon">
          <div class="icon"><i class="fa-solid fa-user-lock"></i></div>
          <div class="info">
            <h4>Khách hàng bị cấm</h4>
            <?php
                  include "connect.php";
                  $sql = "SELECT count(*) FROM khachhang where tinhtrang=0";
                  $results = $connect->query($sql);
                  $rows = $results->fetch_row();
                  echo "<p><b>".$rows[0]." khách hàng</b></p>";
                  $connect->close();
            ?>
          </div>
        </div>
      </div>
    </a>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-3">
      <a href="#thunhap">
        <div class="widget-small primary coloured-icon">
          <div class="icon"><i class="fa-solid fa-chart-line"></i></div>
          <div class="info">
            <h4>Tổng thu nhập</h4>
            <?php
                  include "connect.php";
                  $sql = "SELECT sum(Thtien) FROM donhang where TinhtrangDH='Giao thành công'";
                  $results = $connect->query($sql);
                  $rows = $results->fetch_row();
                  echo "<p><b>".$rows[0]." đ</b></p>";
                  $connect->close();
            ?>
          </div>
        </div>
       </a>
      </div>
      <div class="col-md-6 col-lg-3">
      <a href="admin_customer.php">
        <div class="widget-small info coloured-icon">
          <div class="icon"><i class="fa-solid fa-user-plus"></i></div>
          <div class="info">
            <h4>Số khách hàng</h4>
            <?php
                  include "connect.php";
                  $sql = "SELECT count(*) FROM khachhang ";
                  $results = $connect->query($sql);
                  $rows = $results->fetch_row();
                  echo "<p><b>".$rows[0]." khách hàng</b></p>";
                  $connect->close();
            ?>
          </div>
        </div>
       </a>
      </div>
      <div class="col-md-6 col-lg-3">
      <a href="admin_product.php">
        <div class="widget-small warning coloured-icon">
          <div class="icon"><i class="fa-solid fa-delete-left"></i></div>
          <div class="info">
            <h4>Hết hàng</h4>
            <?php
                  include "connect.php";
                  $sql = "SELECT count(*) FROM sanpham where slcon=0 ";
                  $results = $connect->query($sql);
                  $rows = $results->fetch_row();
                  echo "<p><b>".$rows[0]." sản phẩm</b></p>";
                  $connect->close();
            ?>
          </div>
        </div>
      </a>
      </div>
      <div class="col-md-6 col-lg-3">
      <a href="admin_order.php">
        <div class="widget-small danger coloured-icon">
          <div class="icon"><i class="fa-solid fa-file-circle-xmark"></i></div>
          <div class="info">
            <h4>Đơn hàng hủy</h4>
            <?php
                  include "connect.php";
                  $sql = "SELECT count(*) FROM donhang where tinhtrangDH='Đã hủy' ";
                  $results = $connect->query($sql);
                  $rows = $results->fetch_row();
                  echo "<p><b>".$rows[0]." đơn hàng</b></p>";
                  $connect->close();
            ?>
          </div>
        </div>
      </div>
    </a>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div>
            <h3 class="tile-title">SẢN PHẨM BÁN CHẠY</h3>
          </div>
          <div class="tile-body">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Mã sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>Giá tiền</th>
                  <th>Số lượng đã bán</th>
                </tr>
              </thead>
              <tbody>
              <?php
                  include "connect.php";
                  $sql = "SELECT masp,sum(soluong) FROM donhang group by masp order by sum(soluong) desc ";
                  $results = $connect->query($sql);
                  $rows = $results->fetch_row();
                  for($i = 1; $i <= 3; $i++){
                    echo "<tr>";
                    echo "<td>".$rows[0]."</td>";
                    $sql2 = "SELECT * FROM sanpham";
                    $results2 = $connect->query($sql2);
                    while($rows2 = $results2->fetch_row())
                    {
                      if($rows2[0] == $rows[0]) 
                      {
                        echo "<td >".$rows2[1]."</td>";
                        echo "<td >".$rows2[4]."</td>";
                      }
                    }
                    echo "<td>".$rows[1]."</td>";
                    echo "</tr>";
                    $rows = $results->fetch_row();
                  }
                
                
                $connect->close();
            ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div>
            <h3 class="tile-title" id="thunhap">TỔNG ĐƠN HÀNG HOÀN THÀNH</h3>
          </div>
          <div class="tile-body">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>ID đơn hàng</th>
                  <th>Khách hàng</th>
                  <th>Đơn hàng</th>
                  <th>Số lượng</th>
                  <th>Tổng tiền</th>
                </tr>
              </thead>
              <tbody>
              <?php
                  include "connect.php";
                  $sql = "SELECT * FROM donhang where tinhtrangdh='Giao thành công'";
                  $results = $connect->query($sql);
                  while($rows = $results->fetch_row())
                {
                  echo "<tr>";
                  echo "<td >".$rows[0]."</td>";
                  echo "<td >".$rows[1]."</td>";
                  echo "<td >".$rows[2]."</td>";
                  echo "<td >".$rows[3]."</td>";
                  echo "<td >".$rows[6]."</td>";
                  echo "</tr>";
                }
                  echo "<tr>";
                  echo "<th colspan='4'>Tổng cộng:</th>";
                  $sql = "SELECT tinhtrangdh,sum(Thtien) FROM donhang where tinhtrangdh='Giao thành công' group by tinhtrangdh";
                  $results = $connect->query($sql);
                  $rows = $results->fetch_row();
                  echo "<td >".$rows[1]."</td>";
                  echo "</tr>";
                $connect->close();
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div>
            <h3 class="tile-title">SẢN PHẨM ĐÃ HẾT</h3>
          </div>
          <div class="tile-body">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Mã sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>Ảnh</th>
                  <th>Số lượng</th>
                  <th>Tình trạng</th>
                  <th>Giá tiền</th>
                  <th>Danh mục</th>
                </tr>
              </thead>
              <tbody>
              <?php
                  include "connect.php";
                  $sql = "SELECT * FROM sanpham where slcon=0 ";
                  $results = $connect->query($sql);
                  while($rows = $results->fetch_row())
                  {
                    echo "<tr>";
                    echo "<td >".$rows[0]."</td>";
                    echo "<td >".$rows[1]."</td>";
                    echo "<td><img class='img-card-person' src='pic/product/".$rows[6]."' alt=''></td>";
                    echo "<td >".$rows[3]."</td>";
                  if($rows[3]> 0){
                    echo "<td class='text-center'><span class='badge bg-success'>Còn hàng</span></td>";
                  } else {
                    echo "<td class='text-center'><span class='badge bg-danger'>Hết hàng</span></td>";
                  };
                  echo "<td >".$rows[4]."</td>";
                  $sql2 = "SELECT * FROM danhmuc";
                  $results2 = $connect->query($sql2);
                  while($rows2 = $results2->fetch_row())
                   {if($rows2[0] == $rows[5]) {echo "<td class='text-center'>".$rows2[1]."</td>";}}
                    echo "</tr>"; 
                  }

                  $connect->close();
            ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="row">
      <div class="col-md-6">
        <div class="tile">
          <h3 class="tile-title">DỮ LIỆU HÀNG THÁNG</h3>
          <div class="embed-responsive embed-responsive-16by9">
            <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="tile">
          <h3 class="tile-title">THỐNG KÊ DOANH SỐ</h3>
          <div class="embed-responsive embed-responsive-16by9">
            <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
          </div>
        </div>
      </div>
    </div> -->
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