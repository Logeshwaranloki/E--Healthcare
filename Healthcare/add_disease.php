
<?php include("AdminHeader.php")?>
<main id="main">


    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding" style="margin:100px 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2 >ADD NEW DISEASE</h2>
            </div>
          </div>
        </div>
       
          <div >


<form  action="" method="post" enctype="multipart/form-data">
<table cellspacing="20px" cellpadding="20px" style="margin:10px auto;">



<tr>

	<tr><th class="color">Common Disease:</th><td><input type="text" name="catname" placeholder="Enter the category" autofocus="on"></td></tr>
		<tr><th class="color">Image:</th><td><input type="file" name="image_file"></td></tr>

	<tr>
<td colspan="2" class="color"><input type="submit" name="sub" value="Add"></td>
</tr>
</table>
	</form></center>
	</div>
</body>

<?php
	if(isset($_POST["sub"]))
	{
		$fn=$_POST["catname"];
		
      include "config.php";
	$dest="disease/";
       $target=$dest.basename($_FILES['image_file']['name']);
		echo $target;
		$sql= "INSERT INTO disease(categoryname,picture) VALUES('$fn','$target')";
		if(move_uploaded_file($_FILES['image_file']['tmp_name'],$target))
		{
		if(mysqli_query($con,$sql))
		{
			echo"<script>alert('Common Disease added  successully');location='add_disease.php'</script>";
		}
		}
		else
		{echo "Error";}
		mysqli_close($con);
	}
	?>
</html>