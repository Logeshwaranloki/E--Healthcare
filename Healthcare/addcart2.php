<?php include("cus_header2.php")?>
	<?php
	$pid=$_GET["pi"];
	$price=$_GET["price"];

    if(isset($_POST["sub"]))
    {
     
   
     $pid=$_POST["pid"];
     $q=$_POST["q"];
     $price=$_POST["price"];
    $total=$q*$price;
     
     $conn=mysqli_connect("localhost","root","","project");
     if($conn==false)
     {
     	die("ERROR:Could not connect".mysqli_conncet_error());
     }
     $sel="insert into cart(cuid,pid,quantity,total) values ('$id','$pid','$q','$total')";
    if(mysqli_query($conn,$sel))
    {
    	echo"<script>alert('Add to Cart successfully');location='customer_category.php'</script>";
    }
    
    mysqli_close($conn);
     }
	?>
</head>

<body>
<center>

	<?php
	
	
?>

<form action='' method='post'>
<table class="content" cellspacing="20px" cellpadding="30px">

	<tr><td>Product Id </td>
	<td><input type='text' name='pid' value=<?php echo $pid; ?> readonly  ></td>
	</tr>
	<tr><td>Product Price</td>
	<td><input type='text' name='price' value=<?php echo $price; ?> readonly ></td>
	</tr>
	<tr><th class="color">Quantity</th><td><input type='number' name='q'   ></td></tr>
	<tr>
    <td colspan='2'><input type='submit' name='sub' value='Add Medicine to cart'></td>
	</tr>
	</table>
	</form>
</center>
</body>
</html>