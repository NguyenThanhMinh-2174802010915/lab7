<?php
    require("ketnoidatabase.php")
    $sql = "SELECT * FROM `sanpham `";
    $query = mysqli_connect($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Quan ly danh sach san pham</h1>
    <button>
        <a href="themsanpham.php">Them san pham</a>
    </button>
    <table id="productlist">
        <tr>
                <th>Ma san pham</th>
                <th>Ten san pham</th>
                <th>Gia san pham</th>
                <th>Hinh anh</th>
                <th>Hang dong</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?= $row["masp"] ?></td>
            <td><?= $row["tensp"] ?></td>
            <td><?= $row["gia"] ?>&nbsp; VND</td>
            <td><img style="width: 200px; height:200px" src='./images/<?= $row["imgURL"] ?>' alt=""></td>
            <td><a href="suasanpham.php?id=<?= $row['masp']?>">Sua</a>
                <a onclick="return xoasanpham()" href="xoasanpham.php?id=<?= $row['masp']?>">Xoa</a>
            </td>
        </tr>
        <?php }?>
    </table>
    <script>
        function xoasanpham(){
            var conf = confirm(`are you sure?`);
            return conf;
        }
</script>
<a onclick="return xoasanpham()" href="xoasanpham.php?id=<?= $row['masp']?>">xoa</a>
</body>
</html>