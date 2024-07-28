<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location:../index.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Medicoo &mdash; Add Product </title>
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
                  <li class="active" ><a href="addProducts.php">Add Products</a></li>
                   <li><a href="contact.php">Contact</a></li>
                  <li><a href="logout.php">Log Out</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>


      <h1 class="text-uppercase text-center my-3"> Add Products</h1>
      <div class="container">
          <div class="row">
              <div class="col">
                <form id="p_frm" enctype="multipart/form-data">
                     <div class="form-group">
                      <label for="exampleInputEmail1">Product id</label>
                      <input type="text" class="form-control"  name ="p_id" id="p_id" aria-describedby="emailHelp" placeholder="Enter product id " required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Product Name</label>
                      <input type="text" class="form-control" name ="p_name" id="p_name" aria-describedby="emailHelp" placeholder="Enter Product Name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Product Description</label>
                      <input type="text" class="form-control" name="p_desc" id="p_desc" placeholder="Enter Product Description" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Product Image</label>
                        <input type="file" class="form-control" name="p_img" id="p_img" placeholder="Select Image" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Product Category</label>
                         <select id="p_category" name="p_category" class="form-control" required>  
                            <option value="vitamins">Vitamins</option>
                            <option value="supplements">Supplements</option>
                            <option value="nutrients"> Nutrients</option>
                            <option value="tea-coffee">Tea &amp; Coffee</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Product Ingredients</label>
                        <input type="textarea" class="form-control" id="p_ingr" name="p_ingr" placeholder="Enter Ingredients" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Product Price</label>
                        <input type="number" class="form-control" id="p_price" name="p_price" placeholder="Enter price for product" required>
                    </div>
                  <div class="form-group">
                        <input type="submit" class="btn btn-primary" id="c_sign" name="c_sign" value="Add Product" >
                        
                  </div> 
                  </form>
                  <button class="btn btn-danger" id="1rs" >Reset</button>

              </div>
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
<script type>
    $(()=>{
        $('#p_frm').on('submit',function (e){
            e.preventDefault();
            var form_data = new FormData(this);
            var img = $("#p_img").val();
            if(img == "" ){
                alert("Please Select image");
                return false;
            }
            else{                   
                  $.ajax({
                          type:"post",
                          url: "../upload_img.php",
                          data: form_data,
                          cache:false,
                          dataType:'json',
                          contentType: false,
                          processData: false,
                          success:(res)=>{
                                alert(res.message);
                                if(res.success) $("#p_frm")[0].reset();
                            }
                    });
                 return false;
            }
        });

        
    $("#p_img").change(function () {
        var file = this.files[0];
        var fileType = file.type;
        var match = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'image/jpeg', 'image/png', 'image/jpg'];
        if (!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5]))) {
            alert('Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.');
            $("#p_img").val('');
            return false;
        }
      });
    });
    $("#1rs").click(()=>{
      var i = confirm("Are you sure ?");
      if(i == true)
      {
        $("#p_frm")[0].reset();
        
      }
    });
</script>