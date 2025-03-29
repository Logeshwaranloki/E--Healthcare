<html>
<head>
	
</head>
<body>
<?php
session_start();
$Name=$_SESSION["uname"];
$id=$_SESSION["id"];			
?>
<?php include("admin_header.php")?>

<form action ="upprofile1.php" method="get">

<?php

$con=mysqli_connect("localhost:3306","root","","project");
if(!$con)
{
die("ERROR".mysqli_error());
}

$t="SELECT * FROM admin WHERE id='$id'";
//echo $t;
$ret=mysqli_query($con,$t);

if(mysqli_num_rows($ret)>0)
{
while ($x=mysqli_fetch_assoc($ret))
	{
	
	$a=$x['id'];
	$b=$x['name'];
	$c=$x['password'];
	
	
	?>
		<h3 class="color"><center>Update Profile</center></h3>

	<div class="mydiv">

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
	<td colspan="2" class="color"><input type="submit" name="upd" value="submit"></td>
	</tr>
		</table>
</center>
	<?php
}
}
?>
</body>
</html>