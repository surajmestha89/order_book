<?php 
$email="";
$psd="";
$for=""; 
include 'conn.php';
echo "<div class='container'>";
if(isset($_POST['submit']))
{
	if ($_SERVER["REQUEST_METHOD"]=='POST') 
	{

		$email=$_POST['email'];
		$psd=$_POST['psd'];
		$sql="select * from login where email='$email' and password='$psd'";
		$res=$con->query($sql);
		if($res->num_rows>0)
		{
			if($r=$res->fetch_array())
			{
				$_SESSION['name']=$r['name'];

			header('Location: welcome.php');	
			}

		
		}
		else {
			$email="* invalid username";	
			$psd="* invalid password";	
			$for="forget password";
			}	

	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body style="background-image: url(background.jpg);">
	<div class="container ">
		<h2 class="text-secondary pb-5"> Login Page</h2>
		

		</div>
		<div >
			<form  class="form-group" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<div class="pb-3">
					<label for="id">usernmar </label><input  placeholder="username" class="form-control-sm ml-2"type="text" name="email" id="id" onfocusout="f()">
					<?php echo "<p class='text-danger'>".$email."</p>"; ?>
				</div>
				<div class="form-group  mb-3">
					<label for="psw">password</label><input class="form-control-sm ml-2" placeholder="password" type="password" name="psd" id="psw"> 
					<?php echo "<p class='text-danger'>".$psd."</p>";?>

				</div>
				<?php echo "<a class='text-dark' href='forrget.php'><b>".$for."</b></a>"; ?>
				<br>
				<div class="row"> 	
				<button class="btn btn-primary btn-sm  ml-4 mr-3"  name="submit">submit</button>
				<a class="btn btn-success btn-sm " href="signup.php"> signup</a>
				</div>

			</form> 
		</div>
	</div>
	<script type="text/javascript">
		function f() {
			var y=document.getElementById("id").value;
			if(y==0)
			{
				alert("enter the username");
			}
		}


	</script>
</body>
</html>


