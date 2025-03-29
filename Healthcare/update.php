
	<?php include("AdminHeader.php");
if(isset($_POST["up"]))
{
$pid=$_POST["pid"];
$sta=(int)$_POST["st"];
$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sql="select stack from product where pid='$pid'";
$retval=mysqli_query($conn,$sql);
if(mysqli_num_rows($retval)>0)
{
	while($row=mysqli_fetch_assoc($retval))
	{
		$st=(int)$row['stack'];

		$std=$st+$sta;
		//echo $std;
        $sql1="update product set stack='$std' where pid='$pid'";
		$retval1=mysqli_query($conn,$sql1);
		if($retval1>0)
		{
			echo"<script>alert('Stock Updated Successfully');location='manage_products.php'</script>";
		}
    	else
    	{

    		echo"not updated";
    	}
		
		}
	}
	mysqli_close($conn);
}	

?>
<main id="main">


    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding" style="margin:100px 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2 >UPDATE STOCK</h2>
            </div>
          </div>
        </div>
       
          <div >
<table cellspacing="20px" cellpadding="20px" style="margin:10px auto;">

	<?php
	$pi=$_GET["txt1"];
	echo "<center><form action=''method='post'><tr><th class='color'>Product-Id</th><td><input type='text' value='$pi' readonly name='pid'></td></tr>
<tr><th class='color'>Stock value</th><td><input type='number' placeholder='Enter the new Stock' name='st'></td></tr>
 <tr><th colspan='2' class='color'><input type='submit' value='Update' name='up'> </th></tr> </table></form>
	</center>";
	?>
	
</body>
</html>