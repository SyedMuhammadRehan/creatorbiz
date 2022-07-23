<?php
session_start();
	if(isset($_POST["btnsignup"]) && $_POST["btnsignup"] != "")
	{
		$fullname = $_POST["name"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$confirmpassword = $_POST["re-password"];
		if($password != $confirmpassword)
		{
			$_SESSION['msg'] = 'Password and confirm password did not match';
			header("location: sign-up.php");exit;
		}
		$query = "INSERT INTO `sign-up`( `name`, `email`, `password`) VALUES ('$fullname', '$email', '$password')";
		$con = new mysqli("localhost", "root", "", "prototype") or die("error here");
		
		$result = mysqli_query($con, $query);
		if(isset($result) && $result != "")
		{
			$_SESSION['msg'] = 'Success, account created, Please Login';
			header("location: login.php");
		}
		else
		{
			$_SESSION['msg'] = 'Sorry, some error.';
			header("location: sign-up.php");
		}
	}
	else
	{
		$_SESSION['msg'] = 'You cannot access this page.';
		header("location: index.html");
	}
?>
