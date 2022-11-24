<?php
include('config.php');
// FETCH PRODUCT FROM DATABASE
if(isset($_POST["getDiscountA"])){
    $sql = "SELECT discount.ID AS discountID, discount.code AS code, discount.customer_id AS customerID, discount.percentage AS percentage, discount.expiration AS expiration, discount.discountStatus AS status, customers.customerName AS customerName FROM discount INNER JOIN customers on discount.customer_id = customers.customerID WHERE discount.discountStatus = 1 AND expiration > NOW();";
    $result = mysqli_query($con,$sql) or die($con->error);
	if(mysqli_num_rows($result) > 0){
		while($discount = mysqli_fetch_array($result)){	
            $discountID = $discount['discountID'];
			$discountCode   = $discount['code'];
			$customerName   = $discount['customerName'];
			$discountPercentage = $discount['percentage'];
			$discountExpiration = $discount['expiration'];
			echo "
            <tr >
                <td style='font-size:16px;'>$discountCode</td> 
                <td style='font-size:16px;'>$customerName</td> 
                <td style='font-size:16px;'>$discountExpiration</td> 
                <td style='font-size:16px;'>
                    <button class='btn btn-sm btn-danger' type='button' onclick='updateStatus($discountID)'>DEACTIVE</button>
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
if(isset($_POST["getdiscountNA"])){
    $sql = "SELECT f.discountID, f.discountName, f.discountCategory , f.discountDescription , f.discountPrice , c.categories_ID , c.categories FROM discount f JOIN categories c ON c.categories_ID = f.discountCategory 
    WHERE discountStatus = 1 OR discountStock = 0 ORDER BY `discountID` DESC";
    $result = mysqli_query($con,$sql) or die($con->error);
	if(mysqli_num_rows($result) > 0){
		while($discount = mysqli_fetch_array($result)){	
			$discountID   = $discount['discountID'];
			$discountName   = $discount['discountName'];
			$categories = $discount['categories'];
			$discountDescription = $discount['discountDescription'];
			$discountPrice = $discount['discountPrice'];
			echo "
            <tr >
                <td style='font-size:16px;'>$discountName</td> 
                <td style='font-size:16px;'>$categories</td> 
                <td style='font-size:16px;'>$discountDescription</td> 
                <td style='font-size:16px;'>₱$discountPrice.00</td> 
                <td width='20%' style='font-size:16px;'>
                    <button class='btn btn-sm btn-success' type='button' onclick='updateStatus($discountID)'>ACTIVE</button>
                    <button class='btn btn-sm btn-secondary' type='button' onclick='update($discountID)'>UPDATE</button>
                    <button class='btn btn-sm btn-danger' type='button' onclick='deleteProduct($discountID)'>DELETE</button>
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

?>
