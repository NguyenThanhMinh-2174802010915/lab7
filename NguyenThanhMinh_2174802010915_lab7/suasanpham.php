<?php
require("ketnoidatabase.php");
    $masp = (int) $_GET['id'];
    $spl = "SELECT * FORM `sanpham` WHERE `masp` = '$masp'";
    $query = mysqli_query($conn,$sql);
    $img = $row['imgURL'];
?>
<?php
require("ketnoidatabase.php");
if(isset($_POST["sumit"]) ){
    $tensp = $_PORT["ten"];
    $gia = $_PORT["gia"];
    $mota = $_PORT["mota"];
    $hinhanh = $_FILES['hinhanh']['name'];
    $target_dir = "./images/";
    if($hinhanh){
        if (file_exists("./images/".$img)) {
            unlink("./images/".$img);
        }
        $target_file = $target_dir.$hinhanh;
    }else{
        $target_file = $target_dir.$img;
        $hinhanh = $img;
    }
    if(isset($tensp) && isset($gia) && isset($mota) && isset($hinhanh)){
        move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)
        $spl = "INSERT INTO `sanpham` (`masp`, `tensp`, `gia`, `mota`, `imgURL`) VALUES(NULL, '$tensp', '$gia', '$mota', '$hinhanh')";
        mysql_query($conn, $sql);
        echo "<script>alert('ban da them thanh cong')</script>";
        header("Location:trangchu.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            width: 600px;
        }
        div{
            display: flex;
            margin-bottom: 20px;
        }
        label{
            width: 100px;
        }
        input, textarea{
            flex: 1;
        }
        button{
            margin-left: 100px;
            padding: 6px 12px;
            color: #2F1C25;
            background-color: transparent;
            border: 3px solid #D7B0DF;
            border-radius: 8px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="trangchu.php">Quay ve</a>
    <h1>Cap nhat san pham</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <label for="ten">Ten san pham</label>
            <input type="text" id='ten' name="ten" value = "<?= $row["tensp"]?>">
        </div>
        <div>
            <label for="gia">Gia san pham</label>
            <input type="number" id='gia' name="gia" value ="<?= $row["gia"]?>" >
        </div>
        <div>
            <img style="width: 200px; height: 200px;" src="./images/<?= $row["imgURL"]?>" alt="">
        </div>
        <div>
            <label for="file">Hinh anh/label>
            <input type="file" id='file' name="hinhanh" value="Choose File" require>
        </div>
        <div>
            <label for="mota">Mo ta</label>
            <textarea name="mota" id="mota" cols="30" rows="10"><?= $row["mota"]?></textarea>
        </div>
        <button type="submit" name="submit">
            Cap nhat san pham
        </button>
    </form>
</body>
</html>