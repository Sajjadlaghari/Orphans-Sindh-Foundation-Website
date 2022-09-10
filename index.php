<?php
require('Naushahro Feroze/dbconnection/dbconnection.php');
error_reporting(0);
if(isset($_POST['submit']))
  {
    $con=get_connection();
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $Subject=$_POST['subject'];
    $Message=$_POST['message'];
    $sql="insert into contactmessageformainhomepage(Name,Email,Subject ,Message) values('$Name', '$Email','$Subject','$Message')";
    $query=mysqli_query($con,$sql);
    
    if ($query) {
    $msg="Your Message Sent";
  
    echo "<script>alert('Your Message Sent')</script>";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }
  } 
  ?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Orphans Sindh Foundation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!--  Main CSS File -->
  <link href="./css/style.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <!--AOS Link-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- CSS FOR NAVBAR -->
  <link rel="stylesheet" href="./cssforNavbar/style.css">


  

</head>

<body>

  <!-- ======= Header ======= -->

  
  <header id="header" class="d-flex align-items-center">

  <div class="container d-flex justify-content-between align-items-center">

    
      <div class="logo">
        <h1><a href="index.html">Orphans Sindh <br> Foundation</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
  <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#whatwedo">What we do</a></li>
          <li><a href="#Events">Events</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#aboutus">About</a></li>
          <li class="dropdown"><a href="#"><span>Our Orphans Center</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="./Naushahro Feroze/index.php">Naushahro Feroze</a></li>
              <li><a href="#">Hyderabad</a></li>
              <li><a href="#">Nawabshah</a></li>
              <li><a href="#">Sukkur</a></li>

</ul>
          </li>
          
          <li><a href="donation.php">Donate</a></li>
          <li><a href="#contactus">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  


  <!-- ======= Hero Section ======= -->
  <section data-aos="fade-up" id="hero" class="d-flex align-items-center"
    style="background-image: url(./assets/img/gallery/1.jpg); background-position: center; background-repeat: no-repeat; background-size: cover; background-size:100% 650px; ">
    <div class="container position-relative text-center text-lg-left" data-aos="fade-up" data-aos-duration="1500">
      <div class="row">
        <div class="col-lg-8 text-lg-left">
          <h2
            style="color:rgb(245, 245, 240); font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-weight: 800px;">
            Your Everyday Meal may be Someone Special day meal help some to get it by <button class="btn btn-primary"
              style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"><a href="Donation.php" style="color:white;">Donating it</a></button> </span></h1>
            <h6 style="margin-left:-130px;">Change Yours. This Will Change Everything</h6>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-duration="1500">
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <!-- Hope Section -->

  <section id="hope">
    <div class="container-fluid bg-dark" data-aos="fade-up" data-aos-duration="1500">
      <div class="row">
        <div class="col-sm-6 ">
          <h1>Bring Hope to the Orphans <br> of the Sindh.</h1 data-aos="fade-up" data-aos-duration="1500">
        </div>
        <div class="col-sm-6 ">
          <p><strong>Our mission</strong> is to provide food shelter,medical care children's bibles educational
            assistance adoption advocacy and more in manner that breaks the cycle of independance and promotes
            individual and care societal productivity as well as charitable character with the community.</p
            data-aos="fade-up">
        </div>
      </div>
    </div>
  </section>


  <!-- Start Section Current Childrens  -->
  <section class="section">
    <div id="data" class="container-fluid text-center" data-aos="fade-up" data-aos-duration="1500">
      <h2 data-purecounter-start="0" data-purecounter-end="2000" data-purecounter-duration="1" class="purecounter">2,010
      </h2>
      <p>Current number of Children</p>
    </div>

    <div id="data1" class="container-fluid text-center " data-aos="fade-up" data-aos-duration="1500">
      <h2 data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter">
        20,000</h2>
      <p>Total Beneficiaries</p>
    </div>
    <div id="data2" class="container-fluid text-center " data-aos="fade-up" data-aos-duration="1500">
      <h2 data-purecounter-start="0" data-purecounter-end="300" data-purecounter-duration="1" class="purecounter">350
      </h2>
      <p>Former Orphans Children</p>
    </div>

    <a class="active" class="whatwdeo" href="" id="whatwedo"></a>
    <div id="data3" class="container-fluid text-center" data-aos="fade-up" data-aos-duration="1500">
      <h2 data-purecounter-start="0" data-purecounter-end="60" data-purecounter-duration="1" class="purecounter">60</h2>

      <p>Total Project</p>

    </div>

  </section>
  <!--End Current Student Section-->



  <main id="main">


    <section  id="what-do-we" class="what-do-we">

      <div  class="container" data-aos="fade-up" data-aos-duration="1500">

        <div  class="section-title" id="what-Do-we">

          <h2 style="margin-top: 50px;  text-align: center; position: relative; top: -30px;">WHAT WE DO</h2>
        </div>

        <div class="row" class="active">

          <div class="col-lg-4">
            <div class="box" data-aos="fade-up" data-aos-duration="1500">
              <span><br></span>
              <h4 style="text-align:center; text-transform:uppercase">Sadqa</h4>
              <p>The more we give sadaqah the more we increase our eeman and thus, expect Allah’s rewards both in this world and in the life hereafter. Giving charity out of our wealth does not decrease our wealth but instead Allah (s.w.t.) increases it:.</p>
              <br>
              <p id="amount">&nbsp; &nbsp;Amount: Any amount</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-duration="1500">
              <br>
              <h4 style="text-align:center; text-transform:uppercase">Zakat</h4>
              <p>“Take from their money a charity to cleanse them and purify them” – Qur’an 9:103.
              Zakat is the amount of money that every adult, mentally stable, free, and financially able Muslim, male and female, has to pay to support specific categories people.

.</p>
              <br>
              <p id="amount">&nbsp; &nbsp;Amount: Any amount</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-duration="1500">
              <br>
              <h4 style="text-align:center; text-transform:uppercase">Fitra</h4>
              <p>If one does not fast some days during Ramadan, it is obligatory to make up these missed fasts before the next Ramadan arrives, regardless of whether these fasts were missed with a valid excuse (e.g. menstruation, travel, sickness, etc.) or without a valid excuse..</p>
              <br>
              <p id="amount">&nbsp; &nbsp;Amount: Any amount</p>
            </div>
          </div>
           </div>

      </div>
      <a href="" id="Events"></a>
       
    </section><!-- What We do section -->


    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up" data-aos-duration="1500">

        <div class="section-title">
          <h2 style="margin-top:70px; font-size:40px; background-color: aliceblue;" data-aos="fade-up"
            data-aos-duration="1500">Events </h2>
          <h5 style="font-size:25px; background-color:beige;" data-aos="fade-up" data-aos-duration="1500">Celebrate Your
            Events with our Orphan </h5>
        </div>

        <div class="owl-carousel events-carousel" data-aos="fade-up" data-aos-duration="1500">


          <div class="row event-item">
            <div class="col-lg-6">
              <img src="assets/img/gallery/independenceday.jpg" class="img-fluid" alt="" data-aos="fade-up" data-aos-duration="1500">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>PAKISTAN INDEPENDANCE DAY</h3>
              <div class="price">
              </div>
              <p class="font-italic" data-aos="fade-up" data-aos-duration="1500">
            
                  We Celebrate every year Pakistan independance day with our children if you want to join us you can join and celebrate with our orphans.
            </p>
            </div>
          </div>

          <br>
          <br>

          <div class="row event-item" id="event">
            <div class="col-lg-6">
              <img src="assets/img/gallery/orphansday.jpg" class="img-fluid" style="width:100%; height:100%;" alt="" data-aos="fade-up" data-aos-duration="1500">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>ORPHANS DAY</h3 data-aos="fade-up" data-aos-duration="1500">
              
              <p class="font-italic" data-aos="fade-up" data-aos-duration="1500">
              20th April, World Orphans Day is declared by Worldwide Organization for Charity (WOC) Previously known as World Orphan Centre (WOC). The prime purpose of World Orphans Day is to raise awareness and provide a common platform for orphans and underprivileged children related activities all over the world. 
              </p>
              <p data-aos="fade-up-left" data-aos-duration="1000">
                Come and Celebrate orphans day with our orphans childrens </p>
            </div>
          </div>

          <br>
          <br>

          <div class="row event-item">
            <div class="col-lg-6">
              <img src="assets/img/gallery/brithday.jpg" class="img-fluid" alt="" data-aos="fade-up" data-aos-duration="1500">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">

              <h3>BRITHDAYS</h3 data-aos="fade-up" data-aos-duration="1500">
             

              <p class="font-italic" data-aos="fade-up" data-aos-duration="1500">
                We Celebrate brithdays of children and we can share with you the schedule if you wish to join,
                Contribute and bestow wishes..
              </p>        <a href="" id="gallery"></a>
        

        
            </div>
          </div> 
      </div>

      </div>

    </section><!-- End Events Section -->





    <!-- ======= gallery Section ======= -->
    <section  id="gallery" class="gallery" data-aos="fade-up" data-aos-duration="1500">

      <div class="container text-center">
        <h1  style="padding: 15px;"> GALLERY</h1>
      </div>

      <div class="container" >
        <div class="row" >
          <div class="col-md-4" class="geeks">
            <a href="./assets/img/gallery/pic-1.jpg" >
              <img src="./assets/img/gallery/pic-1.jpg" class="img-fluid" alt="">
            </a>
          </div>
          <div class="col-md-4">
            <a href="./assets/img/gallery/pic-2.png">
              <img src="./assets/img/gallery/pic-2.png" class="img-fluid" alt="">
            </a>
          </div>
          <div class="col-md-4">
            <a href="./assets/img/gallery/pic-8.jpg">
              <img src="./assets/img/gallery/pic-8.jpg" class="img-fluid" alt="">
            </a>
           </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <a href="./assets/img/gallery/pic-4.jpg">
              <img src="./assets/img/gallery/pic-4.jpg" class="img-fluid" alt="">
            </a>
           </div>
          <div class="col-md-4">
            <a href="./assets/img/gallery/1.jpg">
              <img src="./assets/img/gallery/1.jpg" class="img-fluid" alt="">
            </a>
           </div>
          <div class="col-md-4">
            <a href="./assets/img/gallery/3.jpg">
              <img src="./assets/img/gallery/3.jpg" class="img-fluid" alt="">
            </a>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-4">
            <a href="./assets/img/gallery/pic-7.jpg">
              <img src="./assets/img/gallery/pic-7.jpg" class="img-fluid" alt="">
            </a>
           </div>
          <div class="col-md-4">
            <a href="./assets/img/gallery/pic-8.jpg">
              <img src="./assets/img/gallery/pic-8.jpg" class="img-fluid" alt="">
            </a>
          </div>
          <div class="col-md-4">
            <a href="./assets/img/gallery/pic-9.jpg">
              <img src="./assets/img/gallery/pic-9.jpg" class="img-fluid" alt="">
            </a>
          </div>
          <a href="" id="aboutus"></a>

        </div>

      </div>

    </section><!-- End Gallery Section -->




    <section id="breadcrumbs" class="breadcrumbs" data-aos="fade-up" data-aos-duration="1500">
      <div class="container">

        <h2 style="text-align: center; padding: 20px;" data-aos="fade-up" data-aos-duration="1500">About Us</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500">
            <img src="assets/img/gallery/pic-1.jpg" style="height: 440px;" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-up" data-aos-duration="1500">
            <h3>EARLY BEGINNINGS.</h3>
            <p class="fst-italic">
              The first orphanage was established in the United States in 1729 to care for White
              children, orphaned by a conflict between Indians and Whites at Natchez,
              Mississippi. Orphanages grew and between 1830 and 1850 alone, private
              charitable groups established 56 children's institutions in the United States
              (Bremner,1970). Some theorize these orphanages were established in response to
              health epidemics (cholera, tuberculosis and influenza), wars, influx of immigrants
              into a particular geographical area, growing urbanization, and poor economic times.
              Others theorized that the establishment of these institutions were for a variety of
              other reasons. In 1980, Congress passed the Adoption Assistance and Child Welfare Act. This
              act was to establish a program of adoption assistance, to strengthen the program
              of foster care assistance for needy and dependent children, to improve the child
              welfare, social services, and aid to families with dependent children program. It
              was significant because it stressed the importance of placing a child in the least
              restrictive and most family-like setting. The Act discouraged out of home
              placements and called for the return of children to their family as soon as possible. <a href=""
                id="contactus"></a></p>

          </div>
        </div>
        <a href="" id="contactus"></a>
      </div>
    </section><!-- End About Section -->




    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" data-aos="fade-up" data-aos-duration="1500">
      <div class="container">
        <h2 style="text-align: center; padding: 40px; font-size:35px;"></h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
  
    <?php
    require('includes/contact.php');
  ?>

    <br><br>
    <!-- ======= Footer ======= -->
    <?php
    require('includes/footer.php');
  ?><!-- End Footer -->

   
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>





    <script>
      AOS.init();
    </script>









    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <!-- jQuery -->
    <script src="./js/jquery.min.js"></script>



    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>



</body>

</html>