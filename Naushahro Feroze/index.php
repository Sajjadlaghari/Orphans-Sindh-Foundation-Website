<?php
require('dbconnection/dbconnection.php');
error_reporting(0);
if(isset($_POST['submit']))
  {
    $con=get_connection();
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Subject=$_POST['subject'];
    $Message=$_POST['message'];
    $sql="insert into contactmessagefornfpage(Name,Email,Subject ,Message) values('$Name', '$Email','$Subject','$Message')";
    $query=mysqli_query($con,$sql);
    
    if ($query) {
      
    echo "<script>";
    echo "alert('Your Message Sent');";
    
    echo "</script>";
  }
  else
    {
      
    echo "<script>";
      echo "alert('Something Went Wrong. Please try again')";
    
      echo "</script>";
    }
  } 
  ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Orhans Sindh Naushahro Feroze</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
 
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
    <!--AOS Link-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">   
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>  

</head>
<body>

  
 <!-- ======= Header ======= -->
         <?php
         require('includes/navbar.php');
         ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url('assets/img/gallery/pic-8.jpg') ; background-position: center; background-size: cover; background-repeat: no-repeat;">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Our Mission</h2>
                <p class="animate__animated animate__fadeInUp">To establish children's home to help poor and orphans children irrespective to their gender religion, creed or community and to provide them with food accomodation, medicine, cloth, education facilities and vocational training, free of costs..</p>
                <div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url('assets/img/3.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat;">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Vission</h2>
                <h2 style="font-size: 22px;" class="animate__animated animate__fadeInUp"> To integrate an orphan child into mainstream society through holistic development.</h2>
                <div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url('assets/img/2.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat;">
            <div class="carousel-background"><img src="" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Connect with kids</h2>
                <p class="animate__animated animate__fadeInUp">You Can come over to our location and spend time with kids involving them in any of the activity such as sport, drawing, painting, dancing, singing or anything creative that you can think of and valuable to kids...</p>
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about"  data-aos="fade-up" data-aos-duration="1500">
      <div class="container">
        <h1 class="text-center">About Us</h1><br>
             
        <div class="row no-gutters">
          
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start">
            <img src="./assets/img/gallery/3.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <p style="margin-top: -50px;">Established in 2010 Orphans Sindh Foundation Naushahro Feroze was created to serve as a home and provide care for orphaned children in any crisis across Sindh. What started as orphanage for underpriviledged orphans has now truned into family of about 1000 children. Our orphan care Service provide education, home, food, medical care, and emotional healing to the children.   .</p>
              <br>  
              <p>Orphans Sindh Foundation the heaven for less fortunate angels and fairies of sindh is not just a labor of love, it is profound tale of how our founder discovered heaven on the earth. </p>
               <br>
               <p>Many children were orphaned dur to operation Raah e Rast because their fathers, who were the primary breadwinner, had died, and their mothers had no means by which to feed or clothe them and founder of OSF I felt and immediate and ourpowering need to do something.. </p>  
            </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts" data-aos="fade-up" data-aos-duration="1500">
      <div class="container">

        <div class="row no-gutters bg-info"  >

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch"  >
            <div class="count-box">
              <span data-toggle="counter-up">252</span>
              <p><strong>Our Total </strong>orphans in NF</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">180</span>
              <p><strong>Male</strong> Total</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">36</span>
              <p><strong>Female</strong> Total </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-toggle="counter-up">15</span>
              <p><strong>Trans Gender</strong> Total</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services" data-aos="fade-up" data-aos-duration="1500">
  <div class="container">

    <div class="section-title">
      <h2>Services</h2>
      </div>
  </section>
<!-- ======= Features Section ======= -->
<section id="features" class="features" >
  <div class="container">

    <div class="row">
      <div class="col-lg-3 col-md-4 col-6 col-6" data-aos="fade-up" data-aos-duration="1500">
        <div class="icon-box">
          <i class="ri-store-line" style="color: #ffbb2c;"></i>
          <h3><a href="" data-aos="fade-up" data-aos-duration="1500">Ambulance</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-duration="1500">
        <div class="icon-box">
          <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
          <h3><a href="">Hospital</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-duration="1500">
        <div class="icon-box">
          <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
          <h3><a href="">Graveyard</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-duration="1500">
        <div class="icon-box">
          <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
          <h3><a href="">Rooti Plant</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6 mt-4" data-aos="fade-up" data-aos-duration="1500">
        <div class="icon-box">
          <i class="ri-anchor-line" style="color: #b2904f;"></i>
          <h3><a href="">Education Service</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6 mt-4" data-aos="fade-up" data-aos-duration="1500">
        <div class="icon-box">
          <i class="ri-disc-line" style="color: #b20969;"></i>
          <h3><a href="">Children Service</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6 mt-4" data-aos="fade-up" data-aos-duration="1500">
        <div class="icon-box">
          <i class="ri-base-station-line" style="color: #ff5828;"></i>
          <h3><a href="">Online Qurbani Service</a></h3>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-6 mt-4" data-aos="fade-up" data-aos-duration="1500">
        <div class="icon-box">
          <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
          <h3><a href="">Work Shop</a></h3>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Features Section -->

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta" data-aos="fade-up" data-aos-duration="1700">
  <div class="container">

    <div class="text-center" data-aos="fade-up" data-aos-duration="1700">
      <h3>Discover What's possible when a <br> Community creates together.</h3>
      <p> </p>
    </div>

    <a href="Gallery"></a>
  </div>
</section><!-- End Cta Section -->




    <!-- ======= Gallery Section ======= -->
     
  <?php
    require('includes/gallery.php');
  ?>
    <!-- ======= Contact Section ======= -->
    

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">How Can Youe Help Us ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  There are so many ways you can help us you can help us through by hand or you can deposit your amount in our MCB bank account or through EasyPesa or JazzCash that is Availabe in Our Menu click Donate get Informations.              </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">How Can You Adopt Child? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  You Can Come direct our orphans village or fill the adopt child form from menu the will contact with you. 
              </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">How Can You Celebrate Orphans Day or Pakistan Independance Day With our Children? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                 If You Really want to celebrate Pakistan independance day or Orphans day with Our Childrens Go Throght contact form write subject celebrate Orphans or Pakistan day Write Message We Will do Contact with you . 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Our Aim? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                    Our aim is provide perfect life to the orphans child they have goal they have also need good accomodation they need good meal to eat our aim make perfect life or orphans child..   
              </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Suggetions? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                  If you any query Or suggetions for Us contact us without any hesiattions.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->






  <?php
    require('includes/contact.php');
  ?>
    <!-- End Contact Section --> 
 </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
    require('includes/footer.php');
  ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <script>
    AOS.init();
  </script>


</body>

</html>