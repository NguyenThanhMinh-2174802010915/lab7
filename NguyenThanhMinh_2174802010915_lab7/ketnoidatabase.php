<?php
    $serverName ="";
    $userName ="";
    $pwd ="";
    $nameDB ="";

    $conn =mysqli_connect($serverName, $userName, $pwd, $nameDB);
    if($conn == true){
        echo "ket noi thanh cong"
    }
    else{
        echo "ket noi that bai"
    }
?>