<!DOCTYPE html>
<html>
<head>
	<title>Purchase back</title>
	<style>
		body{
			background-image: url("back.jpg");
			background-repeat: no-repeat;
			background-size: 1500px;
		}
			
	</style>
</head>
<?php include("admin_header.php") ?>
<body>
<table align='center'  cellspacing="20" cellpadding="10" width="100%" height="30">
<?php
	if(isset($_POST["sub"]))
	{
		//session_start();
       //$s=$_SESSION["id"];
		$se=$_POST["sel"];
		echo"<center><h2>Details of status"." ".$se."</h2></center>";
		$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sql="select * from cart join product on cart.pid=product.pid where db='0' and status='$se'";
//echo $sql;
//echo $se;
$retval=mysqli_query($conn,$sql);
if(mysqli_num_rows($retval)>0)
{
$i=1;
echo '<tr>';
	while($row=mysqli_fetch_assoc($retval))
	{
		$pi=$row["productimage"];
		$ca=$row["caid"];
		$cui=$row["cuid"];
		$pn=$row["pname"];
		$pr=$row["price"];
		$q=$row["quantity"];
		$to=$row["totalprice"];
		$cm="";
		$cmo="";
        $sql1="select  customermail,customerphone from customer where cuid='$cui'";
        //echo $sql1;
        $retval2=mysqli_query($conn,$sql1);
		if(mysqli_num_rows($retval2)>0){

			while($row=mysqli_fetch_assoc($retval2)){
				$cm.=$row["customermail"];
				//echo "Mail".$cm;
				$cmo.=$row["customerphone"];
		        //echo $cmo;
        
			}
   	 	}
   	 echo "<tr><td><img src='$pi' style='height:200px;width:200px'></td>
		<td><h3 class='color'>Productname</h3><h3>$pn</h3></td>
		<td><h3 class='color'>Customer ID</h3><h3>$cui</h3></td>
		<td><h3 class='color'>Customer mail</h3><h3>$cm</h3></td>
		<td><h3 class='color'>Price</h3><h3>$pr</h3></td>
		<td><h3 class='color'>Quantity</h3><h3>$q</h3></td>
		<td><h3 class='color'>Totalprice</h3><h3>$to</h3></td></tr>";

   	}
   }
   	 else
   	 {
   	 	echo"<h2>No Products in this Status".$se."</h2>";
   	 }
   mysqli_close($conn);
}
	?>
	<tr>
</tr>
</table>
</body>
</html>
