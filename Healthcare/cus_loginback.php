<?php
if(isset($_POST["sub"]))
{
	$a=$_POST["mail"];
	$b=$_POST["mob"];
	$conn=mysqli_connect("localhost","root","","project");
	if($conn==false)
	{
		die("ERROR:Could not connect".mysqli_connect_error());
	}
	if($a!="")
	{
   $sql="select customermail,cuid from customer where customermail='$a'";
   //echo $sql;
	$retval=mysqli_query($conn,$sql);
	if(mysqli_num_rows($retval)>0)
	{
        while($row=mysqli_fetch_assoc($retval))
        {
        	
        	$ma=$row["cuid"];
        	session_start();
        	$_SESSION["id"]=$ma;
        	//echo"<script>alert('Login Successfully');</script>";
        	echo"<script>alert('Login Successfully');location='cus_header.php'</script>";
        }
		}
 else
 {
 	$sql1="insert into customer(customermail) values('$a')";
 	if(mysqli_query($conn,$sql1)>0)
		{
        //echo"<script>alert('Login Successfully');</script>";
        echo"<script>alert('Login Successfully');location='customer_category.php'</script>";
        }

 }}
 if($b!="")
	{
$sql="select customerphone,cuid from customer where customerphone='$b'";
	//echo $sql;
   $retval=mysqli_query($conn,$sql);
	if(mysqli_num_rows($retval)>0)
	{
		while($row=mysqli_fetch_assoc($retval))
        {
        	
        	$ma=$row["cuid"];
        	session_start();
        	$_SESSION["id"]=$ma;
		echo"<script>alert('Login Successfully');location='customer_category.php'</script>";
	}}
	else
	{
		$sql1="insert into customer(customerphone) values('$b')";
		//echo $sql1;
  if(mysqli_query($conn,$sql1)>0)
		{
        echo"<script>alert('Login Successfully');location='update_profile.php'</script>";
        }
    }}
	echo"
	<td><a href='forget.php?contacts=$a'></a></td>";

mysqli_close($conn);
}
		
?>