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
<label> NAME:</label><input   class="form-control-sm" type="text" name="name"  value="<?php echo $_GET['name']; ?>" disable>
</div>
<div class="form-group">
PLACE:<input class="form-control-sm" type="text" name="place"value="<?php echo $_GET['place']; ?>">
</div>
<div class="form-group">
MOBILE NO:<input class="form-control-sm" type="tel" name="mob"value="<?php echo $_GET['mob']; ?>">
 </div> 
 <div class="form-group">     
BOAT NAME:<input class="form-control-sm" type="text" name="bname"value="<?php echo $_GET['bname']; ?>">
</div>
<div class="form-group">
MODEL:<select class="form-control-sm" name="model" value="<?php echo $_GET['model']; ?>"> 
					
					<option  class="list-group-item text-"value="sada" >sada</option>
					<option class="list-group-item" value="disco" >disco</option>
					
			</select> </div>	
			<div class="form-group">
WEIGHT:<input class="form-control-sm" type="number" name="kg"value="<?php echo $_GET['weight']; ?>">
			</div>
		
<div class="form-group">
ADVANCE:<input  class="form-control-sm" type="number" name="adv"value="<?php echo $_GET['adv']; ?>"></div>
<div class="form-group">
PRICE:<input class="form-control-sm" type="number" name="price"value="<?php echo $_GET['amount']; ?>">
</div>
<div class="form-group">
<label class="bg-light "> <b>STATUS :</b> </label> 	<input type="radio" value="PAID" name="status"> PAID. 
							<input type="radio" value="UNPAID" name="status">UNPAID.
							<input type="radio" value="PARTIALI" name="status">PARTIAL.
							


	</div>		<br>

			

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
$status=$_POST['status'];
if(empty($_POST['adv']))
{
	$adv=0;
}


	$sql= "UPDATE boards set name='$name',place='$place', mob='$mob', bname='$bname', model='$model', weight='$weight', amount='$price', advance='$adv',status='$status' WHERE id='$i'";

	if($con->query($sql))
	{
		echo "<div class='alert alert-warning' role='alert'> UPDATED SUCCESSFULY</div>"; 
	}

	
	
}








?>