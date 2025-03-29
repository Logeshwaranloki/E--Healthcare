


<?php
if(isset($_GET["reg"]))
{
$Name=$_GET["txt1"];
$Mobile=$_GET["txt2"];
$Mail=$_GET["txt3"];
$Address=$_GET["txt4"];
$State=$_GET["state"];
$Password=$_GET["txt5"];
$Member=$_GET["txt6"];

include "config.php";



$s="insert into customer (customername,customermail,customerphone,customeraddress,customerstate,password,member) values ('$Name','$Mail','$Mobile','$Address','$State','$Password','$Member')";

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
<?php include("commonheader.php")?>
<body >

<form action ="" method="get">
<table class="content" cellspacing="20px" cellpadding="25px" style="width:500px;">



<tr>
<th colspan="2" class="thead" >NEW REGISTRATION</th></tr>

<tr>
<th>Name</th>
<td><input type="text" name="txt1" placeholder="Enter the Name"></td>
</tr>

<tr>
<th>Mobile</th>
<td><input type="text" name="txt2" placeholder="Enter Mobile number"></td>
</tr>
<tr>
<th>Mail Id</th>
<td><input type="text" name="txt3" placeholder="Enter your Mail id"></td>
</tr>

<tr>
<th>state</th>
<td>
<select name="state" id="state">
		<option value="-">Select Your </option>
		<option value="Tamilnadu">Tamilnadu</option>
		<option value="Kerala">Kerala</option>
		<option value="Andra">Andrapradesh</option>
		<option value="Karnataka">Karnataka</option>
		<option value="Delhi">Delhi</option>
		<option value="Uthrapradesh">Uthrapradesh</option>
		<option value="Punjab">Punjab</option>
<!--<option value="Delivery boy">Delivery boy</option>-->
</select>
</td>
</tr>

<tr>
<th>Address</th>
<td><textarea cols="20" rows="4" name="txt4" required></textarea></td>

</tr>
<tr>
<th>Password</th>
<th><input type="password" name="txt5" placeholder="Enter Password" ></th>
</tr>
<tr>
<th>Memeber</th>
<th><select name="txt6">
<option value="">Select Memeber</option>
<option value="customer">Customer / User</option>
<option value="hp">Healthcare Providers</option>
</select></th>
</tr>

<tr>
<th colspan='2'><input type="submit" name="reg" value="Submit"></th>
</tr>
</table>
</form>
