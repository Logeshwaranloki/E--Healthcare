
<?php
session_start();
$id=$_SESSION["id"];
include "admin_header.php";			
?>
<html>
<head>
	<style>
	 .color {
        color: white;
      }
	
	
	</style>
</head>
<body>
<?php
if(isset($_GET["reg"]))
{
$Name=$_GET["txt1"];
$Mobile=$_GET["txt2"];
$Mail=$_GET["txt3"];
$Member=$_GET["member"];
$Password=$_GET["txt4"];
$Address=$_GET["txt5"];

$con=mysqli_connect("localhost:3306", "root","","project");
if(!$con)
{
die("Error ".mysqli_error());
}

$s="insert into regdb (rid,name,mobile,mailid,member,password,address) values ('$id','$Name','$Mobile','$Mail','$Member','$Password','$Address')";
//echo "Connection Succeeded";
if(mysqli_query($con,$s))
{
echo "<script>alert('Registration Success');</script>";

}
else
{
echo "Registeration Failed";

}
}
?>


</head>
<h2 class="color"><center>Add delivery boy</center></h2>

<body>
<div class="mydiv">
<form action ="" method="get">
<center>
		<table>
		<tr>
<th class="color">Name</th>
<td><input type="text" name="txt1" placeholder="Enter the Name"></td>
</tr>

<tr>
<th class="color">Mobile</th>
<td><input type="text" name="txt2" placeholder="Enter Mobile number"></td>
</tr>
<tr>
<th class="color">Mail Id</th>
<td><input type="text" name="txt3" placeholder="Enter your Mail id"></td>
</tr>



<tr>
<th class="color">Password</th>
<th><input type="password" name="txt4" placeholder="Enter Password" ></th>
</tr>
<tr>
<th class="color">Address</th>
<td><textarea name="txt5"></textarea></td>
</tr>
<tr>
<th><input type="hidden" name="member" value="Delivery boy" readonly></th>
</tr>
<tr>
<th colspan='2'><input type="submit" name="reg" value="Submit"></th>
</tr>
</table>
</center>
</form>
</div>
</body>
</html>