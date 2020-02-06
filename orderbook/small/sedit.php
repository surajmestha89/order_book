<?php  

$i=$_GET['id'];


?>

<html>
<head> <title> alter form</title>
</head>
<body  class="bg-light">
	<div class="container">
<h1 class="text-info"> EDIT THE FORM</h1> <hr>
<form method="post">
	<div class="form-group">
<label> NAME:</label><input   class="form-control" type="text" name="name" required>
</div>
<div class="form-group">
PLACE:<input class="form-control" type="text" name="place">
</div>
<div class="form-group">
MOBILE NO:<input class="form-control" type="tel" name="mob">
 </div> 
 <div class="form-group">     
BOAT NAME:<input class="form-control" type="text" name="bname">
</div>
<div class="form-group">
MODEL:<select class="form-control" name="model"> 
					
					<option  class="list-group-item text-"value="sada" >sada</option>
					<option class="list-group-item" value="disco" >disco</option>
					<option class="list-group-item" value="small" >small</option>
			</select> </div>	
			<div class="form-group">
WEIGHT:<input class="form-control" type="number" name="kg">
			</div>
		
<div class="form-group">
ADVANCE:<input  class="form-control" type="number" name="adv"></div>
<div class="form-group">
PRICE:<input class="form-control" type="number" name="price">
</div>

			

 <button class="btn btn-warning   btn-lg" type="submit" name="btn"><b>UPDATE</b></button>
</form>

</div>
</div>
<script type="text/javascript">
	document.writer(" UPDATED SUCCESSFULY")
</script>
</body>
</html>


<?php   include 'sconn.php';

if(isset($_POST['btn']))
{
	$name=  $_POST['name'];
$place=  $_POST['place'];
$mob=  $_POST['mob'];
$model=  $_POST['model'];
$bname= $_POST['bname'];
$weight=  $_POST['kg'];
$adv=  $_POST['adv'];
$price= $_POST['price'];

if(empty($_POST['adv']))
{
	$adv=0;
}


	$sql= "UPDATE boards set name='$name',place='$place', mob='$mob', bname='$bname', model='$model', weight='$weight', amount='$price', advance='$adv' WHERE id='$i'";

	if($con->query($sql))
	{
		echo "<h2> UPDATED SUCCESSFULY</h2>"; 
	}

	header("Refresh: 5; url=http://localhost/orderbook/display.php");

	
}








?>