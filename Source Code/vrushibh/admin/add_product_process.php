<?php
	session_start();
	include ('configdb.php');

    $pnm= $_POST["pname"];
    $pfile= $_POST["pfile"];
    $pkg= $_POST["pkg"];
    $pprice= $_POST["pprice"];
    $pcat= $_POST["pcat"];

	$qry= "SELECT p_name FROM product WHERE p_name='$pnm'";
	$res= mysqli_query($conn, $qry);
	$row= mysqli_num_rows($res);
		// vars for move function
		$source_dir = $_FILES['fileToUpload']["tmp_name"];
		$folder_dir="../images/".$filename;
		$filename=basename($_FILES["fileToUpload"]["name"]);
			//variables for instert and save image 
			$pnm= $_POST["pname"];
			$pfile= $_FILES["fileToUpload"];

	if (isset($_POST['Submit']))
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
			header("location:add_product.php");
		}
		else
		{
			if($row){
				$_SESSION['perror']="Product Already Added";
				header("location:add_product.php");
			}
			else
			{
				$query= "INSERT INTO product(p_name, p_photo, p_price, p_detail, p_cat )VALUES('$pnm','$pfile', '$pprice','$pkg', '$pcat')";
				mysqli_query($conn, $query);
				// 
				if(move_uploaded_file($source_dir,$folder_dir)){				
					echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
					header("location:add_product.php");
				} else {
				  echo "Sorry, there was an error uploading your file.";
				}
				// 

				$_SESSION['Success']="Product Successfully Added";
				header("location:add_product.php");
			}
		}
	}
	else
	{
		header("location:add_product.php");
	}
?>
