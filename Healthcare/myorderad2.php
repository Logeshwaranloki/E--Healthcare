
<?php include("AdminHeader.php") ?>
<main id="main">


    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding" style="margin:100px 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2 >ORDERED MEDICINES</h2>
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
//$sql="select * from cart join product on cart.pid=product.pid where db='0' and status='Ordered'";
$sql="select * from cart join product on cart.pid=product.pid join customer on customer.cuid=cart.cuid where status='Ordered'";

//echo $sql;
$retval=mysqli_query($conn,$sql);
if(mysqli_num_rows($retval)>0)
{

echo '<tr>
<th>Product Image</th>
<th>Product Name</th>
<th>Customer Name</th>
<th>Mobile Number</th>
<th>Price</th>
<th>Quantity</th>
<th>Total Price</th>
</tr>';
	while($row=mysqli_fetch_assoc($retval))
	{
		$pi=$row["productimage"];
		$ca=$row["cartid"];
		$cui=$row["cuid"];
		$pn=$row["productname"];
		$pr=$row["price"];
		$q=$row["quantity"];
		$to=$row["total"];
		$cm="";
		$cmo="";
        $sql1="select  * from customer where cuid='$cui'";
        //echo $sql1;
        $retval2=mysqli_query($conn,$sql1);
		if(mysqli_num_rows($retval2)>0){

			while($row=mysqli_fetch_assoc($retval2)){
				$cm.=$row["customername"];
				//echo "Mail".$cm;
				$cmo.=$row["customerphone"];
		        //echo $cmo;
        
			}
   	 	}
	
	
   	 echo "<tr class='color'><td><img src='$pi' style='height:150px;width:120px'></td>
		<td> $pn</th>
		
		<td> $cm</td>
		<td>$cmo</td>
		<td>$pr</td>
		<td> $q</td>
		<td>$to</td>
		";
		//<td><h3>Delivery boy</h3><a href='ordd.php?m=$ca' >CHOOSE_DBOY</a></td></tr>

   	}
   }
   	 else
   	 {
   	 	
/*echo "<script>";
echo "alert(' Orderded products not found');";
echo "location='purchase_details.php';";
echo"</script>";*/
   	 }
	?>
	<tr>
</tr>

</table>
</body>
</html>
