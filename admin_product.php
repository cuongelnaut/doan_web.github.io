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
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item active"><a href="admin_product.php"><b>Danh sách sản phẩm</b></a></li>
    </ul>
    <div id="clock"></div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="row element-button">
            <div class="col-sm-2">
              <a class="btn btn-add btn-sm" href="admin_product_add.php" title="Thêm"><i class="fas fa-plus"></i>
                Thêm sản phẩm</a>
            </div>
            <div class="col-sm-2">
              <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                  class="fas fa-trash-alt"></i> Xóa tất cả </a>
            </div>
          </div>
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
              <tr>
                <th width="10"><input type="checkbox" id="all" onclick="unchecked(this)"></th>
                <th class="text-center">Mã sản phẩm</th>
                <th class="text-center">Tên sản phẩm</th>
                <th class="text-center">Ảnh</th>
                <th class="text-center">Xuất xứ</th>
                <th class="text-center">Số lượng</th>
                <th class="text-center">Tình trạng</th>
                <th class="text-center">Giá tiền</th>
                <th class="text-center">Danh mục</th>
                <th class="text-center">Chức năng</th>
              </tr>
            </thead>
            <tbody>
            <?php
                  include "connect.php";
                  $sql = "SELECT * FROM sanpham";
                  $results = $connect->query($sql);
                  while($rows = $results->fetch_row())
                {
                  echo "<tr>";
                  echo "<td width='10'><input type='checkbox' name='check1' value='1'></td>";
                  echo "<td class='text-center'>".$rows[0]."</td>";
                  echo "<td class='text-center'>".$rows[1]."</td>";
                  echo "<td style='text-align: center;'><img src='pic/product/".$rows[6]."' alt='' width='100px'></td>";
                  echo "<td class='text-center'>".$rows[2]."</td>";
                  echo "<td class='text-center'>".$rows[3]."</td>";
                  if($rows[3]> 0){
                    echo "<td class='text-center'><span class='badge bg-success'>Còn hàng</span></td>";
                  } else {
                    echo "<td class='text-center'><span class='badge bg-danger'>Hết hàng</span></td>";
                  };
                  echo "<td class='text-center'>".$rows[4]."</td>";
                  $sql2 = "SELECT * FROM danhmuc";
                  $results2 = $connect->query($sql2);
                  while($rows2 = $results2->fetch_row())
                   {if($rows2[0] == $rows[5]) {echo "<td class='text-center'>".$rows2[1]."</td>";}}
                  echo "<td><button class='btn btn-primary btn-sm trash' type='button' title='Xóa'data-toggle='modal' data-target='.ModalUPdel'>
                  <i class='fas fa-trash-alt'></i> 
                    </button>
                  <button class='btn btn-primary btn-sm edit' type='button' title='Sửa'  data-toggle='modal'
                      data-target='.ModalUPfix'>
                      <i class='fa fa-edit'></i>
                    </button>
                </td>";
              echo "</tr>";
            };
            $connect->close();
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>
 <!--MODAL Delete-->
 <div class="modal fade ModalUPdel" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
data-keyboard="false">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">

    <div class="modal-body">
    <div class="row">
        <div class="form-group  col-md-12">
          <span class="popup-modal">
            <h5>Xác nhận xóa</h5>
          </span>
        </div>
      </div>
      <div class="row">
      <span class="text-popup">
            <div>Bạn có chắc muốn xóa không?</div>
      </span>
      </div>
      <BR>
      
      <button class="btn btn-save delbutton" type="button" >Có</button>
      <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
      <BR>
    </div>
    <div class="modal-footer">
    </div>
  </div>
</div>
</div>
<!--MODAL fix-->
<div class="modal fade ModalUPfix" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
data-keyboard="false">
<?php
  include "connect.php";
  
  ?>
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">

    <div class="modal-body">
      <div class="row">
        <div class="form-group  col-md-12">
          <span class="popup-modal">
            <h5>Chỉnh sửa sản phẩm</h5>
          </span>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
            <label class="control-label">Tên sản phẩm</label>
            <input class="form-control" type="Text" required value="">
          </div>
          
        <div class="form-group  col-md-6">
            <label class="control-label">Giá tiền</label>
          <input class="form-control" type="number" required value="">
        </div>
        <div class="form-group col-md-6">
            <label class="control-label">Xuất xứ</label>
          <input class="form-control" type="text" required value="">
        </div>
        <div class="form-group col-md-6">
            <label class="control-label">Số lượng</label>
          <input class="form-control" type="number" required value="">
        </div>
        <div class="form-group col-md-12">
            <label class="control-label">Mô tả</label>
          <textarea class="form-control" required value=""></textarea>
        </div>
          
      <BR>
      <div class="form-group col-md-12 ">
      <button class="btn btn-save" type="button">Lưu lại</button>
      <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
      </div>
    </div>
    <div class="modal-footer">
    </div>
  </div>
</div>
</div>
<!--end modal-->
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
</html>