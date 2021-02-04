<?php

include("../connection.php");
include("../include/User.php");

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Log In - TRIP OF A LIFETIME</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">

</head>
    
    
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="../index.php">TRIP OF ALIFE TIME</a></h1>
        
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="../index.php">Home</a></li> 
        </ul>
      </nav><!-- .nav-menu -->

      <a href="#contact" class="get-started-btn scrollto">Log-In</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="../index.php">Home</a></li>
          <li>Log In</li>
        </ol>
        <h2>Log-In page</h2>

      </div>
    </section>
      
        <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">  
       <div class="section-title">
           
          <h2>LOGIN</h2>
          <p>You can Fill your Data Here ,  log In your account</p>
        </div>
          
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

         <div class="col-lg-18 mt-lg-0 d-flex align-items-stretch">
          <form action="login.php" method="POST"   >
                
              <div class="form-row">
                
            
                <div class="form-group col-md-6">
                  <label for="email">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
                  
                
                   <div class="form-group col-md-6">
                  <label for="Password">Password</label>
                  <input type="password" name="pass" class="form-control" id="password" data-rule="minlen:6" data-msg="Please enter at least 6 chars" />
                       
                  <div class="validate"></div>
                        <div class="form-group col-md-5">
                 <label class="form-Control">
              <div class="text-center"><input type="submit" value="Submit">
                       
                       
                     </div> </label> </div> </div> 
</div> 
                     
            </form>
          </div>
          </div></section>
          </div>
    </section>

          <?php

          if ($_SERVER['REQUEST_METHOD'] == "POST") {
          
                  $user = new User;
                  $user->email    = $_POST['email'];
                  $user->password = md5($_POST['pass']);
              
                  $user_id = $user->check_login($connection);
              
                  if ($user_id != false) {
                        
                    $_SESSION['user_id'] = $user_id;
                    
                    header("location: ../index.php");
                  }
                   else 
                
                ?> <h3> <?php  echo "wrong email and password"; ?> </h3> 
                <?php
          } 
           
               ?>
          
          
      <!-- </div></section> -->

        <!-- </div>
    </section> -->
    <!-- End Contact Section -->
     
    <!-- End Portfolio Details Section -->


  <!-- ======= Footer ======= -->
 <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>TRIP OF A LIFETIME</h3>
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
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
             </main> 
  </body>
</html>