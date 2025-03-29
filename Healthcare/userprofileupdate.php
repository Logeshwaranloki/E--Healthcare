<html>
<head>

	<head>
	<body>
<?php
session_start();
$Name=$_SESSION["name"];
$sid=$_SESSION["id"];
$id=$_SESSION["rid"];
//echo $sid."hello";			
//echo $id"";			
//echo $Name;	
include"dboylink.php";		
?>
<form action ="updb.php" method="get">

<?php

$con=mysqli_connect("localhost:3306","root","","project");
if(!$con)
{
die("ERROR".mysqli_error());
}

$t="select * from regdb where id=$id";
$ret=mysqli_query($con,$t);

if(mysqli_num_rows($ret)>0)
{
while ($x=mysqli_fetch_assoc($ret))
	{
	
	$a=$x['id'];
	$b=$x['name'];
	$c=$x['password'];
	$d=$x['mobile'];
	$e=$x['mailid'];
	$f=$x['address'];
	
	
	?>
	<div class="mydiv">
	<h3 class="color" ><center>Update Profile</center></h3>
	
<center>
		<table>
	<tr>
	
	<td><input type="hidden" name="txt1" value="<?php echo $a;?>" readonly></td>
	</tr>
	<tr>
	<td class="color">Name</td>
	<td> <input type="text" name="txt2" value="<?php echo $b;?>" > </td>
	</tr>
	<tr>
	<td class="color">Password</td>
	<td> <input type="text" name="txt3" value="<?php echo $c;?>" > </td>
	</tr>
	<tr>
	<td class="color">Mobile</td>
	<td> <input type="text" name="txt4" value="<?php echo $d;?>" > </td>
	</tr>
	<tr>
	<td class="color">Mailid</td>
	<td> <input type="text" name="txt5" value="<?php echo $e;?>" > </td>
	</tr>
	<tr>
	<td class="color">Address</td>
	<td> <input type="text" name="txt6" value="<?php echo $f;?>" > </td>
	</tr>
	<tr>
	<td colspan="2" class="color"><input type="submit" name="upd" value="submit"></td>
	</tr>
		<table>

	<?php
}
}
?>
</center>
</body>
</html>