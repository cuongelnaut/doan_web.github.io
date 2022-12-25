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
    .customer-card{
        background-color: #ffffff;
    }
    .settings-tray {
      background: #d6b1c3;
      padding: 10px 15px;
      border-radius: 7px 7px 0 0;
      margin-bottom: 10px;
    }
    .settings-tray2 {
      background: #eee;
      padding: 10px 15px;
      border-radius: 7px 7px 0 0;
      margin-bottom: 10px;
    }
    .search-bar {
      width:80%;
      padding: 10px 13px;
      border:none;
      background: transparent;
      
    }
    .search-box .input-wrapper {
      background: #fff;
      border-radius: 40px;
      border: none;
      overflow: hidden;
    }
  
    .search-box .input-wrapper i {
      color: grey;
      margin-left: 7px;
      vertical-align: middle;

    }

    .friend-drawer {
      padding: 5px 15px;
      display: flex;
      vertical-align: baseline;
      background:transparent;
      transition: 0.3s ease;
    }
    .custom-drawer{
      display: flex;
      vertical-align: baseline;
      background:transparent;
    }
    .friend-drawer .text {
      margin-left: 12px;
      width: 70%;
    }
    .custom-drawer .text{
      margin: 12px 0 0 12px;
      display:inline-block;
    }
    .custom-drawer .text h5{
      padding:0;
      margin:0;
    }
    .custom-drawer .on_off{
      display:inline;

    }
    .friend-drawer:hover {
      background: #ae78c7;
      cursor: pointer;
    }

    .friend-drawer:hover p, .friend-drawer:hover h6, .friend-drawer:hover .time {
      color: #fff !important;
    }
    hr {
      margin: 5px auto;
      width: 60%;
    }
    .chat-frame{
      display:grid;
      grid-template-rows: 15% 85%;
    }
    .chat-bubble {
      padding: 10px 14px;
      background: #eee;
      margin: 10px 30px;
      border-radius: 9px;
      position: relative;
      animation: fadeIn 1s ease-in;
      max-width:500px;
    }
    .chat-bubble:after {
      content: '';
      position: absolute;
      top: 50%;
      width: 0;
      height: 0;
      border: 20px solid transparent;
      border-bottom: 0;
      margin-top: -10px;
    }
    .chat-bubble--left:after {
      left: 0;
      border-right-color: #eee;
      border-left: 0;
      margin-left: -20px;
    }
    .chat-bubble--right:after {
      right: 0;
      border-left-color: #74b9ff;
      border-right: 0;
      margin-right: -20px;
    }
    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }
    .offset-md-9 .chat-bubble {
      background: #74b9ff;
      color: #fff;
    }
    .chat-box-tray {
      background: #eee;
      display: grid;
      grid-template-columns: 15% 80% 5%;
      align-items: baseline;
      padding: 10px 15px;
      align-items: center;
      bottom: 0;
      border: 0 0 .375rem 0;
      height:100%;
      font-size:15px;
    }
    .chat-box-tray input {
      margin-right: 10px;
      padding: 6px 15px 6px 0;
      background: #fff;
      border-radius: 40px;
      border: none;
      overflow: hidden;
      width:80%;
    }
    .chat-box-tray i {
      color: grey;
      font-size: 20px;
      vertical-align: middle;
      padding:5px;
      margin:0;
    }
    .tail-chat-box-tray{
      margin-left:10px;
    }
    .chat-panel{
      display:grid;
      grid-template-rows: 88% 12%;
    }
    .chat-message{
    }
    .chat-send{
      font-size: small;
      width: 100%;
    }
    .icon-chat:hover{
        color:#FFF;
        background-color: rgb(209, 208, 208);
        border-radius: 20%;
    }
    .icon-smile:hover{
        background-color: rgb(209, 208, 208);
        border-radius: 50%;
    }
    .tile-customer{
      position: relative;
      background: #ffffff;
      border-radius: .375rem;
      padding: 0px;
      height:550px;
      -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
      box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
      margin: 0 0 30px 10px;
      -webkit-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
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
      <li class="breadcrumb-item"><a href="admin_customer_chat.php">Trò chuyện</a></li>
    </ul>
    </div>
    <div class='text-center mb-2'><span class='badge bg-danger'>Tính năng chưa hoàn thiện! Mời bạn quay lại.</span></div>
  <div class="tile-customer">
    <div class="row no-gutters">
      <div class="col-md-4 border-right customer-card">
      <div class="settings-tray search-box">
        <div class="input-wrapper">
        <i class="fa-solid fa-magnifying-glass border-right p-2"></i>
        <input class="search-bar" placeholder="Search here" type="text">
        </div>
      </div>
      <div class="friend-drawer">
        <img class="profile-image" src="pic/avatar/a.jpg" alt="">
        <div class="text">
        <h6>Lê Văn A</h6>
        <p class="text-muted">Xin chào!</p>
        </div>
        <span class="time text-muted small">13:21</span>
      </div>
      <hr>
      <div class="friend-drawer">
        <img class="profile-image" src="pic/avatar/b.jpg" alt="">
        <div class="text">
        <h6>Nguyễn Thị B</h6>
        <p class="text-muted">Món hàng này kích cỡ thế nào?</p>
        </div>
        <span class="time text-muted small">00:32</span>
      </div>
      <hr>
      <div class="friend-drawer">
        <img class="profile-image" src="pic/avatar/c.jpg" alt="">
        <div class="text">
        <h6>Trần Văn C</h6>
        <p class="text-muted">Cảm ơn đã tư vấn!</p>
        </div>
        <span class="time text-muted small">13:21</span>
      </div>
      <hr>
      <div class="friend-drawer">
        <img class="profile-image" src="pic/avatar/d.jpg" alt="">
        <div class="text">
        <h6>Phạm Văn D</h6>
        <p class="text-muted">Phí vận chuyển là bao nhiêu thế?</p>
        </div>
        <span class="time text-muted small">13:21</span>
      </div>
      </div>
      <div class="col-md-8 chat-frame">
      <div class="settings-tray2">
        <div class="custom-drawer">
        <img class="profile-image" src="pic/avatar/e.jpg" alt="">
        <div class="text">
          <h5>Ngô Thị E</h5>
          <span class="on_off text-muted small">offline 3 phút trước</span>
        </div>
        </div>
      </div>
      <div class="chat-panel">
        <div class="chat-message">
          <div class="row no-gutters">
          <div class="col-md-3">
            <div class="chat-bubble chat-bubble--left">
            Xin chào!
            </div>
          </div>
          </div>
          <div class="row no-gutters">
          <div class="col-md-3 offset-md-9">
            <div class="chat-bubble chat-bubble--right">
            Xin chào!
            </div>
          </div>
          </div>
          <div class="row no-gutters">
          <div class="col-md-3">
            <div class="chat-bubble chat-bubble--left">
            Khi nào hàng được vận chuyển?
            </div>
          </div>
          </div>
          <div class="row no-gutters">
          <div class="col-md-3 offset-md-9">
            <div class="chat-bubble chat-bubble--right">
            Hàng sẽ được vận chuyển sau 1 ngày ạ
            </div>
          </div>
          </div>
      </div>
      <div class="chat-send">
          <div class="chat-box-tray">
            <div class="head-chat-box-tray"> 
              <i class="fa-regular fa-images icon-chat"></i>
              <i class="fa-sharp fa-solid fa-paperclip icon-chat"></i>
              <i class="fa-sharp fa-solid fa-microphone icon-chat"></i>
            </div>
            
            <div class="search-box">
              <div class="input-wrapper  text-right">
                <input class="message-bar" placeholder="Type your message here" type="text">
                <i class="fa-regular fa-face-smile icon-smile"></i>
              </div>
            </div>
            <div class="tail-chat-box-tray">
              <i class="fa-regular fa-paper-plane icon-chat"></i>
            </div>
            
            
          </div>
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