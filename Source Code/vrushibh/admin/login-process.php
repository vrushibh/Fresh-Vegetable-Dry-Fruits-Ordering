<?php
	session_start();
	include ('configdb.php');	
	$email= $_POST['email'];
	$pwd= $_POST['pwd'];

	$qry= "SELECT * FROM admin where email='$email' and pwd='$pwd'";
	$res= mysqli_query($conn, $qry);
	$row= mysqli_fetch_assoc($res);


	if(isset($row)){
		$_SESSION['login']=$row;
		header("location:index.php");
	}
	else
	{
		$_SESSION['invalid']="Username or Password Wrong";
		header("location:login.php");
	}
?>