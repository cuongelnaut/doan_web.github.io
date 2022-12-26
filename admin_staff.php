<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fonts/css/all.css">
    <link rel="stylesheet" href="fonts/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
    <script src="js/jquery.js"></script>
    <link rel="shortcut icon" type="image/png" href="pic/icon.ico"/>
    <title>Admin|Nhân viên</title>
    
    <style>
      .tile-footer-menu{
        position:absolute;
        bottom:2%;
        text-align:center;
        color: #FFF;
        text-shadow: 1px 1px #b94971, 2px 2px #b94971, 3px 3px #b94971,
                    -1px -1px #8d6cb9, -2px -1px #8d6cb9, -3px -1px #8d6cb9;
        font: Bold 20px Sketch_Block;
        -webkit-transition: all 0.12s ease-out;
        -moz-transition:all 0.12s ease-out;
        -o-tramsition:all 0.12s ease-out;
        padding:0 20px;
    }
    .menu-bar{
      font-size: 30px;
      padding:5px 10px;
    }
    body{
      position:relative;
      width:100%;
    }
    aside.hide{
      width: 0;
    }
    main.expand{
      width:calc(100% - 30px);
      left: 10px;
    }
    
    .menu-bar:hover{
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
    span.popup-modal h5{
      text-align: center;
      border-bottom: 1px solid #ddd;
      padding:10px;
      font-size: 20px;
      color: black;
    }
    span.text-popup div{
      text-align: left;
      padding:0 10px 10px 10px;
      font-size: 15px;
      color: black;
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
      <li class="breadcrumb-item active"><a href="admin_staff.php"><b>Danh sách nhân viên</b></a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="row element-button">
            <div class="col-sm-2">
              <a class="btn btn-add btn-sm" href="admin_staff_add.php" title="Thêm"><i class="fas fa-plus"></i>
                Thêm nhân viên</a>
            </div>
            <div class="col-sm-2">
              <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction()"><i
                  class="fas fa-trash-alt"></i> Xóa tất cả </a>
            </div>
          </div>
          <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
            id="sampleTable">
            <thead>
              <tr>
                <th class="text-center" width="10"><input type="checkbox" id="all" onclick="unchecked(this)"></th>
                <th class="text-center">ID nhân viên</th>
                <th class="text-center" width="150">Họ và tên</th>
                <th class="text-center" width="20">Ảnh thẻ</th>
                <th class="text-center" width="200">Địa chỉ</th>
                <th class="text-center">Ngày sinh</th>
                <th class="text-center">Giới tính</th>
                <th class="text-center">SĐT</th>
                <th class="text-center">Ngày vào làm</th>
                <th class="text-center">Chức vụ</th>
                <th class="text-center" width="100">Tính năng</th>
              </tr>
            </thead>
            <tbody>
                <?php
                  include "connect.php";
                  $sql = "SELECT * FROM nhanvien";
                  $results = $connect->query($sql);
                  while($rows = $results->fetch_row())
                {
                  echo "<tr>";
                  echo "<td width='10'><input class='chbox' type='checkbox' name='check1' manv='$rows[0]' value='1'></td>";
                  echo "<td class='idnv'>".$rows[0]."</td>";
                  echo "<td>".$rows[1]."</td>";
                  echo "<td><img class='img-card-person' src='pic/avatar/".$rows[3]."' alt=''></td>";
                  echo "<td>".$rows[6]."</td>";
                  echo "<td>".date("d-m-Y",strtotime($rows[5]))."</td>";
                  echo "<td class='text-center'>".$rows[2]."</td>";
                  echo "<td>".$rows[4]."</td>";
                  echo "<td>".date("d-m-Y",strtotime($rows[7]))."</td>";
                  echo "<td>".$rows[9]."</td>";
                  echo "<td class='table-td-center'><button class='del-staff btn btn-sm trash' type='button' title='Xóa''>
                  <a href='delete_staff.php?manv=$rows[0]'><i class='fas fa-trash-alt color-danger'></i></a>
                  </button>
                    <button class='btn btn-primary btn-sm edit' type='button' title='Sửa'>
                      <a href='update_staff.php?manv=$rows[0]'><i class='fa fa-edit color-warning'></i></button></a>
                    </button>
                  </td>";
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
  

</main>
</body>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
  const aside= document.querySelector('aside');
  const toggle_menu=document.querySelector('.menu-bar');
  const main=document.querySelector('main');

  toggle_menu.onclick = function(){
    aside.classList.toggle('hide');
    main.classList.toggle('expand');
  };
</script>
<script>
  function unchecked(checkBox) {
    get = document.getElementsByName('check1');
    for(var i=0; i<get.length; i++) {
    get[i].checked = checkBox.checked;}
  }
</script>
<script>
 function myFunction(){
  
  const row_check = document.getElementsByName('check1');
  
  for(var i=0; i<row_check.length; i++) {
    if(row_check[i].checked){
      let manv = row_check[i].getAttribute("manv");

      window.location.href = 'delete_staff.php?manv='+manv;
   }
  }
 }        
 </script>
</html>