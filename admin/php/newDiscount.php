<?php
    require_once('config.php');
 
    $closetCode = $_POST['closetCode'];  
    $customerName = $_POST['customerName'];
    $closetPercentage = $_POST['closetPercentage'];
    $closetExpiration = $_POST['closetExpiration'];
    
        $exist = "SELECT * FROM `discount` WHERE `code` = '$closetCode';";
        $result = $con->query($exist) or die($con->error);
        $code = $result->fetch_assoc();
    
        if($code>0){
            echo "Sorry, The discount are already exist";
            exit();  
        }else{
           
            $new = "INSERT INTO `discount`(`code`, `customer_id`, `percentage`, `expiration`) VALUES ('$closetCode','$customerName','$closetPercentage','$closetExpiration')";
            $addcloset = mysqli_query($con, $new);
            if($addcloset){
              echo "New closet Stored Successfully.";
              exit();  
            }else{
              echo "Sorry, Registered Failed";
              exit();  
                 } 
       }
?>