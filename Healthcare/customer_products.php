
<?php include("cus_header2.php");
$sid=$_GET["txt1"];
echo $sid;
?>

<table class="content" cellspacing="20px" cellpadding="30px" id="t1" boreder="2px">

<?php
$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sel="select * from disease inner join sv on disease.cid=sv.did inner join customer on sv.userid=customer.cuid where sv.did='$sid'";
echo $sel;																																																																																																																																																																																																										
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
 <h5><a href='View_Medicine1.php?sid=$sid'>View Suggested Medicine</a></h5></td></tr>";
	}
   	 }
  

?>

<tr>
</tr>
</table>
</body>
</html>