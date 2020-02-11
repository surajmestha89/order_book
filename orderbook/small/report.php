<!DOCTYPE html>
<html>
<head>
	<title> analysis of month report</title>
</head>

<body><div class="container mt-5">
	<p class="text-secondary"> choose the month :</p>
	<hr>
	<form  method="post">
		<select name='MN'>
			<option value="1">jan</option>
			<option value="2">feb</option>
			<option value="3">mar</option>
			<option value="4">april</option>
			<option value="5">may</option>
			<option value="6">jun</option>
			<option value="7">july</option>
			<option value="8">aug</option>
			<option value="9">sep</option>
			<option value="10">oct</option>
			<option value="11">nov</option>
			<option value="12">dec</option>
		</select>
		<input type="submit" name="sub">
	</form>
</div>
</body>
</html>


<?php
include "sconn.php";

if(isset($_POST['sub'])){
	$mn=$_POST["MN"];

	$mon = date("F", mktime(0, 0, 0, $mn, 10)); 

	$res= $con->query("SELECT  COUNT(id) FROM boardk WHERE month(odate)='$mn'");
	if($r=$res->fetch_array())
	{
		echo " <div class=' container-md mt-10 text-white row ml-5 justify-content-center' >
		<div class='p-2  col-3 bg-warning'><b>".$mon ." month total orders:<b></div><div class='p-2  col-3 bg-primary'><b>".$r['COUNT(id)']."</b></td></div>
		</div>";

	}
	sleep(3);
	$_POST= array();

}

?>