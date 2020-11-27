<?php 
	session_start(); 

    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
	
	include("database.php");
	
	$_SESSION['error'] = 0;
 
    $search_query = "SELECT * FROM users WHERE Email = '$Email' AND Password = '$Password'";

	$result = mysqli_query($connect, $search_query);
	$row=mysqli_fetch_array($result);
	
	if(empty($row))
	{
		$_SESSION['error']=1;	
		header("Location:login.php");
	}
    else
    {
		$_SESSION['id'] = $row['ID'];
		header("Location:dashboard.php");    
    }
	mysqli_close($connect);
?>
