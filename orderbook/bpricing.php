<?php  
include 'conn.php';
?>

<html>
<head> <title> board price</title>
</head>
<body >
	<nav class="nav navbar-expand-sm navbar-dark bg-dark pb-3 pt-3  ">
		<a class="navbar-brand pl-5 pr-4 " href="#"><b> MESTA INDUSTRY</b></a>
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
			</li>
			<li class="nav-item pr-3 dropdown pr-3 pt-2 text-secondary">
				<a class="textdropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"> <?php echo $user; ?></a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
					<a class="dropdown-item" href="http://localhost/orderbook/logout.php">logout</a>
					
				</div></ul>
	</nav>
	<div class="container">
		<h1 class="text-info"> board price </h1> <hr>
		<div class="row">
			<div class="col-5">
		<form method="post">
			<div class="form-group">
				MODEL:<select class="form-control-sm" name="model"> 
					
					<option  class="list-group-item text-"value="sada" >sada</option>
					<option class="list-group-item" value="disco" >disco</option>
					
				</select> <p class="text-secondary">* manditory</p> </div>	
			<div class="form-group">
				width:<input class="form-control-sm" type="float" name="width" placeholder="inch">
			</div>
			<div class="form-group">
				height:<input class="form-control-sm" type="float" name="height" placeholder="inch">
			</div> 
			<div class="form-group">     
				weight:<input class="form-control-sm" type="number" name="kg" placeholder="kg">
			</div>
			<div class="form-group">
						PRICE:<input class="form-control-sm" type="number" name="price" placeholder="Rs">
					</div>
					
					

					<button class="btn btn-success   btn-lg" type="submit" name="btn"><b>UPDATE</b></button>
					<button class="btn btn-info   btn-lg" type="submit" name="dis"><b>price list</b></button>
					
				</form>

			</div>
		
	


	<?php  

	if(isset($_POST['btn']) )
	{
		$model=  $_POST['model'];
		$width=  $_POST['width'];
		$height=  $_POST['height'];
		$kg=  $_POST['kg'];
		$price= $_POST['price'];
		$sql= "insert into $model (width,height,weight,amount) values('$width','$height','$kg','$price')";

		if($con->query($sql))
		{
			echo "<div class='container'><h2> UPDATED SUCCESSFULY</h2></div>"; 
		}
		else
			echo "faile".$con->error;		
	}


     if (isset($_POST['dis'])) 
     {
     
     $model=$_POST['model'];
     $sql=" select * from $model";
     $res=$con->query($sql);
     if ($res->num_rows>0) {
     	$r=1;
     	echo "<div class='col-5 font-weight-normal'>
     			<h3 class='text-capitalize'>Board price *$model board</h3>
     			<table class='table table-bordered table-hover table-strip'>
     			<thead class='table-secondary'>
					<tr>
						<th> no </th>
						<th>width</th>
						<th>height</th>
						<th>weight</th>
						<th>Price </th>
					</tr>
				</thead>";
		while ($row=$res->fetch_assoc()) 
     	{
     		
     		 echo  "<tbody>
     		 		<tr>
     		 		<td>".$r++." </td>
     		 		 <td >".$row["width"]." inch </td>
     		 		 <td> ".$row["height"]." inch </td> 
     		 		  <td>".$row["weight"]."kg</td>
     		 		 <td class='text-primary'>Rs." . $row['amount']."</td>
     		 		 </tr>";
     		 		 
     	}
     	echo "</tbody>
     		  </table>
     		  </div>";
     }
     else
     	echo "is empty";

	}

	?>
</div> 
</div>
	</body>
	</html>