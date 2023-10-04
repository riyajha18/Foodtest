<?php 
session_start();
$page_title = "Registration Page";
include ('header.php');
 include ('navbar.php');
  ?>



<head>
  <title>Registration</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
     
      body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
     /* Set the background image URL and specify its size and positioning */
     background-image: url('https://annamrita.org/wp-content/uploads/2021/12/our-goals-mob.png'); /* Replace 'your-image-url.jpg' with your actual image file path */
            background-size: cover; /* Adjust the size to cover the entire viewport */
            background-color: rgba(242, 242, 242, 0.7);
            background-repeat: no-repeat; /* Prevent image repetition */
            /* Optionally, you can set a background color as a fallback if the image doesn't load or cover the entire viewport */
            
}


.labeldis{
  color: darkorange;
}
h4{
  color: #000;
  background-color: greenyellow;
  text-align: center;
}
    </style>
</head>

<body>
 
<div class="container mt-5">
  <div class="alert">
    <?php
if(isset($_SESSION['status'])){
  echo "<h4 >".$_SESSION['status']."</h4>";
  unset($_SESSION['status']);
}
    ?>
  </div>
      <center><h2 style="color: white;">Registration Form</h2></center>
      <form action="code.php" method="post">
        <div class="row mt-5">
          <div class="col-md-6">
            <div class="form-group">
              <label for="firstname" class="labeldis" >First Name</label>
              <input
                type="text"
                class="form-control"
                name="firstname"
                id="firstname"
                placeholder="Enter First Name"
                required
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="Contact" class="labeldis">Contact</label>
              <input
                type="text"
                class="form-control"
                name="Contact"
                id="Contact"
                placeholder="Enter Contact"
                required
              />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="lastname" class="labeldis">Last name</label>
              <input
                type="text"
                class="form-control"
                id="lastname"
                name="lastname"
                placeholder="Enter last name"
                required
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email" class="labeldis">Email</label>
              <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                placeholder="Enter email"
                required
              />
             
            </div>
          </div>
        </div>

        

        <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="gender"  class="labeldis">Gender</label>
              <select class="form-control" name="gender" id="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>
        

          <div class="col-md-6">
            <div class="form-group">
              <label for="password" class="labeldis">Password</label>
              <input
                type="password"
                class="form-control"
                id="rpassword"
                name="rpassword"
                placeholder="Enter password"
                required
              />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="age" class="labeldis">Age</label>
              <input
                type="number"
                class="form-control"
                id="age"
                name="age"
                placeholder="Enter Age"
                required
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="password" class="labeldis"> Confirm Password</label>
              <input
                type="password"
                class="form-control"
                id="rcpassword"
                name="rcpassword"
                placeholder="Enter password"
                required
              />
            </div>
          </div>
        </div>
        
<center>
        <button type="submit" name="regbutton" class="btn btn-warning">Register</button></center>
      </form>
      <p style="color: #ffffff;">Did not received your Verification Email? <a href="resend-email-verification.php">Resend</a></p>    </div>

    <!-- Add Bootstrap JS and jQuery script links here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





<?php include ('footer.php'); ?>
