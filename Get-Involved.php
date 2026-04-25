<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>GreenFuture Foundation </title>
  <meta name="description" content="">
  <meta name="keywords" content="">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Marcellus:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


</head>

<body class="testimonials-page">

  <header id="header" class="header d-flex align-items-center position-relative">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.jpg" alt="AgriCulture">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="project.html">Projects</a></li>
          <li><a href="Get-Involved.php" class="active">Get-Involved</a></li>
          <li><a href="Donate.html">Donate</a></li>
          <li><a href="news.php">News & Events</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

       <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="assets/img/background 04.png" alt="">
          <div class="carousel-container">
            
            

              <h2><b>Get-involved</b></h2>
              
              <h5>Join us in making a difference! There are many ways to contribute to GreenFuture Foundation, 
                from volunteering to hosting fundraising events</h5>

                <br> <br>

                <h3>Volunteer With Us</h3>
                <br><br>
          
                <form action="forms/volunteer.php" method="POST">
                  <label for="name">Name:</label>&nbsp;&nbsp;
                  <input type="text" id="name" name="name" required> &nbsp;&nbsp;
              
                  <label for="email">Email:</label>&nbsp;&nbsp;
                  <input type="email" id="email" name="email" required> &nbsp;&nbsp;
              
                  <label for="interest">Area of Interest:</label>&nbsp;&nbsp;
                  <select id="interest" name="interest">
                      <option value="reforestation">Reforestation</option>
                      <option value="ocean_cleanup">Ocean Cleanup</option>
                      <option value="education">Environmental Education</option>
                  </select>
                  <br><br>
                  <div class="text-center">
                      <button type="submit" class="btn">Submit</button>
                  </div>
              </form>
              
              

              

          <div>
            
        </div>
            

          </div>
        </div>

        
      </section>
      </main>
      
      <footer id="footer" class="footer dark-background">
    
        <div class="copyright text-center">
          <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
    
            <div class="d-flex flex-column align-items-center align-items-lg-start">
              <div>
                © Copyright <strong><span>GreenFuture Foundation</span></strong>. All Rights Reserved
              </div>
              <div class="credits">
              
                Designed by <a href="#">Kawya Nethmini</a>
              </div>
            </div>
    
            <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
    
          </div>
        </div>
    
      </footer>
    
      <!-- Scroll Top -->
      <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
      <!-- Preloader -->
      <div id="preloader"></div>
    
      <!-- Vendor JS Files -->
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>
      <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    
      <!-- Main JS File -->
      <script src="assets/js/main.js"></script>
    
    </body>
    
    </html>