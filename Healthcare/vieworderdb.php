<?php
session_start();
$Name=$_SESSION["name"];
$sid=$_SESSION["id"];
$id=$_SESSION["rid"];
//echo $sid."hello";			
//echo $id"";			
//echo $Name;			
?>

<html>

<head>
</head>
<body>
<table>
<?php
include "dboylink.php";
$con=mysqli_connect("localhost:3306","root","","project");
if(!$con)
{
die("ERROR".mysqli_error());
}
$t="SELECT* FROM cart JOIN product ON cart.pid=product.pid where status='Ordered' AND db='$id';";

//$t="SELECT cart.did as Cid,cart.pid as Pid,cart.price as Price,cart.quantity as Quantity,cart.amount as Amt,data.image as img,data.did as Did FROM `cart` join `data` on cart.pid=data.id where cart.status='ORDERED' and cart.db='$sid'";
//$t="select * from cart where status='ORDERED' and db='$sid'";
//echo $t;

$ret=mysqli_query($con,$t);
if(mysqli_num_rows($ret)>0)
{
	$i=1;
	echo '<tr>';
while ($row=mysqli_fetch_assoc($ret))
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
	
	
//echo "<tr> <td>$a</td><td>$e</td>  <td>$b</td> <td>$e</td>  <td>$c</td> <td>$d</td></tr> ";
	//echo "
	//<tr><td><img src='Images/$d' style='height:200px;width:200px'width='300'></td>
	//<td><h3>CUSTOMER ID:</h3> $a</td> 
	//<td><h3>PRODUCT ID:</h3> $e</td>
	//<td><h3>QUANTITY:</h3> $c</td> 
	//<td><h3>TOTAL AMOUNT:</h3> $b</td>
	//<td><h3>DELIVER ORDER:</h3><a href='updatestatus.php?data=$b'&& >DELIVER ORDER</a></td>";
		echo "
	<tr class='color'>
	<td><h3>CUSTOMER ID:</h3 >$cui</td> 
	<td><h3>PRODUCT ID:</h3> $pid</td>
	<td><h3>QUANTITY:</h3> $q</td> 
	<td><h3>TOTAL AMOUNT:</h3> $to</td>
	<td><h3><a href='delivery.php?ca=$ca&&pid=$pid&&q=$qu&&st=$st&&cui=$cui'>Deliver_Order</h3></td></tr>";

	if($i++%5==0)
		echo '</tr><tr>';	

	}
}
else{
	
	echo "<script>";
	echo "alert('order not found');";
	echo "location='dbhome.php';";
	echo "</script>";
}
?>
<tr>
</tr>
<h2><center><i>MY ORDERS</i></center></h2>
</table>
</body>
</html>