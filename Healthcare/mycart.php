<?php
 include("cus_header2.php")?>
<table class="content" cellspacing="20px" cellpadding="30px">

<?php

$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sel="select * from cart join product on cart.pid=product.pid where cuid='$id' and status='Pending'";

$retval=mysqli_query($conn,$sel);
if(mysqli_num_rows($retval)>0)
{
	$i=1;
	//echo "$i";
	echo"<tr>";
		$sum=0;
	while($row=mysqli_fetch_assoc($retval))
	{
		$pi=$row["productimage"];
		$ca=$row["cartid"];

		$pn=$row["productname"];
		$pr=$row["price"];
		$q=$row["quantity"];
		$to=$row["total"];
			$sum=$sum+$to;
		echo "<tr>
		<td><img src='$pi' style='height:200px;width:200px'></td>
		<td><p>Product name:$pn</p></td>
		<td><p>Quantity:$q</p></td>
		<td><p>price:$to</p></td>
		<td></p><a href='cart_delete.php?ca=$ca'>REMOVE</a></p></td>";
		}
   	 
	 echo "<tr><td><center><h6>Total amount:$sum</h6></center></td></tr>";
	//echo "<tr><td><a href='placeorder.php' ><h2>BUY NOW</h2></a></td></tr>";
	
	 //echo "<tr><td><a href='cart_delete.php?ca=$ca'>REMOVE</td></tr>";
	 echo "<tr colspan='4'><th ><b><a href='myorder1.php?ca=$ca'>BUY</b></a></th></tr>";
   	 
   	 
}

?>
</table>
</body>
</html>







<?php 
/*include("cus_header.php")?>
<body>
<center><h2>MYCART</h2></center>
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
	$i=1;
	//echo "$i";
	echo"<tr rowspan='6'>";
	while($row=mysqli_fetch_assoc($retval))
	{
		$pi=$row["productimage"];
		$ca=$row["caid"];
		$cui=$row["cuid"];
		$pn=$row["pname"];
		$pr=$row["price"];
		$q=$row["quantity"];
		$to=$row["totalprice"];
		echo "<td><img src='$pi' style='height:105px;width:100px'><br>Productname:$pn<br>Price:$pr<br>Quantity:$q<br>Totalprice:$to<br><a href='cart_delete.php?ca=$ca'>REMOVE
		<a href='add_checking.php?ca=$ca'>BUY</td>";
	if($i++%7==0)
	{
		//echo "$i";
		echo "</tr><tr>";
	}
	}
   	 }
   	 else
   	 {
   	 	echo"<script>alert('No Productcs in your cart');location='customer_category.php'</script>";
   	 }
   	 
   mysqli_close($conn);
*/
?>
</table>
</body>
</html>