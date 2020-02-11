<?php include 'conn.php';

?>
<html>
<head><title> welcome to the page</title>
	<meta  name="viewport"   content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
	
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
			<li  class="nav-item pr-3 dropdown pr-3 pt-2 text-secondary">
				<a ondblclick="clik()" class="textdropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"> <?php echo $user; ?></a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
					<a class="dropdown-item" href="http://localhost/orderbook/logout.php">logout</a>
					
				</div>

			</li>



		</ul>
	</nav>


	<div class= "container ">
		<h1 class="txt-info "> welcome to the order page <h1><hr>

			<div>
				<p class="font-weight-light"> This is the board order register  web appliction page, below mention link is do some specific operations</p>	
				
						
					</div>

				</div>
				<script type="text/javascript">
					function clik()
					{
						location.replace("http://localhost/orderbook/login.php")
					}
				</script>
    </body>
</html>


