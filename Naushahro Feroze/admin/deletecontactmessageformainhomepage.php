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


<?php


   if(isset($_GET['id']))
   {
       $id=$_GET['id'];
       if(is_numeric($id))
       {
           $sql="DELETE FROM contactmessageformainhomepage WHERE S_No=".$id;
           $result=mysqli_query($con,$sql);

           if($result)
           {
                $_SESSION['deletecon']='<div class="alert alert-danger">
            <strong>Your Data Deleted Successfully from database!</strong>
          </div>';
           }
           header('location:Mainpagecontact.php');
       }
   }

?>