<?php
    $maDH=$_GET['madh'];
    include "connect.php";
    $str = "delete from donhang where MaDH='$maDH'";
    $connect->query($str);
    header("Location: admin_order.php");
    $connect->close();
exit;
?>