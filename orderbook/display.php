<html>
<head><title>list of entry data</title>

</head>

<body>
<div class="container-fluid">
	<div class="bg-dark text-white text-center pb-3 pt-2"><b> <h2> BOAT ORDER LIST</h2><b></div>
<table class="table table-hover table-strip">
	<thead class="table-dark">
 <tr >
 <th>order no</th>
 <th>name</th>
 <th>place</th>
 <th>mobile</th>
 <th>boat name</th>
 <th> model </th>
 <th>weight</th>
 <th>Oder-date</th>
 <th>Due_Date</th>
 <th>Price </th>
 <th>Advance</th>
 <th>status</th>
 <th colspan="2">operation</th>
 </tr>
</thead>
  
<?php


include 'conn.php';
$sql= "select * from boardk";
$result= $con->query($sql);
   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
     ?><tbody><tr><?php  
	 echo  "<td>".$row["id"].
	 " </td> <td>".$row["name"].
	 " </td><td> ".$row["place"].
	 " </td> <td>".$row["mob"].
	 "</td><td class='text-success'>".$row["bname"].
	 "</td><td>".$row["model"].
	 " </td> <td>".$row["weight"].
	 " </td><td> ".$row["odate"].
	 " </td> <td>".$row["ddate"].
	 "</td><td class='text-warning'>".$row["amount"].
	 "</td><td class='text-danger'>".$row["advance"].
	 "</td><td>".$row["status"].
	 " </td><td>".
	 "<a class='btn btn-info' href='http://localhost/orderbook/edit.php?id=$row[id]&name=$row[name]&place=$row[place]&mob=$row[mob]&bname=$row[bname]&model=$row[model]&weight=$row[weight]&odate=$row[odate]&amount=$row[amount]&adv=$row[advance]&status=$row[status]'> edit</a>"."
	 </td><td> <a  onclick='fun()' class='btn btn-danger' href='http://localhos/orderbook/delete.php?id=$row[id]'> delete</a></td> ";?> </tr></tbody>
	<?php
		
    }
}

 else {
    echo "0 results";
}
echo "</table>";
//con->close()

?>
</table><hr>
</div>
<script type="text/javascript">
	function fun()
	{
		confirm("press  OK to Delete user");
	}
</script>
</body>
</html>