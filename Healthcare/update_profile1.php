<!DOCTYPE html>
<html>
<head>
<title>ONLINE MOBILE SHOPPING</title>
	<!--<style>
		body{
			background-image: url("b.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
		input[type=text]
		{
			border-color: grey;
		}
		input[type=mail]
		{
			border-color: grey;
		}
		textarea
		{
			border-color: grey;
		}
		select{
			border-color: grey;
		}
	</style>-->
	
	<script>
function myfun(){
var a=document.getElementById("mobilenumber").value;
if(a==""){
document.getElementById("messages").innerHTML="**PLEASE FILL MOBILE NUMBER";
return false;
}
if(isNaN(a)){
document.getElementById("messages").innerHTML="**ENTER NUMERIC VALUE";
return false;
}
if(a.length>10){
document.getElementById("messages").innerHTML="**NUMBER MUST BE 10 digit";
return false;
}
if(a.length<10){
document.getElementById("messages").innerHTML="**NUMBER MUST BE 10 digit";
return false;
}
if((a.charAt(0)!=9) && (a.charAt(0)!=8) && (a.charAt(0)!=7) && (a.charAt(0)!=6)) {
document.getElementById("messages").innerHTML="**NUMBER MUST start with  6,7 8 9";
return false;
}
}



</script>


	<?php
	if(isset($_POST["sub"]))
	{
		
		$Name=$_POST["txt1"];
		$Mobile=$_POST["mob"];
		$Mail=$_POST["txt2"];
		$Address=$_POST["add"];
		$Discrtct=$_POST["sel"];
		$Password=$_POST["txt3"];
		
	$con=mysqli_connect("localhost","root","","project");
if(!$con)
{
die("Error ".mysqli_error());
}
$s="insert into customer (customername,customermail,customerphone,customeraddress,customerstate,password) values ('$Name','$Mail','$Mobile','$Address','$Discrtct','$Password')";
if(mysqli_query($con,$s))
{
echo "<script>alert('Registration Success');location='loginc.php';</script>";

}
else
{
echo "Registeration Failed";

}
}
?>

</head>
<?php include("header.php") ?>
<body style="background-image:url('images/33.jpg');
background-size:cover;
backgroung-width:100%">
<div class="mydiv">


<center><h2>REGISTRATION</h2></center>
<form onsubmit="return myfun()" method="post">
<!--
<form action="" method="post">-->
	<center>
		<table>
		<tr>
		<th class="color">Name</th>
		<td><input type="text" name="txt1" placeholder="Enter Name" required autofocus="on"></td>
		</tr>
		<tr>
		<th class="color">Mail</th>
		<!--<td><input type="mail" name="ma" placeholder="Enter  mail id" required></td>-->
		<td><input type="email"  name="txt2"placeholder="Enter  mail id" oninput="result.value=sent. value"> </td>

		</tr>
		<tr>
		<th class="color">password</th>
		<td><input type="password" name="txt3" placeholder="Enter Password" required></td>
		</tr>
		
	<tr>	
		
 <th class="color">Mobile Number</th> 
 <td><input type="text" id="mobilenumber" name="mob" placeholder="Enter  mobile number" value=""></td>
<td><span id="messages">  </span><br></br></td>
<!--<span id="messages "style="color:red;"> </span><br></br>-->
</tr>

		
		
		<!--<tr>
		<td>Mobile</td>
		
		
		<td><input type="text" name="mob" placeholder="Enter 10 digit mobile number" pattern="[0-9] {10}"    maxlength="10" required></td>
		</tr>-->
		<tr>
		<th class="color">Address</th>
		<td><textarea cols="20" rows="4" name="add" required></textarea></td>
		</tr>
		<tr>
		<th class="color">Choose District</th>
		<td><select name="sel">
		<option value="Madurai">Madurai</option>
		<option value="Chennai">Chennai</option>
		<option value="Coimbatore">Coimbatore</option>
		<option value="Theni">Theni</option>
		
		</select></td></tr>
	<tr>

	<td colspan="2" class="color"><input type="submit" name="sub" value="Register"></td>
	</tr>
	</table>
</form>
</div>
	</center>
	
</body>
</html>