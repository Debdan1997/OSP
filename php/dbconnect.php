<html>
<body>
<?php
$con = mysqli_connect("localhost","root","","notices");
if(!$con)
	die("cannot");
/*else{
	$sql = "select * from student_info";
	$rs = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($rs))
	{
		echo "<tr>";
		echo "<td>$row[0]</td>";
		echo "<tr>";
	}
	echo "</table>";
}*/
?>
</body>
</html>