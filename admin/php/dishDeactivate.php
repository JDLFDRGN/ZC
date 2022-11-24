    <?php
        session_start();
        include('config.php');
            $closetStatusID = $_POST['closetStatusID'];
            $dishStatus = $_POST['dishStatus'];
            $newStatus = 1;
            $sql = "UPDATE `closet` SET `closetStatus` = '$newStatus' WHERE `closetID` = '$closetStatusID'";
            $update = mysqli_query($con, $sql);
                if($update){
                    echo 1;
                }else{
                    echo 0;
                }
    ?>



