
<?php

require('includes/db.php');


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="./assets/css/style.css">
  
    <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">

    
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



    <style>

        body
        {
            font-family: sans-serif;
        }
        #main-section {
            width: 100%;
            height: auto;
            background-color: #D3E7EE;
          
        }

        input:hover
        {
            border:2px solid #8B4C70;

        }

        .Detail
        {
            margin-top: 20px;
        }

        
        .Detail h2
        {
            color:coral;
        }

        input
        {
            border-radius:20px;
        }

        label
        {
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            margin-left:12px;
        }

        button
        {
            font-family:Arial, Helvetica, sans-serif;
            font-size: 22px !important;
        }

        p
        {
            color:black;
        }
        span
        {
            color: rgb(88, 143, 245);
        }
    </style>


</head>

<body >

    
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
          <li class="active"><a href="Donation.php">Donate</a></li>
          </ul>
      </nav><!-- .nav-menu -->

      <a href="AdminLogin.php" class="get-started-btn scrollto">ADMIN</a>


    </div>
  </header><!-- End Header -->
  <!-- End Header -->


  <?php
  

  if(isset($_POST['submit']))
  {
       $fullname=$_POST['fullname'];
       $email=$_POST['email'];
       $contact=$_POST['contact'];
       $address=$_POST['address'];
       $city=$_POST['city'];
       $state=$_POST['state'];
       $amount_type=$_POST['amount_type'];
       $country=$_POST['country'];
       $message=$_POST['message'];
       $amount_rs=$_POST['amount'];

       $amount_for=$_POST['amountfor'];
       $payvia=$_POST['payvia'];
       $hear=$_POST['gender'];


       $sql="INSERT INTO donerdetails(Doner_Name, Doner_Email, Doner_Contact_No, Doner_Address, Done_City, Doner_State, Monthly_One_Time, Doner_Country, Doner_Message, Amount, Amount_For, Pay_via, Where_From_Hear) VALUES ('$fullname','$email','$contact','$address','$city','$state','$amount_type','$country','$message','$amount_rs','$amount_for','$payvia','$hear')";

       $result=mysqli_query($con,$sql);

       if($result)
       {
           echo "<script>";
           echo "alert('Your donation Details Share with OSF')";
           echo "</script>";
       }
       else
       {
           echo "<script>";
           echo "alert('Your donation Details not share something wrong with OSF')";
           echo "</script>";
       }

    }
  ?>





    <section id="main-section">
   
        <div class="container Detail">
            <h2>Donation Detail?</h1>
   
        </div>
        <div class="container">
            
            <form action="" name="donation" method="post">

            <div class="row">
                <div class="col-md-12 ">
                    <label>Full Name</label>
                    <input style="border-radius:20px;" class="form-control" type="text" id="fullname" name="fullname" required placeholder="Full Name">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <label> Email</label>
                    <input style="border-radius:20px;" class="form-control" type="email" id="email" name="email" required placeholder="Enter Email Address">
                </div>
                <div class="col-md-6">
                    <label>Contact No </label>
                    <input style="border-radius:20px;" class="form-control" type="number" id="contact" name="contact" required placeholder="Contact Number">
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-md-12 ">
                    <label>Address</label>
                    <input style="border-radius:20px;" class="form-control" type="text" id="address" required name="address"
                        placeholder="Max Length is 100 Characters Only">
                </div>
            </div>


            <br>
            <div class="row">
                <div class="col-md-6">
                    <label> City</label>
                    <input style="border-radius:20px;" class="form-control" required type="text" id="city" name="city" placeholder="Enter City">
                </div>
                <div class="col-md-6">
                    <label>State</label>
                    <input style="border-radius:20px;" class="form-control" required="true" type="text" id="state" name="state" placeholder="Enter State">
                </div>
            </div>


            <br>
            <div class="row">
                <div class="col-md-6">
                    <label>Amount Type</label>
                    <select style="border-radius:20px;" class="form-control"  required="true" name="amount_type" id="" required>
                        <option value="Monthly">Monthly</option>
                        <option value="Onetime">One Time</option>
                    </select>
   
                </div>
                <div class="col-md-6">
                    <label>Country</label>
                    <select style="border-radius:20px;" class="form-control" required="true" name="country" id="country">
                       <option value="">Select Your Country</option> 
                       <option value="pakistan">Pakistan</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Tajkistan">Tajkistan</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Dubai">Dubai</option>
                        <option value="Oman">Oman</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Iran">Iran</option>
                    </select>
                </div>
            </div>

            <br>


            <div class="row">
                <div class="col-md-12 ">
                    <label>Personal Message</label>
                    <input style="border-radius:20px;" class="form-control" type="text" required name="message" placeholder="Enter Your Message">
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-md-12 ">
                    <label>Amount in Rs</label>
                    <input style="border-radius:20px;" class="form-control" type="text" id="" required name="amount" placeholder="Please Enter Amount">
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-md-6">
                    <label>On Amount of</label>
                    <select style="border-radius:20px;" class="form-control" name="amountfor" required id="amountfor">
                        <option value="Zakat">Zakat</option>
                        <option value="Fitra">Fitra</option>
                        <option value="Sadqa">Sadqa</option>
                        <option value="Sponsorship">Sponsorship</option>
                        <option value="General">General Donation</option>
                        <option value="Education">Education Endowment</option>
                        <option value="Qurbani_cow">Qurbani Cow (100K to 120K)</option>
                        <option value="Qurbani_goat">Qurbani Goat (25K to 30K)</option>
                    </select>

                </div>
                <div class="col-md-6">
                    <label>Pay Via </label>
                    <select style="border-radius:20px;" class="form-control" name="payvia" id="payvia" required>
                        <option value="Debit">Pay By Card(Debit/Cradit)</option>
                        <option value="Mobicash">Pay By Mobicash</option>
                        <option value="easypesa">Pay By EasyPesa</option>
                    </select>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-md-12" required>
                    <label>How Did You Hear About About Us? </label><br>
                    <input type="radio" name="gender" value="Existing">&nbsp;Existing
                    <input type="radio" name="gender" value="Newspaper">&nbsp;Newspaper
                    <input type="radio" name="gender" value="Tv">&nbsp;TV
                    <input type="radio" name="gender" value="Youtube">&nbsp;Youtube
                    <input type="radio" name="gender" value="Social Media">&nbsp;Social Media
                    <input type="radio" name="gender" value="Web Search">&nbsp;Web Search
                    <input type="radio" name="gender" value="Refer Someone ">&nbsp;Did Someone Refer to You?
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-primary w-25" name="submit">Submit</button>
                </div>
            </div>
        </form>
        </div>

        <hr>
        <div class="container">
           <p>Your Donation Save liver Every day and help us secure a better future for thousands of vulerable children and families. Make a difference today by donating to OSF childrens</p>
        </div>
           <hr>


        <br>
        <div class="container">

        <h1>Bank Details</h1>
        
        <table class="table table-striped" style="border: 1px solid skyblue;" >
          <tr>
                <th><p>OSF Bank Account Maintained With </p></th>
                <th><span>MCB</span></th>
            </tr>      
           <tr>
                <th><p>Title of Account :</p></th>
                <th> <Span>Orphans Sindh Foundation</Span></th>
            </tr>
        
           <tr>
                <th><p>Account Number :</p></th>
                <th> <Span>1058325261004855</Span></th>
            </tr>

            
           <tr>
                <th><p>Banker :</p></th>
                <th> <Span>Standard Bank (Sindh Colony Naushahro Feroze Sindh Pakistan)</Span></th>
            </tr>

        </table>
        </div>

        <hr>

        <div class="container">
            <p>You Can Direct Deposit your Donation to any of the following OSF bank Accounts: Please Email us a Copy of
                funds transfer receipt issued by your bank (email/sceen-shot) at <span> orphanssindhfoundation@.org.pk
                    and sponsorship@orf.org.pk</span> </p>
            <p>Once you share the funds transfer details along with your contact number and compete postal address, we
                will email you donation acknowledgement.</p>
        </div>

        <hr>

        <div class="container">
            <h1>Easypaisa</h1>

            <table class="table table-striped" style="border: 1px solid skyblue;" >
           <tr>
                <th><p>EasyPesa Account No:</p></th>
                <th> <Span>03456578123</Span></th>
            </tr>
        
           
        </table>
          <p> <span> You Can your donations to OSF of Sindh Through your Easypaisa mobile account or from any easypaisa shop
                across the country.</span></p>
        </div>
        <hr>

        <div class="container">
            <h1>Mobicash</h1>
            <table class="table table-striped" style="border: 1px solid skyblue;" >
           <tr>
                <th><p>MobiCash Account No Account No:</p></th>
                <th> <Span>03045578165</Span></th>
            </tr>
        
           
        </table>
        
            <p><span>You Can your donations to OSF of Sindh Through your Mobicash mobile account or from any shop across the
                Pakistan</span>.</p>
        </div>

        <hr>
        <br>
    </section>

    
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