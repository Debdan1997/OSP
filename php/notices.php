<html>
	<head>
		<title>NOTICE</title>
		<meta charset="utf-8">
		<style>
		body 
		{
			background-image: url('notice.jpg');
			background-size:cover;
		}
		</style>
	</head>
	<body style='height:auto'>
		<form method = "post" action = "test.php" enctype = "multipart/form-data">
		<h1 style="color:#0B2856;text-align:center;padding-top:8%"><u> NOTICES </u></H1>
		<?php
		include("dbconnectnotice.php");
		$check=1;
		$sql = "select * from notice";
		$rs = mysqli_query($con,$sql);
		$num_rows = mysqli_num_rows($rs);
		echo "<table cellpadding ='15' style='border-spacing:100px 5px;margin:0px auto;align:center'>";
		
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