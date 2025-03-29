<html>
<head>
<title>ONLINE MOBILE SHOPPING</title>
</head>
<body style="background-image:url('images/ni.jpg');
background-size:cover;
backgroung-width:100%">
<?php
session_start();
if(isset($_GET["adm"]))
{
	$Name=$_GET["txt1"];
	$Password=$_GET["txt2"];
	$Member=$_GET["member"];
	$con=mysqli_connect("localhost:3306","root","","project");
	if(!$con)
	{
		die("ERROR".mysqli_error());
		}
		$t;
		if($Member=="customer")
		{
			$t="select * from customer where customername='$Name' and  member='customer'";
			echo $t;
			
		}
		
			$ret=mysqli_query($con,$t);
			if(mysqli_num_rows($ret)>0)
			{
				while($x=mysqli_fetch_assoc($ret))
				{
					
					$Pass=$x['password'];
					$id=$x['cuid'];
					
					if($Password==$Pass)
					{
						$_SESSION["uname"]=$Name;
						$_SESSION["uid"]=$id;
						
						if($Name=="customername")
						{
							echo "<script>";
							echo "alert('Login Success');";
							//echo "location='customerhome.php';";
							echo"</script>";
						}
						else{
							echo "<script>";
							echo "alert('wrong password');";
							//echo "location='customerhome.php';";
							echo"</script>";
						}
					}
				}
			}

}
?>


<?php include("header.php") ?>

<h2 style="color:#60531C;"><b><i><center>CUSTOMER LOGIN</i></b></center></h2>

<form action=""method="get">
<table align='center'  cellspacing="30" cellpadding="10" width="30" height="30">
<tr>
<th>Name </th>
<th><input type="text" name="txt1" placeholder="Enter Name"  ></th>
</tr>
<tr>
<th>Password</th>
<th><input type="password" name="txt2" placeholder="Enter Password" ></th>
</tr>

<tr>
<th>Memeber</th>
<th><input type="text" name="member" value="customer" readonly></th>
</tr>



<tr>
<th colspan="2"><input type="submit" name="adm" value="submit"</button></th>
</tr>
</table>
</body>
</html>