<div class="container mt-5">
 <h2> forrget password</h2>
	<form method="post">
		<label> email</label> <input type="email" name="email">
		<button class="btn btn-warning" value="submit" name='submit'>submit</button> 
	</form>
	
</div>

<?php 
 include 'conn.php';
echo "<div class='container'>";
if(isset($_POST['submit']))
{
	if ($_SERVER["REQUEST_METHOD"]=='POST') 
	{

		$email=$_POST['email'];
		$sql="select * from login where email='$email' ";
		$res=$con->query($sql);
		if($res->num_rows>0)
		{
			if($r=$res->fetch_array())
			{
			 echo " username :<b>".$r['email'] ."</b><br>
			 your password :<b>".$r['password']."</b>";		
			}

		
		}
		else {
			     echo "* invalid email";
			}	

	}
}
?>
