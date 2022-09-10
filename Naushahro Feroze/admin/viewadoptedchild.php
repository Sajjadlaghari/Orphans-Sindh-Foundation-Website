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
        <title>View Adopted childrens Data</title>
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
                <nav class="sb-sidenav accordion " style="background-color:#FFFFFF; box-shadow:1px 3px 4px #E7E7E7;"   id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading" style="font-family:sans; font-size:20px;">Menu</div>
                         
                   
                            
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
                        <div class="small">Logged in as Admin:</div>
                    </div>
                </nav>
            </div>
           <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4" style="color:#13b086; text-align:center; text-transform:uppercase;">Adopted Children's Data</h1>
                        <?php
                        
                        if(isset($_SESSION['delete']))
                        {
                            echo $_SESSION['delete'];
                            unset($_SESSION['delete']);
                        }

                        ?>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Adopted Children's Data Records
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <thead>
                                        <tr>
                                            <th>S_No</th>
                                            <th>Child_Name</th>
                                            <th>Child_CNIC</th>
                                            <th>Adopter_Name</th>
                                            <th>Adopter_CNIC</th>
                                            <th>Adopter_Contact_No</th>
                                            <th>Present_Address</th>
                                            
                                            <th>Permanent_Address</th>
                                            <th>Job_details</th>
                                            <th>Other_Family_Details</th>
                                            <th>Date</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr> 
                                        <th>S_No</th>
                                            <th>Child_Name</th>
                                            <th>Child_CNIC</th>
                                            <th>Adopter_Name</th>
                                            <th>Adopter_CNIC</th>
                                            <th>Adopter_Contact_No</th>
                                            <th>Present_Address</th>
                                            
                                            <th>Permanent_Address</th>

                                            <th>Job_details</th>
                                            <th>Other_Family_Details</th>
                                            <th>Date</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    
                                    $sql="select * from adopted_child_record";
                                    $result=mysqli_query($con,$sql);

                                    while($row=mysqli_fetch_assoc($result))
                                    {

                                    
                                    ?>
                                        <tr>
                                            <td><?php echo $row['id']?></td>
                                            <td><?php echo $row['Child_name']?></td>
                                            <td><?php echo $row['Child_cnic']?></td>
                                            <td><?php echo $row['Adopter_name'] ?></td>
                                            <td><?php echo $row['Adopter_cnic']?></td>
                                            <td><?php echo $row['Contact_no']?></td>
                                            <td><?php echo $row['Present_address']?></td>
                                            <td><?php echo $row['Permanent_address']?></td>
                                            <td><?php echo $row['Job_details']?></td>
                                            <td><?php echo $row['Other_family_info']?></td>
                                            <td><?php echo date('F js, Y',strtotime($row['Time']))?></td>
                                            <td><?php echo "<a style='background: green; color:white;' href='updateadoptedchildrecord.php?id=".$row['id']."' class='btn btn-info text-white'><i class='fa fa-edit'></i></a>"?></td>
                                            <td><?php echo "<a href='deleteadoptedchildrecord.php?id=".$row['id']."' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i></a>"?></td>
                                           
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
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
