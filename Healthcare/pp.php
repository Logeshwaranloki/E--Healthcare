<!DOCTYPE html>
<html>
<head>
	<title>Address checking</title>
	<style>
		body{
			background-image: url("w.jpg");
			background-repeat: no-repeat;
			background-size: 1500px;
		}
	</style>
</head>
<?php include("cus_header.php")?>
<body>
<?php 
//session_start();
$s=$_SESSION["id"];
$ca=$_GET["ca"];
//echo "$ca";("
$_SESSION["ca"]=$ca;
$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	
dieERROR:("Could not connect".mysqli_connect_error());
}
$sel="SELECT * FROM cart JOIN customer on cart.cuid=customer.cuid where  cart.caid='$ca'";
//echo "$sel";
$retval=mysqli_query($conn,$sel);
if(mysqli_num_rows($retval)>0)
{
	while($row=mysqli_fetch_assoc($retval))
	{
		
		$ad=$row["customeraddress"];
echo "<center><form action='myorder1.php' method='post'>
<p>Deliver to the address</p><p><textarea  name='add'>$ad</textarea></p><p><input type='submit' name='sub' value='Proceed'></p></form></center>";
		}
   	 }
   	 mysqli_close($conn);
   	 ?>

</body>
</html>