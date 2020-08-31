<html>
	<head>
		<title>LOGIN PAGE</title>
		<meta charset="utf-8">
		<style>
		body 
		{
			background-image: url('engineering-wallpaper-hd.jpg');
			background-size:cover;
		}
	</style>
	</head>
	<body>
		<div style="background-color:#5174AD;width:1000px;margin:0px auto;height:20%">
		</div>

		<div style="background-color:#FFFFFF;margin:0px auto;width:1000px;height:37%;padding-top:7%;padding-bottom:3%;color:#0D2F66">
		<div style="text-align:center"><h1><b>STUDENT LOGIN</b></h1></div>	
			<form method="post" action="login_sess.php">	
				<table style="padding-top:2%;padding-bottom:3%;margin:0px auto;align:center;color:blue">
					<tr>
					<td>USER ID</td><td><input type="text" name="t1"/></td>
					</tr>
					<tr>
					<td>PASSWORD</td><td><input type="password" name="t2"/></td>
					</tr>
					<tr>
					<td align="center"><input type="submit" name = "btn" value = "Log In"></td><td align="center"><input type = "submit" name = "btn2" value = "Back"></td>
					</tr>
				</table>
			</form>
			<?php
	if(isset($_POST["btn"]))
	{
		$user=$_POST["t1"];
		$pass=$_POST["t2"];	
		session_start();	
		include("dbconnectnotice.php");
		$sql="select * from students where ID='" . $user . "' and Password='". $pass . "'";
		$rs=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($rs);
		if($row)
		{
			$_SESSION["userst"]=$user;
			$_SESSION["passst"]=$pass;
			header("location:home.php");
		}	
		else
			echo "<div style='text-align:center;padding-bottom:1%'>Incorrect UserID/Password</div>";
	}
	if(isset($_POST["btn2"]))
		header("location:home.html");
?>
		</div>
		<div style="background-color:#5174AD;align:bottom;width:1000px;margin:0px auto;height:20%">
		</div>
	</body>
</html>
<?php
	//if(isset($_POST["btn"]))
	//{
		//$user=$_POST["t1"];
		//$pass=$_POST["t2"];	
		/*session_start();	
		include("dbconnectnotice.php");
		$sql="select * from students where ID='" . $user . "' and Password='". $pass . "'";
		$rs=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($rs);
		if($row)
		{
			$_SESSION["userst"]=$user;
			$_SESSION["passst"]=$pass;
			header("location:home.php");
		}	
		else
			echo "invalid userid/password";
	}
	if(isset($_POST["btn2"]))
		header("location:homepage.html");*/
?>