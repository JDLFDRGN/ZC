<?php
    include('config.php');
    $output = '';
    $search = $_POST['name'];

    $sql = "SELECT * FROM closet WHERE closetName LIKE '%$search%' OR closetCategory LIKE '%$search%' 
    OR  closetDescription LIKE '%$search%' OR closetPrice LIKE '%$search%'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result)>0){
	while ($closet=mysqli_fetch_assoc($result)) {
		echo"<tr>
                <td>".$closet['closetName']."</td> 
                <td>".$closet['closetCategory']."</td> 
                <td>".$closet['closetDescription']."</td> 
                <td>₱".$closet['closetPrice']."</td> 
                <td>
                    <button class='btn btn-secondary' onclick='update(".$closet['closetID'].")' type='button'>Update</button>
                    <button class='btn btn-danger' onclick='updateStatus(".$closet['closetID'].")' type='button'>Deactivate</button>
                </td> 
		    </tr>";
            }
    }
    else{
        echo"<tr>
            <td></td> 
            <td></td> 
            <td>
            <div class='alert alert-light' role='alert'>
                No matching records found
            </div>
            </td>
            <td></td> 
            <td></td> 
        </tr>";
    }
?>