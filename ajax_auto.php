<?php
    require 'connectdb.php';

    $strSQL = "SELECT * FROM staff WHERE staff_id = '".$_POST["staff_pro_id"]."' ";
    $objQuery = mysql_query($strSQL) or die (mysql_error());
    $intNumField = mysql_num_fields($objQuery);
    $resultArray = array();
    while($obResult = mysql_fetch_array($objQuery))
    {
        $arrCol = array();
        for($i=0;$i<$intNumField;$i++)
        {
            $arrCol[mysql_field_name($objQuery,$i)] = $obResult[$i];
        }
        array_push($resultArray,$arrCol);
    }
    mysql_close($objConnect);
    echo json_encode($resultArray);

?>