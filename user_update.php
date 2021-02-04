<?php

include("connection.php");
include("include/User.php");

session_start();

if ($_SESSION['check_user'] = "yes" ) {
    
    ?>
    <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Update - TRIP OF ALIFE TIME</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

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

</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">TRIP OF A LIFETIME</a></h1>
        
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="#contact" class="get-started-btn scrollto">Update</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Update</li>
        </ol>
        <h2>User updating Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Update</h2>
          <p>Here you can Update your Data</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>108 October, Cairo City , Egypt</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>spacetourism@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+02 26423638</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="user_update.php" method="POST" >
                
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="name">First Name</label>
                  <input type="text" name="first_name" class="form-control" id="firstName" data-rule="minlen:3" data-msg="Please enter at least 3 chars" required="required" />
                  <div class="validate"></div>
                </div>
                  
                  
                <div class="form-group col-md-4">
                  <label for="name">Second Name</label>
                  <input type="text" name="second_name" class="form-control" id="SecondName" data-rule="minlen:3" data-msg="Please enter at least 3 chars" required="required" />
                  <div class="validate"></div>
                </div>
                      
            
                <div class="form-group col-md-4">
                  <label for="name">Third Name</label>
                  <input type="text" name="third_name" class="form-control" id="LastName" data-rule="minlen:3" data-msg="Please enter at least 3 chars" required="required"/>
                  <div class="validate"></div>
                </div>
                      
                
                <div class="form-group col-md-6">
                  <label for="email">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" required="required"/>
                  <div class="validate"></div>
                </div>
                  
                
                   <div class="form-group col-md-6">
                  <label for="Password">Password</label>
                  <input type="password" name="pass" class="form-control" id="pass" data-rule="minlen:6" data-msg="Please enter at least 6 chars" required="required"/>
                  <div class="validate"></div>
                </div>
                  
            
                  <div class="form-group col-md-6">
                  <label for="Address">Address</label>
                  <input type="text" name="address" class="form-control" id="address" data-rule="minlen:6" data-msg="Please enter at least 6 chars" required="required"/>
                  <div class="validate"></div>
                </div> 
                  
                  <div class="form-group col-md-6">
                  <label for="number">Mobile Number</label>
                  <input type="int" name="mobile" class="form-control" id="mobile" data-rule="minlen:12" data-msg="Please enter a valid number" required="required"/>
                  <div class="validate"></div>
                </div> 
                  
                  
                 <div class="form-group col-md-6">
                  <label for="NationalID">National ID</label>
                  <input type="int" name="national_id" class="form-control" id="national_id" data-rule="minlen:14" data-msg="Please enter at least 14 chars" required="required"/>
                  <div class="validate"></div>
                </div>
                     
                     
                 <div class="form-group col-md-6">
                  <label for="CardNumber">Credit Card Number</label>
                  <input type="int" name="visa" class="form-control" id="visa" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required="required"/>
                  <div class="validate"></div>
                </div>
                     
                     
                     
                   <div class="form-group col-md-6">
                  <label for="age">Age</label>
                  <input type="int" name="age" class="form-control" id="age" data-rule="minlen:2" required="required"/>
                  <div class="validate"></div>
                </div>
                  
               
             
                  
              
            <!-- <div class="form-group col-md-2"> -->
                 <!-- <label class="form-Control"> -->
              <div class="text-center"><input type="submit" value="Update"></div>
                       </div>
                     
            </form>
          </div>

        </div>

        </div>
    </section><!-- End Contact Section -->

    <?php


       if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $user_id     =  $_SESSION['user_id']; 
    $first_name  =  $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $third_name  =  $_POST['third_name'];
    $age         =  $_POST['age'];
    $email       =  $_POST['email'];
    $password    =  md5($_POST['pass']);
    $visa_nom    =  md5($_POST['visa']);
    $national_id = $_POST['national_id'];
    $address     = $_POST['address'];
    $mobile_nom  = $_POST['mobile'];
    // $gender      = $_POST['gender'];

    $id = $_SESSION['user_id'];


    $sql = "UPDATE `users` SET `user_id`= '$id', `first_name`='$first_name' ,`second_name`= '$second_name',`third_name`= '$third_name', `age`='$age' ,`email` = '$email', `password`= '$password' ,`address`= '$address' ,`visa_number`= '$visa_nom' ,`national_id`='$national_id', `mobile_nom`= '$mobile_nom' ,  WHERE `user_id`= '$id'";
    $run = mysqli_query($connection, $sql);

     echo "your Data have been updated Successfully"; 
    
    
    } } 


?>



  <!-- ======= Footer ======= -->
 <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>TRIP OF ALIFE TIME</h3>
            <p>
              108 October <br>
              Cairo City , <br>
              Egypt <br><br>
              <strong>Phone:</strong>+02 26423638<br>
              <strong>Email:</strong>spacetourism@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4></h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#Home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">portofolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Parabolic flight</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">High altitude Ballon Flight</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">High altitude jet Flight</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Suborbital Flight</a></li>
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
        &copy; Copyright <strong><span>space tourism</span></strong>. All Rights Reserved
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
    </main> 
       </body>

</html>