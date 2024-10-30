<?php
require("ketnoidatabase.php");
if(isset($_POST["sumit"]) ){
    $tensp = $_PORT["ten"];
    $gia = $_PORT["gia"];
    $mota = $_PORT["mota"];
    $hinhanh = $_FILES['hinhanh']['name'];
    $target_dir = "./images/";
    $target_file = $target_dir.$hinhanh;
    if(isset($tensp) && isset($gia) && isset($mota) && isset($hinhanh)){
        move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)
        $spl = "INSERT INTO `sanpham` (`masp`, `tensp`, `gia`, `mota`, `imgURL`) VALUES(NULL, '$tensp', '$gia', '$mota', '$hinhanh')";
        mysql_query($conn, $sql);
        echo "<script>alert('ban da them thanh cong')</script>";
        header("Location:trangchu.php");
    }
}
?>