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
       $child_id=$_GET['id'];
       if(is_numeric($child_id))
       {
           $sql="DELETE FROM child_record WHERE Child_id=".$child_id;
           $result=mysqli_query($con,$sql);

           if($result)
           { $_SESSION['delete']='<div class="alert alert-danger">
            <strong>Your Data Deleted Successfully from database!</strong>
          </div>';
           }
           header('location:index.php');
       }
   }

?>