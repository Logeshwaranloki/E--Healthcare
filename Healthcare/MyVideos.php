
<?php include("HPHeader1.php")?>
<body>
	<center>
	<table class="content" cellspacing="20px" cellpadding="30px" id="t1">

<?php
$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sel="select * from sv inner join disease on sv.did=disease.cid where sv.userid='$id'";

$retval=mysqli_query($conn,$sel);
if(mysqli_num_rows($retval)>0)
{
	$i=1;
	

	while($row=mysqli_fetch_assoc($retval))
	{
		
		$sid=$row["sid"];
		$pid=$row["did"];
		$pn=$row["video"];
		$p=$row["poster"];
		$pi=$row["title"];
		$pr=$row["categoryname"];

		
		
		echo "<tr><td><h4 style='color:blue;'>$pi</h4></td></tr><tr><td><video width='400' controls poster='$p' src='$pn' >
  
  Your browser does not support HTML video.
</video></td>
<td><br><h5><b> DISEASE :</b> $pr</h5> 
 <h5><a href='View_Medicine.php?sid=$sid'>View Suggested Medicine</a></h5></td></tr>";
		
	}
   	 }
  

?>

<tr>
</tr>
</table>
</body>
</html>