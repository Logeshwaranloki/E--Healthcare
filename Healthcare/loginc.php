
<?php
session_start();
 include("commonheader.php");
 include("config.php");


if(isset($_GET["adm"]))
{

$m=$_GET["txt1"];
$p=$_GET["txt2"];
$mem=$_GET["txt6"];



$t="select * from customer where customermail='$m' and password='$p'and member='$mem' ";
echo $t;
$ret=mysqli_query($con,$t);
if(mysqli_num_rows($ret)>0)
{
	while($x=mysqli_fetch_assoc($ret))
		{
		$Name=$x['customername'];
		$id=$x['cuid'];


			$_SESSION["id"]=$id;
			$_SESSION["name"]=$Name;
			
			if($mem=="hp")
			{
			
			echo "<script>alert('Login Successfull');location='hphome.php';</script>";
			}
			else{
				
		
			echo "<script>alert('Login Successfull');location='customerhome.php';</script>";
			}
			
			
			}
		   

		}
		else if($mem=="admin")
		{
			if($m=="admin123@gmail.com" && $p=="Admin")
			{
						echo "<script>alert('Login Success');location='adm1_page.php';</script>";

			}
			else{
				//	echo "<script>alert('Username or Password is Incorrect');location='loginc.php';</script>";	
				
			}
			
		}
	else{
		
		//echo "<script>alert('Username or Password is Incorrect');location='loginc.php';</script>";
	}
}

?>
 <body>
<form action=""method="get">

<table class="content" cellspacing="20px" cellpadding="30px">



<tr>
<th colspan="2" class="thead" >LOGIN</th></tr><tr>
<th class="color">MAIL ID</th>

<!--
<td><input type="text" name="txt1" placeholder="Enter Mail id"  ></td>-->
<td><input type="email"  name="txt1"placeholder="Enter  mail id" oninput="result.value=sent. value"> </td>

</tr>
<tr>
<th class="color">PASSWORD</th>
<td><input type="password" name="txt2" placeholder="Enter Password" required></td>
</tr>

<tr>
<th>Memeber</th>
<th><select name="txt6">
<option value="">Select Memeber</option>
<option value="admin">Administrator</option>
<option value="customer">Customer / User</option>
<option value="hp">Healthcare Providers</option>
</select></th>
<tr>
<th colspan="2" ><input type="submit" name="adm" value="Login"></th>
</tr>
<tr>


<!--<td colspan="2"><a href='forget.php?contacts=$a'><h4><center>Forget Password</center></h4></a></td>
-->
</tr>
</table>

  </body>

 