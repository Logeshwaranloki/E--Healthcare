
<?php include("HPHeader1.php")?>
<body>
	<center></center>
	<table class="content" cellspacing="20px" cellpadding="30px">

<tr>
<th colspan="4" class="thead" >ADD MEDICINE</th></tr>
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
		$edt=$row["edate"];
		
		//echo "<td><img src='Images/$e' style='height:200px;width:200px'width='200'><br><h3>Brand: $b</h3> <p> $c<br> </p><h3>Price: $d</h3> <h3>Available stock: $f</h3> <a href='addcart.php?data=$a &&data2=$b&&data3=$d&&data4=$f' >ADD CART</a></td>";
		
		echo "<td><img src='$pi' style='height:200px;width:200px'><br><h6 style='color:blue;'><b>$pn</b></h6> <p><b>DESCRIPTION:</b><br>$dt<br> </><p><b>PRICE: &#8377; $pr</b></p><p><b>EXPIRY DATE: $edt</b></p> <p>
		<button><a href='addcart1.php?pi=$pid'><b>ADD MEDICINE</a></b></button></td>";
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