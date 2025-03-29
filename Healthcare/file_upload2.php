
<?php


	if(isset($_POST["sub"]))
	{
		$cc=$_POST["sel"];
		$pn=$_POST["proname"];
		$edate=$_POST["edate"];
		$dest="images/";
       $target=$dest.basename($_FILES['image_file']['name']);
       $pr=$_POST["price"];
       $st=$_POST["stack"];
       $dt=$_POST["dest"];
       $conn=mysqli_connect("localhost","root","","project");
       if($conn==false)
		{
			die("ERROR:Could Not connect".mysqli_connect_error());
		}

		if(move_uploaded_file($_FILES['image_file']['tmp_name'],$target))
		{
				
$sql= "INSERT INTO product(choosecategory,productname,productimage,price,stack,description,edate) VALUES('$cc','$pn','$target','$pr','$st','$dt','$edate')";
		
		if(mysqli_query($conn,$sql))
		{
			echo"<script>alert('Product upload successully');location='add_product.php'</script>";
			
		}
		}
		mysqli_close($conn);
	}
	?>