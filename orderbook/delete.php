<?php 
	include 'conn.php';
	

	$i=$_GET['id'];
	$model=$_GET['model'];
	if($model=="small")
{

	$table_name= 'boards';
}
else
{
		$table_name= 'boardk';
}
$sql=" DELETE from $table_name where id='$i'";
if($con->query($sql))
	echo "<div class='container'><div class='text-info'><h2>deleted succfull user: ".$i."<h2></div></div>";
else die("error".$con->error);
echo "<div><a class='btn btn-primary btn-lg' href='http://localhost/orderbook/display.php' >display</a></div>";

 header("Location:display.php");
?>