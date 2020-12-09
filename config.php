<?php

//MSSQL
    $serverName = "10.0.102.21";
    $userName = "digital";
    $userPassword = "digital$212224";
    $dbName = "Regis_Digital_Showcase"; 
	$connectionInfo = array("Database"=>$dbName, "UID"=>$userName, "PWD"=>$userPassword, 
        "MultipleActiveResultSets"=>true,"CharacterSet"  => 'UTF-8');
    $conn = sqlsrv_connect( $serverName, $connectionInfo);  

?>