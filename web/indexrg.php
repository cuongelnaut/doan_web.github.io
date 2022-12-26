<?php
$n = $_POST['full_name'];
$u = $_POST['user_name'];
$p = $_POST['pass1'];
?>
<?php
	$connect = mysqli_connect('localhost','root','','is207');
	mysqli_set_charset($connect, "utf8");
?>
<?php
mysqli_query($connect,"insert into khachhang (Tentaikhoan,Pass,Ten) values ('$u','$p','$n')");
echo "Đăng ký thành công. <a href='indexlg.php'>Trở lại đăng nhập</a>"
?>