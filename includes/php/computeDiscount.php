<?php
    include('connection.php');

    $code = $_POST['computeDiscount'];
    $amount = $_POST['totalAmount'];
    $total = 1;
    $sql = "SELECT * FROM `discount` WHERE `code` = '$code' LIMIT 1;";
    $result = mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
            $total = $amount - (floatval($amount) * (floatval($row['percentage'])/100));
        }
    }
    echo $total;
?>