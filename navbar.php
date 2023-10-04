<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <!-- Add Bootstrap CSS link -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
 /* Custom CSS for menu item border box effect */
 .navbar-nav .nav-link.active {
        border: 2px solid #ffffff; /* Add a border box for the active menu item */
        border-radius: 5px; /* Add rounded corners to the border box */
      }
      .nav-link{
    color:black;
}
#logoname{
    display: inline;
    font-size: larger;
    color:yellow;
    font-family: 'Times New Roman', serif;
    font-weight: bolder;
}
#logonav{
    height: 1000px;
}



/* Reset some default styles */

/* Basic styling */
body {
    font-family: Arial, sans-serif;
    background-color: aliceblue;
    color:#0c0c0c;
}





.hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-align: center;
    padding: 80px 0;
}

.hero-content {
    flex: 1;
    padding: 20px;
}

.hero h1 {
    font-size: 36px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 18px;
    margin-bottom: 40px;
}

.cta-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #222;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    border-radius: 5px;
    transition: background-color 0.3s ease-in-out;
}

.cta-button:hover {
    background-color: #444;
}

.hero-image img {
    max-width: 100%;
}

.how-it-works {
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
    padding: 60px 0;
}

.step {
    margin-bottom: 40px;
}

.step img {
    max-width: 100%;
}

footer {
    background-color: #222;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

/* Add responsive styles */
@media (max-width: 768px) {
    header {
        padding: 10px 0;
    }
  }
   

    .hero {
        flex-direction: column;
    }

    .hero-content {
        padding: 20px 0;
    }

    .hero h1 {
        font-size: 28px;
    }

    .hero p {
        font-size: 16px;
    }

    .cta-button {
        padding: 8px 16px;
        font-size: 14px;
    }

 

 





@media(max-width: 990px){
  .card{
    margin: 20px;
  }
} 


    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
      <div class="container">
        <!-- Logo and Logo Name -->
        <a class="navbar-brand" href="#">
         <!-- <img
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg_rgvsyoDpm-nCSVt-Y2pSR-LU11sgbVRnhfb9qnyCC6SApbOjchWUN7nhYnRt5rM0Mw&usqp=CAU"
            alt="Logo"
            width="50"-->
        <i class="fa-solid fa-hand-holding-heart" style="color: #ffffff;"></i>
          <p style="color: yellow;"   id="logoname">
          FOOD BANK
        </p>
        </a>

        <!-- Navbar Toggler Button for mobile -->
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Menu Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"  onmouseover="highlightMenuItem(this)"
              onmouseout="removeHighlight(this)">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="about.php"  onmouseover="highlightMenuItem(this)"
              onmouseout="removeHighlight(this)">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="donate.php"  onmouseover="highlightMenuItem(this)"
              onmouseout="removeHighlight(this)">Donate</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#"  onmouseover="highlightMenuItem(this)"
              onmouseout="removeHighlight(this)">Gallery</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact.php"  onmouseover="highlightMenuItem(this)"
                onmouseout="removeHighlight(this)">Contact</a>
              </li>
              <?php   if(isset($_SESSION['authenticated'])):  ?>
              <li class="nav-item active">
                <a class="nav-link" href="logout.php"  onmouseover="highlightMenuItem(this)"
                onmouseout="removeHighlight(this)">Logout</a>
              </li>
              <?php endif ?>
              
            
              <li class="nav-item mx-2">
                <a href="login.php" > <button type="button" class="btn btn-outline-warning">Gets started</button></a>
              </li>
            
          </ul>
        </div>
      </div>
    </nav>


    
    


    


    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function highlightMenuItem(item) {
        item.classList.add("active");
      }

      function removeHighlight(item) {
        item.classList.remove("active");
      }
    </script>
  </body>
</html>