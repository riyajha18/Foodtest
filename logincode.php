<?php
session_start();
include('dbcon.php');
if(isset($_POST['logbutton'])){
    if(!empty(trim($_POST['email'])) && !empty(trim($_POST['rpassword']))){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $rpassword = mysqli_real_escape_string($con, $_POST['rpassword']);
        $login_query = "SELECT * FROM users WHERE email='$email' AND rpassword= '$rpassword' LIMIT 1 ";
        $login_query_run = mysqli_query($con, $login_query);
        if(mysqli_num_rows($login_query_run) > 0){
        $row = mysqli_fetch_array($login_query_run);
        
        if($row['verify_status'] == "1"){
            $_SESSION['authenticated'] = TRUE;
            $_SESSION['auth_user'] = [
                'username'=> $row['firstname'],
                'Contact' => $row['Contact'],
                'email' => $row['email'],
            
            ]; 
            $_SESSION['status']= "You are Logged in Successfully!";
            header("Location: donate.php");
            exit(0);
        }
        else{
            $_SESSION['status']= "Please verify your email address to Login!";
            header("Location: login.php");
            exit(0);
        }
        }
        else{
            $_SESSION['status']= "Invalid email or Password!";
            header("Location: login.php");
            exit(0);
        }
    }
    else{
        $_SESSION['status']= "All fields are mandatory";
        header("Location: login.php");
    }
   
}

?>