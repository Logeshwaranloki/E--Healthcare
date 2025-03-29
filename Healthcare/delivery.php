<!DOCTYPE html>
<html>
<head>
<title>ONLINE MOBILE SHOPPING</title>
</head>
<body>
<?php


$ca=$_GET["ca"];//caid
$pid=$_GET["pid"];
$q=$_GET["q"];
$st=$_GET["st"];
$cui=$_GET["cui"];
echo $q."quantity";
echo $st."stack";


$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sql="update cart set status='Delivered' where caid='$ca'";
//echo$sql;

$retval1=mysqli_query($conn,$sql);
		if($retval1>0)
		{
			$st1=(int)$st-$q;
			$st1;
			$sql1="update product set stack='$st1' where pid='$pid'";
			//echo $sql1;
			$retval=mysqli_query($conn,$sql1);
			if($retval>0)
			{
				//echo"<script>alert('Status updated successfull');</script>";
				//echo"<script>alert('Status updated successfull');location='myorder.php'</script>";
				}
				else
				{
					echo"Cant't updated";
				}
		}
		$h="SELECT customer.cuid AS cuid,customer.wallet as wallet,cart.totalprice AS totalprice FROM cart JOIN customer ON cart.cuid=customer.cuid WHERE cart.caid='$ca' AND customer.cuid='$cui'";
		//echo $h;	
		//$sql="update cart set status='Delivered' where caid='$ca'";
		$ret=mysqli_query($conn,$h);
		if(mysqli_num_rows($ret)>0)
		{			
			while ($x=mysqli_fetch_assoc($ret))
			{
			$id=$x['cuid'];
			$wall=$x['wallet'];
			$price=$x['totalprice'];
			$amt=(int)$wall-(int)$price;
			$s3="update customer set wallet='$amt' where cuid='$cui'";
			//echo $s3;
			if(mysqli_query($conn,$s3))
			{
				echo "<script>";
				echo "alert('order Delivered successfully');";
				echo "location='vieworderdb.php';";
				echo "</script>";
				}
			}
		}	
					mysqli_close($conn);

?>
</body>
</html>