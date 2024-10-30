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
    <h1>Them san pham</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <label for="ten">Ten san pham</label>
            <input type="text" id='ten' name="ten" require>
        </div>
        <div>
            <label for="gia">Gia san pham</label>
            <input type="number" id='gia' name="gia" require>
        </div>
        <div>
            <label for="file">Hinh anh/label>
            <input type="file" id='file' name="hinhanh" value="Choose File" require>
        </div>
        <div>
            <label for="mota">Mo ta</label>
            <textarea name="mota" id="mota" cols="30" rows="10" required></textarea>
        </div>
        <button type="submit" name="submit">
            Them san pham
        </button>
    </form>
</body>
</html>