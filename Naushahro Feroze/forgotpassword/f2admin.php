<?php
session_start();

if(isset($_SESSION['otp']))
{

}
else
{
  header('location:forgotpassword.php');
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
        <title>Forgot Password Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-info">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main style="margin-top:5%;">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Enter otp code which one send you in email</h3></div>
                                    <div class="card-body">
                                        <?php 
                                         if(isset($_SESSION['notmach']))
                                         {
                                             echo $_SESSION['notmach'];
                                             unset($_SESSION['notmach']);
                                         }

                                        ?>
                                        <form action="f3admin.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="otp" value="" name="otp" type="text" placeholder="name@example.com" />
                                                <label for="otp">Enter your otp Code Here</label>
                                            </div>
                                          
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                  <input type="submit" name="submit" style="width:100px; margin-left:150px;" class="btn btn-primary" value="Send">
                                             </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
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
    </body>
</html>