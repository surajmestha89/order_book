<html>
<head><style>
table{
	margin:auto;
border: 2px solid green;
border-collapse:collapse;
}
td{ padding: 10px;}


tr:nth-child(even){background-color: #f2f2f2;}
 tr:hover {background-color: #ddd;}

th{
	background:lightblue;
color:white;
padding:12px 10px;
}
;</style>
</head>

<body>
<table>
 <tr>
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
 <th colspan="2">operation</th>
 </tr>
  
<?php


include 'conn.php';
$sql= "select * from boardk";
$result= $con->query($sql);
   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
     ?><tr><?php  
	 echo  "<td>".$row["id"].
	 " </td> <td>".$row["name"].
	 " </td><td> ".$row["place"].
	 " </td> <td>".$row["mob"].
	 "</td><td>".$row["bname"].
	 "</td><td>".$row["model"].
	 " </td> <td>".$row["weight"].
	 " </td><td> ".$row["odate"].
	 " </td> <td>".$row["ddate"].
	 "</td><td>".$row["amount"].
	 "</td><td>".$row["advance"].
	 "</td><td>".
	 "<a href='edit.php?num=$row[name]'> edit</a>"."
	 </td><td><a href='delete.php?num=$row[name]'> delete</a></td> ";?> </tr>
	<?php
		
    }
}

 else {
    echo "0 results";
}
echo "</table>";
//con->close()

?>
</table>
</body>
</html>