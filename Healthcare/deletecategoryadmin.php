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


</style>
</head>
<?php include("admin_header.php")?>
	</style>
</head>
<body>
<center><h2>DELETE   CATEGORY</h2></center>
<div class="mydiv">
<center>
		<table align='center'  cellspacing="20" cellpadding="10" width="30%" height="30">

		<tr class="color"><th>ID</td> <th>CATEGORY</th><th>DELETE</th></tr>
<?php
//include "shheader.php";
$con=mysqli_connect("localhost:3306","root","","project");
if(!$con)
{
die("ERROR".mysqli_error());
}
$t="select * from category ";
//echo $t;
$ret=mysqli_query($con,$t);

if(mysqli_num_rows($ret)>0)
{
while ($x=mysqli_fetch_assoc($ret))
 	{
	$a=$x['cid'];
	$b=$x['categoryname'];
	
	
echo "<tr class='color'> <td>$a</td> <td>$b</td>  <td><a href='categorydelad.php?con=$a'><p> DELETE</p</a></td></tr>";
//echo "<tr class='colo'><td>$e</td> <td>$a</td> <td>$b</td>  <td><a href='deletedb.php?con=$f'><p> DELETE</p</a></td></tr>";

	}
}
?>

</table>
</center>
</div>

</body>
</html>