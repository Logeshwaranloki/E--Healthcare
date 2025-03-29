<!DOCTYPE html>
<html>
<head>
<title>ONLINE MOBILE SHOPPING</title>
	<style>
		h2{
			font-family: Algerian;
			color: red;
			text-shadow: 2px 2px black;
			font-size: 30px;
		}
		
		body{
			background-image: url("w.jpg");
			background-repeat: no-repeat;
			background-size: 1500px;
		}
		#p1,#p2,#p3{
			font-family: algerian;
			font-size: 20px;
		}
		input[type=text]
		{
    	border:2px solid red;
    }
		input[type=password]
		{
			border:2px solid red;
    	    
		}

	</style>
</head>
<?php include("header.php") ?>
<body style="background-image:url('images/ni.jpg');
background-size:cover;
backgroung-width:100%">
	<center>
	<h2>Welcome Admin</h2>
	<p id="p1">Login</p>
	<form action="adm_page.php" method="post">
	<p id="p2">UserName<input type="text" name="adname" placeholder="Enter the username" required autofocus="on" ></p>
	<p id="p3">Password<input type="password" name="adpass" placeholder="Enter the pasword" required></p>
	<p><input type="submit" name="sub" value="submit"></p>
	</form>
	
	</center>
</body><hr>
<?php
// include("footer.php") ?>
</html>

