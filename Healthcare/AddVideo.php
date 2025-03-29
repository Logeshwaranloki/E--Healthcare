
<?php include("HPHeader1.php")?>
<body>
<center>


<form  action="" method="post" enctype="multipart/form-data">
	<table class="content" cellspacing="20px" cellpadding="30px">



<tr>
<th colspan="2" class="thead" >ADD NEW VIDEO</th></tr>

		<tr><th class="color">Select Disease:</th><td><select name="sel" class="box" >
			<?php
			$conn=mysqli_connect("localhost","root","","project");
if($conn==false)
           
{
	die("ERROR:Could not connect".mysqli_connect_error());
}
$sql="select *from disease";
$retval=mysqli_query($conn,$sql);
if(mysqli_num_rows($retval)>0)
{
	while($row=mysqli_fetch_assoc($retval))
	{
		$cn=$row["categoryname"];
		$cid=$row["cid"];
		echo"<option value='$cid'>$cn</option>";
	}
}

		 ?></select></td></tr>
	
	<tr><th >Suggested Video:</th><td><input type="file" name="image_file"></td></tr>
	<tr><th >Video Poster:</th><td><input type="file" name="image_file1"></td></tr>
	<tr><th >Video title:</th><td><textarea name="t1"></textarea></td></tr>


<tr>

	<td class="color" colspan="2"><input type="submit" name="sub" value="Add"></td>
	</tr>
	</table>
</form></center>
</body>

<?php


	if(isset($_POST["sub"]))
	{
		$cc=$_POST["sel"];
		$title=$_POST["t1"];
		
		$dest="video/";
       $target=$dest.basename($_FILES['image_file']['name']);
      echo $target;	
	  $dest1="poster/";
       $target1=$dest1.basename($_FILES['image_file1']['name']);
      echo $target1;
       $conn=mysqli_connect("localhost","root","","project");
       if($conn==false)
		{
			die("ERROR:Could Not connect".mysqli_connect_error());
		}

		if(move_uploaded_file($_FILES['image_file']['tmp_name'],$target) && move_uploaded_file($_FILES['image_file1']['tmp_name'],$target1))
		{
echo "inside";				
$sql= "INSERT INTO sv(userid,did,video,poster,title) VALUES('$id','$cc','$target','$target1','$title')";
		echo $sql;
		if(mysqli_query($conn,$sql))
		{
			echo"<script>alert('Video upload successully');location='AddVideo.php'</script>";
			
		}
		}
		mysqli_close($conn);
	}
	?>
</html>