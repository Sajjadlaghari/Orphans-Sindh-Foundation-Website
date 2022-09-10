<?php

session_start();

if(isset($_SESSION['otp']))
{

}
else
{
  header('location:forgotpassword.php');
}


if($_SESSION['otp']==$_POST['otp'])
{
  header('location:f4admin.php');
}
else
{
  $_SESSION['notmach']='<div class="alert alert-danger">
  <strong>Your OTP code Not Matched !</strong>
</div>';

header('location:f2admin.php');
}

?>


</head>
<body>

