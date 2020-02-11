                       
<?php 

include'conn.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
	$name=  $_POST['name'];
	$place=  $_POST['place'];
	$mob=  $_POST['mob'];
	$model=  $_POST['model'];
	$bname= $_POST['bname'];
	$weight=  $_POST['kg'];
	$odate=  $_POST['odate'];
	$ddate=  $_POST['ddate'];
	$adv=  $_POST['adv'];
	$price= $_POST['price'];
	$status= $_POST['status'];
}

if(empty($_POST['adv']))
{
	$adv=0;
}
if($_POST['model']=="small")
{

	$table_name= 'boards';
}
else
{
		$table_name= 'boardk';
}

	$sql ="SELECT id FROM $table_name";
	$res=$con->query($sql);
	if($res->num_rows>0)
	{
		while($r=$res->fetch_assoc())
			$idd= $r['id'];
	}	
	$idd++;

	$sql="INSERT INTO $table_name (`id`, `name`, `place`, `mob`, `bname`, `model`, `weight`, `odate`, `ddate`, `amount`, `advance`,`status`) VALUES('$idd','$name','$place','$mob','$bname','$model','$weight','$odate','$ddate','$price','$adv','$status')";
	if($con->query($sql)==true)
	{
		echo "order is Registed customer name:   ".$name;	
	}
	else {
		echo "faile".$con->error;
	}
 $table_name="";
header("Location:welcome.php");
?>
