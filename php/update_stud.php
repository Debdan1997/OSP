<html>
	<head>
	<title>UPDATE STUDENT</title>
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
	if(isset($_SESSION["use"]))
	{
		$std = $_SESSION["use"];
		//echo "done";
		include("dbconnectnotice.php");
		$sql="select * from students where ID='". $std ."'";
		$rs=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($rs);
		if($row)
		{
			$img="C:/xampp/htdocs/".$row[2];?>
			
			<div style="background-color:white;width:1000px;margin:0px auto;height:auto%">
			<div style="text-align:center;color:#393B3F;font-family:Comic Sans MS;padding-top:2%"><h1><b>STUDENT'S INFO</b><h1></div>
			<?php
			echo "<div style='padding-top:1%'>";
			echo 	"<form method='post' action='update_stud.php'>";
			echo 		"<table frame='box' cellpadding='7' style='padding-top:1%;padding-bottom:1%;border-spacing:50px 5px;margin:0px auto;align:center'>";
			echo 			"<tr>";
			echo 			"<td colspan='4' align='center'><img src='$row[2]' alt='cant display'></td>";
			echo 			"</tr>";
			echo 			"<tr>";
			echo 			"<td  colspan='2'><b>STUDENT ID</b></td><td align='center' colspan='2'>$row[0]</td>";
			echo 			"</tr>";
			echo 			"<tr>";
			echo 			"<td  colspan='2'><b>NAME</b></td><td align='center' colspan='2'>$row[1]</td>";
			echo 			"</tr>";
			echo 			"<tr>";
			echo 			"<td  colspan='2'><b>GUARDIAN'S NAME</b></td><td align='center' colspan='2'>$row[5]</td>";
			echo 			"</tr>";
			echo 			"<tr>";
			echo 			"<td  colspan='2'><b>CONTACT</b></td><td align='center' colspan='2'>$row[4]</td>";
			echo 			"</tr>";
			echo 			"<tr>";
			echo 			"<td  colspan='2'><b>EMAIL</b></td><td align='center' colspan='2'>$row[3]</td>";
			echo 			"</tr>";
			echo 			"<tr>";
			echo 			"<td ><b>STREAM</b></td><td align='center'>$row[6]</td><td ><b>YEAR</b></td><td align='center'>$row[7]</td>";
			echo 			"</tr>";
			echo 			"<tr>";
			echo 			"<td ><b>SECTION</b></td><td align='center'><input type='text' name='section'></td><td ><b>ROLL</b></td><td align='center'><input type='number' name='roll'></td>";
			echo 			"</tr>";
			echo 			"<tr>";
			echo 			"<td ><b>GRADES</b></td><td align='center'><input type='text' name='grades'></td><td><b>ATTENDANECE</b></td><td align='center'><input type='text' name='attendance'></td>";
			echo 			"</tr>";
			echo 			"<tr>";
			echo 			"<td colspan='2'><b>ADMISSION YEAR</b></td><td align='center'colspan='2'>$row[13]</td>";
			echo 			"</tr>";
			echo 			"<tr>";
			echo			"<td colspan='2' align='center'><input type='submit' name='btn' value='Update'></td><td colspan='2' align='center'><input type='submit' name='btn2' value='Back'></td>";
			echo 			"</tr>";
			echo 		"</table>";
			echo 	"</form>";
			echo "</div>";
		}
		else
		{
			echo "can't display";
		}
	}
	else
		echo "cant";
	if(isset($_POST["btn"]))
	{
		//$user=$_SESSION["user"];
		$section=$_POST["section"];	
		$roll=$_POST["roll"];	
		$grades=$_POST["grades"];
		$attendance=$_POST["attendance"];
		//echo "$section $roll $grades $attendance";
		$sql="update students set Section='" .$section . "',Roll=" .$roll . ",Grades='" .$grades . "',Attendance='" . $attendance . "' where ID = '" . $std . "'";
		//$sql="update student_info set sid='s007' where sid='". $sid. "'";
		$n=mysqli_query($con,$sql);
		if($n==1)
			echo "<div style='text-align:center;padding-bottom:2%'>student record updated successfully!</div>";
	}
	if(isset($_POST["btn2"]))
	{
		unset($_SESSION["use"]);
		header("location:staffhome.php");
	}
?>
	</body>
</html>