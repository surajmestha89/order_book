<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
</head>
<body>
	<div class="container">
		<div>
			<h2> signup page</h2>
			<form class="form-group" method="post">
				<div class="form-control-sm">
					<label>name:</label> <input type="text" name="name">
				</div>
				<div class="form-control-sm">
					<label>email:</label><input type="email" name="email">
				</div>
				<div class="form-control-sm">
					<label>password:</label><input type="password"  name="psd">
				</div>
				<div class="form-control-sm">
					<label>confirm password:</label><input type="password" name="psdc">
				</div>
					<button  class="btn btn-primary" value="submit" name="submit">submit</button>
					<a href="login.php">click hire to login</a>
				</div>
				
			</form>

		</div>
		
	</div>

</body>
</html>
<?php include "conn.php"; 
 if(isset($_POST['submit']))
 {
 	$name=$_POST['name'];
 	$email=$_POST['email'];
 	$psd=$_POST['psd'];

 	$sql="insert into login (name,email,password) values('$name','$email','$psd')";
 	if($con->query($sql))
 	{
 		echo "<div class='container'>
 				<h5 class='text-success'>signup successfully completed $name</h5>
 				</div>";
 				sleep(3);
 				header("Location: login.php");
 	}
 	else
 		echo "signup failed ".$con->error;
 		header("refresh: 2");


 }

?>
