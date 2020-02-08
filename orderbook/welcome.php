<?php include 'conn.php';
?>
<html>
<head><title> welcome to the page</title>
	<meta  name="viewport" http-equiv="refresh"  content="10">
	
	</head>
<body > 
	<nav class="nav navbar-expand-sm navbar-dark bg-dark pb-3 pt-3  ">
		<a class="navbar-brand pl-5 pr-4 " href="#"><b> GM INDUSTRY</b></a>
		<ul class="navbar-nav">
			<li class="nav-item pr-3"><a class="nav-link" href="welcome.php"> home</a></li>
			<li class="nav-item pr-3"><a class="nav-link" href="reg.php"> orders</a></li>
			<li class="nav-item pr-3"><a class="nav-link" href="display.php"> list</a></li>
			<li class="nav-item pr-3"><a class="nav-link" href="search.php"> search</a></li>
		
		</ul>
	</nav>
			

<div class=" container ">
 <h1 class="txt-info "> welcome to the order page<h1><hr>
<div>
<p class="font-weight-light"> This is the board order register  web appliction page, below mention link is do some specific operations</p>	
<ul>
 	<li>BOAT ORDER<a class="link-info"  href="display.php">LIST</a></li>
 	<li>BOAT ORDER<a class="link-danger"   href="search.php">SEARCH</a></li>

 	</ul>
 	<ul>
<li> GILNET ORDER<a  class="link-info"  href="small/sdisplay.php">LIST</a><br>
 <li>GILNET ORDER<a  class="link-warning" href="small/ssearch.php">SEARCH</a><br>
</ul>
<a class=" btn btn-primary text-center btn-md" href="reg.php"> REGISTER</a>
 
</dir>
</div>

  </dir>
</div>
</body>
</html>


