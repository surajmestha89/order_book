 <?php
 include'conn.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
$name=$_POST['name'];
$place=$_POST['place'];
$mob= $_POST['mob'];
$model=$_POST['model'];
$bname=$_POST['bname'];
$weight=$_POST['kg'];
$odate=$_POST['odate'];
$ddate=$_POST['ddate'];
$adv=$_POST['adv'];
$price= $_POST['price'];
}
echo $name ." ".$mob;
?>