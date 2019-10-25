<?php 
$server = "localhost";
$user = "root";
$password = "";
$db = "exam";
$conn = mysqli_connect($server, $user, $password,$db);
if($conn){

}
else{
	die("Unable to connect to the database".mysqli_connect_error());
}

 ?>