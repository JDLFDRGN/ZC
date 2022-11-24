<?php
    require_once('config.php');
    // NAME FROM THE FORM 
    $closetImage = $_FILES['closetImage']['name'];  
    $closetCategory = $_POST['closetCategory'];
    $closetName = $_POST['closetName'];
    $closetPrice = $_POST['closetPrice'];
    $closetStock = $_POST['closetStock'];
    $closetDescription = $_POST['closetDescription'];
    
        // Check if the closet are already exist
        $exist = "SELECT * FROM `closet` WHERE `closetName` = '$closetName'";
        $result = $con->query($exist) or die($con->error);
        $closet = $result->fetch_assoc();
    
        // Check if the closet name are already stored
        if($closet>0){
            echo "Sorry, The closet are already exist";
            exit();  
        }else{
            // Function for uploading closetImage
            $target_dir = "C:/xampp/htdocs/ZC/admin/assets/closetPhoto/";
            $target_file = $target_dir . basename($_FILES["closetImage"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $check = getimagesize($_FILES["closetImage"]["tmp_name"]);
    
            // Checking the image
            if($check !== false) {
            $uploadOk = 1;
            } else {
              echo "File is not an image.";
              $uploadOk = 0;
              exit();  
            }
            // Check file size
            if ($_FILES["closetImage"]["size"] > 500000) {
              echo "Sorry, your file is too large.";
              $uploadOk = 0;
              exit();  
            }
            // Allow certain file formats
            elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
              echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
              $uploadOk = 0;
              exit();  
            }
            // Check if $uploadOk is set to 0 by an error
            elseif($uploadOk == 0) {
              echo "Sorry, your file was not uploaded.";
              exit();  
            } 
            // if everything is ok, try to upload file
            else {
                    $new = "INSERT INTO `closet`(`closetImage`, `closetName`, `closetCategory`, `closetStock`, `closetDescription`, `closetPrice`) VALUES ('$closetImage','$closetName','$closetCategory', '$closetStock','$closetDescription','$closetPrice')";
                    $addcloset = mysqli_query($con, $new);
                    if($addcloset){
                      move_uploaded_file($_FILES["closetImage"]["tmp_name"],$target_file);
                      echo "New closet Stored Successfully.";
                      exit();  
                    }else{
                      echo "Sorry, Registered Failed";
                      exit();  
                         } 
                  }
       }
?>