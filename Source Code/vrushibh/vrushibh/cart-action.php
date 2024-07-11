<?php 
	//session_start();
	include ('admin/configdb.php');
	include('header.php');
	$c_id=$_SESSION['login']['c_id'];
	
?>
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Thank You For Shopping</h2>
                </div>
            </div>
        </div>
    </div>
<?php
		if(isset($_POST['productid'][0])){
		$item1_id = $_POST['productid'][0];	
		$item1_qty = $_POST['qty'][0];
		$query = "INSERT INTO `order_detail`(`customer_id`, `product_id`, `order_qty`) VALUES ($c_id, $item1_id, $item1_qty)";
		mysqli_query($conn, $query);

		}

		if(isset($_POST['productid'][1])){
		$item2_id = $_POST['productid'][1];
		$item2_qty = $_POST['qty'][1];
		$query1 = "INSERT INTO `order_detail`(`customer_id`, `product_id`, `order_qty`) VALUES ($c_id, $item2_id, $item2_qty)";
		mysqli_query($conn, $query1);
		}

		if(isset($_POST['productid'][2])){
		$item3_id = $_POST['productid'][2];
		$item3_qty = $_POST['qty'][2];
		$query2 = "INSERT INTO `order_detail`(`customer_id`, `product_id`, `order_qty`) VALUES ($c_id, $item3_id, $item3_qty)";
		mysqli_query($conn, $query2);
		}

		if(isset($_POST['productid'][3])){
		$item4_id = $_POST['productid'][3];
		$item4_qty = $_POST['qty'][3];
		$query3 = "INSERT INTO `order`(`customer_id`, `product_id`, `order_qty`) VALUES ($c_id, $item4_id, $item4_qty)";
		mysqli_query($conn, $query3);
		}

		if(isset($_POST['productid'][4])){
		$item5_id = $_POST['productid'][4];
		$item5_qty = $_POST['qty'][4];
		$query4 = "INSERT INTO `order_detail`(`customer_id`, `product_id`, `order_qty`) VALUES ($c_id, $item5_id, $item5_qty)";
		mysqli_query($conn, $query4);
		}

		unset($_SESSION['cart']);
	
?>
<?php include('footer.php'); ?>


