<?php
	session_start();
	
	include('db.php');
	
	$Mobile = $_POST['Mobile'];
	$Profession = $_POST['Profession'];
	$Language = $_POST['Language'];
	$DOB = $_POST['DOB'];
	$id = $_SESSION['id'];
	
	$updatequery = $DBcon->prepare("UPDATE users SET Mobile = :Mobile, DOB = :DOB, Profession = :Profession, Language = :Language WHERE ID=:ID");//"INSERT INTO users(Name, Email, Mobile, Gender, Profession, Language, DOB, Password) VALUES(:Name, :Email,:Mobile,:Gender, :Profession, :Language, :DOB, :Password)");
 
	$updatequery->bindparam(':Mobile', $Mobile);
	$updatequery->bindparam(':Profession', $Profession);
	$updatequery->bindparam(':Language', $Language);
	$updatequery->bindparam(':DOB', $DOB);
	$updatequery->bindparam(':ID', $id);
		
	if($updatequery->execute())
	{
		$res="Details have been updated successfully";
		echo json_encode($res);
	}
	else
	{
		$error="Details could not be updated. Please try again later.";
		echo json_encode($error);
	}
?>