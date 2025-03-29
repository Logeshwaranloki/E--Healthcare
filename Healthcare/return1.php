<?php
if(isset($_POST["sub"]))
{
$re=$_POST["ret"];
session_start();
$ca=$_SESSION["ca"];
$pid=$_SESSION["pid"];
$q=$_SESSION["q"];
$st=$_SESSION["st"];
//echo $re;
//echo $ca;
$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sql="update cart set status='Return',returnstatement='$re'where caid='$ca'";
//echo $sql;
$retval=mysqli_query($conn,$sql);
		if($retval>0)
		{
			$st1=(int)$st+$q;
			$sql="update product set stack='$st1'where pid='$pid'";
$retval=mysqli_query($conn,$sql);
		if($retval>0)
		{
			echo"<script>alert('Status updated successfull');location='mydeliver.php'</script>";
		}
		else
    	{
			echo"<script>alert('Cant't updated');location='mydeliver.php'</script>";
    	}
		}
    	mysqli_close($conn);
}

?>