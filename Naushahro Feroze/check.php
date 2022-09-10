<?php
  session_start();

  require('includes/db.php');


if(isset($_SESSION['admin']))
{
    
}
else
{
    header('location:AdminLogin.php');
}
  
?>



<?php
  if(isset($_POST['login']))
  {
      $email=$_POST['Email'];
      $pass=md5($_POST['Password']);
      
      if(!empty($email)&&!empty($pass))
       {
         $sql="select * FROM adminnf where user_email='$email' and user_password='$pass'";
         $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>=1){
             $row = mysqli_fetch_assoc($result);
              $_SESSION['admin'] =  $row;
              header('location:admin/index.php');
              exit();
        }else{
            
            echo "<script>";
            echo "alert('Invalid Username or Password')";
            echo "</script>";
            
            $_SESSION['wrong']='<div class="alert alert-danger">
            <strong>Your Password Or Email Inccorect!</strong>
          </div>';
           header('location:AdminLogin.php');
         
        }   
     }
  }

?>