<?php
session_start();

if(isset($_SESSION['otp']))
{

}
else
{
  header('location:forgotpassword.php');
}

require('includes/PHPMailer.php');
require('includes/SMTP.php');
require('includes/Exception.php');
//define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Function For Email Send

function send_mail($email,$msg){
  //create a instance phpmailer
$mail = new PHPMailer();
//set mailer to use smtp
$mail->isSMTP();
//define smtp host
$mail->Host = "smtp.gmail.com";
//enable smtp authentication
$mail->SMTPAuth = "true";
//set type of encryption (ssl/tls)
$mail->SMTPSecure = "tls";
//set port to connect smtp
$mail->Port = "587";
//set gmail user
$mail->Username = "sajjadlaghari723@gmail.com";
//set gmail password
$mail->Password = "Sajjadjan1234";
//set gmail subject
$mail->Subject = "Reset Password of OSF";
//set sender email
$mail->setFrom("sajjadlaghari723@gmail.com");
//email body
$mail->Body = $msg;
//add recipient
$mail->addAddress($email);
//finaly send email
$mail->send();
//closing smtp connection
if($mail->Send())
{
  echo "Email Sent";
}
else
{
    echo "Error";
}
$mail->smtpClose();
}
$con=mysqli_connect('localhost','root','','osfrm');

$e=$_POST['email'];
$sql="select * from adminnf where user_email='$e'";

$query=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($query);
if($row)
{
  $otp=rand(100000,999999);
  $_SESSION['otp']=$otp;
  $_SESSION['e']=$e;

  //include required phpmailer files


send_mail($e,"OTP of Reset Your Admin of OSF Password ".$otp);

header('location:f2admin.php');

}else
{
   echo "<script>alert('email not found');window.location.href'forgotpasswordadmin.php';</script>";
}

?>