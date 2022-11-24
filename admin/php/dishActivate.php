<?php
    session_start();
    include('config.php');
        $closetStatusID = $_POST['closetStatusID'];
        $newStatus = 0;
        $sql = "SELECT closetStock FROM closet WHERE closetID = $closetStatusID";
        $result = mysqli_query($con,$sql) or die($con->error);
        if(mysqli_num_rows($result) > 0){
            while($product = mysqli_fetch_array($result)){	
                if($product['closetStock'] == 0){
                    echo 2;
                }else{
                    $sql = "UPDATE `closet` SET `closetStatus` = '$newStatus' WHERE `closetID` = '$closetStatusID'";
                    $update = mysqli_query($con, $sql);
                        if($update){
                            echo 1;
                        }else{
                            echo 0;
                        }
                }
            }
        }


?>