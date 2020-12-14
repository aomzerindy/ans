<?php

    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "ans";
    
    $dbcon = mysqli_connect($servername,$username,$password,$dbname);    
    mysqli_set_charset($dbcon,'utf8');

    if (!$dbcon){
        die('ไม่สามารถติดต่อฐานข้อมูล MySQLได้'. mysqli_connect_error());
    }
