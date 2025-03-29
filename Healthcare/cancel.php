<!DOCTYPE html>
<html>
<head>
<title>ONLINE MOBILE SHOPPING</title>
</head>
<body>
<?php
$ca=$_GET["ca"];
$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sql="update cart set status='Cancel' where caid='$ca'";
$retval1=mysqli_query($conn,$sql);
		if($retval1>0)
		{
			echo"<script>alert('Order Canceled');location='myorder.php'</script>";
		}
    	else
    	{

    		echo"Cant't canceled";
    	}
    	mysqli_close($conn);

?>
</body>
</html>