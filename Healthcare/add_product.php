
<?php include("AdminHeader.php")?>
<body>
<main id="main">


    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding" style="margin:100px 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2 >ADD NEW MEDICINE</h2>
            </div>
          </div>
        </div>
       
          <div >

<form  action="file_upload2.php" method="post" enctype="multipart/form-data">
	
<table cellspacing="20px" cellpadding="20px" style="margin:10px auto;">





		<tr><th class="color">Select Category:</th><td><select name="sel" class="box" >
			<?php
			$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
           
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sql="select *from category";
$retval=mysqli_query($conn,$sql);
if(mysqli_num_rows($retval)>0)
{
	while($row=mysqli_fetch_assoc($retval))
	{
		$cn=$row["categoryname"];
		echo"<option value='$cn'>$cn</option>";
	}
}

		 ?></select></td></tr>
	<tr><th class="color">Medicine Name:</th><td><input type="text" name="proname" placeholder="Enter the product"></td></tr>
	<tr><th class="color">Expiry date:</th><td><input type="date" name="edate" ></td></tr>
	<tr><th class="color">Image:</th><td><input type="file" name="image_file"></td></tr>
<tr><th class="color">Price:</th><td><input type="text" name="price" placeholder="Enter the price"></td></tr>
<tr><th class="color">Stock:</th><td><input type="text" name="stack" placeholder="Enter the Inventory"></td></tr>
<tr><th class="color">Description:</th><td><textarea name="dest"></textarea></td></tr>

<tr>

	<td class="color" colspan="2"><input type="submit" name="sub" value="Add"></td>
	</tr>
	</table>
</form></center>
</body>
</html>