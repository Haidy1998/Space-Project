<?php

include("connection.php");
include("include/User.php");

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>space Home page</title>
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

  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

    </head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Trip of A LIFETIME</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="#contact" class="get-started-btn scrollto">Get Started</a>
     <a href="actions/login.php" class="get-started-btn scrollto">Log In</a>
     <?php if (isset($_SESSION['user_id'])) { ?>
       <a href="actions/logout.php" class="get-started-btn scrollto">Log Out</a>
        <?php  } ?>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="300">
          <h1>Better Solutions For Reserving your Trips</h1>
          <h2>We are team of passionate people who are willing to help you</h2>
          <div class="d-lg-flex">
            <a href="#contact" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=E9oKEJ1pXPw" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
              
              <a href="https://www.youtube.com/watch?v=eH-xm9G9QBk" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/5.jpg.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
           <a href="spaceX.php"> <img src="assets/img/clients/space.jpg"  class="img-fluid" alt=""></a>  
          </div>


          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
           <a href="Blue_origin.php"> <img src="assets/img/clients/origin.jpg" class="img-fluid" alt=""></a> 
          </div>
            
          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
           <a href="galactic.php"> <img src="assets/img/clients/galactic.jpg" class="img-fluid" alt=""></a>   
          </div>
            
         <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
           <a href="zeroGravity.php"> <img src="assets/img/clients/gravity.jpg" class="img-fluid" alt=""></a>   
          </div>


        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              we are a Company that is willing to help and support you to Reserve your Trip to space, we Begin in 2020 , we are intermediaries between you and your prefered space agency , we provide variable offers with good prices 
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>you have to follow our Rules and Regulations for your safety</li>
              <li><i class="ri-check-double-line"></i>in case of canceling a trip you have to inform us by at least 48 hours</li>
                <li><i class="ri-check-double-line"></i>be sure you have read all the instructions before you begin your trip</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
            We begin in 2020 . Our Mission is to facilitate the regulations to be able to reserve your trip more easily and to make good offers .
                And our Vision to be the first global website that offer this service with alot of information and Qualification.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Why <strong>Trip of A LIFETIME ?</strong></h3>
              <p>
               We are offering the service with low prices and special offers , as well as our Mission is To help our customers fill their desire and enjoy the adventure of space Tourism with high safety
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>1</span>what are the information that you are offering me ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>we are offering a full information about that 3 space agencies (spaceX , virgin blue , Galactic ) including their prices , their offers and everything you need to know about them , we are offering also the reviews of the people answers.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>2</span>How can I know the offers and Reserve my trip?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p>we are updating the offers and the prices of space agencies in their private pages, you can fill your data and choose your preferable trip and click submit so you can Reserve your trip.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>3</span>What about the safety and what instructions I have to follow to be safe?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>you will have a list of instructions before the trip by 48 hours that contain all the Rules and Regulations to the things you have to put into consideration for your safety.
                    </p>
                  </div>
                </li>
                  
                  
                 <li>
                  <a data-toggle="collapse" href="#accordion-list-4" class="collapsed"><span>4</span>How can I contact you ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-parent=".accordion-list">
                    <p>Here our E-mail and Phone Number and everything you need to know in the contact category , you can also fill your data to have an account and reserve your trip. 
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-4 img" style='background-image: url("assets/img/6.png");' data-aos="zoom-in"  data-aos-delay="150"></div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/7.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Here are some analysis based on people opinion </h3>
            <p class="font-italic">
             Based on our survey , what obstacles people face to go to a space trip . people answer as follows:
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">Funds<i class="val">42%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Fear of adventure<i class="val">13%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Family won't agree<i class="val">24%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">The place that provide this Service is too far from me<i class="val">14%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services & Trips</h2>
          <p>We are Glad to provide you Some of our Services , Here are the Services we are providing</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Parabolic flight</a></h4>
              <p>Flying on a Passenger Jet in a Series of Parabolic arcs to create brief periods of weightlessness<br>
                its flight duration 90 minutes & the required training 1 hour briefing<br>
                and the passenger capacity up to 30 people<br>
                and the price per person is 5,200$ to 5,400$ without tax<br>
                maximum altitude:34,000 feet which means 6 miles<br>
                The view is similar to the view from a Commercial airliner</p>
            </div>
          </div>

          

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">High altitude jet Flight</a></h4>
              <p>Flying with a pilot on a fighter jet to twice the altitude of a commercial airline Flight<br>
                   its flight duration 45 minutes<br>
                   and the passenger capacity up to 1 person<br>
                  and the price per person 25,000$ without tax<br>
                   maximum altitude:70,000 feet which means 13 miles<br>
                  The view is curvature of the Earth, Blackness of Space </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Suborbital Flight</a></h4>
              <p>Flying on a Commercially built Suborbital spacecraft past the threshold of Space<br>
                 its flight duration 2 hours<br>
                and the passenger capacity up to 6 people<br>
                   and the price per person 200,000$ to 300,000$ without tax<br>
                    maximum altitude:327,000 feet which means 62 miles<br>
                    The view is curvature of the Earth, Blackness of Space, and thin blue layer of the atmosphere</p>
            </div>
          </div>
                  
            
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Orbital Flight</a></h4>
              <p>Launching into orbit for a multi-day stay abroad the international space station<br>
                 its flight duration from 1 to 2 weeks<br>
                and the passenger capacity 6 person<br>
                    maximum altitude: 1 million feet which means 200 miles<br>
                    The view is Orbit the entire earth every 90 minutes</p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Call To Action</h3>
            <p>if you were interested to join us , you can fill your Data in the link below</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#contact">Register</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Here are some of our photos that describe who we are and what we Do</p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">trips</li>
          <li data-filter=".filter-card">astrounats</li>
        
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/1.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Trip 1</h4>
              <p>Trips</p>
              <a href="assets/img/portfolio/1.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/2.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/2.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/3.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/3.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/4.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/4.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/portfolio/5.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/5.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/portfolio/6.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/6.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/7.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/7.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/portfolio/8.jpeg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/8.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/clients/blue-origin5.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>trip 1</h4>
              <p>trips</p>
              <a href="assets/img/clients/blue-origin5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="trip 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
            
            
             <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/clients/blue-origin3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>trip 2</h4>
              <p>trips</p>
              <a href="assets/img/clients/blue-origin3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="trip 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
            
            
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/clients/blue-origin1.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>trip 3</h4>
              <p>trips</p>
              <a href="assets/img/clients/blue-origin1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="trip 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
            
            
             <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/clients/blue-origin2.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>trip 4</h4>
              <p>trip</p>
              <a href="assets/img/clients/blue-origin2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="trip 4"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="trip 4"><i class="bx bx-link"></i></a>
            </div>
          </div>
            

        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>we are a team with high spirit working together to support and help you knowing more about space Tourism and Reserving your Trip, here the team members with their Job Significance</p>
        </div>

        <div class="row">
            
            <div class="col-lg-7" >
            <div class="member d-flex align-items-start"  data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-leader.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info"> 
                <h4>Merna Shenouda</h4>
                <span>Team Leader</span>
                <p>Responsible for organizing Tasks among Team Members</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
            
            
            

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/first-member.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mira Maged</h4>
                <span>Web Designer</span>
                <p>Responsible for Making the front-end Design </p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/second-member.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mohamed kamal</h4>
                <span>Business Coordinator</span>
                <p>Responsible for Business plan and Business analysis</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/Third_Member.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Haidy Ramzy</h4>
                <span>Web Developer</span>
                <p>Responsible for the back-end Develop of the website</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/fourth-member.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mahmoud Mosa</h4>
                <span>System Analyst</span>
                <p>Responsible for making the analysis of the system</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Our prices are competeable , we have got good offers and good prices , you can check them</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box featured">
              <h3>Parabolic Flight</h3>
              <h4><sup>$</sup>5200 to $5400<span>Per Person</span></h4>
              
              <ul>
                <li><i class="bx bx-check"></i>Flying on a Passenger Jet in a Series of Parabolic arcs to create brief periods of weightlessness</li>
                <li><i class="bx bx-check"></i>its flight duration 90 minutes & the required training 1 hour briefing</li>
                <li><i class="bx bx-check"></i>And the passenger capacity up to 30 people</li>
                <li><i class="bx bx-x"></i>The view is similar to the view from a Commercial airliner</li>
                <li><i class="bx bx-x"></i>Maximum altitude:34,000 feet which means 6 miles</li>
              </ul>
              <a href="#contact" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>High altitude Jet Flight</h3>
              <h4><sup>$</sup>25000<span>per person</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Flying with a pilot on a fighter jet to twice the altitude of a commercial airline Flight</li>
                <li><i class="bx bx-check"></i> its flight duration 45 minutes and the passenger capacity up to 1 person</li>
                  <li><i class="bx bx-check"></i> Maximum altitude:70,000$ feet which means 13 miles</li>
               <li> <i class="bx bx-check"></i>The view is curvature of the Earth, Blackness of Space<br><br><br><br><br><br><br><br></li>                                                   
              </ul>
              <a href="#contact" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box featured">
              <h3>Suborbital Flight</h3>
              <h4><sup>$</sup>250000 to 2750000<span>per person</span></h4>
              <ul>
                <li><i class="bx bx-check"></i>Flying on a Commercially built Suborbital spacecraft past the threshold of Space</li>
                <li><i class="bx bx-check"></i>Its flight duration 2 hours</li>
                <li><i class="bx bx-check"></i>And the passenger capacity up to 6 people</li>
                <li><i class="bx bx-check"></i>Maximum altitude:327,000$ feet which means 62 miles</li>
                <li><i class="bx bx-check"></i>The view is curvature of the Earth, Blackness of Space, and thin blue layer of the atmosphere<br><br></li>
              </ul>
              <a href="#contact" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

  

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact & Registration </h2>
          <p>Here the Contact you need to know , you can fill your Data Below to be able to reserve your trip</p>
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
            <form method="POST" action="index.php" >
                
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="name">First Name</label>
                  <input type="text" name="first_name" class="form-control" id="first_name" data-rule="minlen:3" place_holder="Please enter at least 3 chars" required="required" />
                  <div class="validate"></div>
                </div>
                  
                  
                <div class="form-group col-md-4">
                  <label for="name">Second Name</label>
                  <input type="text" name="second_name" class="form-control" id="second_name" data-rule="minlen:3" data-msg="Please enter at least 3 chars" required="required"/>
                  <div class="validate"></div>
                </div>
                      
            
                <div class="form-group col-md-4">
                  <label for="name">Third Name</label>
                  <input type="text" name="third_name" class="form-control" id="third_name" data-rule="minlen:3" data-msg="Please enter at least 3 chars"required="required" />
                  <div class="validate"></div>
                </div>
                      
                
                <div class="form-group col-md-6">
                  <label for="email">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" required="required" />
                  <div class="validate"></div>
                </div>
                  
                
                   <div class="form-group col-md-6">
                  <label for="Password">Password</label>
                  <input type="password" name="pass" class="form-control" id="pass" data-rule="minlen:6" data-msg="Please enter at least 6 chars"  required="required"/>
          
                  <div class="validate"></div>
                </div>
                  
            
                  <div class="form-group col-md-6">
                  <label for="Address">Address</label>
                  <input type="text" name="address" class="form-control" id="address" data-rule="minlen:6" data-msg="Please enter at least 6 chars" required="required"/>
                  <div class="validate"></div>
                </div> 
                  
                  <div class="form-group col-md-6">
                  <label for="phonenumber">Mobile Number</label>
                  <input type="int" name="mobile" class="form-control" id="mobile" data-rule="minlen:12" data-msg="Please enter a valid number"  required="required"/>
                  <div class="validate"></div>
                </div> 
                  
                  
                 <div class="form-group col-md-6">
                  <label for="NationalID">National ID</label>
                  <input type="int" name="national_id" class="form-control" id="national_id" data-rule="minlen:14" data-msg="Please enter at least 14 chars"  required="required" />
                  <div class="validate"></div>
                </div>
                     
                     
                 <div class="form-group col-md-6">
                  <label for="CardNumber">Credit Card Number</label>
                  <input type="int" name="visa" class="form-control" id="visa" data-rule="minlen:4" data-msg="Please enter at least 14 chars"  required="required"/>
                  <div class="validate"></div>
                </div>
                     
                  
                   <div class="form-group col-md-6">
                  <label for="age">Age</label>
                  <input type="int" name="age" class="form-control" id="age" data-rule="minlen:2" />
                  <div class="validate"></div>
                </div>

                <div class="form-group col-md-6">
                  <label for="Profession">Profession</label>
                  <input type="int" name="profession" class="form-control" id="profession" data-rule="minlen:5" data-msg="Please enter at least 5 chars" required="required" />
                  <div class="validate"></div>
                </div>
                  
            
             <div class="form-check col-md-3">
                <label class="form-check-label">
              <input type="radio" class="form-check-input" name="gender" value="male" required="required">Male
               </label>
               </div>
                  
              <div class="form-check col-md-6">
               <label class="form-check-label">
               <input type="radio" class="form-check-input" name="gender" value="female" required="required">Female
                </label> 
                  </div>
                  
              
            <div class="form-group col-md-2">
                 <label class="form-Control">
              <div class="text-center"><input type="submit" value="Register"></div>
                     
                        
            <div class="col-lg-6 mt-4">
                 <label class="form-Control"> <a href="user_update.php">
                     <div class="text-center"> <button type="button" class="btn btn-secondary">Update</button> 
                     </div>
                     
                     </a> </label> </div> </label> </div> </div> 
            </form>
          </div>
        </div>
    </div>  
    </section><!-- End Contact Section -->



    <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_POST['first_name']) && !empty($_POST['first_name'])) 
    $first_name =$_POST['first_name'];

    else  
        echo "please enter your first name";
    

    if(isset($_POST['second_name']) && !empty($_POST['second_name'])) 
        $second_name = $_POST['second_name'];

    else 
        echo "please enter your second name ";
     

    if(isset($_POST['third_name']) && !empty($_POST['third_name'])) 
        $third_name = $_POST['third_name'];

    else   {
            echo "please enter your third name";
    } 

    if (isset($_POST['age']) && !empty($_POST['age']))
        $age = $_POST['age'];

        else {
            echo "your age is required";
        } 
    
    if (isset($_POST['email']) && !empty($_POST['email']))
        $email = $_POST['email'];

        else {
            echo "your email is required";
        } 
    
    if (isset($_POST['pass']) && !empty($_POST['pass'])){
        if (strlen($_POST['pass']) < 8 ) 
        echo 
        "password should be more than 8";
        
            else {
                $password = md5($_POST['pass']);
            }
        }
        
        else {
        echo "password is required";
    } 

    if (isset($_POST['visa'] ) && !empty($_POST['visa'])){
        if (strlen($_POST['visa']) < 14) 

        echo 
            "visa number should be more than 14";

        else {
            $visa_nom = md5($_POST['visa']);
    }
}
    else {
        echo "your visa nom is required";

    }

    if (isset($_POST['national_id'] ) && !empty($_POST['national_id'])){
    
        if (strlen($_POST['national_id']) <14 ){ 

        echo 
            "National id should be more than 14";
        }
    else {
        $national_id = md5($_POST['national_id']);
    } 
}
    else {
        echo "National id is required";
    }

    if (isset($_POST['address'] ) && !empty($_POST['address'])){ 

    $address = $_POST['address'];
    }
    if (isset($_POST['mobile']) && !empty($_POST['mobile'])) {

        if (strlen($_POST['mobile']) < 11){  

        echo "Mobile Number should be equal 11";
        }
        else
         $mobile_nom = $_POST['mobile'];
    }
    else
         echo "Mobile Number is required";


    if (isset($_POST['gender']) && !empty($_POST['gender'])){ 
      
    $gender = $_POST['gender'];
    }
    else{ 
        echo "gender is required";
    }

    if (isset($_POST['profession']) && !empty($_POST['profession'])){
         $profession = $_POST['profession'];
    }
      else 
            echo "profession is required";


      $sql = "INSERT INTO `users`(`user_id`, `first_name`, `second_name`, `third_name`, `age`, `email`, `password`, `Address`, `visa_number`,  
        `national_id`, `mobile_nom`, `gender`, `profession`)
        VALUES (NULL, '$first_name', '$second_name', '$third_name', '$age' , '$email', '$password', '$address', '$visa_nom', '$national_id',  '$mobile_nom', '$gender', '$profession');";
        
        $run = mysqli_query($connection, $sql);

        $userId = mysqli_insert_id($connection);

        $_SESSION['user_id'] = $userId;

}
?>

  </main><!-- End #main -->

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

</body>

</html>