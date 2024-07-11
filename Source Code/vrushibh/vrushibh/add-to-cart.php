<?php
	session_start();
	include ('admin/configdb.php');

   if (isset($_SESSION['login'])) {  

	if (isset($_GET['action'])) {


		$id= $_GET['id'];

		$result = mysqli_query($conn, "select * FROM product WHERE p_id=$id");
	    $total = mysqli_fetch_assoc($result);

	 	$products = array('id' =>$total['p_id'] , 'image' =>$total['p_photo'], 'price' =>$total['p_price'], 'name' =>$total['p_name'] );


			$l=$id;
			if(isset($_SESSION['cart']))
			{

				$item_array_id=array_column($_SESSION['cart'], "id");
					

				if(in_array($l, $item_array_id))
				{
					$_SESSION['productadded']="Product Already added";
					header('location:shop.php');
				}
				else
				{
					$count=count($_SESSION['cart']);
					$_SESSION['cart'][$count]=$products;
					$_SESSION['productaddedsuccess']= "Product Added Successfully Go to Cart";
					header('location:shop.php');
				}
			}
			else
			{
				$_SESSION['cart'][0]=$products;
				$_SESSION['productaddedsuccess']= "Product Added Successfully Go to Cart";
				header('location:shop.php');
			}
		}

		else if (isset($_GET['action1'])) {
			
			foreach ($_SESSION['cart'] as $key => $value) 
					{
						if($value['id']==$_GET['id'])
						{
							$_SESSION['remove_product']="Your Product removed...";
							unset($_SESSION['cart'][$key]);	
							header("location:cart.php");
						}
					}
		}
	}
	else
    {
    	 header("location:login.php");
    }
?>