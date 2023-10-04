<?php
session_start();
include('dbcon.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function  send_password_reset($get_firstname, $get_email, $token){
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
        $mail->setFrom('c021riyajha@gmail.com', $get_firstname);
        $mail->addAddress($get_email);     //Add a recipient
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Reset Password Notification from Food Bank';
        $email_template = "
        <h2>Hello Donor!</h2>
        <h5>You are receiving this email because we received a password reset request for your Food Bank account!</h5>
        <br/> <br/>
        <a href = 'http://localhost/NewFood/password-change.php?token=$token&email=$get_email'> Click Here </a>
        ";
        $mail->Body    = $email_template;
        $mail->send();
}
if(isset($_POST['password_reset-link']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $token = md5(rand());
    $check_email ="SELECT email FROM users WHERE email = '$email' LIMIT 1 ";
    $check_email_run =mysqli_query($con, $check_email);

    if(mysqli_num_rows($check_email_run) > 0)
    {
$row =mysqli_fetch_array($check_email_run);
$get_firstname = $row['firstname'];
$get_email= $row['email'];
$update_token = "UPDATE users SET verify_token= '$token' WHERE email='$get_email' LIMIT 1 ";
$update_token_run = mysqli_query($con, $update_token);
if($update_token_run)
{
   send_password_reset($get_firstname, $get_email, $token);
   $_SESSION['status'] = "We have e-mailed you a reset password link!";
   header("Location: password-reset.php");
   exit(0);
}
else{
    $_SESSION['status'] = "Hmm. Something went wrong!";
    header("Location: password-reset.php");
    exit(0);
}

    }
    else{
        $_SESSION['status'] = "No Email Found!";
        header("Location: password-reset.php");
        exit(0);
    }
}


if(isset($_POST['password_update'])){
    $email= mysqli_real_escape_string($con, $_POST['email']);
    $new_password= mysqli_real_escape_string($con, $_POST['rpassword']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['rcpassword']);
    $token= mysqli_real_escape_string($con, $_POST['password_token']);

    if(!empty($token)){
if(!empty($email) && !empty($new_password) && !empty($confirm_password))
{
    //check token is valid or not
$check_token= "SELECT verify_token FROM users WHERE verify_token='$token' LIMIT 1 ";
$check_token_run = mysqli_query($con, $check_token);

if(mysqli_num_rows($check_token_run) > 0){
if($new_password == $confirm_password){
$update_password = "UPDATE users SET rpassword='$rpassword' WHERE verify_token = '$token' LIMIT 1 ";
$update_password_run = mysqli_query($con, $update_password);
if($update_password_run)
{
    $new_token = md5(rand())."foodbank";
    $update_to_new_token = "UPDATE users SET verify_token='$new_token' WHERE verify_token = '$token' LIMIT 1 ";
$update_to_new_token = mysqli_query($con, $update_to_new_token);
    $_SESSION['status'] = "Password Changed Successfully!";
    header("Location: login.php");
    exit(0);
}
else{
    $_SESSION['status'] = "Password not updated. Something went wrong!";
    header("Location: password-change.php?token=$token&email=$email");
    exit(0);
}
}


else{
    $_SESSION['status'] = "Password and Confirm Password does not match!";
    header("Location: password-change.php?token=$token&email=$email");
    exit(0);
}
}
else{
    $_SESSION['status'] = "Invalid Token!";
    header("Location: password-change.php?token=$token&email=$email");
    exit(0);
}
}
 }
 else{
    $_SESSION['status'] = "No Token Available!";
    header("Location: password-reset.php");
    exit(0);
 }
    }
    else{
        $_SESSION['status'] = "All fields are mandatory!";
        header("Location: password-change.php?token=$token&email=$email");
        exit(0);
    }
    





?>