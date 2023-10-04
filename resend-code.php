<?php
session_start();
include('dbcon.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function resend_email_verify($firstname, $email, $verify_token)
{
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
        $mail->Subject = ' Resend Email Verification from Food Bank';
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

if(isset($_POST['resend_email_verify_btn']))
{
    if(!empty(trim($_POST['email']))){
$email = mysqli_real_escape_string($con,$_POST['email']);
$checkemail_query = "SELECT * FROM users WHERE email='$email' LIMIT 1 ";
$checkemail_query_run = mysqli_query($con, $checkemail_query);

if(mysqli_num_rows($checkemail_query_run)> 0){
$row = mysqli_fetch_array($checkemail_query_run);
if($row['verify_status']== "0")
{
    $firstname = $row['firstname'];
    $email = $row['email'];
    $verify_token = $row['verify_token'];



resend_email_verify($name, $email, $verify_token);
$_SESSION['status'] = "Verification Email Link has been sent to your email address!";
header("Location: login.php");
exit(0);
}
else{
    $_SESSION['status'] = "Email Already Verified. Please Login!";
    header("Location: resend-email-verification.php");
    exit(0);
}
}
else{
    $_SESSION['status'] = "Email is not registered. Please Register Now!";
    header("Location: register.php");
    exit(0);
}

    }
    else{
        $_SESSION['status'] = "Please enter the email field!";
        header("Location: resend_email_verification.php");
        exit(0);
    }
}
?>