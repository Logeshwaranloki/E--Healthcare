<!DOCTYPE html>
<html>
<head>
<title>ONLINE MOBILE SHOPPING</title>
	<style>
		table,td{
			text-align: center;
		
			}
		body{
      background-image: url("w.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
	</style>
</head>

<body>


	<table>
<?php
session_start();
$s=$_SESSION["id"];
include "cus_header1.php";
$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sel="select * from cart join product on cart.pid=product.pid where cuid='$s' and status='Return'";
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
		echo "<td><img src='$pi' style='height:100px;width:100px'><br>Productname:$pn<br>Price:$pr<br>Quantity:$q<br>Totalprice:$to</td>";
		if($i++%9==0)
	{
		//echo "$i";
		echo "</tr><tr>";
	}
		}
   	 }
	 else
	 {
		 //echo "";
		 echo "<script>alert(' returned order not found');location='all_products.php';</script>";

	 }
   mysqli_close($conn);


?></table>
	<h2><center>Returned Products</center></h2>

</body>
</html>