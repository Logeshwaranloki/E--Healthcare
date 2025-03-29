<?php

	include "cus_header2.php";
?>
<table class="content" cellspacing="20px" cellpadding="30px">


<?php

//echo $s;
$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sql="select *from disease";
$retval=mysqli_query($conn,$sql);
if(mysqli_num_rows($retval)>0)
{
	$i=1;
	//echo "$i";
	echo"<tr>";
	while($row=mysqli_fetch_assoc($retval))
	{

		$cid=$row["cid"];
		$cn=$row["categoryname"];
		$pic=$row["picture"];
			//echo "<td><img src='Images/$e' style='height:200px;width:200px'width='200'>";

	echo "<td><img src='$pic' style='height:200px;width:200px'width='200' ><br><a href='customer_products.php?txt1=$cid'>$cn</a></td>";
	if($i++%5==0)
	{
		//echo "$i";
		echo "</tr><tr>";
	}

	}
}
mysqli_close($conn);
?>
</table>
</body>
</html>