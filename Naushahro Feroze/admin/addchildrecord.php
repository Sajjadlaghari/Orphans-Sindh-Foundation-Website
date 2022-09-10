<?php
session_start();

require('../includes/db.php');

if(isset($_SESSION['admin']))
{
    
}
else
{
    header('location:../AdminLogin.php');
}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add Child Record into Database</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    
    
    
   



    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light" style="background-color:#FFFFFF; box-shadow:1px 3px 4px #E7E7E7; color:black;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">OSFNF</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="resetpassword.php">Reset Password</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion " style="background-color:#FFFFFF; box-shadow:2px 3px 4px #E7E7E7;"   id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading" style="font-family:sans; font-size:20px; color:black;">Menu</div>
                            
                            <a class="nav-link" href="index.php" style="font-family:sans;">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Back To Home
                            </a>
                            
                         <a class="nav-link" href="addchildrecord.php" style="font-family:sans;">
                             <div class="sb-nav-link-icon"> <i class="fas fa-plus"></i></div>
                             Add Child Records
                                                    </a>
                         <a class="nav-link" href="viewdata.php" style="font-family:sans;">
                             <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                             View Child Records
                         </a>
                         <a class="nav-link" href="addadoptedchildrecord.php" style="font-family:sans; ">
                                <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>
                                Add Adopted Childs
                            </a>
                            <a class="nav-link" href="viewadoptedchild.php" style="font-family:sans; ">
                                <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                                View Adopted Childs Record
                            </a>
                         <a class="nav-link" href="requestforadopt.php" style="font-family:sans;">
                             <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                             View Request For Adopt Childs
                         </a>
                         
                         <a class="nav-link" href="donner.php" style="font-family:sans;">
                             <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                             Doner Details
                         </a>
                         <a class="nav-link" href="contact.php" style="font-family:sans;">
                             <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                             View Contact Messages
                         </a>
                         
                         <a class="nav-link" href="Mainpagecontact.php" style="font-family:sans;">
                             <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                             View Main Page Contact Messages
                         </a>                                              
                   
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small" style="font-family:sans; color:black;" >Logged in as Admin:</div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
         
            <?php
        if(isset($_POST['add']))    
        {

          $child_name=$_POST['child_name'];
          $child_cnic_B_form=$_POST['child_cnic_b_form']; 
          $addmission_date = date('Y-m-d', strtotime($_POST['addmission_date']));       
          $dob = date('Y-m-d', strtotime($_POST['dob']));       
          $religion=$_POST['religion'];
          $sponsor=$_POST['sponsor'];
          $sponsor_name=$_POST['sponsor_name'];
          $schooling_before=$_POST['schooling_before'];
          $current_class=$_POST['current_class'];
          $gender=$_POST['gender'];
          $place_of_brith=$_POST['place_of_brith'];
          $height=$_POST['height'];
          $weight=$_POST['weight'];
          $blood_group=$_POST['blood_group'];
          $identification=$_POST['identification'];
          $medical_dificiency=$_POST['medical_dificiency'];
          $parent_medical_history=$_POST['parent_medical_history'];
          $circumcise=$_POST['circumcise'];
          $reason_join=$_POST['reason_join'];
          $addmitter_detail=$_POST['addmitter_detail'];
          $assets=$_POST['assets'];


          
          $sql="INSERT INTO child_record(Child_name, CNIC_B_Form, Addmission_date, Date_of_brith, Religion, Sponsor_status, Sponsor_name, Schooling_before, Current_class, Gender, Place_of_brith, Height, Weight, Blood_group, Identification, Medical_deficiency, Parent_medical_history, Circumcis, Reason_to_join, Addmitter_detail, Assets_details) VALUES ('$child_name','$child_cnic_B_form','$addmission_date','$dob','$religion','$sponsor', '$sponsor_name' ,'$schooling_before','$current_class','$gender','$place_of_brith','$height','$weight','$blood_group','$identification','$medical_dificiency','$parent_medical_history','$circumcise','$reason_join','$addmitter_detail','$assets')";
          
          $result=mysqli_query($con,$sql);

          if($result)
          {

              $_SESSION['status']='<div class="alert alert-success">
              <strong>Your Data Successfully Added into database!</strong>
            </div>';
          }
          else
          {
            
            $_SESSION['status']='<div class="alert alert-success">
            <strong>Your Data Not Added into database!</strong>
          </div>';
          }

        }

            ?>


<div class="container" >
    <div class="col-md-10 ">
      <div class="heading">
        <h2 class="text-center" style="margin-top:3%; margin-left:22%; font-family:sans; font-size:50px; padding-botton:20px; font-family:sans-serif;">Add New Child Record </h2> 

            <?php 
              if(isset($_SESSION['status']))
              {      
                  echo $_SESSION['status'];
                   unset($_SESSION['status']);
                } 
             ?>
             

        <div class="line"></div>
        <p><span><strong></strong></span></p>
      </div>
      <div class="col-md-10 col-sm-6 " style="border:3px double black; margin-left:20%;" >
        <form  style="margin-left:2%; padding:20px;"   method="post" action="">
          <div class="row  wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="col-sm-6 ">
                
            <label for="">Child Name</label>
              <div class="form-group">
                <input type="text" name="child_name" class="form-control" placeholder="Enter Child Name" required="required"><br>
              </div>
            </div>
            <div class="col-sm-6">
                
            <label for="">Child CNIC/B_Form</label>
              <div class="form-group">
                <input type="text" name="child_cnic_b_form" class="form-control" placeholder="Enter Child CNIC/B-form" required="required">
              </div>
            </div>
          </div>
          
          
          <div class="row  wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="col-sm-6 ">
                  <label for="">Child Addmission date</label>
                   <div class="form-group">
                    <input type="date" name="addmission_date" class="form-control" placeholder="Enter Addmition Date" required="required"><br>
                  </div>
               </div>
        
               <div class="col-sm-6">                
                   <label for="">Child DOB/Approximate</label>
                   <div class="form-group">
                     <input type="date" name="dob" class="form-control" required="required">
                    </div>
                </div>
          </div>
          
          
                
              <div class="form-group">
              <label for="">Religion</label>
              <input type="text" name="religion" class="form-control" placeholder="Enter Child Religion" required="required"><br>
              </div>
    
          <div class="form-group">
              <label for="">Sponsor Status</label>
            <input type="text" id="sponsor" name="sponsor" class="form-control" placeholder="Sponsor Status" required="required"><br>
          </div>
    
          <div class="form-group">
              <label for="">Sponsor Name</label>
            <input type="text" id="sponsor_name" name="sponsor_name" class="form-control" placeholder="Sponsor Name"><br>
          </div>

          <div class="form-group">
              <label for="">Schooling Before</label>
            <input type="text" id="schooling" name="schooling_before" class="form-control" placeholder="Enter Schooling Before" required="required"><br>
          </div>

          <div class="form-group">
              <label for="">Current Class</label>
            <input type="text" id="current_class" name="current_class" class="form-control" placeholder="Enter Class" required="required"><br>
          </div>


            <div class="form-group">
                  
                <label for="">Gender</label> <br>
                <input type="radio" name="gender" checked  value="Male" >&nbsp;Male
                <input type="radio" name="gender"  value="Female" >&nbsp;Female
            </div>
            <br>

            
          <div class="form-group">
              <label for="">Place of Brith</label>
            <input type="text" id="place_of_brith" name="place_of_brith" class="form-control" placeholder="Enter Place of Brith" required="required"><br>
          </div>

          
          <div class="row  wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="col-sm-6 ">
                <label for="">Height</label>
              <div class="form-group">
                <input type="text" name="height" class="form-control" placeholder="Enter Height" required="required"><br>
              </div>
            </div>
            <div class="col-sm-6">
                
            <label for="">Weight</label>
              <div class="form-group">
                <input type="text" name="weight" class="form-control" placeholder="Enter child Weight" required="required">
              </div>
            </div>
          </div>


          
          <div class="row  wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="col-sm-6 ">
                <label for="">Blood Group</label>
              <div class="form-group">
                <input type="text" name="blood_group" class="form-control" placeholder="Enter Blood Group" required="required"><br>
              </div>
            </div>
            <div class="col-sm-6">
                
            <label for="">Identification</label>
              <div class="form-group">
                <input type="text" name="identification" class="form-control" placeholder="Enter identification" required="required">
              </div>
            </div>
          </div>

          
          <div class="form-group">
              <label for="">Medical Dificiency</label>
            <input type="text" id="medical_dificiency" name="medical_dificiency" class="form-control" placeholder="Medical Dificiency" required="required"><br>
          </div>

          
          <div class="form-group">
              <label for="">Parent Medical History</label>
            <input type="text" id="parent_medical_history" name="parent_medical_history" class="form-control" placeholder="Parent Medical History" required="required"><br>
          </div>

          
          <div class="form-group">
              <label for="">Circumcise</label>
            <input type="text" id="circumcise" name="circumcise" class="form-control" placeholder="Circumcise if boy"><br>
          </div>

          
          <div class="form-group">
              <label for="">Reason to join OSF</label>
            <input type="text" id="reason_join" name="reason_join" class="form-control" placeholder="Reason to join osf" required="required"><br>
          </div>

          
          <div class="form-group">
              <label for="">Addmitter_detail</label>
            <input type="text" id="addmitter_detail" name="addmitter_detail" class="form-control" placeholder="Reason to join osf" required="required"><br>
          </div>

          <div class="form-group">
              <label for="">Asset of Child</label>
            <input type="text" id="assets" name="assets" class="form-control" placeholder="Assets of child" required="required"><br>
          </div>
          <div class="form-group " >
             <input type="submit" class="col-md-5 offset-3 btn btn-primary" name="add" style="margin-bottom:20px;margin-top:20px;" value="ADD CHILD DATA" class="btn btn-primary">  
        </div>    
    </form>
      </div>
    </div>
    

                     <br><br><br><br><br><br><br>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
