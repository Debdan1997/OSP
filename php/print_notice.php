<html>
<head>
	<title>PRINT NOTICE</title>
		<meta charset="utf-8">
		<style>
			body 
			{
				background-image: url('notice1.jpg');
				background-size:cover;
			}
		</style>
	</head>
	<body>
		<?php
		session_start();
		$id = $_SESSION["ID"];
		//echo "$id";
		include("dbconnectnotice.php");
		$sql="select * from notice where ID='" . $id . "'";
		echo "<div style='text-align:center;color:white;padding-top:10%'><h1>NOTICE</h1></div>";
		$rs=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($rs);
		if($row)
		{
			echo "<p style='text-align:center;color:white;padding-top:5%'><b>$row[2]</b></p>";
		}	
		else
			echo "invalid id";
		?>
	</body>
</html>