<?php
    include 'connectdb.php';
?>
<?php
    $id = $_POST["staff_id"];
    $strSQL = "SELECT * FROM staff WHERE staff_id = '$id' ";
    if($result = mysqli_query($dbcon,$strSQL)){
        $resultArray = array();
        while($obResult = mysqli_fetch_assoc($result)){
            $arrCol = array();
            
            $staff_id = $obResult["staff_id"];
            $fullname = $obResult["fullname"];

            $arrCol["staff_id"] = $staff_id;
            $arrCol["fullname"] = $fullname;

            array_push($resultArray,$arrCol);
        }

        echo json_encode($resultArray);
    }
    
?>