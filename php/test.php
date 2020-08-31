<html>
<body>
<form method = "post" action = "test.php" enctype = "multipart/form-data">
<?php
$con = mysqli_connect("localhost","root","","notices");
include("dbconnectnotice.php");
$check=1;
$sql = "select * from notice";
$rs = mysqli_query($con,$sql);
$num_rows = mysqli_num_rows($rs);
echo "<table>";
while($row = mysqli_fetch_array($rs))
{
	echo "<tr>";
	echo "<td>$row[0]</td><td>$row[1]</td><td><input type='submit' id = 'he' name = $check value = 'show'/></td>";
	echo "<tr>";
	$check++;
}
echo "</table>";
$check=0;
while($check<=$num_rows)
{
	if(isset($_POST[$check]))
	{
		session_start();
		$_SESSION["ID"]=$check;
		header("location:print_notice.php");
	}
	$check=($check+1);
}
?>
</body>
</html>