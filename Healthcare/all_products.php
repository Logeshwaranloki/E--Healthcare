<!DOCTYPE html>
<html>
<head>
<title>ONLINE MOBILE SHOPPING</title>
	<style>
		body{
      background-image: url("w.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
	
	</style>
</head>
<?php include("cus_header.php")?>
<body>
	<center><h2>AllProducts</h2></center>
	<table>
<?php
$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sel="select * from product";
$retval=mysqli_query($conn,$sel);
if(mysqli_num_rows($retval)>0)
{
	$i=1;
	
	echo "<tr>";
	while($row=mysqli_fetch_assoc($retval))
	{
		
		$pid=$row["pid"];
		$pn=$row["productname"];
		$pi=$row["productimage"];
		$pr=$row["price"];
		$dt=$row["description"];
		
		//echo "<td><img src='Images/$e' style='height:200px;width:200px'width='200'><br><h3>Brand: $b</h3> <p> $c<br> </p><h3>Price: $d</h3> <h3>Available stock: $f</h3> <a href='addcart.php?data=$a &&data2=$b&&data3=$d&&data4=$f' >ADD CART</a></td>";
		
		echo "<td><img src='$pi' style='height:200px;width:200px'><br><h5><b> PRODUCT NAME :</b> $pn</h5> <h5><b>DESCRIPTION:</b>$dt<br> </h5><h5><b>PRICE: $pr</b></h5> <h5><a href='addcart1.php?pi=$pid&&pn=$pn&&pr=$pr&&pf=$pi'>ADD CART</a></h5></td>";
		if($i++%5==0)
		echo '</tr><tr>';
	}
   	 }
  

?>

<tr>
</tr>
</table>
</body>
</html>