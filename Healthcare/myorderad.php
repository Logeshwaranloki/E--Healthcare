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
		table{
			font-family: algerian;
			text-shadow: 2px 2px 2px red;
		}
	</style>
</head>
<?php include("admin_header.php")?>
<body>
<center><h2>Purchase Details</h2>
	<h3>Choose the category to check the purchase details</h3>
	<form action="myorderad2.php" method="post">
		<table><tr><td>Choose the category</td><td><select name="sel"><option value="Pending">Pending</option>
			<option value="Delivered">Delivered</option>
			<option value="Ordered">Ordered</option>
			<option value="Return">Return</option>
			<option value="Cancel">Cancel</option></select></td></tr></table>
			<p><input type="submit" name="sub" value="submit"></p>
	</form>
</center>
</body><br><br><br><br><br><br><br><br><br><br><br><hr>
<?php include("footer.php")?>
</html>