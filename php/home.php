<html>
	<head>
	<title>PRINT NOTICE</title>
	<meta charset="utf-8">
		<style>
		body 
		{
			background-image: url('books.jpg');
			background-size:cover;
		}
		</style>
	</head>
<body>
<?php

	session_start();
	if(isset($_SESSION["userst"]))
	{
		$std = $_SESSION["userst"];
		include("dbconnectnotice.php");
		$sql="select * from students where ID='". $std ."'";
		$rs=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($rs);
		$img="C:/xampp/htdocs/projects".$row[2];?>
		
		<div style="background-color:white;width:1000px;margin:0px auto;height:auto;padding-bottom:5%%">
		<div style="text-align:center;color:#393B3F;font-family:Comic Sans MS;padding-top:2%"><h1><b>STUDENT'S INFO</b><h1></div>
		<?php //echo "<div style='height:100px;width:100px'>";
		//echo "<div style='padding-left:66%;padding-top:1%'>";
		//echo "<img src='$row[2]' alt='cant display'>";
		//echo "</div>";
		//echo "</div>";
		?>
		<?php
		echo "<div style='padding-top:1%'>";
		echo "<table frame='box' cellpadding='7' style='padding-top:1%;padding-bottom:1%;border-spacing:50px 5px;margin:0px auto;align:center'>";
			echo "<tr>";
			echo "<td colspan='4' align='center'><img src='$row[2]' alt='cant display'></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td  colspan='2'><b>STUDENT ID</b></td><td align='center'colspan='2'>$row[0]</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td  colspan='2'><b>NAME</b></td><td align='center' colspan='2'>$row[1]</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td  colspan='2'><b>GUARDIAN'S NAME</b></td><td align='center' colspan='2'>$row[5]</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td  colspan='2'><b>CONTACT</b></td><td align='center' colspan='2'>$row[4]</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td  colspan='2'><b>EMAIL</b></td><td align='center' colspan='2'>$row[3]</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td ><b>STREAM</b></td><td align='center'>$row[6]</td><td ><b>YEAR</b></td><td align='center'>$row[7]</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td ><b>SECTION</b></td><td align='center'>$row[8]</td><td ><b>ROLL</b></td><td align='center'>$row[9]</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td ><b>GRADES</b></td><td align='center'>$row[10]</td><td><b>ATTENDANECE</b></td><td align='center'>$row[11]</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan='2'><b>ADMISSION YEAR</b></td><td align='center'colspan='2'>$row[13]</td>";
			echo "</tr>";
			
		echo "</table>";
		echo "</div>";
			
	}
	else
		header("location:logout.php");


?>
<center>
<div style="padding-top:1%;padding-bottom:5%">
<a href="logout.php">Log Out</a>
</div>
</center>
</body>
</html>