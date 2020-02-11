<!DOCTYPE html>
<html>
<head>
	<title>connection</title>
	<link rel="stylesheet" type="text/css" href="\orderbook\bootstrap\css\bootstrap.css">
</head>
<body>


	<script type="text/javascript" src="\orderbook\bootstrap\js\jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script type="text/javascript" src="\orderbook\bootstrap\js\bootstrap.min.js"></script>
</body>
</html>



<?php
$s="127.0.0.1";
$u="root";
$p="";
$db="order_book";
$con=new mysqli($s,$u,$p);
$con->select_db($db);
if($con->connect_error)
{
	echo "faile:";
}
else 
	echo "<br>";

session_start();
if(isset($_SESSION['name']))
{ $user=$_SESSION['name'];
}
else 
	$user="Login";
?>