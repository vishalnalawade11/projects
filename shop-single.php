<?php 
  require_once('lib/db.php');
  $pid = $_GET['pid'];
  $q = "select * from tbl_products where productid = '$pid'";
  $rs = $db->prepare($q);
  $rs->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Medicoo  &mdash; Single-Shopping</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">
    
      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>
    
      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone">Medicoo </a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="shop.html">Store</a></li>
                <li class="has-children">
                  <a href="#">Categories</a>
                  <ul class="dropdown">
                    <li><a href="#">Supplements</a></li>
                    <li><a href="#">Vitamins</a></li>
                    <li><a href="#">Diet &amp; Nutrition</a></li>
                    <li><a href="#">Tea &amp; Coffee</a></li>
    
                  </ul>
                </li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li class="ulogged"></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="cart.html" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number pcnt"> 0</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
    <?php while($rw = $rs->fetch()) {  ?>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a
              href="shop.html">Store</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"> <?php echo $rw['pname']; ?> </strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mr-auto">
            <div class="border text-center">
              <img src= <?php echo $rw['pimg'];?> alt="Image" class="img-fluid p-5">
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $rw['pname']; ?></h2>
            <p><?php echo $rw['pdescription']; ?></p>
            <p>  <strong class="text-primary h4">₹ <?php echo $rw['pprice']; ?>.00 </strong></p>

            <input type="hidden" id ="h-data"  value = <?php echo $pid; ?> >
            
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 220px;">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                </div>
                <input type="text" id="quantity" class="form-control text-center" value="1" placeholder=""
                  aria-label="Example text with button addon" aria-describedby="button-addon1">
                <div class="input-group-append">
                  <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                </div>
              </div>
    
            </div>
            <p><button id="c-add" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</button></p>

            <div class="mt-5">
              <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Ordering Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">Specifications</a>
                </li>
            
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <table class="table custom-table">
                    <thead>
                      <th>Material</th>
                      <th>Description</th>
                      <th>Packaging</th>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">OTC022401</th>
                        <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                        <td>1 BT</td>
                      </tr>
                      <tr>
                        <th scope="row">OTC022401</th>
                        <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                        <td>144/CS</td>
                      </tr>
                      <tr>
                        <th scope="row">OTC022401</th>
                        <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                        <td>1 EA</td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            
                  <table class="table custom-table">
            
                    <tbody>
                      <tr>
                        <td>HPIS CODE</td>
                        <td class="bg-light">999_200_40_0</td>
                      </tr>
                      <tr>
                        <td>HEALTHCARE PROVIDERS ONLY</td>
                        <td class="bg-light">No</td>
                      </tr>
                      <tr>
                        <td>LATEX FREE</td>
                        <td class="bg-light">Yes, No</td>
                      </tr>
                      <tr>
                        <td>MEDICATION ROUTE</td>
                        <td class="bg-light">Topical</td>
                      </tr>
                    </tbody>
                  </table>
                <?php } ?>
                </div>
            
              </div>
            </div>

    
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
              <h2>No prescription? No problem.</h2>
                <p>

                  Access 10,000+ doctors to get digital prescriptions instantly.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                <p>Stay connected to your preferred doctor.

                  Get digital prescriptions and share 24x7 health data with your doctor.
                  Get intelligent health insights everyday.

                  Stay on top of your daily wellness with smart nudges, reminders and tips.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
            <h3 class="footer-heading mb-4">About Us</h3>
              <p>Since opening in 2000, we have become masters of our craft. Our commitment to quality products, exceptional services and incomparable customer care keep our community coming back again and again.<br>
              </p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="#">Supplements</a></li>
              <li><a href="#">Vitamins</a></li>
              <li><a href="#">Diet &amp; Nutrition</a></li>
              <li><a href="#">Tea &amp; Coffee</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address"> Puna Naka, Bhudwar Peth, Solapur, 413003.</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">Medicooproject123@domain.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
             
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved with the students of NKOCET, Solapur | This Site is made
              with <i class="icon-heart" aria-hidden="true"></i> 
             
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="scripts/setCartCnt.js"></script>
  <script src="scripts/setUserLoggedField.js"></script>
  <script src="js/main.js"></script>

</body>

</html>

<script>
  $( ()=>{
    $('#c-add').click(async ()=>{
      var pid = $("#h-data").val();
      var pDetails = await $.get("lib/api/getAproduct.php?pid="+ pid);
      pDetails = JSON.parse(pDetails);
      var quant = $("#quantity").val();
      pDetails['quantity'] = quant;
      console.log(pDetails);
      $.ajax({
        type:"post",
        dataType:"json",
        url:"lib/cart/addToCart.php",
        data:pDetails,
        cache:false,
        success:(res)=>{
          alert(res.message);
        }
      })
    });
  });
</script>