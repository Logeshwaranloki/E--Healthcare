
<?php include("AdminHeader.php");
$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$id=$_GET["id"];
?>
<main id="main">


    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding" style="margin:100px 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2 >EDIT STOCK</h2>
            </div>
          </div>
        </div>
       
          <div >

<form action ="" method="post">
<table cellspacing="20px" cellpadding="20px" style="margin:10px auto;">

<?php

$sel="select * from product where pid=$id";

$retval=mysqli_query($conn,$sel);
if(mysqli_num_rows($retval)>0)
{
	while($row=mysqli_fetch_assoc($retval))
	{
		
		
		$pid=$row["pid"];
		$pn=$row["productname"];
		$pi=$row["productimage"];
		$pr=$row["price"];
		$dt=$row["description"];
		$edt=$row["edate"];
		$st=$row["stack"];
		?>
<tr><th class="color">Medicine Id:</th><td><input type="text" name="proid" value="<?php echo $pid;?>" ></td></tr>
<tr><th class="color">Medicine Name:</th><td><input type="text" name="proname" value="<?php echo $pn;?>" ></td></tr>
	<tr><th class="color">Expiry date:</th><td><input type="date" name="edate" value="<?php echo $edt;?>"  ></td></tr>
<tr><th class="color">Price:</th><td><input type="text" name="price" value="<?php echo $pr;?>" ></td></tr>
<tr><th class="color">Stock:</th><td><input type="text" name="stack" value="<?php echo $st;?>"  ></td></tr>
<tr><th class="color">Description:</th><td><textarea name="dest"><?php echo $dt;?> </textarea></td></tr>

<tr>	
<?php
		
		/*echo "<tr>
		<td>My Id </td><td>$id</td></tr>
		<tr><td>Name</td><td>$pn</td></tr>
		<tr><td>Mobile Number </td><td>$pr</td></tr>
		<tr><td>Mail Id </td><td>$pi</td></tr>
		<tr><td>Address </td><td>$address</td></tr>
		<tr><td>State </td><td>$state</td>
		<tr><td>Password </td><td>$pass</td>
		</tr>";*/
		
	}}
?>

<tr>
<th colspan='2'><input type="submit" name="reg" value="Update Profile"></th>
</tr>

</table>
</form>
<?php
if(isset($_POST["reg"]))
{
$pi=$_POST["proid"];
$pn=$_POST["proname"];
		$edate=$_POST["edate"];
 $pr=$_POST["price"];
       $st=$_POST["stack"];
       $dt=$_POST["dest"];
include "config.php";



$sql= "update product set productname='$pn',price='$pr',stack='$st',description='$dt',edate='$edate' where pid='$pi'";
//echo $s;

if(mysqli_query($conn,$sql))
{
echo "<script>alert('Stock Updated Successfully');location='admin_view_Medicine.php'</script>";

}
else
{
echo "Update Failed";

}
}
?>