
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>My Login Page &mdash; Bootstrap 4 Login Page Snippet</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
					
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Đăng ký</h4>
							<form action="indexrg.php" method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="name">Họ và tên</label>
									<input id="name" type="text" class="form-control" name="full_name" required autofocus>
									<div class="invalid-feedback">
										Hãy nhập tên của bạn.
									</div>
								</div>

								<div class="form-group">
									<label for="email">E-Mail</label>
									<input id="email" type="email" class="form-control" name="user_name" required>
									<div class="invalid-feedback">
										E-mail không hợp lệ.
									</div>
								</div>

								<div class="form-group">
									<label for="password">Mật khẩu</label>
									<input id="password" type="password" class="form-control" name="pass1" required data-eye>
									<div class="invalid-feedback">
										Hãy nhập mật khẩu.
									</div>
								</div>
								<div class="form-group">
									<label for="password">Nhập lại mật khẩu</label>
									<input id="password" type="password" class="form-control" name="pass2" required data-eye>
									<div class="invalid-feedback">
										Hãy nhập lại mật khẩu.
									</div>
								</div>
                                <div class="form-group">
									<label for="email">Giới tính</label>
									<input id="email" type="email" class="form-control" name="sex" required>
									<div class="invalid-feedback">
									</div>
								</div>
                                <div class="form-group">
									<label for="email">SDT</label>
									<input id="email" type="email" class="form-control" name="sdt" required>
									<div class="invalid-feedback">
									</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
										<label for="agree" class="custom-control-label">Tôi đồng ý với <a href="#">Các điều khoản</a></label>
										<div class="invalid-feedback">
											Bạn phải đồng ý với các điều khoản
										</div>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" name="register" class="btn btn-primary btn-block">
										Đăng ký
									</button>
								</div>
								<div class="mt-4 text-center">
									Đã có tài khoản? <a href="login.php">Đăng nhập</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2022 &mdash; Nhóm 9
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>