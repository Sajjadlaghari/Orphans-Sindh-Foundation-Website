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
       $Doner_id=$_GET['id'];
       if(is_numeric($Doner_id))
       {
           $sql="DELETE FROM donerdetails WHERE S_No=".$Doner_id;
           $result=mysqli_query($con,$sql);

           if($result)
           {
                $_SESSION['deletedoner']='<div class="alert alert-danger">
            <strong>Your Data Deleted Successfully from database!</strong>
          </div>';
           }
           header('location:donner.php');
       }
   }

?>