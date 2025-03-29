
<?php include("HPHeader1.php");?>
<body>
	<center>
	<form action="" method="get">
		<table class="content" cellspacing="40px" cellpadding="25px">
<tr>
<th colspan="2" class="thead" >MY PROFILE</th></tr>
<?php
$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sel="select * from customer where cuid='$id'";

$retval=mysqli_query($conn,$sel);
if(mysqli_num_rows($retval)>0)
{
	$i=1;
	

	while($row=mysqli_fetch_assoc($retval))
	{
		
		
		$mail=$row["customermail"];
		$phone=$row["customerphone"];
		$add=$row["customeraddress"];
		$state=$row["customerstate"];
		$pass=$row["password"];

		
		
	?>
<tr>
<th>Name</th>
<td><input type="text" name="txt1" value='<?php echo $name;?>' readonly></td>
</tr>

<tr>
<th>Mobile</th>
<td><input type="text" name="txt2" value='<?php echo $phone;?>'></td>
</tr>
<tr>
<th>Mail Id</th>
<td><input type="text" name="txt3" value='<?php echo $mail;?>'></td>
</tr>

<tr>
<th>state</th>
<td>

	<input type="text" name="state" value='<?php echo $state;?>'>
</td>
</tr>

<tr>
<th>Address</th>
<td><textarea name="txt4"><?php echo $add;?></textarea></td>

</tr>
<tr>
<th>Password</th>
<th><input type="password" name="txt5" value='<?php echo $pass;?>' ></th>
</tr>
<tr>	
<?php
		
	}
   	 }
  

?>
<tr>
<th colspan='2'><input type="submit" name="reg" value="Submit"></th>
</tr>
</table>
</body>
</html>

<?php
if(isset($_GET["reg"]))
{
$Name=$_GET["txt1"];
$Mobile=$_GET["txt2"];
$Mail=$_GET["txt3"];
$Address=$_GET["txt4"];
$State=$_GET["state"];
$Password=$_GET["txt5"];


include "config.php";



$s="update customer set customername='$Name',customermail='$Mail',customerphone='$Mobile',customeraddress='$Address',customerstate='$State',password='$Password' where cuid='$id'";


if(mysqli_query($con,$s))
{
echo "<script>alert('Profile Updated Successfully');</script>";

}
else
{
echo "Update Failed";

}
}
?>