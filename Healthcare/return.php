<!DOCTYPE html>
<html>
<head>
<title>ONLINE MOBILE SHOPPING</title>
	<style>
		
		body{
      background-image: url("w.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
	</style>
</head>
<?php include("cus_header.php")?>
<body>
	<?php
$pid=$_GET["pid"];
$q=$_GET["q"];
$st=$_GET["st"];
$ca=$_GET["ca"];
//session_start();
$_SESSION["ca"]=$ca;
$_SESSION["pid"]=$pid;
$_SESSION["q"]=$q;
$_SESSION["st"]=$st;
	echo"<center><h3>Reason for return</h3></center>";
	echo"<center><form action='return1.php' method='post'>
		<table><tr><td>Return statement</td><td><input type='text' name='ret' placeholder='Enter the reason' autocomplete='off'></td></tr>
	</table><p><input type='submit' name='sub' value='submit'></p>
</form></center>";
?>

</body>
</html>