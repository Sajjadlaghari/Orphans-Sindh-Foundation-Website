
<?php
session_start();
if(isset($_SESSION['admin']))
{
  header('location:admin/index.php');
}


 
 
?> 
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="Employee Record management System in php and mysql">
  <meta name="description" content="Employee Record management System in php and mysql">
  <meta name="author" content="Sarita Pandey">

  <title>Admin Login</title>

  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
  <!-- Custom styles for this template-->

    <!--AOS Link-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  

  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>



<body class="bg-info" >

  <!-- ======= Header ======= -->
  
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.php">OSFNF</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="drop-down"><a href="">Our Orphans Centers</a>
          <ul>
              <li><a href="#">Hyderabad</a></li>
              <li><a href="#">Nawabshah</a></li>
              <li><a href="#">Sukkur</a></li>
</ul>
          </li>
          <li  ><a href="Adoptchild.php">Adopt Child</a></li>
          <li><a href="Donation.php">Donate</a></li>
          </ul>
      </nav><!-- .nav-menu -->

      <a  href="AdminLogin.php" class="get-started-btn scrollto">ADMIN</a>


    </div>
  </header><!-- End Header -->

        <!-- End Header -->






  <div class="container mt-5">
    <!-- Outer Row -->
    <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="1700">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
         
          <div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                
         <img style="margin:30px; border-radius:20px;" src="assets/img/2.jpg" height="300px" class="img-fluid" alt="">
                
              </div>
              <div class="col-lg-6">
          
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Admin login!</h1>
                  </div>

                  <?php
                  
                  if(isset($_SESSION['wrong']))
                  {

                    echo $_SESSION['wrong'];
                    unset($_SESSION['wrong']);
                  }
                  
                  if(isset($_SESSION['set']))
                  {
                    echo $_SESSION['set'];
                    unset($_SESSION['set']);
                  }
                  ?>
                  <form class="user" method="post" action="check.php" autocomplete="off">
                   
               <div class="form-group" >         
                 <input type="email" class="form-control form-control-user" id="email" name="Email" required="true" placeholder="User Email ...">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="Password" placeholder="Password" required="true">
                </div>
                  <p> <input type="submit" class="btn btn-primary btn-user btn-block" name="login" value="login"></p>

                    <hr>
                  
                  </form>
                  <p align="center"><a href="forgotpassword/forgotpassword.php">Forget Password</a></p>
                  <hr>
                  </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

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
