
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
	if(isset($_POST["sub"]))
	{
		$cc=$_POST["sel"];
		$pn=$_POST["proname"];
		//$dest="images/";
		  $conn=mysqli_connect("localhost","root","","project");
       if($conn==false)
		{
			die("ERROR:Could Not connect".mysqli_connect_error());
		}
		$target_path3 = "images/".basename( $_FILES['txt3']['name']); 

       $Image_File=basename($_FILES['txt3']['name']);
       $pr=$_POST["price"];
       $st=$_POST["stack"];
       $dt=$_POST["dest"];
     
	$h="SELECT * FROM `customer`";
	$ret1=mysqli_query($conn,$h);
			if(mysqli_num_rows($ret1)>0)
				{
					$count=0;
			while ($x=mysqli_fetch_assoc($ret1))
			{
				
				
				$f=$x['customername'];
				$g=$x['customermail'];

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp"; 
$mail->SMTPDebug  = 0;
$mail->SMTPAuth   = TRUE;
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "muthucue0701@gmail.com";
$mail->Password   = "2021mail";
$mail->IsHTML(true);
$mail->AddAddress($g, $f);
$mail->AddReplyTo($g);
$mail->Subject = $pn;// product name
$content =$pr;//price,stack
//$content =$pr,$st;//price,stack
$mail->MsgHTML($content); 
$mail->addAttachment($_FILES['txt3']['tmp_name'],$_FILES['txt3']['name']);
$mail->addAttachment($Image_File);
if(!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
  //echo $mail;
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
	echo "<script>alert('Email sent successfully');</script>";

	
}

		
$sql= "INSERT INTO product(choosecategory,productname,productimage,price,stack,description) VALUES('$cc','$pn','$Image_File','$pr','$st','$dt')";
		if(move_uploaded_file($_FILES['image_file']['txt3'],$Image_File))
		{
		if(mysqli_query($conn,$sql))
		{
			echo"<script>alert('Product upload successully');location='add_product.php'</script>";
		}
		}
		mysqli_close($conn);
	}
	?>