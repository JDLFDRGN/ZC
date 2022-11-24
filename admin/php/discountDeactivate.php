<?php
        session_start();
        include('config.php');
            $discountStatusID = $_POST['discountStatusID'];
            $dishStatus = $_POST['dishStatus'];
            $newStatus = 1;
            $sql = "UPDATE `discount` SET `discountStatus` = 0 WHERE `ID` = '$discountStatusID';";
            $update = mysqli_query($con, $sql);
                if($update){
                    echo 1;
                }else{
                    echo 0;
                }
    ?>


