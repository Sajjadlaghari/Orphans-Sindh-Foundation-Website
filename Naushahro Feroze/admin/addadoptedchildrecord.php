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
        <title>Add Adopted Child Record into Database</title>
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
          $adopter_name=$_POST['adopter_name'];
          $adopter_cnic=$_POST['adopter_cnic'];
          $adopter_contact=$_POST['adopter_contact'];
          $adopter_present_address=$_POST['adopter_present_address'];
          $adopter_permanent_address=$_POST['adopter_permanent_address'];
          $adopter_job=$_POST['adopter_job'];
          $family=$_POST['family'];


          
          $sql="INSERT INTO adopted_child_record(Child_name, Child_cnic, Adopter_name, Adopter_cnic, Contact_no, Present_address, Permanent_address, Job_details, Other_family_info) VALUES ('$child_name','$child_cnic_B_form','$adopter_name','$adopter_cnic','$adopter_contact','$adopter_present_address','$adopter_permanent_address','$adopter_job','$family')";
          
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


<div class="container">
    <div class="col-md-10 ">
      <div class="heading">
        <h2 class="text-center" style="margin-top:3%; margin-left:22%; font-family:sans; font-size:55px; padding-botton:20px; color:#080742;">Add Adopted Child Record</h2> 

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
      <div class="col-md-10 col-sm-6 " style="border:3px double black; margin-left:20%;" id="con" >
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
          
          <div class="form-group">
              <label for="">Adopter Name</label>
            <input type="text" id="adoptername" name="adopter_name" class="form-control" placeholder="Enter Adopter Name" required="required"><br>
          </div>

          
          <div class="form-group">
              <label for="">Adopter CNIC</label>
            <input type="text" id="adopter_cnic" name="adopter_cnic" class="form-control" placeholder="Enter Adopter CNIC Number" required="required"><br>
          </div>

          <div class="form-group">
              <label for="">Contact No</label>
            <input type="text" id="adopter_cnic" name="adopter_contact" class="form-control" placeholder="Enter Adopter Contact Number" required="required"><br>
          </div>

          <div class="form-group">
              <label for="">Adopter Present Address</label>
            <input type="text" id="adopter_present_address" name="adopter_present_address" class="form-control" placeholder="Present Address " required="required"><br>
          </div>

          
          <div class="form-group">
              <label for="">Adopter Permanent Address</label>
            <input type="text" id="adopter_permanent_address" name="adopter_permanent_address" class="form-control" placeholder="Permanent Address" required="required"><br>
          </div>
          <div class="form-group">
              <label for="">Adopter Job</label>
            <input type="text" id="adopter_job" name="adopter_job" class="form-control" placeholder="Adopter Job Details" required="required"><br>
          </div>

          <div class="form-group">
            <label for="">Enter Family Details and their status</label><br>
              <textarea name="family" id="" cols="40" rows="3" placeholder="Details About other Family Member of Adopter Child"></textarea>
            </div>

          <div class="form-group " >
             <input type="submit" class="col-md-5 offset-3 btn btn-primary" name="add" style="margin-bottom:20px;margin-top:20px;" value="ADD ADOPTED CHILD DATA" class="btn btn-primary">  
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
