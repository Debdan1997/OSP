<html>
	<head>
		<meta charset="utf-8">
		<title>
			HOLIDAYS
		</title>
		<style>
		body 
		{
			background-image: url('holiday.jpg');
			background-size:cover;
		}
		</style>
	</head>
	<body style="background-color:#B5B8BC">
		<div style="background-color:#FCF9F9;width:1000px;margin:0px auto;height:auto">
			<h1 style="color:#0B2856;text-align:center;padding-top:2%"><u> HOLIDAYS </u></H1>
			<?php
			include("dbconnectnotice.php");
			$sql = "select * from holidays";
			$rs = mysqli_query($con,$sql);
			echo "<table border='5' cellpadding ='40' cellspacing = '5' style='margin:0px auto;align:center'>";?>
				<tr>
					<td align="center"><b>Sl no</b></td><td align="center"><b>Date</b></td><td align="center"><b>Day</b></td><td align="center"><b>Ocassion</b></td>
				</tr>
			<?php
			while($row = mysqli_fetch_array($rs))
			{
				echo "<tr>";
				echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
				echo "<tr>";
			}
			echo "</table>";
		?>
		</div>
	</body>
</html>