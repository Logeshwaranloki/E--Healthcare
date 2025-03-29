
<!DOCTYPE html>
<html>
<head>
<title>ONLINE MOBILE SHOPPING</title>
</head>
<body>
  <?php
if(isset($_POST["sub"]))
{
  $u=$_POST["adname"];
  $p=$_POST["adpass"];
  if($u=="Admin")
  {
    if($p=="Admin1234")
      {
        echo "<script>alert('Login successfully');location='adm1_page.php'</script>";
      }
      else{
        echo "<script>alert('Please Enter the correct password');location='admin_login.php'</script>";
      }
  }
  else{
      echo "<script>alert('Please Enter the correct user name');location='admin_login.php'</script>";
  }
}
 ?>

</body>
</html>

