<!DOCTYPE html>
<html>
<head>
<title>ONLINE MOBILE SHOPPING</title>
	<style>
		body{
      background-image: url("w.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
     .
	</style>
	</head>
<?php include("cus_header.php")?>
<body>
<div class="mydiv">
  <center>
    <h2>Filter the product by amount</h2>
      <form action='filter_back.php' method='post'>
        <table>
		<!--<tr><td>Starting amount</td><td> <input type='text' name='amnt' placeholder='Enter the amount'></td></tr>
        --><tr><td class="color">Enter amount</td><td> <input type='text' name='eamnt' placeholder='Enter the amount'></td></tr>
        <tr><td class="color">Category</td><td> <select name="sel" class="box">
          <?php
      $conn=mysqli_connect("localhost","root","","project");
if($conn==false)
           
{
  die("ERROR:Could not connect".mysqli_connect_error());
}
$sql="select *from category";
$retval=mysqli_query($conn,$sql);
if(mysqli_num_rows($retval)>0)
{
  while($row=mysqli_fetch_assoc($retval))
  {
    $cn=$row["categoryname"];
    echo"<option value='$cn'>$cn</option>";
  }
}

     ?></select></td>
	 <tr>
        <td colspan="2" class="color"> <input type='submit' name='sub' value='submit'></td></tr>
		</tr>
        </table>
      </form>
  </center>
</body>
</html>
