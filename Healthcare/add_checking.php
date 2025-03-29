<?php
include "cus_header2.php";

$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	
dieERROR:("Could not connect".mysqli_connect_error());
}
$sel="SELECT * FROM cart JOIN customer on cart.cuid=customer.cuid where  cart.cuid='$id'";
//echo "$sel";
$retval=mysqli_query($conn,$sel);
if(mysqli_num_rows($retval)>0)
{
	while($row=mysqli_fetch_assoc($retval))
	{
		
		$ad=$row["customeraddress"];
echo "<center>
<h2><center>CONFIRMATION</center></h2>

<form action='myorder1.php' method='post'>
<h3>Delivery Address</h3>
<p><textarea  name='add'>$ad</textarea></p>
<p><input type='submit' name='sub' value='Proceed'></p>
</form></center>";
		}
   	 }
   	 mysqli_close($conn);
   	 ?>

</body>
</html>