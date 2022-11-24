<?php
include('config.php');
// FETCH PRODUCT FROM DATABASE
if(isset($_POST["getclosetA"])){
    $sql = "SELECT f.closetID, f.closetName, f.closetCategory , f.closetDescription , f.closetPrice , c.categories_ID , c.categories FROM closet f JOIN categories c ON c.categories_ID = f.closetCategory WHERE `closetStock` > 0 AND closetStatus = 0 ORDER BY `closetID` DESC";
    $result = mysqli_query($con,$sql) or die($con->error);
	if(mysqli_num_rows($result) > 0){
		while($closet = mysqli_fetch_array($result)){	
			$closetID   = $closet['closetID'];
			$closetName   = $closet['closetName'];
			$categories = $closet['categories'];
			$closetDescription = $closet['closetDescription'];
			$closetPrice = $closet['closetPrice'];
			echo "
            <tr >
                <td style='font-size:16px;'>$closetName</td> 
                <td style='font-size:16px;'>$categories</td> 
                <td style='font-size:16px;'>$closetDescription</td> 
                <td style='font-size:16px;'>₱$closetPrice.00</td> 
                <td style='font-size:16px;'>
                    <button class='btn btn-sm btn-secondary' type='button' onclick='update($closetID)'>UPDATE</button>
                    <button class='btn btn-sm btn-danger' type='button' onclick='updateStatus($closetID)'>DEACTIVE</button>
                </td> 
            </tr>
			";
		}
	}else{
        echo "
        <tr >
        <td style='font-size:16px;'></td> 
        <td style='font-size:16px;'></td> 
        <td style='font-size:16px;'>NO DATA FOUND</td> 
        <td style='font-size:16px;'></td> 
        <td style='font-size:16px;'></td>< 
        </tr>";
    }
}

// FETCH PRODUCT FROM DATABASE
if(isset($_POST["getclosetNA"])){
    $sql = "SELECT f.closetID, f.closetName, f.closetCategory , f.closetDescription , f.closetPrice , c.categories_ID , c.categories FROM closet f JOIN categories c ON c.categories_ID = f.closetCategory 
    WHERE closetStatus = 1 OR closetStock = 0 ORDER BY `closetID` DESC";
    $result = mysqli_query($con,$sql) or die($con->error);
	if(mysqli_num_rows($result) > 0){
		while($closet = mysqli_fetch_array($result)){	
			$closetID   = $closet['closetID'];
			$closetName   = $closet['closetName'];
			$categories = $closet['categories'];
			$closetDescription = $closet['closetDescription'];
			$closetPrice = $closet['closetPrice'];
			echo "
            <tr >
                <td style='font-size:16px;'>$closetName</td> 
                <td style='font-size:16px;'>$categories</td> 
                <td style='font-size:16px;'>$closetDescription</td> 
                <td style='font-size:16px;'>₱$closetPrice.00</td> 
                <td width='20%' style='font-size:16px;'>
                    <button class='btn btn-sm btn-success' type='button' onclick='updateStatus($closetID)'>ACTIVE</button>
                    <button class='btn btn-sm btn-secondary' type='button' onclick='update($closetID)'>UPDATE</button>
                    <button class='btn btn-sm btn-danger' type='button' onclick='deleteProduct($closetID)'>DELETE</button>
                </td> 
            </tr>
			";
		}
	}else{
        echo "
        <tr >
        <td style='font-size:16px;'></td> 
        <td style='font-size:16px;'></td> 
        <td style='font-size:16px;'>NO DATA FOUND</td> 
        <td style='font-size:16px;'></td> 
        <td style='font-size:16px;'></td>< 
        </tr>";
    }
}


// FETCH PRODUCT FROM DATABASE
// if(isset($_POST[""])){
//     $sql = "SELECT f.closetID, f.closetName, f.closetCategory , f.closetDescription , f.closetPrice , c.categories_ID , c.categories FROM closet f JOIN categories c ON c.categories_ID = f.closetCategory
//     WHERE `closetStock` = 0 AND closetStatus = 0 OR `closetStock` = 0 AND closetStatus = 1 ORDER BY `closetID` DESC";
//     $result = mysqli_query($con,$sql) or die($con->error);
// 	if(mysqli_num_rows($result) > 0){
// 		while($closet = mysqli_fetch_array($result)){	
// 			$closetID   = $closet['closetID'];
// 			$closetName   = $closet['closetName'];
// 			$categories = $closet['categories'];
// 			$closetDescription = $closet['closetDescription'];
// 			$closetPrice = $closet['closetPrice'];
// 			echo "
//             <tr >
//                 <td style='font-size:16px;'>$closetName</td> 
//                 <td style='font-size:16px;'>$categories</td> 
//                 <td style='font-size:16px;'>$closetDescription</td> 
//                 <td style='font-size:16px;'>₱$closetPrice.00</td> 
//                 <td style='font-size:16px;'>
//                     <button class='btn btn-sm btn-secondary' type='button' onclick='update($closetID)'>UPDATE</button>
//                     <button class='btn btn-sm btn-danger' type='button' onclick='updateStatus($closetID)'>DEACTIVE</button>
//                 </td> 
//             </tr>
// 			";
// 		}
// 	}else{
//         echo "
//         <tr >
//         <td style='font-size:16px;'></td> 
//         <td style='font-size:16px;'></td> 
//         <td style='font-size:16px;'>NO DATA FOUND</td> 
//         <td style='font-size:16px;'></td> 
//         <td style='font-size:16px;'></td>< 
//         </tr>";
//     }
// }


?>
