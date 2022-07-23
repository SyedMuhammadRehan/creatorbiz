<?php
session_start();
	if(isset($_POST["btnlogin"])&& $_POST["btnlogin"] != "")
	{
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		$con = new mysqli("localhost", "root", "", "prototype") or die("error here");
		$query = "SELECT `email`,`password` FROM `sign-up` WHERE email = '$email' and password = '$password' ";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) == 1)
		{
			$_SESSION["login_info"] = true;
//			header("location: welcome.php");
            header( "refresh:5; url=welcome.php" );
		} 
		else
	 	{
			$_SESSION['msg'] = "Wrong email or password.";
			header("location: login.php");
		}
	}
	else
	{
		$_SESSION['msg'] = 'You cannot access this page.';
		header("location: login.php");
	}
?>