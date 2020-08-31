<html>
<body>
<form method = "post" action = "db2.php" enctype = "multipart/form-data">
<pre>
student id<input type = "text" name = "id"/>
student name<input type = "text" name = "name"/>
password<input type="password" name="pass"/>
contact<input type="text" 
<input type = "date" name = "t3"/>
marks<input type = "text" name = "t4"/>
photo<input type = "file" name = "file"/>
<input type = "submit" name = "btn" value = "add"/>
</pre>
</form>
<?php
echo "hey";
if(isset($_POST["btn"]))
{
	include("db.php");
	$sid = $_POST["t1"];
	$sname = $_POST["t2"];
	$dob = $_POST["t3"];
	$smarks = $_POST["t4"];
	echo $smarks;
	$file_name = $_FILES["file"]["name"];
	$temp_name= $_FILES["file"]["tmp_name"];
	$path = "C:/xampp/htdocs/phpcourse/uploads/".$file_name;
	$db_name = "uploads/".$file_name;
	move_uploaded_file($temp_name,$path);
	$sql= "insert into student_info values('".$sid."','".$sname."','".$db_name."','".$dob."',".$smarks.")";
	echo $sql;
	$n=mysqli_query($con,$sql);
	if($n==1)
		echo "success";
	else
		echo "no";
}
?>
</body>
</html>
