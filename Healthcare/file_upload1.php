
<?php
	if(isset($_POST["sub"]))
	{
		$fn=$_POST["catname"];
		
      include "config.php";
	
		
		$sql= "INSERT INTO category(categoryname) VALUES('$fn')";
		if(mysqli_query($con,$sql))
		{
			echo"<script>alert('category added  successully');location='add_category.php'</script>";
		}
		
		mysqli_close($con);
	}
	?>