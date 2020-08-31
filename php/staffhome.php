<html>
	<head>
		<title>STAFF HOME PAGE</title>
		<meta charset="utf-8">
			<style>
			body 
			{
				background-image: url('staff1.jpg');
				background-size:cover;
			}
			</style>
	</head>
	<body>
		<?php
		session_start();
		if(isset($_SESSION["user"]))
		{
			$std = $_SESSION["user"];
			$pass = $_SESSION["pass"];
			include("dbconnectnotice.php");
			$sql="select * from staffs where ID='". $std ."' and Password = ". $pass ."";
			$rs=mysqli_query($con,$sql);
			$row=mysqli_fetch_array($rs);
		?>
		
		<div style="background-color:white;width:1000px;margin:0px auto;height:108%">
			<div style="text-align:center;color:#393B3F;font-family:Comic Sans MS;padding-top:2%"><h1><b>STAFF'S INFO</b><h1></div>
			<?php
				echo "<div style='padding-top:1%'>";
				echo "<table frame='box' cellpadding='2' style='padding-top:1%;padding-bottom:1%;border-spacing:50px 5px;margin:0px auto;align:center'>";
				echo 	"<tr>";
				echo 	"<td><b>STAFF NAME</b></td><td align='center'>$row[0]</td>";
				echo 	"</tr>";
				echo 	"<tr>";
				echo 	"<td><b>CONTACT</b></td><td align='center'>$row[3]</td>";
				echo 	"</tr>";
				echo "</table>";
				echo "</div>";
				echo "<div style='padding-top:1%'>";
				echo 	"<table cellpadding='7' style='padding-top:1%;padding-bottom:1%;border-spacing:50px 5px;margin:0px auto;align:center'>";
				echo 		"<form method='post' action='staffhome.php'>";
				echo 		"<tr>";
				echo 		"<td align='center'><b>CHANGE NOTICE</b></td><td align='center'><b>CHANGE EXAMS</b></td><td align='center'><b>CHANGE STUDENTS INFO</b></td>";
				echo 		"</tr>";
				echo 		"<tr>";
				echo 		"<td align='center' ><a href='notice_insert.php'>Insert notice</a></td><td align='center'><a href='insert_exam.php'>Insert exam</a></td><td align='center'><input type='text' name='id' value='Enter student ID'></td>";
				echo 		"</tr>";
				echo 		"<tr>";
				echo 		"<td align='center'><a href='delete_notice.php'>Delete notice</a></td><td align='center'><a href='delete_exam.php'>Delete exam</a></td><td align='center'><input type='submit' name='btn' value='View Student'></td>";
				echo 		"</tr>";	
				echo 		"</form>";
				echo 	"</table>";
				echo "</div>";
				
		}
		else
			header("location:stafflogout.php");
		if(isset($_POST["btn"]))
		{	
			$user=$_POST["id"];
			include("dbconnectnotice.php");
			$sql="select * from students where ID='" . $user . "'";
			$rs=mysqli_query($con,$sql);
			$row=mysqli_fetch_array($rs);
			if($row)
			{
				$_SESSION["use"]=$user;
				header("location:update_stud.php");
			}	
			else
				echo "invalid userid/password";
		}
	?>
		<center>
			<div style="padding-top:1%">
				<a href="stafflogout.php">Log Out</a>
			</div>
		</center>
	</body>
</html>