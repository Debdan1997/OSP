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
		<form method = "post" action = "notice_insert.php" enctype = "multipart/form-data">
		<div style="text-align:center;padding-top:12%"><h1>INSERT NOTICE</h1><div>
		<table align="center">
		<tr>
<td>ID</td><td><input type="text" name = "id"></td>
</tr>
<tr>
<td>TITLE</td><td><input type="text" name = "title"></td>
</tr>
<tr>
<td>DESCRIPTION</td><td><input type="text" name = "description"></td>
</tr>
<tr>
<td>DATE</td><td><input type="date" name = "date"></td>
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
	$title = $_POST["title"];
	$description = $_POST["description"];
	$date = $_POST["date"];
	//echo $smarks;
	//$file_name = $_FILES["file"]["name"];
	//$temp_name= $_FILES["file"]["tmp_name"];
	//$path = "C:/xampp/htdocs/phpcourse/uploads/".$file_name;
	//$db_name = "uploads/".$file_name;
	//move_uploaded_file($temp_name,$path);
	$sql= "insert into notice values(" .$id. ",'" .$title. "','" .$description. "','" .$date. "')";
	$n=mysqli_query($con,$sql);
	if($n==1)
		echo "<div style='text-align:center'>Success</div>";
	else
		echo "<div style='text-align:center'>Error!</div>";
}
?>
</body>
</html>
