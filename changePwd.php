<?php
	session_start();
	
	include('db.php');
	
	$curr = $_POST['curr'];
	$pwd = $_POST['pwd'];
	$id = $_SESSION['id'];
	
	$updatequery = $DBcon->prepare("UPDATE users SET Password = :pwd WHERE ID=:ID AND Password = :curr");
 
	$updatequery->bindparam(':pwd', $pwd);
	$updatequery->bindparam(':ID', $id);
	$updatequery->bindparam(':curr', $curr);
		
	if($updatequery->execute())
	{
		$res="Password has been changed successfully!";
		echo json_encode($res);
	}
	else
	{
		$error="Current password that you have entered is wrong!";
		echo json_encode($error);
	}
?>