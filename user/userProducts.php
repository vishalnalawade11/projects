<?php
 session_start();
 if(!isset($_SESSION['user'])){
    header("Location: ../index.html");
 }
 require_once("../lib/db.php");
 $user = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Medicoo &mdash; User </title>
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
                  <li class="active" ><a href="../index.html">Home</a></li>
                  <li><a href="logout.php">Log Out</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <h1 class="text-uppercase text-center my-3"> Orders List</h1>
      <div class="container-fluid py-4">
        <div class="row">
        <table class="table table-hover table-striped table-bordered">
        <thead class="table-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Price</th>
            <th>Product ID</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Zipcode</th>
            <th>State</th>
            <th>country</th>
            
        </thead>
        <tbody>
        <?php
					$rs=$db->prepare("select * from tbl_order where userid ='$user'");
  					$rs->execute();  
                    $cnt=1;	
                    			
  					while($row=$rs->fetch())
				  	{
                          
				  	  echo "<tr>";	
                      echo "<td>".$cnt."</td>";
					  echo "<td>".$row['name']."</td>";	
					  echo "<td>".$row['date']."</td>";	
					  echo "<td>".$row['price']."</td>";	   
                      echo "<td>".$row['productid']."</td>";  
                      echo "<td>".$row['phone']."</td>";    
                      echo "<td>".$row['address']."</td>";	
                      echo "<td>".$row['zipcode']."</td>";
                      echo "<td>".$row['state']."</td>";
                      echo "<td>".$row['country']."</td>";							  
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
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>Since opening in 2000, we have become masters of our craft. Our commitment to quality products, exceptional services and incomparable customer care keep our community coming back again and again.<br>
              </p>
  
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
                  <li class="email text-white">Medicooproject123@domain.com</li>
                </ul>
              </div>
  
  
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <p>
                
                Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved with students of NKOCET , Solapur| This Site is made
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