<?php
 session_start();
 if(!isset($_SESSION['admin'])){
    header("Location: ../index.html");
 }
 require_once("../lib/db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Medicoo &mdash; Contact </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  
  <link rel="stylesheet" href="../fonts/icomoon/style.css">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/magnific-popup.css">
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">


  <link rel="stylesheet" href="../css/aos.css">

  <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <div class="site-navbar py-2">

        <div class="search-wrap">
          <div class="container">
            <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
            
          </div>
        </div>
  
        <div class="container">
          <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
              <div class="site-logo">
                <a href="index.php" class="js-logo-clone">Medicoo </a>
              </div>
            </div>
            <div class="main-nav d-none d-lg-block">
              <nav class="site-navigation text-right text-md-center" role="navigation">
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li  ><a href="index.php">Home</a></li>
                  <li><a href="addProducts.php">Add Products</a></li>
                  <li class="active" ><a href="contact.php">Contact</a></li>
                  <li><a href="logout.php">Log Out</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <h1 class="text-uppercase text-center my-3"> Contact List</h1>
      <div class="container-fluid py-4">
        <div class="row">
        <table class="table table-hover table-striped table-bordered">
        <thead class="table-dark">
            <th>ID</th> 
            <th>First Name</th>
            <th>Last Name</th> 
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
            
        </thead>
        <tbody>
        <?php
					$rs=$db->prepare("select * from tbl_contact");
  					$rs->execute();  
                    $cnt=1;					
  					while($row=$rs->fetch())
				  	{
				  	  echo "<tr>";	
                      echo "<td>".$cnt."</td>";
					            echo "<td>".$row['fname']."</td>";	
                      echo "<td>".$row['lname']."</td>";
					            echo "<td>".$row['email']."</td>";	
					            echo "<td>".$row['subject']."</td>";	
					            echo "<td>".$row['message']."</td>";	
					  							  
					  echo "</tr>";	
                      $cnt++;	
					}  
				?>
        </tbody>
      </table>
        </div>
    </div>

      <footer class="site-footer">
        <div class="container-fluid" style="background-color:black">
          <div class="row">
            <div class="col-md-6 col-lg-3 mb-4 mt-4 mb-lg-0">
  
              <div class="block-7">
                <h3 class="footer-heading mb-4 text-white">About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
                  sed dolorum excepturi iure eaque, aut unde.</p>
              </div>
  
            </div>
            <div class="col-lg-3 mx-auto mb-5 mb-lg-0 mt-4">
              <h3 class="footer-heading mb-4 text-white ">Quick Links</h3>
              <ul class="list-unstyled">
                <li><a href="#">Supplements</a></li>
                <li><a href="#">Vitamins</a></li>
                <li><a href="#">Diet &amp; Nutrition</a></li>
                <li><a href="#">Tea &amp; Coffee</a></li>
              </ul>
            </div>
  
            <div class="col-md-6 col-lg-3 mt-4">
              <div class="block-5 mb-5">
                <h3 class="footer-heading mb-4 text-white">Contact Info</h3>
                <ul class="list-unstyled">
                  <li class="address text-white"> Puna Naka, Bhudwar Peth, Solapur, 413003.</li>
                  <li class="phone text-white"><a href="tel://23923929210">+2 392 3929 210</a></li>
                  <li class="email text-white">emailaddress@domain.com</li>
                </ul>
              </div>
  
  
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <p>
                
                Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | This Site is made
                with <i class="icon-heart" aria-hidden="true"></i>
                
              </p>
            </div>
  
          </div>
        </div>
      </footer>

      <script src="../js/jquery-3.3.1.min.js"></script>
      <script src="../js/jquery-ui.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/owl.carousel.min.js"></script>
      <script src="../js/jquery.magnific-popup.min.js"></script>
      <script src="../js/aos.js"></script>
      <script src="../js/main.js"></script>

</body>
</html>
<script type="text/javascript">
</script>