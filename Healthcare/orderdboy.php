<?php include("admin_header.php")?>
<?php
session_start();
$id=$_SESSION["id"];
//include "shheader.php";			
//include "shopkeeperlink.php";
?>	
<html>
<head>
<?php
$m=$_GET['m'];
$e=$_GET['id'];

	//$m=$_GET["txt4"];
	//$e=$_GET["txt5"];
$con=mysqli_connect("localhost:3306","root","","project");
if(!$con)
{
die("ERROR".mysqli_error());
}

$s="update cart set db='$e' where caid='$m'";
//echo $s;
//echo $e;
echo $m;
if(mysqli_query($con,$s))
{
	echo "<script>";
	echo "alert('order sent to delivery boy');";
	echo "location='adm1_page.php';";
	echo "</script>";
}
else
{
echo "Not updated ";
}

?>
</head>
<body>
<form action ="" method="get">
<table>
<tr>
<td></td>
<td><input type="hidden" value="<?php echo $m; ?>" name="txt4"></td>
<td><input type="hidden" value="<?php echo $e; ?>" name="txt5"></td>
<tr>

</form>
</table>
</body>
</html>