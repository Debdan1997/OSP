<html>
<head>
	<title>NOTICE</title>
		<meta charset="utf-8">
		<style>
		body 
		{
			background-image: url('exam.jpg');
			background-size:cover;
		}
		</style>
	</head>
	<body style='padding-top:10%'>
	<div style='align:center;margin:0px auto;padding-bottom:10%;width:1000px;height:auto;background-color:white;'>
	<div style='text-align:center;color:#07224F;padding-top:5%'><h1><u>EXAMS</u></h1></div>
	<?php
		include("dbconnectnotice.php");
		$sql = "select * from exams order by Date ASC";
		$rs = mysqli_query($con,$sql);
		echo "<table cellpadding ='25' cellspacing = '5' style='margin:0px auto;align:center'>";?>
			<tr>
			<td><b>ID</b></td><td><b>DATE</b></td><td><b>YEAR</b></td><td><b>STREAM</b></td><td><b>PAPER NAME</b></td><td><b>TIME</b></td>
			</tr>
		<?php
		while($row = mysqli_fetch_array($rs))
		{
			echo "<tr>";
			echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td>";
			echo "<tr>";
		}
		echo "</table>";
	?>
	</div>
	</body>
</html>