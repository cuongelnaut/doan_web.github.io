
<?php
    $maNV=$_GET['manv'];
    include "connect.php";
    $str = "delete from nhanvien where MaNV='$maNV'";
    $connect->query($str);
    header("Location: admin_staff.php");
    $connect->close();
exit;
?>