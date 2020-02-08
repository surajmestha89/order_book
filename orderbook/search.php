
<!DOCTYPE html>
<html>
<head>
	<title>searching</title>
</head>
<body>
	<div class="container">
		<form method="post">
			<div class="form-group">
		<h2> <b>SEARCHING PAGE</b></h2>
		<p class="text-secondary"> choose any one of the below<p>
			<div class="form-control">
		<label class="div">  NAME : </label>
		<input type="text" name="name" >
	</div>
	<br>
		<div class="form-control">
		
		<label class="div"> PLACE: </label>
		<input type="text" name="place" ></div><br>
		<div class="form-control">
		
		<label class="div"> MODEL : </label>
		<input type="text" name="model" ></div><br>
		
		<div class="form-control">
		<label class="div">  WEIGHT: </label>
		<input type="text" name="kg" ></div><br>
		
		<button class="btn btn-info" name="srch">SEARCH</button>
	</div>
	</form>
	</div>
	


<?php 

include 'conn.php';
$nim="";
if(isset($_POST['srch']))
{
	if(!empty($_POST['name']))
	{
		$nm=$_POST['name'];
	$sql="SELECT * from boardk where name like '$nm%'";
		
	}
	else if(!empty($_POST['place']))
	{
		$plc=$_POST['place'];
	$sql="SELECT * from boardk where place like '$plc%'";
	
	}
	else if(!empty($_POST['model']))
	{
		$mod=$_POST['model'];
	$sql="SELECT * from boardk where model like '$mod%'";
	
	}
    else if(!empty($_POST['kg']))
    {
    	$kg=$_POST['kg'];
	$sql="SELECT * from boardk where weight like '$kg%'";
	
    }
   $res=$con->query($sql);

	if($res->num_rows>0)
	{
		 echo "	<div class='bg-light'><center><h2 class='text-muted'>Searched result</h2></center></div>
			<div class='row'><hr></div>
			";
	echo "	<table class='table table-hover table-strip'>
<thead class='table-dark'>
 <tr >
 <th>order no</th>
 <th>name</th>
 <th>place</th>
 <th>mobile</th>
 <th>boat name</th>
 <th> model </th>
 <th>weight</th>
 <th>Oder-date</th>
 <th>Due_Date</th>
 <th>Price </th>
 <th>Advance</th>
 </tr>
</thead>";
	
		while($r=$res->fetch_array())
		{
			echo "<div class='container-fluid bg-light'>
		<div class='row'><tbody>
			<tr><td>".$r['id']. "</td>
			<td> ".$r['name']." </td>
			<td>". $r['place'] ."</td>
			<td>". $r['mob']." </td>
			<td> ".$r['bname'] ."</td>
			<td> ".$r['model'] ."</td>
			<td> ".$r['weight']." </td>
			<td> ".$r['odate'] ."</td>
			<td> ".$r['ddate'] ."</td>
			<td>". $r['amount']." </td>
			<td>". $r['advance']." </div></tr></div>
			</div><tbody>";
		}
		echo "</table>";
		
	} 
	else
	{
		echo "<h2> customer name is not found <h2>";
	}
}



?>

</body>
</html>