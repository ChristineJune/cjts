<?php
include "conn-landing.php";

?>


<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cite Job Tracking System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo1.jpg" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">CJTS</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Accounts</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#"  data-bs-toggle="modal" data-bs-target="#login2">Admin</a></li>
              <li><a href="#"  data-bs-toggle="modal" data-bs-target="#login1">Alumni</a></li>
              <li><a href="#"  data-bs-toggle="modal" data-bs-target="#register">Register</a></li>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        
      </nav><!-- .navbar -->
      

    </div>
  </header><!-- End Header -->
       <!-- alumni Modal -->
<div class="modal fade" id="login1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LOGIN AS ALUMNI</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <form action="process-landing.php" method="POST">

          <div class="input-group mb-3">
            <div class="input-group-text">
              <i class="bi bi-envelope-at"></i>
            </div>
            <input type="email" class="form-control" name="email3" placeholder="Enter Email" required>
          </div>
          
          <div class="input-group">
            <div class="input-group-text">
              <i class="bi bi-key"></i>
            </div>
            <input type="password" class="form-control" id="myInput2" name="password3" 
            placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
            required>
          </div>

          <input type="checkbox" onclick="myFunction2()">Show Password


       
      </div>
      <div class="modal-footer">
        <input type="reset" class="btn btn-secondary" value="CLEAR">
        <input type="submit" class="btn btn-primary" name="login2" value="LOGIN">
      </div>

    </form>
    </div>
    </div>
    </div>

    <script>
  function myFunction2() {
    var x = document.getElementById("myInput2");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>

<!--alumni modal end-->

<!-- registration Modal -->
<div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">REGISTER</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <form action="process-landing.php" method="POST" enctype="multipart/form-data">

     
              <div class="col -md-12 md-3 ">
                <label class="fw-bold"> Picture</label>
              <div class="input-group mb-3">
                  <div class="input-group-text">
                  <i class="bi bi-image"></i>
                  </div>
                  <input type="file" accept=".png, .jpg, .gif, .jfif" class="form-control" name="pic" placeholder="Enter Picture" required>
                </div>
              
                
                <label class="fw-bold">Full Name</label>
                <div class="input-group mb-3">
                  <div class="input-group-text">
                  <i class="bi bi-person-square"></i>
                  </div>
                  <input type="text" class="form-control" name="name" placeholder="Enter Here..." required>
                </div>
               

              
                <label class="fw-bold">Student ID Number</label>
                <div class="input-group mb-3">
                  <div class="input-group-text">
                  <i class="bi bi-credit-card"></i>
                  </div>
                  <input type="text" class="form-control" name="student_id" placeholder="Enter Here..." required>
                </div>
                

               
                <label class="fw-bold"> Age</label>
                <div class="input-group mb-3">
                  <div class="input-group-text">
                  <i class="bi bi-plus-square"></i>
                  </div>
                  <input type="text" class="form-control" name="age" placeholder="Enter Here..." required>
                </div>

              
                <label class="fw-bold">Gender</label>
                <div class="input-group mb-3">
                  <select name="gender" id="" class="form-control" >
                    <option value="" disabled selected>Choose Your Gender</option>
                    <option value="FEMALE">FEMALE</option>
                    <option value="MALE">MALE</option>
                  </select>
                </div>
             
                
                
                <label class="fw-bold">Contact Number</label>
                <div class="input-group mb-3">
                  <div class="input-group-text">
                  <i class="bi bi-telephone"></i>
                  </div>
                  <input type="text" class="form-control" name="mobile" placeholder="Enter Contact Number" required>
                </div>

                <label class="fw-bold">Address</label>
                <div class="input-group mb-3">
                  <div class="input-group-text">
                  <i class="bi bi-house-add-fill"></i>
                  </div>
                  <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
                </div>
                
                <label class="fw-bold">Date of Birth</label>
                <div class="input-group mb-3">
                  <div class="input-group-text">
                  <i class="bi bi-calendar"></i>
                  </div>
                  <input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth" required>
                </div>

                <label class="fw-bold">Place of Birth</label>
                <div class="input-group mb-3">
                  <div class="input-group-text">
                  <i class="bi bi-hospital"></i>
                  </div>
                  <input type="text" class="form-control" name="pob" placeholder="Enter Place of birth" required>
                </div>

                <label class="fw-bold">Citizenship </label>
                <div class="input-group mb-3">
                  <div class="input-group-text">
                  <i class="bi bi-person-lines-fill"></i>
                  </div>
                  <input type="text" class="form-control" name="citi" placeholder="Enter Here..." required>
                </div>

                <label class="fw-bold">Civil Status</label>
                <div class="input-group mb-3">
                  <select name="cs" id="" class="form-control">
                    <option value="" disabled selected>Choose Your Civil Status</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Taken">Taken </option>
                    <option value="cWidowed">Widowed</option>
                    <option value="Divorced">Divorced</option>
                  </select>
                </div>

                <label class="fw-bold">Year Graduated </label>
                <div class="input-group mb-3">
                  <div class="input-group-text">
                <i class="bi bi-calendar-event"></i>
                  </div>
                  <input type="year" class="form-control" name="yg" placeholder="Enter Here..." required>
                </div>

                <label class="fw-bold">Language Spoken </label>
                <div class="input-group mb-3">
                  <div class="input-group-text">
                  <i class="bi bi-translate"></i>
                  </div>
                  <input type="text" class="form-control" name="ls" placeholder="Enter Here..." required>
                </div>

                <label class="fw-bold">Education </label>
                <div class="input-group mb-3">
                  <div class="input-group-text">
                  <i class="bi bi-mortarboard"></i>
                  </div>
                  <input type="text" class="form-control" name="education" placeholder="Enter Here..." required>
                </div>

                <label class="fw-bold">Eperience </label>
                <div class="input-group mb-3">
                  <div class="input-group-text">
                  <i class="bi bi-person-workspace"></i>
                  </div>
                  <input type="text" class="form-control" name="experience" placeholder="Enter Here..." required>
                </div>

                <label class="fw-bold">Date Registerd </label>
                <div class="input-group mb-3">
                  <div class="input-group-text">
                  <i class="bi bi-person-circle"></i>
                  </div>
                  <input type="date" class="form-control" name="dor" placeholder="Enter Here..." required>
                </div>

                <label class="fw-bold">Email </label>
                <div class="input-group mb-3">
                  <div class="input-group-text">
                    <i class="bi bi-envelope-at"></i>
                  </div>
                  <input type="email" class="form-control" name="email3" placeholder="Add Here..." required>
                </div>
                
                
                <label class="fw-bold">Password </label>
                <div class="input-group">
                  <div class="input-group-text">
                    <i class="bi bi-key"></i>
                  </div>
                  <input type="password" class="form-control" id="myInput3" name="password3" 
                  placeholder="Add Here..." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
                  required>
                </div>

                <input type="checkbox" onclick="myFunction3()">Show Password

                </div>
      <div class="modal-footer">
        <input type="reset" class="btn btn-secondary" value="CLEAR">
        <input type="submit" class="btn btn-primary" name="register" value="SUBMIT">
      </div>

    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
 


    <script>
  function myFunction3() {
    var x = document.getElementById("myInput3");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>

<!-- registration Modal end -->




  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel" >

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>CITE Job Tracking System</span></h2>
          <p class="animate__animated fanimate__adeInUp">With the use of this technology, Phinma University of Iloilo graduates will be able to monitor the status of their careers online.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>About</h2>
          <p>Who we are</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
              The Cite Department can use the Alumni Job Tracking System to keep track of alumni data and facilitate communication among alumni. 
              This system will create an online portal that Phinma University of Iloilo graduates can utilize to track their career status. 
              This web application acts as a database repository for the whereabouts, jobs, and other information of graduates that may be useful in tracking and reporting requirements needed by the university.
               It is crucial for both graduates and the administration.
            </p>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3" data-aos="zoom-in">
            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">What is Alumni Job Tracking System</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">What is the purpose of this System</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">How can it help the Alumni</h4>
            </a>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">School can recommend Job to their Alumni</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>What is Alumni Job Tracking System for CITE Department?</h3>
                <p class="fst-italic">
                  An online tool called the Alumni Job Tracking System is designed specifically for university graduates.  
                  This web tool is crucial for both graduates and the administration since it acts as a database repository for the whereabouts, employment,
                   and other details of the graduates that may be useful for tracking down and reporting information that the institution requires. 
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-1.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>What is the purpose of this System?</h3>
                <p>
                  The Alumni Tracking System was created in order to give graduates of previous classes a way to stay in touch with their college. We developed a system that is globally accessible.
                   This aids in the management of the college in keeping track of all the students who have graduated.
                   The college will be aware of the alumni's professional details, and it fills them with pride to know that their students have found success in their careers and are happy in their new lives.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-2.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>How can it help the Alumni and the School?</h3>
                <p>
                  With the help of this project, institutions will be able to maintain tabs on the precise locations of their graduates, which will facilitate your efforts in identifying potential contacts. 
                  Through this project, alumni can browse meeting or event calendars, look for new career prospects, and maintain contact with their college.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-3.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>This system can also recommend Job to the Alumni</h3>
                <p>
                  Alumni are welcome to take advantage of the college's training programs, which will aid in advancing their careers. Alumni who have found employment elsewhere can post job openings locally, and other alumni who are looking for work can examine the offers and submit an application. 
                  Alumni are able to add job advertisements under a variety of fields and locales. If they are looking for a job, other alumni grads can read these job postings and apply.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/features-4.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Services</h2>
          <p>What we do offer if you update your data</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Job Offers</a></h4>
              <p class="description">The school will send an email to you about the job offers and they can also recommend you.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Seminars related to your course</a></h4>
              <p class="description">The school can email you seminars that can possible help you to your dream job.</p>
            </div>
          </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Team</h2>
          <p>Our Hardworking Team</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://x.com/itzzmechristine?s=09"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/ChristineJuneMesa1606?mibextid=ZbWKwL"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/itzzmechristine?igsh=YzljYTk1ODg3Zg=="><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Christine June Mesa</h4>
                <span>Documentator/Coder</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/Team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://x.com/Jhsmn_Lyss?s"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/jhasmin.alyssa15"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/jhsmn_lyss?igsh=YzljYTk1ODg3Zg=="><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jhasmin Alyssa Botea</h4>
                <span>Documentator/Coder</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.facebook.com/RjTeruelHuervana?mibextid=LQQJ4d"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/rhenetzy?igsh=cnh6eXEyMG83NG4w&utm_source=qr"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Rene Joy Huervana</h4>
                <span>Documentator/Coder</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
   
    <section id="contact" class="contact">
      <div class="container">
    
        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">
       
          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Rizal Street, Iloilo City, Philippines</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>cite.uiphinma2013@gmail.com</p>
              </div>
            </div>
      </div>
  

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="social-links">
        <a href="https://x.com/CITE_UIPHINMA?s"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/cite.phinmaui" class="facebook"><i class="bx bxl-facebook"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>AceTeam</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">AceTeam</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

   <!-- admin Modal -->
<div class="modal fade" id="login2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LOGIN AS ADMIN</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <form action="process-landing.php" method="POST">

          <div class="input-group mb-3">
            <div class="input-group-text">
              <i class="bi bi-envelope-at"></i>
            </div>
            <input type="email" class="form-control" name="email1" placeholder="Enter Email" required>
          </div>
          
          <div class="input-group">
            <div class="input-group-text">
              <i class="bi bi-key"></i>
            </div>
            <input type="password" class="form-control" id="myInput1" name="password1" 
            placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" 
            required>
          </div>

          <input type="checkbox" onclick="myFunction1()">Show Password

      </div>
      <div class="modal-footer">
        <input type="reset" class="btn btn-secondary" value="CLEAR">
        <input type="submit" class="btn btn-primary" name="login1" value="LOGIN">
      </div>

    </form>

    <script>
  function myFunction1() {
    var x = document.getElementById("myInput1");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>



</body>

</html>