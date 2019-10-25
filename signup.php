
<?php
include("dbConnect.php");

if(isset($_POST['signup'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	$pass = md5($password);
	$email = $_POST['email'];
	$age = $_POST['age'];
	$firstname = $_POST['firstname'];
	$secondname = $_POST['secondname'];

	$query = "insert into users values(null, '$username','$pass','$email', '$age', '$firstname', '$secondname')";

	$exec = mysqli_query($conn, $query);
	if ($exec) {
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			$_SESSION['age'] = $age;
			$_SESSION['firstname'] = $firstname;
			$_SESSION['secondname'] = $secondname;
		header("location: welcome.php");
	}else{
		die("unable to register");
	}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		body{
			margin: 2% 20% 0 20%;
		}
		.container{
			background-color: #f2f2f2;
			border-radius: 4px;
			text-align: center;
			padding: 40px;
		}
		input[type="text"], input[type="password"],input[type="email"],input[type="number"]{
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
			position: sticky;
			top: 0px;
		}
	</style>
</head>
<body>

	<div class="text1">Sign Up</div>
	<div class="container">
		<form method="POST" action="">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username..." required><br>
			<label>Password</label>
			<input type="password" name="password" placeholder="Password..." required><br>
			<label>Email</label>
			<input type="email" name="email" placeholder="Email..." required><br>
			<label>Age</label>
			<input type="number" name="age" placeholder="Age..." required><br>
			<label>Firstname</label>
			<input type="text" name="firstname" placeholder="Firstname..." required><br>
			<label>Secondname</label>
			<input type="text" name="secondname" placeholder="Secondname..." required><br>
			<input type="submit" name="signup" value="Submit">
		</form>
	</div>
</body>
</html>