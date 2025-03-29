<html>
<head>
	
</head>
<body style="background-image:url('images/2.gif');
background-size:cover;
backgroung-width:100%">
<?php include("header.php") ?>
<form action ="" method="get">
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php'; 
if(isset($_GET["reg"]))
{
	$Mail=$_GET["txt3"];

$con=mysqli_connect("localhost:3306","root","","project");
if(!$con)
{
die("ERROR".mysqli_error());
}
$t="select * from customer where customermail='$Mail'";
//echo $t;
$ret=mysqli_query($con,$t);

if(mysqli_num_rows($ret)>0)
{
	$count=0;
while ($x=mysqli_fetch_assoc($ret))
	{
	
	$g=$x['customermail'];
	$c=$x['password'];
	$f=$x['customername'];
	
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp"; 
$mail->SMTPDebug  = 0;
$mail->SMTPAuth   = TRUE;
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "stsmail2021@gmail.com";
$mail->Password   = "2021mail";
$mail->IsHTML(true);
$mail->AddAddress($g, $f);
$mail->AddReplyTo($g);
$mail->Subject = "your old password ";
$content ="your old password is                          ".$c;
$mail->MsgHTML($content); 

//$mail->addAttachment($_FILES['txt3']['tmp_name'],$_FILES['txt3']['name']);

//$mail->addAttachment($Image_File);

if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
  echo $mail;
} else {
	$count+=1;	
}

	
}
}
if($count==0)
{
	echo "<script>alert('Email Not sent successfully');</script>";

}
else{
	echo "<script>alert('password sent to your Email Id');</script>";

	
}

}
?>
<div class="mydiv">
<center>
<center><h2 class="color">FORGET PASSWORD</h2></center>
		<table>

<tr class="color">
<th>Mail Id</th>
<td><input type="text" name="txt3" placeholder="Enter your Mail id"></td>
</tr>
<tr>
<th colspan='2'><input type="submit" name="reg" value="Submit"></th>
</tr>
</table>
 </body>
</html> 