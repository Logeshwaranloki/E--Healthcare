<?php
include "cus_header2.php"; ?>
<div class="mydiv1">
<table class="t1" cellspacing="20px" cellpadding="30px">

<?php


$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sel="select * from cart join product on cart.pid=product.pid where cuid='$id' and status='Ordered'";
//echo $sel;

$retval=mysqli_query($conn,$sel);
if(mysqli_num_rows($retval)>0)
{
	?>
	<tr>
	<th>Image</th>
	<th>Name</th>
	<th>Price</th>
	<th>Quantity</th>
	<th>Total</th>
	</tr>
	<?php
	while($row=mysqli_fetch_assoc($retval))
	{
		$pi=$row["productimage"];
		$pid=$row["pid"];
		$qu=$row["quantity"];
		$st=$row["stack"];
		$ca=$row["cartid"];
		$cui=$row["cuid"];
		$pn=$row["productname"];
		$pr=$row["price"];
		$q=$row["quantity"];
		$to=$row["total"];
		//echo "<center>";	

		echo "<tr>
		<td><img src='$pi' style='height:200px;width:200px'></td>
		<td>$pn</td>
		<td>$pr</td>
		<td>$q</td>
		<td>$to</td>
		</tr>";
		//<td><h3><a href='cancel.php?ca=$ca'>Cancel  </h3></td>
		//echo"<tr><td><h3><a href='delivery.php?ca=$ca&&pid=$pid&&q=$qu&&st=$st'>Delivered</h3></td></tr>";
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