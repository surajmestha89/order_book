

<html>
<head> <title> order book</title>
<style>
h1{
	color:blue;
}
div{
	
		padding: 25px;
		margin:auto;
		text-align:center;
	}
	input{
		 margin:12px;
	}
 
	
	
</style>
</head>
<body>
<h1 style="text-align:center"> NEW ORDER</h1> <hr>
<div>
<form method="post" action="insert.php">
NAME:<input  id="i" type="text" name="name" required>
<br>
PLACE:<input type="text" name="place">
<br>
MOBILE NO:<input type="number" name="mob"><br>
       
BOAT NAME:<input type="text" name="bname"><br>
MODEL:<select name="model"> 
					
					<option value="sada" >sada</option>
					<option value="disco" >disco</option>
					<option value="small" >small</option>
			</select> <br>
WEIGHT:<input type="number" name="kg">
			<br>
ORDER-DATE:<input type="date" name="odate"><br>
DUE-DATE:<input type="date" name="ddate"><br>
ADVANCE:<input type="number" name="adv"><br>
PRICE:<input type="number" name="price">
<br>

			
<button type="reset"> reset</button><br>
 <input type="submit" value="submit">

</form>
</div>
</body>
</html>


<?php   /* <br>
		<input type="radio" name="geder" value="femel"> female <br>
		<input type="radio" name="geder" value="male">male <br>
		<input type="radio" name="geder" value="other">other
		<br>*/?>