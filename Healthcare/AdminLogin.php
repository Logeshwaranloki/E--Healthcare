<html>
<head>
<?php
if (isset($_POST["sub"]))
{
$name=$_POST["txt1"];
$pass=$_POST["txt2"];
$mem=$_POST["mem"];
if($name=="Admin")
	{
		if($pass=="Admin1234")
		{
			echo "<script type='text/javascript'>alert('Login Successfully');location='AdminHome.php'</script>";
			
		}
		else{
			
			echo "Incorrect Password";
		}
	
	
}
}

?>
</head>
<body>
<?php include "Home.php"; ?>
<form action="" method="post">
<h3>Admin Login</h3>
<table>
<tr><td>User name</td><td><input type="text" name="txt1"></td></tr>
<tr><td>Password</td><td><input type="password" name="txt2"></td></tr>
<tr><td></td><td><input type="submit" name="sub" value="Login"></td></tr>
</table>
</form>
</body>
</html>