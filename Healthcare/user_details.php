
<?php include("AdminHeader.php")?>
<main id="main">


    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding" style="margin:100px 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2 >USER DETAILS</h2>
            </div>
          </div>
        </div>
       
          <div >
<table cellspacing="20px" cellpadding="20px" style="margin:10px auto;" id="t1">


<tr >  <th class='color'> Name</th> <th class='color'>Address</th> <th class='color'>Mail</th> <th class='color'>Mobile</th> </tr>
<div class="mydiv">
<?php
$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sql="select * from customer where member='customer'";
$retval=mysqli_query($conn,$sql);
		if(mysqli_num_rows($retval)>0)
		{
			
			while($row=mysqli_fetch_assoc($retval))
			{
				$cn=$row["customername"];
				$ci=$row["cuid"];
				$ca=$row["customeraddress"];
				$cma=$row["customermail"];
				$cmo=$row["customerphone"];
				//echo "<td>Customer ID:$ci<br>Customer Name: $ci<br>Customer Address: $ca<br>Customer Mail:$cma<br>Customer Mobile: $cmo</td>";
				
					echo "<tr class='colo'> <td >$cn</td> <td>$ca</td> <td>$cma</td> <td>$cmo</td> </tr>";
				
			}
			
			
		}
		
		
    	mysqli_close($conn);
?>
</table>
</body>
</html>
