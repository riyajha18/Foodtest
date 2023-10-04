<?php 
include('authentication.php');
include ('header.php');
 include ('navbar.php');
 
 $page_title = "Donate Page";
  ?>

<!doctype html>
<html lang="en">

<head>
  
  <!-- Required meta tags -->                                             
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        


  /* Base styles for the form */
form {
  max-width: 500px; /* Set a maximum width for the form */
  margin: 0 auto; /* Center the form horizontally */
  padding: 20px;
  box-sizing: border-box;
  margin-bottom: 30px;
  background-color: #b9f3f5;
}

/* Apply responsive styles for smaller screens */
@media screen and (max-width: 768px) {
  form {
      max-width: 90%; /* Reduce the maximum width for smaller screens */
  }
}

/* Apply responsive styles for even smaller screens (e.g., mobile) */
@media screen and (max-width: 480px) {
  form {
      padding: 10px; /* Reduce padding for smaller screens */
  }

  /* Adjust font sizes or other styles as needed */
  label, input, select, button {
      font-size: 14px;
  }
}


/* Apply a subtle transition effect to form elements */
form label,
form input,
form select,
form button {
    transition: all 0.3s ease-in-out;
}

/* Apply hover effect to labels */
form label:hover {
    color: #ff6600; /* Change label color on hover */
}

/* Apply hover effect to buttons */
form button:hover {
    background-color: #ff6600; /* Change button background color on hover */
    color: white; /* Change button text color on hover */
    transform: scale(1.05); /* Scale up the button on hover */
}

/* Apply animations to form elements */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

form input,
form select,
form button {
    animation: fadeIn 0.5s ease-in-out;
}



/* Apply a border and background color to the form */
form {
  max-width: 400px;
  margin: 0 auto;
  margin-bottom: 30px;
  padding: 20px;
  box-sizing: border-box;
  border: 2px solid #ddd; /* Border style and color */
  background-color: #b9f3f5;
}

/* Apply responsive styles for smaller screens */
@media screen and (max-width: 768px) {
  form {
      max-width: 90%;
  }
}

/* Apply responsive styles for even smaller screens (e.g., mobile) */
@media screen and (max-width: 480px) {
  form {
      padding: 10px;
  }

  label, input, select, button {
      font-size: 14px;
  }
}


/* Apply hover effect to input fields when they are active (focused) */
form input:focus {
  border: 2px solid #ff6600; /* Change border color on focus */
  background-color: #fff; /* Change background color on focus */
  box-shadow: 0 0 5px rgba(255, 102, 0, 0.5); /* Add a subtle box shadow on focus */
}

/* Apply hover effect to select fields when they are active (focused) */
form select:focus {
  border: 2px solid #ff6600; /* Change border color on focus */
  background-color: #fff; /* Change background color on focus */
  box-shadow: 0 0 5px rgba(255, 102, 0, 0.5); /* Add a subtle box shadow on focus */
}

/* Apply hover effect to the donate button when it is active (focused) */
form button:focus {
  background-color: #ff6600; /* Change background color on focus */
  color: white; /* Change text color on focus */
  box-shadow: 0 0 5px rgba(255, 102, 0, 0.5); /* Add a subtle box shadow on focus */
  transform: scale(1.05); /* Scale up the button on focus */
}


/* Apply a border and background color to the form and widen it */
form {
  max-width: 400px; /* Increase the maximum width to widen the form */
  margin: 0 auto;
  padding: 20px;
  box-sizing: border-box;
  border: 2px solid #ddd;
  margin-bottom: 30px;
 background-color: transparent;
}

/* Apply responsive styles for smaller screens */
@media screen and (max-width: 768px) {
  form {
      max-width: 90%;
  }
}

/* Apply responsive styles for even smaller screens (e.g., mobile) */
@media screen and (max-width: 480px) {
  form {
      padding: 10px;
  }

  label, input, select, button {
      font-size: 14px;
  }
}
/* Style the Donate button */
form button {
  background-color: #ff6600; /* Button background color */
  color: white; /* Button text color */
  border: none; /* Remove button border */
  padding: 10px 20px; /* Button padding */
  border-radius: 5px; /* Button border radius */
  cursor: pointer; /* Add a pointer cursor on hover */
  transition: background-color 0.3s ease-in-out; /* Smooth background color transition */
}

/* Hover effect for the Donate button */
form button:hover {
  background-color: #e65900; /* Change button background color on hover */
}
/* Style the Donate button */
form button {
  background-color: #ff6600; /* Button background color */
  color: white; /* Button text color */
  border: none; /* Remove button border */
  padding: 10px 20px; /* Button padding */
  border-radius: 5px; /* Button border radius */
  cursor: pointer; /* Add a pointer cursor on hover */
  transition: background-color 0.3s ease-in-out; /* Smooth background color transition */
  margin-top: 20px; /* Add a top margin to the button */
  display: block; /* Change button display property to block */
  margin: 0 auto; /* Center the button horizontally */
}

/* Hover effect for the Donate button */
form button:hover {
  background-color: #e65900; /* Change button background color on hover */
}

/* Apply a fade-in animation to form elements */
@keyframes fadeIn {
  from {
      opacity: 0;
      transform: translateY(-20px);
  }
  to {
      opacity: 1;
      transform: translateY(0);
  }
}

form label,
form input,
form select,
form button {
  animation: fadeIn 0.5s ease-in-out; /* Apply the fade-in animation */
  animation-fill-mode: both;
}
/* Apply margins and padding to the labels */
form label {
  display: block; /* Display labels as block-level elements for better control */
  margin-bottom: 10px; /* Add margin at the bottom of each label */
  padding-right: 10px; /* Add padding to the right of each label for spacing */
}
/* Apply margins and padding to text fields */
form input[type="text"],
form input[type="number"],
form input[type="tel"],
form select {
    margin-bottom: 10px; /* Add margin at the bottom of each text field */
    padding: 10px; /* Add padding to all sides of each text field */
    border: 1px solid #ccc; /* Add a border to text fields */
    border-radius: 5px; /* Add border radius for a rounded appearance */
    width: 100%; /* Make text fields expand to the full width of their container */
    box-sizing: border-box; /* Include padding and border in the element's total width */
}
/* Apply border radius to the form for a rectangular shape */
form {
  max-width: 500px;
margin-bottom: 30px;
  margin: 0 auto;
  padding: 20px;
  box-sizing: border-box;
  border: 2px solid  transparent;
  box-shadow: #dfe209;
  border-radius: 10px; /* Adjust the value to control the roundness of corners */
}

/* Apply responsive styles for smaller screens */
@media screen and (max-width: 768px) {
  form {
      max-width: 90%;
  }
}

/* Apply responsive styles for even smaller screens (e.g., mobile) */
@media screen and (max-width: 480px) {
  form {
      padding: 10px;
  }

  label, input, select, button {
      font-size: 14px;
  }
}

#selngo{
  margin-top: 15px;
}
body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
   background-color: wheat;
}







/* Add CSS rules to style the form container */
.form-container {
  width: 80%; /* Set the width of the container */
  max-width: 600px; /* Set a maximum width if needed */
  margin: 0 auto; /* Center the container horizontally */
  padding: 20px; /* Add some padding to the container */
  box-sizing: border-box; /* Include padding in the element's total width */
  height: 80vh; /* Set a fixed height for the container (viewport height) */
  overflow-y: scroll; /* Add a vertical scrollbar when content overflows */
  border: 1px solid red; /* Optional: Add a border to the container */
  border-radius: 5px; /* Optional: Add rounded corners to the container */
  
  
}

    </style>
</head>

<body>
<?php
            if(isset($_SESSION['status'])){
                ?>
               
                <h5 ><?= $_SESSION['status']; ?></h5>
               
                <?php
                unset($_SESSION['status']);
            }
            ?>
<center> <h2 style="color: rgb(253, 97, 6); margin-top: 40px;">Donate a plate filled with happiness  <i class="fa-solid fa-hand-holding-heart" style="color: #000000;"></i></h2></center>
   <br>
   <br>
   <h6 style="text-align: center; color:#008000; padding-right: 110px;">Donor Name: <?= $_SESSION['auth_user'] ['username']; ?> </h6>
   <h6 style="text-align: center; color:#008000;">Email: <?= $_SESSION['auth_user'] ['email']; ?> </h6>
   <h6 style="text-align: center; color:#008000;padding-right:85px;">Contact: <?= $_SESSION['auth_user'] ['Contact']; ?> </h6>



<div class="form-container">
      <form action="donate.php" method="post">
        <label for="foodName" style="color: green; font-size: 20px;">Food Name:</label>
        <input type="text" id="foodName" name="foodName" required><br>

        <label for="foodType" style="color: green; font-size: 20px;" >Food Type:</label>
        <select id="foodType" name="foodType">
            <option value="option1">Raw </option>
            <option value="option2">Cooked</option>
            <option value="option3"> Packed</option>
        </select><br>

        <label for="foodQuality" style="color: green; font-size: 20px;">Food Quality (hrs):</label>
        <select id="foodQuality" name="foodQuality">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
           



        </select><br>

        <label for="numOfPlates" style="color: green; font-size: 20px;">Food Quantity (grams):</label>
        <input type="number" id="numOfPlates" name="numOfPlates" min="1" required><br>

        <label for="selectState" style="color: green; font-size: 20px;">Select State:</label>
        <select id="selectState" name="selectState">
            <option value="state1">Maharashtra</option>
           
            


        </select><br>

        <label for="selectCity" style="color: green; font-size: 20px;">Select City:</label>
        <select id="selectCity" name="selectCity">
            <option value="city1">Mumbai</option>
            <option value="state3">Thane</option>

            <option value="city2">Nashik</option>
            <option value="city3">Pune</option>
            <option value="state3">Nagpur</option>
            <option value="state3">Aurangabad</option>
            <option value="state3">Malegaon</option>
            <option value="state3">Osmanabad</option>
            <option value="state3">Yavatmal</option>





        </select><br>

        <label for="foodName" style="color: green; font-size: 20px;">Address:</label>
        <input type="text" id="foodName" name="address" required><br>

        <label for="contactNumber" style="color: green; font-size: 20px;" >Contact Number:</label>
        <input type="tel" id="contactNumber" name="contactNumber" required><br>

        <label for="pickupTime" style="color: green; font-size: 20px;">Pickup Time:</label>
        <input type="time" id="pickupTime" name="pickupTime" required><br>

        <label for="selectNgo mt-3" id="selngo" style="color: green; font-size: 20px;">Select NGO:</label>
        <select id="selectNgo" name="selectNgo">
            <option value="ngo1">Akshaya Patra</option>
            <option value="ngo2">Give India</option>
            <option value="ngo3">Disha Foundation</option>
            <option value="ngo3">Annamrita Foundation</option>
            <option value="ngo3">Million hopes foundation</option>
            <option value="ngo3">Aagman Foundation </option>



        </select><br>
<a href="success.html">
      <center>  <button type="submit" class="btn btn-primary">Donate</button> </center>
      </a>
   </form>
    </div>
  </div>
    <script>
        function validateForm() {
            // Perform your validation here
            // Example: Check if the contact number is valid
            var contactNumber = document.getElementById("contactNumber").value;
            var phoneNumberPattern = /^\d{10}$/; // 10-digit phone number
            if (!phoneNumberPattern.test(contactNumber)) {
                alert("Please enter a valid 10-digit phone number.");
                return false; // Prevent form submission
            }

            // You can add more validation checks as needed for other fields
            return true; // Submit the form if all checks pass
        }
    </script>



<center>
 
  
    <script src="script.js"></script>


    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>



<?php include ('footer.php'); ?>