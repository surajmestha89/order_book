<!DOCTYPE html>
<html>
<head>
	<title>connection</title>
	<link rel="stylesheet" type="text/css" href="\orderbook\bootstrap\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/@popperjs/core@2">
</head>
<body>


<script type="text/javascript" src=""\orderbook\bootstrap\js\jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script type="text/javascript" src=""\orderbook\bootstrap\js\bootstrap.min.js.js"></script>
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