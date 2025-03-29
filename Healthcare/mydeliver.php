<!DOCTYPE html>
<html>
<head>
<?php
session_start();
$s=$_SESSION["id"];
include"cus_header1.php";
?>
<title>ONLINE MOBILE SHOPPING</title>
	<style>
		table {
  width: 100%;
}
		body{
      background-image: url("w.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
	</style>
</head>
<body>
	<h2><center>Delivered Products</center></h2>

	<table>
<?php

$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sel="select * from cart join product on cart.pid=product.pid where cuid='$s' and status='Delivered'";
//echo $sel;
$retval=mysqli_query($conn,$sel);
if(mysqli_num_rows($retval)>0)
{
	$i=1;
	//echo "$i";
	echo"<tr rowspan='6'>";
	while($row=mysqli_fetch_assoc($retval))
	{
		$pi=$row["productimage"];
		$pid=$row["pid"];
		$qu=$row["quantity"];
		$st=$row["stack"];
		$ca=$row["caid"];
		$cui=$row["cuid"];
		$pn=$row["pname"];
		$pr=$row["price"];
		$q=$row["quantity"];
		$to=$row["totalprice"];
		echo "<tr><td><img src='$pi' style='height:200px;width:200px'></td>
		<td><h3>Productname:$pn</h3></td>
		<td><h3>Price:$pr</h3></td>
		<td><h3>Quantity:$q</h3></td>
		<td><h3>Totalprice:$to</h3></td>
		<td><h3><a href='return.php?ca=$ca&&pid=$pid&&q=$qu&&st=$st'>Return<h3></td></tr>";
		if($i++%9==0)
	{
		//echo "$i";
		echo "</tr><tr>";
	}
		}
   	 }
   mysqli_close($conn);

?></table>

</body>
</html>