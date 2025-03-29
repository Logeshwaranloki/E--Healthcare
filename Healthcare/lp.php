<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 
<form id="register-form" role="form" autocomplete="off" class="form" method="post">    
  <div class="form-group">
<div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
  <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
</div>
  </div>
  <div class="form-group">
<input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
  </div>
  
  <input type="hidden" class="hide" name="token" id="token" value="">
</form>
<?php
if(isset($_POST) & !empty($_POST)){
$email = mysqli_real_escape_string($connection, $_POST['email']);
$sql = "SELECT * FROM `login` WHERE email = '$email'";
$res = mysqli_query($connection, $sql);
$count = mysqli_num_rows($res);
if($count == 1){
echo "Send email to user with password";
}else{
echo "User name does not exist in database";
}
}
?>

<?php
$r = mysqli_fetch_assoc($res);
   $password = $r['password'];
   $to = $r['email'];
   $subject = "Your Recovered Password";
   $message = "Please use this password to login " . $password;
   $headers = "From : vivek@codingcyber.com";
   if(mail($to, $subject, $message, $headers)){
      echo "Your Password has been sent to your email id";
   }else{
     echo "Failed to Recover your password, try again";
}
}
?>