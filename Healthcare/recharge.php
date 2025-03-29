<?php
session_start();
       $s=$_SESSION["id"];			
?>

<?php include("cus_header.php")?>
<form action ="acd.php" method="get">

<?php
//include "cheader.php";
$s=$_SESSION["id"];	
$con=mysqli_connect("localhost:3306","root","","project");
if(!$con)
{
die("ERROR".mysqli_error());
}
$t="select * from customer where cuid='$s'";
//echo $t;
$ret=mysqli_query($con,$t);

if(mysqli_num_rows($ret)>0)
{
while ($x=mysqli_fetch_assoc($ret))
	{
	
	$a=$x['cuid'];
	$c=$x['wallet'];
	
	
	
	
	?>
	<table align='center'  cellspacing="20" cellpadding="10" width="30" height="30">
	<tr>
	<td>Add_balance</td>
	<td><input type="text" name="txt1" value=<?php echo $c;?> ></td>
	</tr>
	
	<tr>
	<td><input type="submit" name="upd" value="submit"></td>
	</tr>
	</table>
	<?php
}
}
?>
