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
        <title>OSF Dashboard Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
   
        <link href="./fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-light" style="background-color:#FFFFFF; box-shadow:1px 3px 4px #E7E7E7;  color:black;">
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
                <nav class="sb-sidenav accordion " style="background-color:#FFFFFF; box-shadow:1px 3px 4px #E7E7E7;" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading" style="font-family:sans; font-size:20px;">Menu</div>
                         

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
                        <div class="small">Logged in as Admin:</div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4" style="text-align:center; padding-bottom:20px;">ADMIN PANEL</h1>
                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><a href="addchildrecord.php" style="color:white; margin-left:46px; text-decoration:none;">Add Child Record</a></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a href="viewdata.php" style="color:white; margin-left:60px;">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><a href="addadoptedchildrecord.php" style="color: #ffff; margin-left:15px; text-decoration: none;">Add Adopted Child Record</a> </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="viewadoptedchild.php" style="color:white; margin-left:60px;">View Details</a>
                                    
                                </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><a href="requestforadopt.php" style="color: #ffff; margin-left:2px; text-decoration: none;">View Request For Adopt Child</a> </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="requestforadopt.php" style="color:white; margin-left:60px;">View Details</a>
                                    
                                </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><a href="contact.php" style="color: #ffff; margin-left:25px; text-decoration: none;">View Contact Message</a></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="contact.php" style="color:white; margin-left:60px;">View Details</a>
                                    
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                            
                            <?php
                            if(isset($_SESSION['set']))
                                {
                                    echo $_SESSION['set'];
                                     unset($_SESSION['set']);
                                }
                                ?>
                              
                            

                              <?php 
                                
                                if(isset($_SESSION['delete']))
                                {
                                    echo $_SESSION['delete'];
                                     unset($_SESSION['delete']);
                                }
                                ?>
                                <i class="fas fa-table me-1" style="color:orange;"></i>
                                Child Records
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table  table-hover">
                                    <thead>
                                        <tr>
                                            <th>Child_id..</th>
                                            <th>Child_name</th>
                                            <th>Child_CNIC/B-form</th>
                                            <th>Addmission_date</th>
                                            <th>DOB</th>
                                            <th>Religion</th>
                                            <th>Sponsor_status</th>
                                            <th>Sponsor_name</th>
                                            <th>Schooling_before</th>
                                            <th>Current_class</th>
                                            <th>Gender</th>
                                            <th>Place_of_brith</th>
                                            <th>Height</th>
                                            <th>Weight</th>
                                            <th>Blood_group</th>
                                            <th>Identification</th>
                                            <th>medical_dificiency</th>
                                            <th>Parent_medical_history</th>
                                            <th>Circumcis</th>
                                            <th>Reason Join</th>
                                            <th>Addmitter_detail</th>
                                            <th>Assets_details</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Child_id</th>
                                            <th>Child_name</th>
                                            <th>Child_CNIC/B-form</th>
                                            <th>Addmission_date</th>
                                            <th>DOB</th>
                                            <th>Religion</th>
                                            <th>Sponsor_status</th>
                                            <th>Sponsor_name</th>
                                            <th>Schooling_before</th>
                                            <th>Current_class</th>
                                            <th>Gender</th>
                                            <th>Place_of_brith</th>
                                            <th>Height</th>
                                            <th>Weight</th>
                                            <th>Blood_group</th>
                                            <th>Identification</th>
                                            <th>medical_dificiency</th>
                                            <th>Parent_medical_history</th>
                                            <th>Circumcis</th>
                                            <th>Reason Join</th>
                                            <th>Addmitter_detail</th>
                                            <th>Assets_details</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                       
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    <?php
                                    
                                    $sql="select * from child_record";
                                    $result=mysqli_query($con,$sql);

                                    while($row=mysqli_fetch_assoc($result))
                                    {

                                    
                                    ?>

<tr>
                                            <td><?php echo $row['Child_id']?></td>
                                            <td><?php echo $row['Child_name']?></td>
                                            <td><?php echo $row['CNIC_B_Form']?></td>
                                            <td><?php echo date('F jS Y',strtotime($row['Addmission_date']))?></td>
                                            <td><?php echo date('F jS Y',strtotime($row['Date_of_brith'])) ?></td>
                                            <td><?php echo $row['Religion']?></td>
                                            <td><?php echo $row['Sponsor_status']?></td>
                                            <td><?php echo $row['Sponsor_name']?></td>
                                          
                                            <td><?php echo $row['Schooling_before']?></td>
                                            <td><?php echo $row['Current_class']?></td>
                                            <td><?php echo $row['Gender']?></td>
                                            <td><?php echo $row['Place_of_brith']?></td>
                                            <td><?php echo $row['Height']?></td>
                                            <td><?php echo $row['Weight']?></td>
                                            <td><?php echo $row['Blood_group']?></td>
                                            <td><?php echo $row['Identification']?></td>
                                            <td><?php echo $row['Medical_deficiency']?></td>
                                            <td><?php echo $row['Parent_medical_history']?></td>
                                            <td><?php echo $row['Circumcis']?></td>
                                            <td><?php echo $row['Reason_to_join']?></td>
                                            <td><?php echo $row['Addmitter_detail']?></td>
                                            <td><?php echo $row['Assets_details']?></td>
                                            <td><?php echo "<a style='background: green;'  type='button' class='btn btn-primary'  href='updatechildrecord.php?id=".$row['Child_id']."'> <i style='color: white;' class='fa fa-edit' aria-hidden='true'></i></a>"?></td>
                                            <td><?php echo "<a href='deletechildrecord.php?id=".$row['Child_id']."' class='btn btn-danger text-white'><i class='fa fa-trash' aria-hidden='true'></i></a>"?></td>
                                                
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
