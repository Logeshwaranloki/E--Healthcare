<?php include("admin_header.php")?>
<html>
<head>

</head>
<body>
<table align='center'  cellspacing="20" cellpadding="10" width="100%" height="30">


<tr class="color ">  <th>CART ID</th> <th>CUSTOMER ID</th> <th>PRODUCT ID</th> <th>PRICE</th>  <th>AMOUNT</th> <th>STATUS</th> </tr>

<?php

$con=mysqli_connect("localhost:3306","root","","project");
if(!$con)
{
die("ERROR".mysqli_error());
}
//$t="select * from cart where status='delivered' and did='2' and db='1'";
$t="select * from cart where status='DELIVERED' ";
//echo $t;
$ret=mysqli_query($con,$t);

if(mysqli_num_rows($ret)>0)
{
	$i=1;
	echo '<tr>';
	$sum=0;
while ($x=mysqli_fetch_assoc($ret))
 	{
	$a=$x['caid'];
	$b=$x['cuid'];
	$c=$x['pid'];
	$d=$x['db'];
	//$e=$x['pid'];
	$f=$x['price'];
	$g=$x['totalprice'];

	$i=$x['status'];
	

	

echo "<center>";	
echo "
	<tr class='colo '>
	<td> $a</td>
	<td> $b</td>
	<td> $c</td>
	<td> $f</td>
	<td> $g</td>
	
	<td> $i</td></tr>";
	//<td><a href='removeorder.php?data=$g' >Cancel Order</a></td>
	//<tr><td><h3>Available stock: $f</h3></td></tr>

echo "</center>";
	
	}
	
	//echo"<td><h3>Total Amount to Pay:</h3> $h</td>";
	
	
	
}

?>
<h2><center> DELIVERER PRODUCTS</center></h2>

</table>
</body>
</html>