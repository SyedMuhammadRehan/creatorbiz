<?php
	if(isset($_POST["submit"]))
	{
		$fname = $_POST["name"];
		$email = $_POST["email"];
		$tid = $_POST["TID"];
		 
		$query = "INSERT INTO `payment`( `name`, `email`, `tid`) VALUES ('$fname', '$email', '$tid')";
		$con = new mysqli("localhost", "root", "", "prototype");
		
		$result = mysqli_query($con, $query);
		if(isset($result) && $result != "")
		{
			echo 'Success, account created, Please Login';
	        header("location: thank-you.html");
		}
		else
		{
			echo 'Sorry, some error.';
		}
	}
	else
	{
		echo 'You cannot access this page.';
	}
?>
