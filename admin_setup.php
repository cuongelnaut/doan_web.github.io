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
    <title>Admin|Cài đặt</title>
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
    .break-6-4{
      display:grid;
      grid-template-columns: 60% 40%;
      column-gap:15px;
      padding:0 15px;
    }
    .insert-image{
      position: relative;
      margin-left:10px;
      border:2px dashed grey;
      text-align: center;
      font-size: 30px;
      height:70%;
    }
      .choose-image{
      position: absolute;
      top:50%;
      translate: 0 -50%;
    }
    .choose-image:hover{
      color: rgb(0, 195, 255);
    }
    textarea{
      width: 100%;
      display: block;
      background-color: #F1F1F1;
      border-radius: 5px;
      border: none;
      padding: 15px;
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
      <a class="app-menu__item activetab" href="admin_setup.php">
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
      <li class="breadcrumb-item active"><a href="admin_setup.php"><b>Cài đặt</b></a></li>
    </ul>
  </div>
  <div class='text-center mb-2'><span class='badge bg-danger'>Tính năng chưa hoàn thiện! Mời bạn quay lại.</span></div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div>
          <h3 class="tile-title">Cài đặt panel</h3>
        </div>
        <div class="tile-body break-6-4">
          <div class="border-right">
            <div class="form-group break-6-4">
              <div class="form-group">
                <label class="control-label">Tên panel </label>
                <input class="form-control" type="text" placeholder="panel name">
              </div>
              <div class="form-group">
                <label class="control-label">Thêm ảnh </label>
                <input type="file" id="uploadfile" name="ImageUpload" onchange="readURL(this);" />
              </div>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Mô tả </label>
              <textarea rows="9" cols="" name="comment" form="usrform" placeholder="description"></textarea>
            </div>
          </div>
          <div class="preview"> 
            <div class="font-weight-bold m-2"> Xem trước</div>
            <div class="insert-image">
              <i class="fa-regular fa-image choose-image"></i>
           </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div>
          <h3 class="tile-title">Tạo thông báo</h3>
        </div>
        <div class="tile-body break-6-4">
          <div class="border-right">
            <div class="form-group break-6-4">
              <div class="form-group">
                <label class="control-label">Tiêu đề </label>
                <input class="form-control" type="text" placeholder="name slider">
              </div>
              <div class="form-group">
                <label class="control-label">Thêm ảnh </label>
                <input type="file" id="uploadfile" name="ImageUpload" onchange="readURL(this);" />
              </div>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Mô tả </label>
              <textarea rows="9" cols="" name="comment" form="usrform" placeholder="description"></textarea>
            </div>
          </div>
          <div class="preview"> 
            <div class="font-weight-bold m-2"> Xem trước</div>

          </div>
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
</html>