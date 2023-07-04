
<style type="text/css">
	.alert { 
		margin: 0px;
		padding: 20px;
		color: #35db35;
		text-align: center;
		z-index: 2;
		background: green;
	}

	.closebtn {
		margin-left: 15px;
		color: black;
		font-weight: bold;
		float: right;
		font-size: 22px;
		line-height: 20px;
		cursor: pointer;
		transition: 0.3s;
	}
</style> 

<?php
$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include '_dbconnect.php';
	$user_name = $_POST['signupUserName'];
	$user_email = $_POST['signupEmail'];
	$pass = $_POST['signupPassword'];
	$cpass = $_POST['signupcPassword'];

	//check whether user exist or not
	$existSql = "SELECT * FROM `users` WHERE user_email = '$user_email';";
	$result = mysqli_query($connection,$existSql);
	$numRows = mysqli_num_rows($result);
	if ($numRows>0) {
		$showError = "Email already in use";
	}
	else{
		if ($pass == $cpass) {
			$hash = password_hash($pass, PASSWORD_DEFAULT);
			$sql = "INSERT INTO `users` (`user_name`, `user_email`, `user_pass`, `timestamp`) VALUES ('$user_name', '$user_email', '$hash', current_timestamp());";
			$result = mysqli_query($connection,$sql);
			if ($result) {
				$showAlert = true;
				header("location:/forum/index.php?signupsuccess=true");
				exit();
			}
		}
		else{
			$showError = "Passwords do not match";
		}
	}
	header("location:/forum/index.php?signupsuccess=false&error=$showError");
}

?>