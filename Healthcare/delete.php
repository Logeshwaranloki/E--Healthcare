<!DOCTYPE html>
<html>
<head>
<title>ONLINE MOBILE SHOPPING</title>
<?php include("admin_header.php")?>
	<?php
	
	$pi=$_GET["txt1"];
	$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sql="delete from product where pid='$pi'";
$retval1=mysqli_query($conn,$sql);
		if($retval1>0)
		{
			echo"<script>alert('Product Deleted successfully');location='manage_products.php'</script>";
		}
    	else
    	{

    		echo"Data not deleted";
    	}
    	mysqli_close($conn);
	
	?>
</head>
<body>
<center>
		<h2>Delete the Product Details</h2>
		<?php
	$pi=$_GET["txt1"];
	
	?>
	</center>
	
	
</body>
</html>