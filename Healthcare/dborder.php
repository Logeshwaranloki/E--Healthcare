<!DOCTYPE html>
<html>
<head>
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
      background-size: cover;
    }
	</style>
</head>
<?php include("cus_header1.php")?>
<body>
	<h2><center>MY Orders</center></h2>
	<p><center>If you get the product Please update the deliver status using click on delivered</center></p>
	<table>

<?php
session_start();
$s=$_SESSION["id"];
$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sel="select * from cart join product on cart.pid=product.pid where cuid='$s' and status='Ordered'";
//echo $sel;

$retval=mysqli_query($conn,$sel);
if(mysqli_num_rows($retval)>0)
{
	$i=1;
	//echo "$i";
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
		//echo "<center>";	

		echo "<tr>
		<td><img src='$pi' style='height:200px;width:200px'></td>
		<td><h3>Product Name:<p>$pn</p></h3></td>
		<td><h3>Price:<p>$pr</p></h3></td>
		<td><h3>Quantity:<p>$q</p></h3></td>
		<td><h3>Totalprice:<p>$to</p></h3></td>
		<td><h3><a href='cancel.php?ca=$ca'>Cancel  </h3></td>
		<td><h3><a href='delivery.php?ca=$ca&&pid=$pid&&q=$qu&&st=$st'>Delivered</h3></td></tr>";
		//if($i++%6==0)
	//echo "</center>";

		}
   	 }
	 else
	 {
		 echo "<script>";
	echo "alert('order not found');";
	echo "location='all_products.php';";
	echo "</script>";
	 }

?></table>
</body>
</html>