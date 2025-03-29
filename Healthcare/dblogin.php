<html>
<head>
<style>
	 .color {
        color: #C22705;
      }
	
	th {
        font-size: 20px;
      }
	.mydiv{
		margin-top:200px;
		margin-bottom:100px;
		margin-right:150px;
		margin-left:80px;
		}
	input[type=text] {
		 border-radius: 15px;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

input[type=email] {
  width: 100%;
  border-radius: 15px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 100%;
  border-radius: 15px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}



textarea {
  width: 100%;
  border-radius: 15px;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
		 
input[type=submit] {
  width: 100%;
  border-radius: 15px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
	</style>
<?php 

session_start();
include "header.php";
if(isset($_GET["adm"]))
{
$name=$_GET["txt1"];
$password=$_GET["txt2"];
$con=mysqli_connect("localhost:3306","root","","project");
if(!$con)
{
die("ERROR".mysqli_error());
}
$t="select * from regdb where name='$name' and password='$password' and status='0'";
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
			$_SESSION["name"]=$Name;
			$_SESSION["id"]=$sid;
			$_SESSION["rid"]=$id;
			//echo $id;
			//echo $name;
			echo "<script>";
			echo "alert ('Login Successfull');";
			echo " location='dbhome.php';";
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
<div class="mydiv">

               <h2><center>DELIVERY BOY LOGIN</center></h2>
        
</head>
<body style="background-image:url('images/lp.jpg');
background-size:cover;
backgroung-width:100%">
<form action=""method="get">
<center>
		<table>
<tr>
<th class="color">Name </th>
<th><input type="text" name="txt1" placeholder="Enter name"  ></th>
</tr>
<tr>
<th class="color">Password</th>
<th><input type="password" name="txt2" placeholder="enter password" ></th>
</tr>
<tr>
<th colspan="2" class="color"><input type="submit" name="adm" value="submit"</button></th>
</tr>
</table>
</center>
 </div>
   </body>
   </html>
 