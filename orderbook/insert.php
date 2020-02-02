
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
}
//echo $name ." ".$mob;
$sql ="SELECT id FROM boardk";
$res=$con->query($sql);
if($res->num_rows>0)
{
	while($r=$res->fetch_assoc())
		$idd= $r['id'];
}	
$idd++;

$sql="INSERT INTO `boardk` (`id`, `name`, `place`, `mob`, `bname`, `model`, `weight`, `odate`, `ddate`, `amount`, `advance`) VALUES('$idd','$name','$place','$mob','$bname','$model','$weight','$odate','$ddate','$price','$adv')";
if($con->query($sql)==true)
{
	echo "order is Registed customer name:   ".$name;	
}
else {
	echo "faile".$con->error;
}

?>
<a href="display.php"> display inserted</a>