<?php include("admin_header.php")?>
<?php
//session_start();
//$id=$_SESSION["id"];
//include "shheader.php";			
?>
<html>
<head>
<?php
$a=$_GET['con'];
echo $a;
$con=mysqli_connect("localhost:3306","root","","project");
if(!$con)
{
die("ERROR".mysqli_error());
}
$t="delete from category where cid=$a";
//echo $t;
if(mysqli_query($con,$t))
{
	
//echo "<script>alert('category deleted  Successfully ');</script>";
echo "<script>alert('category deleted  Successfully ');location='deletecategoryadmin.php';</script>";



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


