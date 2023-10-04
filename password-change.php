<?php 
$page_title = "Login Page";
session_start();

include ('header.php');
 include ('navbar.php');
 
 
  ?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
    
  .login-container {
    background-color: transparent;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    
    max-width: 400px;
}

.login-icon img {
    width: 80px; /* Adjust the size of the icon as needed */
    height: 80px;
    margin: 0 auto 20px;
    display: block;
}

.form-group {
    margin-bottom: 20px;
   
}

label {
    display: block;
    font-weight: bold;
    font-size: 20px;
    margin-bottom: 5px;
    color:rgb(243, 154, 37);
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

.infi{
    text-align: left;
}
body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
     /* Set the background image URL and specify its size and positioning */
     background-image: url('https://annamrita.org/wp-content/uploads/2021/12/our-goals-mob.png'); /* Replace 'your-image-url.jpg' with your actual image file path */
            background-size: cover; /* Adjust the size to cover the entire viewport */
            background-color: rgba(242, 242, 242, 0.7);
            background-repeat: no-repeat;
}
h5{
height: 50%;
    color:black;
    background-color: greenyellow;
    text-align: center;
    margin-top: 40px;
}
</style>
</head>

<body>
<center>
<?php
            if(isset($_SESSION['status'])){
                ?>
               
                <h5 ><?= $_SESSION['status']; ?></h5>
               
                <?php
                unset($_SESSION['status']);
            }
            ?>
        <div class="login-container mt-5 mx-5">
       
          <div class="login-icon">
        
            <h1 style="color: #f6f7f6;">Change Password</h1>
            </div>
          
          <form action="password-reset-code.php" method="POST"> <!-- Replace "login.php" with your server-side script -->
            <input type="hidden" name="password_token" value="<?php if(isset($_GET['token'])){
                    echo $_GET['token'];} ?>"
          
          <div class="form-group mt-5">
                  <label for="email" class="infi" name="email">Email Address</label>
                  <input type="email" id="email" name="email" value="<?php if(isset($_GET['email'])){
                    echo $_GET['email'];} ?>"
                   required>
              </div>
              <div class="form-group">
                  <label for="password" class="infi" name="rpassword"> New Password</label>
                  <input type="password" id="new_password" name="rpassword" required>
              </div>
              <div class="form-group">
                  <label for="password" class="infi" name="rpassword"> Confirm Password</label>
                  <input type="password" id="confirm_password" name="rcpassword" required>
              </div>
              <div class="form-group">
               
                    <center>
                 <button type="submit" class="btn btn-warning" name="password_update">Change Password</button></center>
             
              </div>
             

          </form>
      </div>
    </center>
     
   


    <script src="script.js"></script>


<!-- Add Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
  
</body>


<?php include ('footer.php'); ?>