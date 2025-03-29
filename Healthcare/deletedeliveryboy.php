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
<center><h2>DELETE    DELIVERY BOY </h2></center>
<div class="mydiv">
<center>
		<table align='center'  cellspacing="20" cellpadding="10" width="100%" height="30">

		<tr class="color"><th>ID</td> <th>NAME</th> <th>MOBILE</th> <th>MAIL ID</th> <th>MEMBER</th> <th>DELETE</th></tr>
<?php
//include "shheader.php";
$con=mysqli_connect("localhost:3306","root","","project");
if(!$con)
{
die("ERROR".mysqli_error());
}
$t="select * from regdb where rid='$id' and member='Delivery boy' and status='0' ";
//echo $t;
$ret=mysqli_query($con,$t);

if(mysqli_num_rows($ret)>0)
{
while ($x=mysqli_fetch_assoc($ret))
 	{
	$a=$x['name'];
	$b=$x['mobile'];
	$c=$x['mailid'];
	$d=$x['member'];
	$e=$x['rid'];
	$f=$x['id'];
	
echo "<tr class='colo'><td>$e</td> <td>$a</td> <td>$b</td> <td>$c</td> <td>$d</td> <td><a href='deletedb.php?con=$f'><p> DELETE</p</a></td></tr>";

	}
}
?>

</table>
</center>
</div>

</body>
</html>























