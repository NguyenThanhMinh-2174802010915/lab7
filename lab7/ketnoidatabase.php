<?php
    $serverName ="localhost";
    $userName ="root";
    $pwd ="";
    $nameDB ="dblaptop";

    $conn = mysqli_connect($serverName, $userName, $pwd, $nameDB);
    if($conn === false){
        echo "ket noi that bai";
    }
    else{
        echo "ket noi thanh cong";
    }
?>