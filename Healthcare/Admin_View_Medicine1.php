
<?php include("AdminHeader.php");
$sid=$_GET["sid"];
?>
<main id="main">


    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding" style="margin:100px 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2 >ALL VIDEOS</h2>
            </div>
          </div>
        </div>
       
          <div >
<table cellspacing="20px" cellpadding="20px" style="margin:10px auto;" id="t1">

<?php
$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sel="select * from product inner join sm on product.pid=sm.pid where sm.sid='$sid'";
$retval=mysqli_query($conn,$sel);
if(mysqli_num_rows($retval)>0)
{
	$i=1;
	
	echo "<tr>";
	while($row=mysqli_fetch_assoc($retval))
	{
		
		$pid=$row["pid"];
		$pn=$row["productname"];
		$pi=$row["productimage"];
		$pr=$row["price"];
		$dt=$row["description"];
		$edt=$row["edate"];
		
		//echo "<td><img src='Images/$e' style='height:200px;width:200px'width='200'><br><h3>Brand: $b</h3> <p> $c<br> </p><h3>Price: $d</h3> <h3>Available stock: $f</h3> <a href='addcart.php?data=$a &&data2=$b&&data3=$d&&data4=$f' >ADD CART</a></td>";
		
		echo "<td><img src='$pi' style='height:200px;width:200px'><br><p><b> PRODUCT NAME :</b> $pn</p> <p><b>DESCRIPTION:</b>$dt<br> </p><p><b>PRICE: $pr</b></p><p><b>EXPIRY DATE: $edt</b></p> <p>
		</p></td>";
		if($i++%5==0)
		echo '</tr><tr>';
	}
   	 }
  

?>

<tr>
</tr>
</table>
</body>
</html>