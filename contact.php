

<?php include ('header.php');

    include ('navbar.php');
 $page_title= "Contact page";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
      body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;

background:url(https://wallpaper.dog/large/10723773.png);
    background-repeat: no-repeat;
    background-size: cover;
  
}
        #name{
           width: 60%;
           padding-left: 50px;
        }
        #email{
        width: 60%;
        }
        #subject{
        width: 60%;
        }
        #message{
        width: 60%;
        }

       
.nav-link {
    color: black;
  }
  #logoname {
    display: inline;
    font-size: larger;
    color: yellow;
    font-family: "Times New Roman", serif;
    font-weight: bolder;
  }
  #logonav {
    height: 1000px;
  }
  
  /* Reset some default styles */
  
  footer {
    background-color: #222;
    color: #fff;
    text-align: center;
    padding: 20px 0;
  }
  
  .login-container {
    background-color: transparent;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
  
    max-width: 400px;
  }
  
  .infi {
    text-align: left;
  }
  
  label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }
  
  input[type="text"],
  input[type="number"],
  input[type="email"],
  input[type="password"],
  select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
  }

  form {
    max-width: 500px;
    margin-bottom: 30px;
    margin: 0 auto;
    padding: 20px;
    box-sizing: border-box;
    border: 2px solid transparent;
    box-shadow: #dfe209;
    border-radius: 10px; /* Adjust the value to control the roundness of corners */
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
  
  form label,
  form input,
  form select,
  form button {
    animation: fadeIn 0.5s ease-in-out; /* Apply the fade-in animation */
    animation-fill-mode: both;
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
    box-sizing: border-box; /* Include padding and border in the element's total width*/
  }
  

    </style>
</head>
<body>
<center>
        <div class="login-container mt-5 mx-5">
          <div class="login-icon">
            <h4>Contact Us</h4>
            </div>
          
          <form action="contact.php" method="post"> <!-- Replace "login.php" with your server-side script -->
              <div class="form-group">
                  <label for="text" class="infi" style="color: green; font-size: 20px;">Name</label>
                  <input type="text" id="text" name="uname" >
              </div>
              <div class="form-group">
                <label for="text" class="infi" style="color: green; font-size: 20px;">Email</label>
                <input type="text" id="text" name="uemail" required>
            </div>
            <div class="form-group">
                <label for="text" class="infi" style="color: green; font-size: 20px;">Message</label>
    
                  <label for="text" class="infi"></label>
                  <textarea class="form-control" name="message" id="message" rows="3" col="5"></textarea>
                </div>
                <center>
                    <div class="form-group">
                        <a href="index.html">
                         <button type="submit">Submit</button>
                        </a>
                      </div>
                    </center>
                </div>
                
                </div>
            </div>
           

          </form>
      </div>
    </center>

    
</body>
<?php include('footer.php'); ?>