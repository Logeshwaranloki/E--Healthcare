<html>
<head>
<?php
session_start();
$Name=$_SESSION["uname"];
$id=$_SESSION["id"];	
?>
<?php
if(isset($_GET["upd"]))
{
	
$rid=$_GET["txt1"];
$Name=$_GET["txt2"];
$Password=$_GET["txt3"];



$con=mysqli_connect("localhost:3306","root","","project");
if(!$con)
{
die("ERROR".mysqli_error());
}

$s="update admin set name='$Name',password='$Password' where id='$id'";
//echo $s;
if(mysqli_query($con,$s))
{
echo "<script>alert('Updated Successfully');location='adminprofileupdate.php';</script>";
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