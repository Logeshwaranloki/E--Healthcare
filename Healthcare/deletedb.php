<?php include("admin_header.php")?>
<?php
session_start();
$id=$_SESSION["id"];
//include "shheader.php";			
?>
<html>
<head>
<?php
$f=$_GET['con'];
echo $e;
$con=mysqli_connect("localhost:3306","root","","project");
if(!$con)
{
die("ERROR".mysqli_error());
}
$t="delete from regdb where id=$f";
if(mysqli_query($con,$t))
{
	
echo "<script>alert('Deliveryboy deleted Successfully ');location='deletedeliveryboy.php';</script>";



}
else
{
echo "Deliveryboy failed to delete";
}
?>


</head>
<body>
</body>
</html>


