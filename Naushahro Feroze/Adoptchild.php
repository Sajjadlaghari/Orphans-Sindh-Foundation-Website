 <?php
require('dbconnection/dbconnection.php');
error_reporting(0);
if(isset($_POST['submit']))
  {
    $con=get_connection();
    $FName=$_POST['FirstName'];
    $LName=$_POST['LastName'];
    $Presentaddress=$_POST['presentaddress'];
    $Email=$_POST['Email'];
    $Number=$_POST['number'];
    $Gender=$_POST['gender'];
    $Message=$_POST['message'];
    $ret=mysqli_query($con, "select Email from resquestforadoptchild where Email='$Email'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
$msg="This email already Sent Request";
    }
    else{
    $query=mysqli_query($con, "insert into resquestforadoptchild(First_Name, Last_Name, Address,Email,  Phone_Number,Gender,Message) value('$FName', '$LName', '$Presentaddress', '$Email', '$Number', '$Gender', '$Message' )");
    if ($query) {
      echo "<script>";
      echo 'alert("Your Request Sent Wait for the response")';
    
      echo "</script>";
  }
  else
    {
      echo "<script>";
      echo 'alert("Something Went Wrong. Please try again")';
    
      echo "</script>";
    }

  }
}
  ?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Adobe Child Form</title>

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

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  

</script>
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
          <li class="active" ><a href="Adoptchild.php">Adopt Child</a></li>
          <li><a href="Donation.php">Donate</a></li>
          </ul>
      </nav><!-- .nav-menu -->

      <a href="AdminLogin.php" class="get-started-btn scrollto">ADMIN</a>


    </div>
  </header><!-- End Header -->
  
       <!-- End Header -->

  <div class="container">
    
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0" >
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image">

                  
          <img style="margin:30px; border-radius:20px; height:500px;" src="assets/img/2.jpg" class="img-fluid" alt="">
           

          </div>
          <div class="col-lg-7" >
            <div class="p-5">
              <div class="text-center">
              
                <h1 class="h4 text-gray-900 mb-4">Fill The Form We Will Contact You As Soon As Possible</h1>
                <?php echo "<h6 style='color:red'>".$msg."</h6>"?>
              </div>
              <p style="font-size:16px; color:red" align="center">
 
              <form class="user" name="register" method="post"">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="FirstName" name="FirstName" placeholder="First Name" pattern="[A-Za-z]+" required="true">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="LastName" name="LastName" placeholder="Last Name" pattern="[A-Za-z]+" required="true">
                  </div>
                </div>
                 <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="presentaddress" name="presentaddress" placeholder="Enter your Present Address"  required="true">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="Email" name="Email" placeholder="Email Address" required="true">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" class="form-control form-control-user"  name="number" placeholder="Phone Number" required="true">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="gender" class="form-control form-control-user" id="gender" placeholder="want to  adopt Boy/girl" required="true">
                  </div>
                 
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>


              <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-user btn-block">
                
                
                </form>
                <hr>
              </div>
              <div class="container">
                <p>Fill this form We will do contact With you and We will Share Our Terms and Condtions About Adopt Child if you will agree with our terms and conditions we will give you our child  </p>
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
  
  
  
  </body>
  
  </html>
  