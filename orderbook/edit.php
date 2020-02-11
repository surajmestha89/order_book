<?php  

$i=$_GET['id'];
include 'conn.php';
?>

<html>
<head> <title> alter form</title>
</head>
<body >
	<nav class="nav navbar-expand-sm navbar-dark bg-dark pb-3 pt-3  ">
		<a class="navbar-brand pl-5 pr-4 " href="#"><b> GM INDUSTRY</b></a>
		<ul class="navbar-nav">
			<li class="nav-item pr-3"><a class="nav-link" href="welcome.php"> home</a></li>
			<li class="nav-item pr-3"><a class="nav-link" href="reg.php"> orders</a></li>
			<li class="nav-item dropdown pr-3 pt-2 text-secondary">
				<a class=" textdropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" >
					display
				</a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="#"><b>Boat</b></a>
					<a class="dropdown-item" href="display.php">Order list</a>
					<a class="dropdown-item" href="search.php">search</a>
					
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#"><b>Gilnet<b></a>
					
					<a class="dropdown-item" href="small/sdisplay.php">ORDER LIST</a>
					<a class="dropdown-item" href="small/ssearch.php">Search</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="http://localhost/orderbook/bpricing.php">board-price</a>
					

				</div>
				</div>
			</li>
			<li class="nav-item pr-3 dropdown pr-3 pt-2 text-secondary">
				<a class="textdropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"> <?php echo $user; ?></a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
					<a class="dropdown-item" href="http://localhost/orderbook/logout.php">logout</a>
					
				</div></ul>
	</nav>
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
				<label> model:</label><input   class="form-control-sm" type="text" name="model"  value="<?php echo $_GET['model']; ?>" >
			</div>
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


	<?php 
	$table="";
 

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

		if($model !="small")
		{

			$table= 'boardk';
		}
		else
		{
			$table= 'boards';
		}
		$sql= "UPDATE $table set name='$name',place='$place', mob='$mob', bname='$bname', model='$model', weight='$weight', amount='$price', advance='$adv',status='$status' WHERE id='$i'";

		if($con->query($sql))
		{
			echo "<div class='alert alert-warnig' role='alert'> UPDATED SUCCESSFULY</h2>"; 
		}
		
		
		
	}








	?>