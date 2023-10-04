<?php
session_start();
if(!isset($_SESSION['authenticated'])){
    $_SESSION['status'] = "Please login first to Donate!";
    header("Location: login.php");
    exit(0);
}
?>