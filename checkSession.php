<?php
session_start();

if (isset($_SESSION['username']) && $_SESSION['username'] != "") {
	# code...
}
else{
	header("location: index.php");
}
?>