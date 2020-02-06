

<html>
<head> <title> order book</title>
</head>
<body  class="bg-light">
	<div class="container">
<h1 class="text-info"> NEW ORDER</h1> <hr>

<form method="post" action="insert.php" >
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
					<optgroup  class="bg-light"label="* BOAT">
					<option  class="list-group-item "value="sada" >SADA</option>
					<option class="list-group-item" value="disco" >DISCO</option>
					</optgroup>
					<optgroup  class="bg-light"label="* GILNET">
					<option class="list-group-item" value="small" >small</option>
				</optgroup>
			</select> </div>	
			<div class="form-group">
WEIGHT:<input class="form-control" type="number" name="kg">
			</div>
			<div class="form-group">
ORDER-DATE:<input value="<?php echo date("d-m-Y"); ?>"  type="date" name="odate"></div>
<div class="form-group">
DUE-DATE:<input  type="date" name="ddate"></div>
<div class="form-group">
ADVANCE:<input  class="form-control" type="number" name="adv"></div>
<div class="form-group">
PRICE:<input class="form-control" type="number" name="price">
</div>

			
<button class="btn btn-danger btn-block btn-mg " type="reset"> <b>RESET</b></button>

 <button class="btn btn-success btn-block  btn-mg" type="submit"><b>SUBMIT</b></button>


</form>
</div>
</div>
</body>
</html>


<?php   include 'conn.php'?>