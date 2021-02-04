<?php

include("connection.php");
include("include/Admin.php");

session_start();

if (isset($_SESSION['admin_id'])) {

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- <title>SpaceX website</title> -->
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    
  <link href="assets/css/style.css" rel="stylesheet">
    
    
      <div class="clearfix visible-xs"></div>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">TRIP OF A LIFETIME</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
      </nav>

      <a href="#contact" class="get-started-btn scrollto">Add Trip</a>
         <!-- <a href="Admin-logIn.html" class="get-started-btn scrollto">Log Out</a> -->

    </div>
  </header><!-- End Header -->

    <main id="main">
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h1>Space-X</h1> -->
          <h1>Add Trip</h1>
          <p>fill the data here , so you can Add trip</p>
        </div>

          <div class="col-lg-10 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="actions/new_trip.php" method="POST"  >
                
              <div class="form-row">
                <div class="form-group col-md-8">
                  <label for="name">Trip Name</label>
                  <input type="text" name="trip_name" class="form-control" id="trip_name" data-rule="minlen:3" data-msg="Please enter at least 3 chars" required="required"/>
                  <div class="validate"></div>
                </div>
                      
                
                <div class="form-group col-md-8">
                  <label for="price">Trip price</label>
                  <input type="number" class="form-control" name="trip_price" id="trip_price" data-rule="minlen:4" data-msg="Please enter a valid Price" required="required" />
                  <div class="validate"></div>
                </div>
                  
                
                   <div class="form-group col-md-8">
                  <label for="ID">Trip Id</label>
                  <input type="number" name="trip_id" class="form-control" id="trip_id" required="required" />
                  <div class="validate"></div>
                </div>
                    </div>

                    <div class="form-group col-md-8">
                      <label for="company">Trip </label>
                      <select id="trip_agency" name="trip_agency">
                      <option value="spaceX">spaceX</option>
                      <option value="blueOrigin">Blue Origin</option>
                      <option value="ZeroGravity">Zero Gravity</option>
                      <option value="galactic">Galactic</option>
                    </select required="required">
                      <div class="validate"></div>
                        </div>
                
                
                 <!-- <div class="form-group col-md-1"> -->
                 <!-- <label class="form-Control"> -->
                     <div class="text-center"><input type="submit" value="Add">
                     </div>
                
              </form> </div>
        </div>
    </section><!-- End Contact Section -->
      </main>
<?php
}
?>
 <footer id="footer">

    

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>TRIP OF ALIFE TIME</h3>
        <p>
          108 October , <br>
          Cairo City , <br>
           Egypt <br>
            
            
          <strong>Phone:</strong>+02 26423638<br>
          <strong>Email:</strong>spacetourism@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#Home">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#services">Earth To Earth</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#services">Orbital Flight</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Social Networks</h4>
        <p>we are providing you with a suitable and effecient information</p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container footer-bottom clearfix">
  <div class="copyright">
    &copy; Copyright <strong><span>space Tourism</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
   
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div> 

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script> 
</html> 





