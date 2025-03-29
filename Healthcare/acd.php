<html>
<head>
<?php
if(isset($_GET["upd"]))
{	
$Amount=$_GET["txt1"];
session_start();
$s=$_SESSION["id"];
$con=mysqli_connect("localhost:3306","root","","project");
if(!$con)
{
die("ERROR".mysqli_error());
}

$s="update customer set wallet='$Amount' where cuid=$s";
if(mysqli_query($con,$s))
{
echo "<script>alert('Recharged Successfully');location='customer_category.php';</script>";
}
else
{
echo "Not updated ";
}
}

?>
</head>
<body>

</body>
</html>