<?php
    session_start();
    $target_dir = "C:/xampp/htdocs/ZC/admin/assets/closetPhoto/";
    $target_file = $target_dir . basename($_FILES["updateImage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    include('config.php');
    $updateID = $_POST['updateID'];
    $updateImage = $_FILES["updateImage"]["name"];
    $updateName = $_POST['updateName'];
    $updatePrice = $_POST['updatePrice'];
    $updateCategory = $_POST['updateCategory'];
    $updateStock = $_POST['updateStock'];
    $updateDescription = $_POST['updateDescription'];

    if(!empty($_FILES['updateImage']["name"])){
        if(isset($_POST["updateBtn"])) {
                $check = getimagesize($_FILES["updateImage"]["name"]);
                if($check !== false) {
                    $uploadOk = 1;
                } else {
                   echo 'File is not an image.';   
                    $uploadOk = 0;
                }
        }
            // Check file size
            if ($_FILES["updateImage"]["size"] > 500000) 
            {
               echo 'Sorry, the file is too large.';   
                $uploadOk = 0;
                exit();  
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
            {
                echo 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';   
                $uploadOk = 0;
                exit();  
            }
            else {
            if (move_uploaded_file($_FILES["updateImage"]["tmp_name"], $target_file)) {
                        $oldImage = "SELECT `closetImage` FROM `closet` WHERE `closetID` = '$updateID'";
                        $result = mysqli_query($con, $oldImage);
                        if(mysqli_num_rows($result)>0){
                            {
                                $closetImage = mysqli_fetch_array($result);
                                unlink("C:/xampp/htdocs/ZC/admin/assets/closetPhoto/".$closetImage[0]);
                            }
                        }
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    $sql = "UPDATE `closet` SET `closetImage`='$updateImage',`closetName`='$updateName',`closetCategory`='$updateCategory', `closetStock`='$updateStock' ,
                    `closetDescription`='$updateDescription',`closetPrice`='$updatePrice'WHERE `closetID` =  '$updateID'";
                    $result = mysqli_query($con, $sql);
                    if($result){
                        move_uploaded_file($_FILES["updateImage"]["tmp_name"],$target_file);
                       echo 1;   
                    }else{
                       echo 0;   
                    }
                    mysqli_close($con);
                }
            }
        }else{
            $sql = "UPDATE `closet` SET `closetName`='$updateName',`closetCategory`='$updateCategory', `closetStock`='$updateStock' ,
            `closetDescription`='$updateDescription',`closetPrice`='$updatePrice' WHERE `closetID` =  '$updateID'";
            $result = mysqli_query($con, $sql);
            if($result){
                   echo 1;   
                }else{
                   echo 0;   
                }
            mysqli_close($con);    
    }
    
?>





