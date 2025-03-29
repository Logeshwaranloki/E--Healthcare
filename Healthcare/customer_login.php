<!DOCTYPE html>
<html>
<head>
<title>ONLINE MOBILE SHOPPING</title>
	<style>
		#h{
			color: white;
			font-size: 30px;
			font-family: algerian;
			text-shadow: 2px 2px black;
		}
		h2{
			font-size: 30px;
			color: purple;
		}
		body{
			background-image: url("w.jpg");
			background-repeat: no-repeat;
			background-size: 1500px;
		}
		p{color: black;
			font-size: 20px;
			font-family: algerian;
			
		}
			
	</style>
</head>
<?php include("header.php")?>
<body style="background-image:url('images/lp.jpg');">
<center>
	<h3 id="h">Welcome</h3>
	<h2>Login with mail</h2>
	<form action="cus_loginback.php" method="post">
	<p>Enter the mail id</p>
    <p><input type="mail" name="mail"></p>
    
   
    <p><input type="submit" name="sub" value="submit"></p></form>
	    <td><a href='forget.php?contacts=$a'>forget_password</a></td>
		<?php
   
?>

</center>
</body>
<?php
 //include("footer.php")?>
</html>