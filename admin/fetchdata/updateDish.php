<?php
include 'config.php';
$closetID = $_POST['closetID'];
$sql = "SELECT * FROM `closet` WHERE `closetID` = '$closetID'";
$result = mysqli_query($con,$sql);
$closetArray = array();
    if(mysqli_num_rows($result) > 0){
        while($rows = mysqli_fetch_assoc($result)){
            array_push($closetArray, $rows);
        }
    }
echo json_encode($closetArray);
?>
