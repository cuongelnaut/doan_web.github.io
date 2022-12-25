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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="pic/icon.ico"/>
    <title>Admin|Khách hàng</title>
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
      background-color: #df87a5c7;
      border-radius: 5px;
    }
    a.activetab{
      background: #db5c90;
      text-decoration: none;
      color: rgb(22 22 72);
      box-shadow: none;
      border: 1px solid rgb(22 22 72);
    }
    .profile-image {
      width: 50px;
      height: 50px;
      border-radius: 40px;
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
    <?php
    ?>
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
      <a class="app-menu__item activetab" href="admin_customer.php">
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
      <li class="breadcrumb-item"><a href="admin_customer.php">Danh sách khách hàng</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="row element-button">
            <div class="col-sm-2">
              <a class="btn btn-add btn-sm" href="admin_customer_chat.php" title="Thêm"><i class="fas fa-comment"></i>
                Trò chuyện</a>
            </div> 
            <div class="col-sm-2">
              <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                  class="fas fa-trash-alt"></i> Xóa tất cả </a>
            </div>
          </div>
          <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
            id="sampleTable">
            <thead>
              <tr>
                <th class="text-center" width="10"><input type="checkbox" id="all" onclick="unchecked(this)"></th>
                <th class="text-center">ID khách hàng</th>
                <th class="text-center">Họ và tên</th>
                <th class="text-center" width="200">Địa chỉ</th>
                <th class="text-center">Ngày sinh</th>
                <th class="text-center">Giới tính</th>
                <th class="text-center">SĐT</th>
                <th class="text-center">Email</th>
                <th class="text-center">Tình trạng</th>
                <th class="text-center" width="100">Tính năng</th>
              </tr>
            </thead>
            <?php
                  include "connect.php";
                  $sql = "SELECT * FROM khachhang";
                  $results = $connect->query($sql);
                  while($rows = $results->fetch_row())
                {
                  echo "<tr>";
                  echo "<td width='10'><input type='checkbox' name='check1' value='1'></td>";
                  echo "<td >".$rows[0]."</td>";
                  echo "<td>".$rows[1]."</td>";
                  echo "<td>".$rows[10]."</td>";
                  echo "<td>".date("d-m-Y",strtotime($rows[4]))."</td>";
                  echo "<td class='text-center'>".$rows[2]."</td>";
                  echo "<td>".$rows[3]."</td>";
                  echo "<td>".$rows[6]."</td>";
                  if($rows[8]){
                    echo "<td class='text-center'><span class='badge bg-success'>Bình thường</span></td>";
                  } else {
                    echo "<td class='text-center'><span class='badge bg-danger'>Cấm</span></td>";
                  };
                  echo "<td class='table-td-center'><button class='btn btn-primary btn-sm trash' type='button' title='Xóa'
                  data-toggle='modal' data-target='.ModalUPdel'><i class='fas fa-trash-alt'></i>
                    </button>
                    <button class='btn btn-primary btn-sm edit' type='button' title='Sửa'
                      data-toggle='modal' data-target='.ModalUPfix'><i class='fas fa-edit'></i>
                    </button>
                    <button class='btn btn-add btn-sm chat' type='button' title='Chat'>
                    <a href='admin_customer_chat.php'><i class='fas fa-comment'></i></a>
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
            <h5>Chỉnh sửa thông tin nhân viên</h5>
          </span>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
            <label class="control-label">Họ và tên </label>
            <input class="form-control" type="Text" required value="">
          </div>
          <div class="form-group  col-md-6">
            <label for="genderchoose" class="control-label">Giới tính</label>
            <select class="form-control" id="genderchoose">
              <option>Nam</option>
              <option>Nữ</option>
              <option>Khác</option>
            </select>
        </div>
        <div class="form-group col-md-12">
            <label class="control-label">Địa chỉ</label>
          <input class="form-control" type="text" required value="">
        </div>
        <div class="form-group  col-md-6">
            <label class="control-label">Ngày sinh</label>
          <input class="form-control" type="date" required value="">
        </div>
        
        <div class="form-group col-md-6">
            <label class="control-label">Số điện thoại</label>
          <input class="form-control" type="text" required value="">
        </div>
        <div class="form-group  col-md-6">
            <label class="control-label">Ngày vào làm</label>
          <input class="form-control" type="date" required value="">
        </div>
        <div class="form-group col-md-6 ">
            <label for="chucvu" class="control-label">Chức vụ</label>
            <select class="form-control" id="chucvu">
              <option></option>
              <option></option>
              <option></option>
            </select>
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
</html>