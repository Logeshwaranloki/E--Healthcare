<!DOCTYPE html>
<html>
<head><?php
session_start();
$s=$_SESSION["id"];
include "cus_header1.php";
?>
<title>ONLINE MOBILE SHOPPING</title>
	<style>
			table{
			text-align: center;
		  width: 100%;
			}
		p{
			text-align:justify;
			font-size:20px;
			line-height:10px;
		}
		h3{
	text-align:justify;
	font-size:20px;
	line-height:20px;
}
		h2{
			font-size: 20px;
			
			font-family: algerian;
		}
		body{
      background-image: url("w.jpg");
      background-repeat: no-repeat;
      backg
	</style>
</head>
<body>	<h2><center>Cancelled Products</center></h2>

	<table>
		<?php
//session_start();
//$s=$_SESSION["id"];
//include "cus_header1.php";

$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sel="select * from cart join product on cart.pid=product.pid where cuid='$s' and status='Cancel'";
//echo $sel;
$retval=mysqli_query($conn,$sel);
if(mysqli_num_rows($retval)>0)
{
	$i=1;
	//echo "$i";
	echo"<tr rowspan='5'>";
	while($row=mysqli_fetch_assoc($retval))
	{
		$pi=$row["productimage"];
		$pn=$row["pname"];
		$pr=$row["price"];
		$q=$row["quantity"];
		$to=$row["totalprice"];
		echo "<tr><td><img src='$pi' style='height:200px;width:200px'><td>
		<td><h3>Product Name:$pn</h3></td>
		<td><h3>Price:$pr</h3></td>
		<td><h3>Quantity:$q</h3></td>
		<td><h3>Totalprice:$to</h3></td></tr>";
		if($i++%9==0)
	{
		//echo "$i";
		echo "</tr><tr>";
	}
		}

   	 }else
	 {
		 //echo "";
		 echo "<script>alert(' cancelled order not found');location='all_products.php';</script>";

	 }
   mysqli_close($conn);


?></table>

</body>
</html>