<?php
	session_start();
	include ('configdb.php');
	$id = $_GET['id'];

	$delete = mysqli_query($conn,"delete FROM product WHERE p_id = '$id'"); // delete query

	if($delete)
	{
	    header("location:delete_product.php");  
	    $_SESSION['delete']="Product Successfully Deleted";
	    exit;	
	}
	else
	{
	    echo "Error while deleting record"; // display error message if not delete
	}
?>