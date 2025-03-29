

<?php
include "cus_header.php";


 $conn=mysqli_connect("localhost","root","","project");
 if($conn==false)
{
	die("ERROR:Could not connect".mysqli_connect_error());
}

$sql1="update customer set customeraddress='$ad' where cuid='$id'";
//echo $sql1;
$retval=mysqli_query($conn,$sql1);
if($retval>0)
		{
	
			
		 $sql="update cart set status='Ordered' where cuid='$id'";
		echo $sql;
		$retval1=mysqli_query($conn,$sql);
		if($retval1>0)
		{
           // echo"<script>alert('Ordered successfull');</script>";
           echo"<script>alert('Ordered successfull');location='mycart.php'</script>";
		}
		
		else
    	{

    		echo"<script>alert('Cant't ordered')</script>";
    	}
    }
		
    	mysqli_close($conn);

    	?>
