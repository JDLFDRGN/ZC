<?php
include 'config.php';
$closetStatusID = $_POST['closetStatusID'];
$sql = "SELECT * FROM `closet` WHERE `closetID` = '$closetStatusID'";
$result = mysqli_query($con,$sql);
$closetArray = array();
    if(mysqli_num_rows($result) > 0){
        while($rows = mysqli_fetch_assoc($result)){
            array_push($closetArray, $rows);
        }
    }
echo json_encode($closetArray);
?>
