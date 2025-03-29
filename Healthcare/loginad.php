
<?php include "header.php";


if(isset($_GET["adm"]))
{
$name=$_GET["txt1"];
$password=$_GET["txt2"];
$con=mysqli_connect("localhost:3306","root","","project");
if(!$con)
{
die("ERROR".mysqli_error());
}
$t="select * from admin where name='$name' and password='$password'";
$ret=mysqli_query($con,$t);
if(mysqli_num_rows($ret)>0)
{
	while($x=mysqli_fetch_assoc($ret))
		{
		$pass=$x['password'];
		$id=$x['id'];
		$uname=$x['name'];
		if($password==$pass)
			{
					//
			$_SESSION["id"]=$id;
			$_SESSION["name"]=$name;
			//echo $id;
			//echo $name;
			echo "<script>";
			echo "alert ('Login Successfull');";
			echo " location='adm1_page.php';";
			echo " </script>";
		
			
			
			}
		    else
			{
			echo "<script>";
			echo "alert ('Incorrect Password');";
			echo " </script>";
			}

		}

}
}
?>
            <div class="col-xs-12 col-sm-12 col-md-12 wow zoomIn animated headding" data-wow-delay=".1s">
               <h2>ADMIN <span>LOGIN</span></h2>
        
		 </div>

          <div class="col-xs-12 col-sm-4 col-md-4 wow fadeInLeft animated" >
<form action=""method="get">
<table class="t1">
<tr>
<th>Name </th>
<th><input type="text" name="txt1" placeholder="Enter name"  ></th>
</tr>
<tr>
<th>Password</th>
<th><input type="password" name="txt2" placeholder="enter password" ></th>
</tr>
<tr>
<th colspan="2"><input type="submit" name="adm" value="submit"</button></th>
</tr>
</table>
 </div>
   
 