<html>
<head>
<?php
session_start();
$Name=$_SESSION["name"];
$sid=$_SESSION["id"];
$id=$_SESSION["rid"];
//echo $sid."hello";			
//echo $id"";			
//e
?>
<?php
if(isset($_GET["upd"]))
{
	
$rid=$_GET["txt1"];
$Name=$_GET["txt2"];
$Password=$_GET["txt3"];
$mob=$_GET["txt4"];
$mail=$_GET["txt5"];
$add=$_GET["txt6"];



$con=mysqli_connect("localhost:3306","root","","project");
if(!$con)
{
die("ERROR".mysqli_error());
}

$s="update regdb set name='$Name',password='$Password',mobile='$mob',mailid='$mail',address='$add' where id='$id'";
//echo $s;
if(mysqli_query($con,$s))
{
echo "<script>alert('Updated Successfully');location='userprofileupdate.php';</script>";
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