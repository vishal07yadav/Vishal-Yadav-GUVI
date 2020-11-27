<?php

	$id = $_SESSION['id'];	
	$dbhost = "localhost";
	$dbuser = 'root';
	$dbpass = '';
	$connect = new mysqli($dbhost,$dbuser,$dbpass,"guvi");
 
    $search_query = "SELECT * FROM users WHERE id = '$id'";
	$result1 = mysqli_query($connect, $search_query);
	$row=mysqli_fetch_array($result1);
	$name=$row['Name'];
	$email=$row['Email'];
	$mobile=$row['Mobile'];
	$gender=$row['Gender'];
	$profession=$row['Profession'];
	$language=$row['Language'];
	$dob=$row['DOB'];

?>