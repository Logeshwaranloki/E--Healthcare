
	<?php
	$pid=$_GET["pi"];

    if(isset($_POST["sub"]))
    {
     
   
     $pid=$_POST["pid"];
     $vid=$_POST["vid"];
    
     
     $conn=mysqli_connect("localhost","root","","project");
     if($conn==false)
     {
     	die("ERROR:Could not connect".mysqli_conncet_error());
     }
     $sel="insert into sm(sid,pid) values ('$vid','$pid')";
    if(mysqli_query($conn,$sel))
    {
    	echo"<script>alert('Medicine Posted successfully');location='AddMedicine.php'</script>";
    }
    
    mysqli_close($conn);
     }
	?>
</head>
<?php include("HPHeader1.php")?>
<body>
<center>

<form action='' method='post'>
	<table class="content" cellspacing="20px" cellpadding="30px">
	<tr>
<th colspan="2" class="thead" >ADD NEW VIDEO</th></tr>
	<tr><td>Product Id </td>
	<td><input type='text' name='pid' value=<?php echo $pid; ?>  ></td>
	</tr>
	<tr><th class="color">Select Your Video:</th><td><select name="vid" class="box" >
			<?php
			$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
           
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sql="select *from sv where userid='$id'";
$retval=mysqli_query($conn,$sql);
if(mysqli_num_rows($retval)>0)
{
	while($row=mysqli_fetch_assoc($retval))
	{
		$cn=$row["sid"];
		$cid=$row["title"];
		echo"<option value='$cn'>$cid</option>";
	}
}

		 ?></select></td></tr>
	<tr>
    <td colspan='2'><input type='submit' name='sub' value='Post Medicine'></td>
	</tr>
	</table>
	</form>
</center>
</body>
</html>