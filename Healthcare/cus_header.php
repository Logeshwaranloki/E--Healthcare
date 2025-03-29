<?php
session_start();
	$id= $_SESSION["id"];
	$name=$_SESSION["name"];
?>
<header id="header" class="fixed-top header-transparent" style="background-color:blue">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="customerhome.php"><span>E-Healthcare</span></a></h1>
        
      </div>
	
      <nav id="navbar" class="navbar">
<ul>
          <li><a class="nav-link scrollto active" href="customerhome.php">Home</a></li>
          <li><a class="nav-link scrollto" href="customer_category.php">Search Disease</a></li>
       
          <li><a class="nav-link scrollto" href="mycart.php">My Cart</a></li>
          <li><a class="nav-link scrollto" href="myorder.php">My Order</a></li>
          <li><a class="nav-link scrollto" href="MyProfile1.php">Profile</a></li>
          <li><a class="nav-link scrollto" href="Logout.php">Logout</a></li>
          <li><a class="nav-link scrollto" href="customerhome.php"><img src="img/acc.png" style="width:40px;"><?php echo $name;?></a></li>
         
  
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>