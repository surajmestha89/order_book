
<?php   include 'sconn.php'; ?>
<html>
<head><title>list of entry data</title>

</head>

<body>
	<nav class="nav navbar-expand-sm navbar-dark bg-dark pb-3 pt-3  ">
		<a class="navbar-brand pl-5 pr-4 " href="#"><b> GM INDUSTRY</b></a>
		<ul class="navbar-nav">
			<li class="nav-item pr-3"><a class="nav-link" href="http://localhost/orderbook/welcome.php"> home</a></li>
			<li class="nav-item pr-3"><a class="nav-link" href="http://localhost/orderbook/reg.php"> orders</a></li>
			<li class="nav-item dropdown pr-3 pt-2 text-secondary">
				<a class=" textdropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" >
					display
				</a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="#"><b>Boat</b></a>
					<a class="dropdown-item" href="http://localhost/orderbook/display.php">Order list</a>
					<a class="dropdown-item" href="http://localhost/orderbook/search.php">search</a>
					
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#"><b>Gilnet<b></a>
					
					<a class="dropdown-item" href="sdisplay.php">ORDER LIST</a>
					<a class="dropdown-item" href="ssearch.php">Search</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="http://localhost/orderbook/bpricing.php">board-price</a>
					

				</div>

				</div>
			</li>
			<li class="nav-item pr-3 dropdown pr-3 pt-2 text-secondary">
				<a class="textdropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"> <?php echo $user; ?></a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
					<a class="dropdown-item" href="http://localhost/orderbook/logout.php">logout</a>
					
				</div>
		</ul>
	</nav>
	<div class="container-fluid">
		<div class="bg-light text-secondary text-center pb-3 pt-2"><b> <h2> GILNET ORDER LIST</h2><b></div>

			<table class="table table-hover table-strip pt-3">
				<thead class="table-info text-dark">
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
						<th>status</th>
						<th colspan="2">operation</th>
					</tr>
				</thead>

				<?php


				
				$sql= "select * from boards";
				$result= $con->query($sql);
				if ($result->num_rows > 0) {
    // output data of each row
					while($row = $result->fetch_assoc()) {

						?><tbody><tr><?php  
						echo  "<td>".$row["id"].
						" </td> <td>".$row["name"].
						" </td><td> ".$row["place"].
						" </td> <td>".$row["mob"].
						"</td><td class='text-success'>".$row["bname"].
						"</td><td>".$row["model"].
						" </td> <td>".$row["weight"].
						" </td><td> ".$row["odate"].
						" </td> <td>".$row["ddate"].
						"</td><td class='text-warning'>".$row["amount"].
						"</td><td class='text-danger'>".$row["advance"].
						"</td><td>".$row["status"].
						" </td><td>".
						"<a class='btn btn-info' href='http://localhost/orderbook/edit.php?id=$row[id]&name=$row[name]&place=$row[place]&mob=$row[mob]&bname=$row[bname]&model=$row[model]&weight=$row[weight]&odate=$row[odate]&amount=$row[amount]&adv=$row[advance]&status=$row[status]'> edit</a>"."
					</td><td> <a  onclick='fun()' class='btn btn-danger' href='http://localhost/orderbook/delete.php?id=$row[id]&model=$row[model]'> delete</a></td> ";?> </tr></tbody>
					<?php

				}
			}

			else {
				echo "0 results";
			}
			echo "</table>";
//con->close()

			?>
		</table> <hr>
	</div>
	<script type="text/javascript">
		function fun()
		{
			confirm("press  OK to Delete user");
		}
	</script>
</body>
</html>