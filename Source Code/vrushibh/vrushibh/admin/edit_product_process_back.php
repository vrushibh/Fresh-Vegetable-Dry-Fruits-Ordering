<?php
	session_start();
	include ('configdb.php');

    $pnm= $_POST["pname"];
    $pfile= $_POST["pfile"];
    $pkg= $_POST["pkg"];
    $pprice= $_POST["pprice"];
    $pcat= $_POST["pcat"];
    $pid=$_POST['pid'];

	if(isset($_POST['submit']) && !empty($_POST['submit']))
	{
		$_SESSION['error'] = array();
		extract($_POST);

		if(empty($pnm)){
			$_SESSION['error']['pname']="Please Enter Product Name";
		}
		if(empty($pfile)){
			$_SESSION['error']['pfile']="Please Select Photo";
		}
		if(empty($pkg)){
			$_SESSION['error']['pkg']="Please Enter Kg";
		}
		if(empty($pprice)){
			$_SESSION['error']['pprice']="Please Enter Price";
		}
		if(!empty($_SESSION['error'])){
			header("location:edit_product_process.php");
		}
		else
		{
				$query= "UPDATE product SET p_name='$pnm', p_photo='$pfile', p_price='$pprice', p_detail='$pkg', p_cat='$pcat' WHERE p_id='$pid'";
				mysqli_query($conn, $query);

				$_SESSION['Success']="Product Successfully Updated";
				header("location:edit_product_process.php");	
		}
	}
	else
	{
		header("location:edit_product_process.php");
	}
?>