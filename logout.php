<?php
include("checkSession.php");
session_destroy();
header("location: index.php");
?>