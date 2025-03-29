<!DOCTYPE html>
<html>
<head>
<title>ONLINE MOBILE SHOPPING</title>
	<style>
		body{
			background-image: url("w.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
	<?php
	if(isset($_POST["sub"]))
	{
		session_start();
       $s=$_SESSION["id"];
		$nm=$_POST["nm"];
		$ma=$_POST["ma"];
		$mo=$_POST["mob"];
		$ad=$_POST["add"];
		$st=$_POST["sel"];
	$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$up="update customer set customername='$nm',customermail='$ma',customerphone='$mo',customeraddress='$ad',customerstate='$st'where cuid='$s'";
//echo $up;
$retval1=mysqli_query($conn,$up);
		if($retval1>0)
		{
			echo"<script>alert('Updated succesfully');'</script>";
			echo"<script>alert('Updated succesfully');location='customer_category.php'</script>";
		}
    	else
    	{

    		echo"<script>alert('Cant't Updated');</script>";
    		//echo"<script>alert('Cant't Updated');location='customer_category.php'</script>";
    	}
    	mysqli_close($conn);
	}
	?>
</head>

<body>
<center><h2>Update your profile for deliver your product</h2></center>
<form action="" method="post">
	<center>
		<table>
		<tr><td>Name</td><td><input type="text" name="nm" placeholder="Enter the name" required autofocus="on"></td></tr>
		<tr><td>Mail</td><td><input type="mail" name="ma" placeholder="Emter the mail id" required></td></tr>
		<tr><td>Mobile</td><td><input type="text" name="mob" placeholder="Enter the number" required></td></tr>
		<tr><td>Address</td><td><textarea cols="20" rows="8" name="add" required></textarea></td></tr>
		<tr><td>Choose Your state</td><td><select name="sel"><option value="Tamilnadu">Tamilnadu</option>
			<option value="Kerala">Kerala</option>
			<option value="Andra">Andrapradesh</option>
			<option value="Karnataka">Karnataka</option>
			<option value="Delhi">Delhi</option>
			<option value="Uthrapradesh">Uthrapradesh</option>
<option value="Punjab">Punjab</option>
		</select></td></tr>
	</table>
	<p><input type="submit" name="sub" value="Register"></p>
</form>
	</center>
	

</body>
</html>