<!DOCTYPE html>
<html>
<head>
<title>ONLINE MOBILE SHOPPING</title>
	<style>
		body{
			background-image: url("w.jpg");
			background-repeat: no-repeat;
			background-size: 1500px;
		}
			 
	</style>
</head>
<?php include("admin_header.php")?>
<body><div class="mydiv">

<center><h2 class="color">Purchase Details</h2>
	<h3 class="color">Choose the category to check the purchase details</h3>
	<form action="purchase_back.php" method="post">
		<table><tr><th class="color"> CATEGORY</th><td><select name="sel" class="box"><option value="Pending">Pending</option>
			<!--<option value="Delivered">Delivered</option>-->
			<!--<option value="Ordered">Ordered</option>-->
			<option value="Return">Return</option>
			<option value="Cancel">Cancel</option></select></td>
			<th class="color " colspan="2"><input type="submit" name="sub" value="submit"></th></tr></table>
	</form>
</center>
</body><br><br><br><br><br><br><br><br><br><br><br>
<?php
// include("footer.php")?>
</html>