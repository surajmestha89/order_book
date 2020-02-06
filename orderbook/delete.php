<?php 
	include 'conn.php';
	

	$i=$_GET['id'];
$sql=" DELETE from boardk where id='$i'";
if($con->query($sql))
	echo "<div class='container'><div class='text-info'><h2>deleted succfull user: ".$i."<h2></div></div>";
else die("error".$con->error);
echo "<div><a class='btn btn-primary btn-lg' href='http://localhost/orderbook/display.php' >display</a></div>";

 
?>