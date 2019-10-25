<?php 
include("checkSession.php");

$username = $_SESSION['username'];
$email = $_SESSION['email'];
$age = $_SESSION['age'];
$firstname = $_SESSION['firstname'];
$secondname = $_SESSION['secondname'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style type="text/css">

		
		
		 ul{
			    list-style-type: none;
  				margin: 0;
  				padding: 0;
  				overflow: hidden;
  				background-color: #16450a;
			

		}
		ul li{
			float: left;

		}
	 	ul li a{
			 display: block;
  			color: white;
  			text-align: center;
  			padding: 14px 16px;
  			text-decoration: none
		}
		li a:hover {
  			background-color: #111;
         }
	</style>
</head>
<body>
	
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Contacts</a></li>
			<li><a href="#">Info</a></li>
			<li><a href="#">About</a></li>
			<li style="float: right;"><a href="logout.php">logout</a></li>
		</ul>
		<div>
			<center>
				<fieldset>
					<legend><h2>About user</h2></legend>

					<h3>Username : <?php echo " $username;" ?></h3>
					<h3>Email : <?php echo " $email;" ?></h3>
					<h3>Age : <?php echo " $age;" ?></h3>
					<h3>Firstname : <?php echo " $firstname;" ?></h3>
					<h3>Secondname : <?php echo " $secondname;" ?></h3>
				</fieldset>
			</center>
		</div>
	
</body>
</html>