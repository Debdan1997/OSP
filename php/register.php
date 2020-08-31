<html>
	<head>
	<title>PRINT NOTICE</title>
	<meta charset="utf-8">
		<style>
		body 
		{
			background-image: url('blue.jpg');
			background-size:cover;
		}
		</style>
	</head>
	<body>
	<div style="font-family:Comic Sans MS;text-align:center;color:yellow;padding-top:5%"><h1><b>ENTER YOUR CREDENTIALS</b></h1></div>
	<form method = "post" action = "register.php" enctype = "multipart/form-data">
		<div style="background-color:white;align:center;height:410px;margin:0px auto;width:40%">
			<table cellpadding="5" style="padding-top:2%;border-spacing:1px 5px;margin:0px auto;align:center">
				<tr>
					<td align="center">STUDENT ID</td><td align="center"><input type = "text" name = "ID"/></td>
				</tr>
				<tr>
					<td align="center">STUDENT NAME</td><td align="center"><input type = "text" name = "NAME"/></td>
				</tr>
				<tr>
					<td align="center">PASSWORD</td><td align="center"><input type = "password" name = "PASS"/></td>
				</tr>
				<tr>
					<td align="center">CONTACT</td><td align="center"><input type = "text" name = "CNTCT"/></td>
				</tr>
				<tr>
					<td align="center">EMAIL ID</td><td align="center"><input type = "text" name = "EID"/></td>
				</tr>
				<tr>
					<td align="center">GUARDIAN'S NAME</td><td align="center"><input type = "text" name = "GNAME"/></td>
				</tr>
				<tr>
					<td align="center">STREAM</td><td align="center"><input type = "text" name = "STRM"/></td>
				</tr>
				<tr>
					<td align="center">YEAR</td><td align="center"><input type = "text" name = "YR"/></td>
				</tr>
				<tr>
					<td aign="center">ADMISSION YEAR</td><td align="center"><input type = "text" name = "YEAR"/></td>
				</tr>
				<tr>
					<td align="center">PHOTO</td><td align="center"><input type = "file" name = "IMAGE"/></td>
				</tr>
			</table>
			<div style="text-align:center"><input type="submit" align="center" name="btn" value="REGISTER"/></div>
		</div>

	</form>
<?php
if(isset($_POST["btn"]))
{
	include("dbconnectnotice.php");
	$id = $_POST["ID"];
	$name = $_POST["NAME"];
	$pass = $_POST["PASS"];
	$cntct = $_POST["CNTCT"];
	$eid = $_POST["EID"];
	$gname = $_POST["GNAME"];
	$strm = $_POST["STRM"];
	$yr = $_POST["YR"];
	$year = $_POST["YEAR"];
	$section = 'null';
	$roll = 0;
	$grades = 'null';
	$attndnc = 'null';
	$file_name = $_FILES["IMAGE"]["name"];
	$temp_name= $_FILES["IMAGE"]["tmp_name"];
	$path = "C:/xampp/htdocs/projects/".$file_name;
	$photo = "".$file_name;
	move_uploaded_file($temp_name,$path);
	$sql= "insert into students values(".$id.",'".$name."','".$photo."','".$eid."',".$cntct.",'".$gname."','".$strm."',".$yr.",'".$section."',".$roll.",'".$grades."','".$attndnc."',".$pass.",".$year.")";
	$n=mysqli_query($con,$sql);
	if($n==1)
		header("location:registretion.php");
	else
		echo "UNSUCESSFULL";
}
?>
</body>
</html>
