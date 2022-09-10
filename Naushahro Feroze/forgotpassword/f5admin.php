<?php
session_start();

if(isset($_SESSION['otp']))
{

}
else
{
  header('location:forgotpassword.php');
}

 $email= $_SESSION['e'];

 $p=md5($_POST['p']);
 $cp=md5($_POST['cp']);

 if($p==$cp)
 {


   
      $con=mysqli_connect('localhost','root','','osfrm');

     $sql="update adminnf SET user_password='$p' where user_email='$email'";
     $query=mysqli_query($con,$sql);
     if($query)
    {

      $_SESSION['set']='<div class="alert alert-success">
              <strong>Your New Password Successfully Set!</strong>
            </div>';
      echo "<script>";
      echo "alert('Your new Password is Set');";
      echo "</script>";
      header('location:../AdminLogin.php');
    }
   else
   {
      echo "<script>";
      echo "alert('Your Password Not Set');";
      echo "</script>";
    }

}
else
{
  $_SESSION['notmach']='<div class="alert alert-danger">
  <strong>Your Password Not Matched !</strong>
</div>';
  header('location:f4admin.php');

}
?>
