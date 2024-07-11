<?php
	session_start();
	include ('admin/configdb.php');

	$id= $_GET['id'];

	$result = mysqli_query($conn, "select * FROM product WHERE p_id=$id");
    $total = mysqli_fetch_assoc($result);

   // $row = mysqli_fetch_array($result);

 	$products = array('id' =>$total['p_id'] , 'image' =>$total['p_photo'], 'price' =>$total['p_price'], 'name' =>$total['p_name'] );

 	if (isset($_SESSION['cart'])) {
 		if (in_array($id, $_SESSION['cart'])) {
 			echo "already added";
 		}
 		else
 		{
 			$count=0;
 			while ($_SESSION['cart']!=null) {
 				$count++;
 			}
 			echo $count;
 			$_SESSION['productadded'] = "Product Added to Cart";
 		}
 		/*echo sizeof($_SESSION['cart']);
 		foreach ($products as $key => $value) {
 			echo $value;
 			if($value==$id)
 			{
 				echo "products already added";

 			}else
 			{
 				echo sizeof($_SESSION['cart']);
 				echo "added";
 			}
 		}*/
	 		
 	}
 	else {
 		$_SESSION['cart']= $products;
 		
 	}
 	//print_r($_SESSION['cart']);
?>
