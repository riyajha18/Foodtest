<?php
session_start();
include('dbcon.php');
include('verify-email.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';



function  sendemail_verify( $firstname ,$email,$verify_token){
//Create an instance; passing `true` enables exceptions

$mail = new PHPMailer(true);
    
$mail->isSMTP();      


$mail->SMTPAuth   = true;                                         //Send using SMTP
    $mail->Host       = "smtp.gmail.com";                     //Set the SMTP server to send through
                           //Enable SMTP authentication
    $mail->Username   = "co21riyajha@gmail.com";                     //SMTP username
    $mail->Password   = "voetawmmhfeddtha";                               //SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    //Recipients
    $mail->setFrom('c021riyajha@gmail.com', $firstname);
    $mail->addAddress($email);     //Add a recipient
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Email Verification from Food Bank';
    $email_template = "
    <h2> You have registered on Food Bank </h2>
    <h5> Verify the email address to Login with the below given link </h5>
    <br/> <br/>
    <a href = 'http://localhost/NewFood/verify-email.php?token=$verify_token'> Click Me </a>
    ";
    $mail->Body    = $email_template;
    $mail->send();
    // echo 'Message has been sent';
} 

if(isset($_POST['regbutton'])){
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $gender= $_POST['gender'];
    $age= $_POST['age'];
    $Contact= $_POST['Contact'];
    $email= $_POST['email'];
    $rpassword= $_POST['rpassword'];
    $rcpassword= $_POST['rcpassword'];
    $verify_token= md5(rand());
    // $created_at = $_POST['created_at'];
   
    //Email exists or not
    $check_email_query = "SELECT email FROM users WHERE email= '$email' LIMIT 1 ";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows( $check_email_query_run) > 0){
$_SESSION['status']= "Email Id already Exists!";
header("Location: register.php");
    }
    else{
// Insert existing user data 

$query = "INSERT INTO users (`firstname`, `lastname`, `gender`, `age`, `Contact`, `email`, `rpassword`, `rcpassword`, `verify_token`) VALUES ('$firstname', '$lastname', '$gender', '$age', '$Contact', '$email', '$rpassword', '$rcpassword', '$verify_token')";
   $query_run = mysqli_query($con, $query );
if($query_run){
    sendemail_verify("$firstname","$email","$verify_token");
    $_SESSION['status'] = "Registration Successful! We have sent you a confirmation mail";
    header("Location: register.php");
}
else{
    $_SESSION['status'] = "Registration Failed";
    header("Location: register.php");
}
}
}
?>
