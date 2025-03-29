<!DOCTYPE html>
<html>
<head>
<title>ONLINE MOBILE SHOPPING</title>
</head>
<body>
<center><h2>Your cart details</h2></center>
<table>
<?php
session_start();
$s=$_SESSION["id"];
$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sel="select * from cart join product on cart.pid=product.pid where cuid='$s' and status='Pending'";
$retval=mysqli_query($conn,$sel);
if(mysqli_num_rows($retval)>0)
{
	while($row=mysqli_fetch_assoc($retval))
	{
		$pi=$row["productimage"];
		$ca=$row["caid"];
		$cui=$row["cuid"];
		$pn=$row["pname"];
		$pr=$row["price"];
		$q=$row["quantity"];
		$to=$row["totalprice"];
		echo "<tr><th rowspan='7'><img src='$pi' style='height:100px;width:100px'></th></tr>
		<tr><th>Productname:$pn</th></tr><tr><td>Price:$pr</td></tr><tr><td>Quantity:$q</td></tr><tr><td>Totalprice:$to</td></tr>
		<tr><td><a href='cart_delete.php?ca=$ca'>REMOVE  <a href='myorder1.php'?ca=$ca'>Placeorder</td></tr>";
	}
   	 }
   	 
   mysqli_close($conn);

?>
</body>
</html>