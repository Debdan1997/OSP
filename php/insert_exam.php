<html>
<head>
		<title>INSERT NOTICE</title>
		<meta charset="utf-8">
		<style>
		body 
		{
			background-image: url('random.jpg');
			background-size:cover;
		}
		</style>
	</head>
<body>
<form method = "post" action = "insert_exam.php" enctype = "multipart/form-data">
<div style="text-align:center;padding-top:12%"><h1>INSERT EXAM</h1>
		<table align="center">
<tr>
<td>ID</td><td><input type="text" name = "id"></td>
</tr>
<tr>
<td>DATE</td><td><input type="date" name = "date"></td>
</tr>
<tr>
<td>YEAR</td><td><input type="text" name = "year"></td>
</tr>
<tr>
<td>STREAM</td><td><input type="text" name = "stream"></td>
</tr>
<tr>
<td>PAPER NAME</td><td><input type="text" name = "paper"></td>
</tr>
<tr>
<td>TIME</td><td><input type="time" name = "time"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="sub" value = "Insert"></td>
</tr> 
<!--<input type = "file" name = "file"/>
<input type = "submit" name = "btn" value = "add"/>-->
</table>
</form>
</div>
<?php
if(isset($_POST["sub"]))
{
	include("dbconnectnotice.php");
	$id = $_POST["id"];
	$year = $_POST["year"];
	$stream = $_POST["stream"];
	$date = $_POST["date"];
	$paper = $_POST["paper"];
	$time = $_POST["time"];
	//echo $smarks;
	//$file_name = $_FILES["file"]["name"];
	//$temp_name= $_FILES["file"]["tmp_name"];
	//$path = "C:/xampp/htdocs/phpcourse/uploads/".$file_name;
	//$db_name = "uploads/".$file_name;
	//move_uploaded_file($temp_name,$path);
	$sql= "insert into exams values(" .$id. ",'" .$date. "','" .$year. "','" .$stream. "','" .$paper. "','" .$time. "')";
	$n=mysqli_query($con,$sql);
	if($n==1)
		echo "<div style='text-align:center'>Success</div>";
	else
		echo "<div style='text-align:center'>Error</div>";
}
?>
</body>
</html>
