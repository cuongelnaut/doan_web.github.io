<?php
$u = $_POST['username'];
$p = $_POST['password'];
?>
<?php
	$connect = mysqli_connect('localhost','root','','is207');
	mysqli_set_charset($connect, "utf8");
?>
<?php
$sql = "select * from khachhang where Tentaikhoan = '$u' and Pass = '$p'";
$rs = mysqli_query($connect, $sql);
if (mysqli_num_rows($rs) > 0) {
	include 'index.php';
} else {
	include 'login.php';
}
?>
