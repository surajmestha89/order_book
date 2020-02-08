

<html>
<head> <title> order book</title>
</head>
<body class="bg-light">
	
<div class="bg-dark text-white pl-5 pb-3 pt-2"><b> <h2>  REGISTER  NEW ORDER </h2><b></div>

<div class="container mt-4">
<form method="post" action="insert.php" >
	<div class="form-group ">
		
<label id="nam"> NAME:</label><input   class="form-control-sm" type="text" name="name"  placeholder="customer name"  id="nam"required>
</div>
<div class="form-group ">
PLACE:<input class="form-control-sm" type="text" placeholder="place" name="place">
</div>
<div class="form-group">
MOBILE NO:<input id="mo" onfocusout="fun(this)"class="form-control-sm"  placeholder="mobile no" type="text" name="mob">
 </div> 
 <div class="form-group">     
BOAT NAME:<input class="form-control-sm" type="text" placeholder="boat name" name="bname">
</div>
<div class="form-group">
MODEL:<select class="form-control-sm" name="model" > 
					<optgroup  class="bg-light"label="* BOAT">
					<option  class="list-group-item "value="sada" >SADA</option>
					<option class="list-group-item" value="disco" >DISCO</option>
					</optgroup>
					<optgroup  class="bg-light"label="* GILNET">
					<option class="list-group-item" value="small" >small</option>
				</optgroup>
			</select> </div>	
			<div class="form-group">
WEIGHT:<input class="form-control-sm" type="number" placeholder="kg" name="kg">
			</div>
			<div class="form-group">
ORDER-DATE:  <input onmouseover="dat(this)"  type="date" name="odate"></div>
<div class="form-group">
DUE-DATE:<input  type="date" name="ddate"></div>
<div class="form-group">
ADVANCE:<input  class="form-control-sm" type="number" name="adv" placeholder="ADVANCE"></div>
<div class="form-group">
PRICE:<input class="form-control-sm" type="number" name="price" placeholder="price ">
</div>
<div class="form-group">
<label class="bg-light text-pink "> <b>STATUS :</b> </label> 	<input type="radio" value="PAID" name="status"> PAID. 
							<input type="radio" value="UNPAID" name="status">UNPAID.
							<input type="radio" value="PARTIALI" name="status">PARTIAL.
							


	</div>		<br>
<button class="  btn btn-danger btn-mg" type="reset"> <b>RESET</b></button>
<!--div class=" col-sm-2 "-->
 <button class=" btn btn-success btn-mg" type="submit"><b>SUBMIT</b></button>
</div>
</form>
</div>
</div>
<script type="text/javascript">
	//alert('hello');
	function fun(x)
	{
	var r=x.value;
	r=r.trim();
		var v=r.length;
		if(v!=10)
		{
			x.style.background='#ff6666';
	
		}
	}

	function dat(x)
	{
		var d= new Date().toISOString().substr(0,10);
		x.value=d;
	}

	
</script>
</body>
</html>


<?php   include 'conn.php'?>