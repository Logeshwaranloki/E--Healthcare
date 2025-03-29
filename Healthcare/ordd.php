<?php
session_start();
$id=$_SESSION["id"];
include "admin_header.php";			
		
//include "shopkeeperlink.php";
$m=$_GET['m'];
if(isset($_GET["reg"]))
{	
	$m=$_GET["txt4"];
}	
?>
<html>
<head>
<style>
body{
      background-image: url("w.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
	p{
	text-align:justify;
	font-size:15px;
	line-height:20px;
}
h3{
	text-align:justify;
	font-size:15px;
	line-height:20px;
}
a:link{
	text-decoration: none;
	color:black;
}


a:link {
  color: green;
}

/* visited link */
a:visited {
  color: green;
}

/* mouse over link */
a:hover {
  color: green;
}

/* selected link */
a:active {
  color: green;
}
	 .color {
        color: white;
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
</head>
<body>
<form action ="" method="get">
<div class="mydiv">

<h2><center>SENT ORDDER </center></h2>
<center>
<table align='center'  cellspacing="20" cellpadding="10" width="70%" height="30">
<tr>
<td><input type="hidden" value="<?php echo $m; ?>" name="txt4"></td>
</tr>
<tr class='color'> <th>DB_ID</th><th>NAME</th> <th>MOBILE</th> <th>MAIL ID</th> <th>MEMBER</th><th>SENT ORDER</th> </tr>
<?php
$con=mysqli_connect("localhost:3306","root","","project");
if(!$con)
{
die("ERROR".mysqli_error());
}
$t="select * from regdb where rid='$id'";
//echo $t;
$ret=mysqli_query($con,$t);

if(mysqli_num_rows($ret)>0)
{
while ($x=mysqli_fetch_assoc($ret))
 	{
	$a=$x['name'];
	$b=$x['mobile'];
	$c=$x['mailid'];
	$d=$x['member'];
	$e=$x['id'];
	
echo "<tr class='color'><td>$e</td> <td>$a</td> <td>$b</td> <td>$c</td> <td>$d</td> 
<td><a href='orderdboy.php?id=$e &&m=$m'>SENT ORDER </a><td> 
 <td><a href='vieworderdb.php?id=$e &&m=$m'><h3></h3></a></td></td> </tr> ";
	}															
}
?>

</table>
</form>
</body>
</html>