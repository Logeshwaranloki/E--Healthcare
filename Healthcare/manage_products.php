
<?php include("AdminHeader.php")?>
<main id="main">


    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding" style="margin:100px 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2 >ALL MEDICINES</h2>
            </div>
          </div>
        </div>
       
          <div >
<table cellspacing="20px" cellpadding="20px" style="margin:10px auto;" id="t1">

<tr>
<th colspan="6" class="thead" >ALL MEDICINES</th>
	<tr class="color"><th>Category</th><th>Medicine name</th><th>Price</th><th>Stack</th><th>Description</th><th>Edit</th></tr>
<?php
$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
           
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sql="select *from product";
$retval=mysqli_query($conn,$sql);
if(mysqli_num_rows($retval)>0)
{
	while($row=mysqli_fetch_assoc($retval))
	{
		$pid=$row["pid"];
    $cc=$row["choosecategory"];
	$pn=$row["productname"];
	$pi=$row["productimage"];
	$pr=$row["price"];
	$st=$row["stack"];
	$dc=$row["description"];
     echo"
     <tr class='colo'><td>$cc</td><td>$pn</td><td>$pr</td><td>$st</td><td>$dc</td>
     <td><a href='update.php?txt1=$pid'>Update</a></td></tr>
     ";
	//<td> <a href='delete.php?txt1=$pid'>Delete </a></td>
	}
}

?></table></center>
</body>
</html>