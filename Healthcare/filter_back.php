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
    h2{
    	font-family: algerian;
    }
    
	</style>
</head>
<?php include("cus_header.php")?>
<body>
	<center><h2>Filter products</h2></center>
<?php
	if(isset($_POST["sub"]))
	{
		//$st=$_POST["amnt"];
		$st=1;
		$en=$_POST["eamnt"];
		$ca=$_POST["sel"];
		$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	
die("ERROR:Could not connect".mysqli_connect_error());
}
$sel="SELECT * FROM product where price between $st and $en and choosecategory='$ca'";
$retval=mysqli_query($conn,$sel);
if(mysqli_num_rows($retval)>0)
{
	$i=1;
	//echo "$i";
	echo"<table><tr rowspan='5'>";
	while($row=mysqli_fetch_assoc($retval))
	{
		
	
		$pid=$row["pid"];
		$pn=$row["productname"];
		$pi=$row["productimage"];
		$pr=$row["price"];
		$dt=$row["description"];
		echo "<td><img src='$pi' height='200px';width='200px'>
		<br><h3>Product Name: $pn</h3>
		<br><h3>Price:$pr</h3>
		<br><h3>Description:$dt</h3>
	
		<br><a href='addcart1.php?pi=$pid&&pn=$pn&&pr=$pr'>Addcart</td>";
		if($i++%5==0)
	{
		//echo "$i";
		echo "</tr></table><table><tr>";
	}
		}
   	 }
   	 else
   	 {
   	 	echo"<script>alert('Product not avilable in this cart');location='filter.php'</script>";
   	 }
   	 mysqli_close($conn);
	}
	?>
</body>
</html>
