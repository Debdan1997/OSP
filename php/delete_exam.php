<html>
	<head>
		<title>DELETE EXAM</title>
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
		<form method = "post" action = "delete_exam.php">
			<div style="text-align:center;padding-top:12%"><h1>DELETE EXAM</h1>
				<table align="center">
				<tr>
				<td align="center" >ID</td><td><select name = "id">
				<?php
				include("dbconnectnotice.php");
				$sql="select * from exams";
				$rs=mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($rs))
				{
					?>
					<option value = "<?=$row[0]?>" ><?=$row[0]?></option>
					<?php
				}
					?>
				</select></td>
				</tr>
				<tr>
				<td align="center" colspan="2"><input type = "submit" name="btn" value="DELETE"/></td>
				</tr>
				</table>
</div>
</form>

<?php
if(isset($_POST["btn"]))
{
$id = $_POST["id"];
$sql="delete from exams where ID=".$id."";
$n=mysqli_query($con,$sql);
if($n==1)
	echo "<div style='text-align:center'>Success</div>";;

}
?>
</body>
</html>

