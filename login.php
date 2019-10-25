<?php
session_start();
include("dbConnect.php");


if (isset($_POST['login'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$pass = md5($password);

	$query = "select * from users where username = '$username' and password = '$pass'";
	$exec = mysqli_query($conn, $query);
	if (mysqli_num_rows($exec) > 0) {
		while ($row = mysqli_fetch_assoc($exec)) {
			$_SESSION['username'] = $row['username'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['age'] = $row['age'];
			$_SESSION['firstname'] = $row['firstname'];
			$_SESSION['secondname'] = $row['secondname'];
		}
		header("location: welcome.php");
	}
	else{
		die("unable to log you in ");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-value=1.0">
	<style type="text/css">
		body{
			margin: 1% 10% 10% 10%;
		}
		.container{
			background-color: #f2f2f2;
			border-radius: 4px;
			text-align: center;
			padding: 40px;
		}
		input[type="text"], input[type="password"]{
			width: 100%;
			padding: 14px 20px;
			box-sizing : border-box;
			border-radius: 4px;
		}
		input[type="submit"]{
			width: 100%;
			padding: 14px 20px;
			box-sizing : border-box;
			border-radius: 4px;
			border: none;
			background-color: #358720;
			margin-top: 48px;
			cursor: pointer;
			color: white;
		}
		input[type="submit"]:hover{
			background-color: #16450a;
			color: white;
		}
		label{
			text-align: left;
			font-family: Arial;
			font-size: 20px;
		}
		.text1{
			background-color: #3e8c2a;
			border-radius: 4px;
			text-align: center;
			font-size: 50px;
			padding: 40px;
			color: white;
		}
	</style>
</head>
<body>
	
	<div class="text1">Login</div>
	<div class="container">
		<form method="POST" action="login.php">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username..." required><br>
			<label>Password</label>
			<input type="password" name="password" placeholder="Password..." required><br>
			<input type="submit" name="login" value="Login">
		</form>
	</div>
</body>
</html>