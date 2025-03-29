<!DOCTYPE html>
<html>
<head>
<title>ONLINE MOBILE SHOPPING</title>
	<?php
	//if(isset($_POST['dl']))
	{
	$ca=$_GET["ca"];
	$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sql="delete from cart where cartid='$ca'";
$retval1=mysqli_query($conn,$sql);
		if($retval1>0)
		{
			echo"<script>alert('Removed successfully');location='mycart.php'</script>";
		}
    	else
    	{

    		echo"Not removed";
    	}
    	mysqli_close($conn);
	}
	?>
</head>
<body>
<center>
		<h4>If you want delete the product from your cart</h4>
		<?php
	//$ca=$_GET["ca"];
	//echo "<center><form action=''method='post'><table><tr><td>Cartid</td><td><input type='text' value='$ca' readonly name='pid'></td></tr></table><input type='submit' value='Delete' name='dl'></form></center>";
	?>
	</center>
</body>
</html>