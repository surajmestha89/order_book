<!DOCTYPE html>
<html>
<head>
	<title>connection</title>
	<link rel="stylesheet" type="text/css" href="\orderbook\bootstrap\css\bootstrap.css">
</head>
<body>


<script type="text/javascript" src="\orderbook\bootstrap\js\jquery.js"></script>
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
?>