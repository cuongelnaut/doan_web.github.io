<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
	<link rel="shortcut icon" type="image/png" href="pic/icon.ico"/>
	<style>
		html,body {
	height: 100%;
}

body.my-login-page {
	background-color: #f7f9fb;
	font-size: 14px;
}

.my-login-page .brand {
	width: 90px;
	height: 90px;
	overflow: hidden;
	border-radius: 50%;
	margin: 40px auto;
	box-shadow: 0 4px 8px rgba(0,0,0,.05);
	position: relative;
	z-index: 1;
}

.my-login-page .brand img {
	width: 100%;
}

.my-login-page .card-wrapper {
	width: 400px;
}

.my-login-page .card {
	border-color: transparent;
	box-shadow: 0 4px 8px rgba(0,0,0,.05);
}

.my-login-page .card.fat {
	padding: 10px;
}

.my-login-page .card .card-title {
	margin-bottom: 30px;
	text-align: center;
}

.my-login-page .form-control {
	border-width: 2.3px;
}

.my-login-page .form-group label {
	width: 100%;
}

.my-login-page .btn.btn-block {
	padding: 12px 10px;
}

.my-login-page .footer {
	margin: 40px 0;
	color: #888;
	text-align: center;
}

@media screen and (max-width: 425px) {
	.my-login-page .card-wrapper {
		width: 90%;
		margin: 0 auto;
	}
}

@media screen and (max-width: 320px) {
	.my-login-page .card.fat {
		padding: 0;
	}

	.my-login-page .card.fat .card-body {
		padding: 15px;
	}
}	
	.warning_login{
		width:100%;
		background-color: #f9c9cd ;
  		color: #a90312 ;
		font-size:15px;
		text-align: center;
	}

	</style>
	
<?php
	session_start();
	if(isset($_POST['login'])) {
		$taikhoan = $_POST['user'];
		$matkhau = $_POST['password'];
		if($taikhoan=="" || $matkhau =="")
		{
			echo "<p class='warning_login'>Xin nhập đủ</p>";
		}
		else if($taikhoan=="admin" && $matkhau =="admin")
		{
			header('Location: admin_statistic.php');
		}
		else{
			echo "<p class='warning_login'>Tài khoản hoặc mật khẩu sai</p>";
		}
		}
?>
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
					<img src="pic/admin.jpg" width="50px" alt="User Image">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Chào mừng Admin!</h4>
							<form class="my-login-validation" id="form_login" novalidate=""  method="POST">
								<div class="form-group">
									<label for="user">Tên tài khoản</label>
									<input id="user" type="text" class="form-control" name="user" value="" required autofocus>
									<div class="invalid-feedback">
										Mục này không được để trống
									</div>
								</div>

								<div class="form-group">
									<label for="password">Mật khẩu</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	Mục này không được để trống
							    	</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Nhớ tài khoản</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" name="login" class="btn btn-primary btn-block">
										Đăng nhập
									</button>
								</div>
								
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2012 &mdash; Nhóm 9
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script>
	var admin_user = 'admin';
	var admin_password ='admin';
	
	var user= document.getElementById('user');
	var password= document.getElementById('password');
	
	var form_login = document.getElementById('form_login');

    
	function check(){
		var u =user.value;
		var pw= password.value;
		if(u == "" || pw == ""){
			Alert("Vui lòng điền đầy đủ tên tài khoản và mật khẩu!");
			return false
		 }
		
		 else if(u == admin_user && pw == admin_password){
			return true;
		 }
		 else return false;
	}
    
	</script>
</body>
</html>
