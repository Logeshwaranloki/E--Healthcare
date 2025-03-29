
<?php include("AdminHeader.php");
$sid=$_GET["txt1"];
echo $sid;
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
$sel="select * from disease inner join sv on disease.cid=sv.did inner join customer on sv.userid=customer.cuid ";
																																																																																																																																																																																																										
$retval=mysqli_query($conn,$sel);
if(mysqli_num_rows($retval)>0)
{
	$i=1;
	
	echo "<tr>";
	while($row=mysqli_fetch_assoc($retval))
	{
		
		$sid=$row["sid"];
		$pid=$row["did"];
		$pn=$row["video"];
		$pi=$row["title"];
		$pr=$row["categoryname"];
		$p=$row["poster"];

		
		
		echo "<tr><td>$pi</td></tr><tr><td><video width='400' controls poster='$p'>
  <source src='$pn' >
  
  Your browser does not support HTML video.
</video></td><td><br><h5><b> DISEASE :</b> $pr</h5> 
 <h5><a href='Admin_View_Medicine1.php?sid=$sid'>View Suggested Medicine</a></h5></td></tr>";
	}
   	 }
  

?>

<tr>
</tr>
</table>
</body>
</html>