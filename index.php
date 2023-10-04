<?php include ('header.php');
    include ('navbar.php');
 $page_title= "Home page";

  ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap Responsive Navbar</title>
    <!-- Add Bootstrap CSS link -->
    <link
      rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <style>
        body {
  font-family: Arial, sans-serif;
  background-color: aliceblue;
  color: #0c0c0c;
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

/* Add responsive styles */
@media (max-width: 768px) {
  header {
    padding: 10px 0;
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

  .how-it-works {
    padding: 40px 0;
  }
}

.Home .carousel-item {
  min-height: 90vh;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  z-index: 1;
}

.Home .carousel-item:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: -1;
}

.Home .carousel-item .container {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.Home .carousel-item h2 {
  font-size: 60px;
  color: #fffff9;
  margin: 0 0 25px;
  opacity: 0;
}

.Home .carousel-item p {
  font-size: 30px;
  margin: 0;
  margin-bottom: 25px;
  color: #eee;
  opacity: 0;
}

.Home .carousel-item.active h2 {
  animation: fadeInLeft 0.8s ease-in forwards;
}

.Home .carousel-item.active p {
  animation: fadeInLeft 0.8s ease-in forwards;
}

@keyframes fadeInLeft {
  0% {
    opacity: 0;
    transform: translateX(-30px);
  }
  100% {
    opacity: 1;
    transform: translateX(0px);
  }
}

@keyframes fadeInRight {
  0% {
    opacity: 0;
    transform: translateX(30px);
  }
  100% {
    opacity: 1;
    transform: translateX(0px);
  }
}

.Home .carousel-controls {
  position: absolute;
  left: 50%;
  bottom: 40px;
  z-index: 10;
  transform: translateX(-50%);
}

.Home .carousel-indicators {
  position: relative;
  margin: 0;
}
.Home .carousel-indicators li {
  height: 50px;
  width: 50px;
  margin: 0 5px;
  border-radius: 50%;
  background-position: center;
  background-size: cover;
  border: 3px solid #eeeeee;
  transition: all 0.3s linear;
}

.Home .carousel-indicators li:active {
  border-color: #5dda0a;
  transform: scale(1.2);
}

.Home .carousel-indicators li {
  margin-top: 5px;
}

.Home .carousel-controls-next,
.Home .carousel-controls-prev {
  height: 60px;
  width: 60px;
  background-color: red;
  opacity: 1;
  z-index: 3;
  top: 50%;
  transform: translateY(-50%);
  border-radius: 50%;
}

.Home .carousel-controls-next {
  right: -90px;
}
.Home .carousel-controls-prev {
  left: -90px;
}

.container {
  margin-top: 0px;
}

.card {
  border-radius: 5px;
  background: #fff;
  box-shadow: 0 6px 10px rgba(0, 0, 0, 0.08), 0 0 6px rgba(0, 0, 0, 0.05);
  transition: 0.3s transform cubic-bezier(0.155, 1.105, 0.295, 1.12),
    0.3s box-shadow,
    0.3s -webkit-transform cubic-bezier(0.155, 1.105, 0.295, 1.12);
  padding: 14px 80px 18px 36px;
  cursor: pointer;
}

.card:hover {
  transform: scale(1.07);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.12), 0 4px 8px rgba(0, 0, 0, 0.06);
}

.card h3 {
  font-weight: 600;
  color: red;
}

.card img {
  position: absolute;
  top: 20px;
  right: 15px;
  max-height: 120px;
}

.card-1 {
  background-image: url(https://www.pngkey.com/png/detail/367-3670351_access-login-icon.png);
  background-repeat: no-repeat;
  background-position: right;
  background-size: 90px;
  height: 290px;
}

.card-2 {
  background-image: url(https://png.pngtree.com/png-vector/20190810/ourlarge/pngtree-heart-give-hand-favorite-love-flat-color-icon-vector-png-image_1655786.jpg);
  background-repeat: no-repeat;
  background-position: right;
  background-size: 90px;
  height: 290px;
}

.card-3 {
  background-image: url(https://thumb.ac-illust.com/4f/4f7cee686a43fd77b66f729d85e7897f_t.jpeg);
  background-repeat: no-repeat;
  background-position: right;
  background-size: 90px;
  height: 290px;
}

@media (max-width: 990px) {
  .card {
    margin: 20px;
  }
}


#cards_landscape_wrap-2 {
  text-align: center;
  background: #f7f7f7;
}
#cards_landscape_wrap-2 .containerngocard {
  padding-top: 80px;
  padding-bottom: 100px;
}
#cards_landscape_wrap-2 a {
  text-decoration: none;
  outline: none;
}
#cards_landscape_wrap-2 .card-flyer {
  border-radius: 5px;
}
#cards_landscape_wrap-2 .card-flyer .image-box {
  background: #ffffff;
  overflow: hidden;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.5);
  border-radius: 5px;
}
#cards_landscape_wrap-2 .card-flyer .image-box img {
  -webkit-transition: all 0.9s ease;
  -moz-transition: all 0.9s ease;
  -o-transition: all 0.9s ease;
  -ms-transition: all 0.9s ease;
  width: 100%;
  height: 200px;
}
#cards_landscape_wrap-2 .card-flyer:hover .image-box img {
  opacity: 0.7;
  -webkit-transform: scale(1.15);
  -moz-transform: scale(1.15);
  -ms-transform: scale(1.15);
  -o-transform: scale(1.15);
  transform: scale(1.15);
}
#cards_landscape_wrap-2 .card-flyer .text-box {
  text-align: center;
}
#cards_landscape_wrap-2 .card-flyer .text-box .text-container {
  padding: 30px 18px;
}
#cards_landscape_wrap-2 .card-flyer {
  background: #ffffff;
  margin-top: 50px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.4);
}
#cards_landscape_wrap-2 .card-flyer:hover {
  background: #fff;
  box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.5);
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  margin-top: 50px;
}
#cards_landscape_wrap-2 .card-flyer .text-box p {
  margin-top: 10px;
  margin-bottom: 0px;
  padding-bottom: 0px;
  font-size: 14px;
  letter-spacing: 1px;
  color: #000000;
}
#cards_landscape_wrap-2 .card-flyer .text-box h6 {
  margin-top: 0px;
  margin-bottom: 4px;
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
  font-family: "Roboto Black", sans-serif;
  letter-spacing: 1px;
  color: #00acc1;
}

#How {
  height: 40px;
  width: 100%;
  background-color: #007bff;
}

#ngopicks {
  color: #070606;
  font-weight: 900;
}
        
    </style>
    <body>
     <section class="Home">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-controls">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style="background-image: url('f2.jpg');"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1" style="background-image: url('https://brownliving.in/cdn/shop/articles/food-donation-services-988981.jpg?v=1682960048');"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2" style="background-image: url('https://headlinesnow.co.in/wp-content/uploads/2021/06/IMG-20210530-WA0007-1024x576.jpg');"></li>
            </ol>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
               
              </a>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" style="background-image: url('f2.jpg')";>
              <div class="container">
                
                <h2>Become Donor </h2>
                <a href="donate.html">
                <p><button type="button" class="btn btn-outline-warning btn-lg">Donate food </button> </a> </p>
              </div>
              </div>
              <div class="carousel-item" style="background-image: url('https://brownliving.in/cdn/shop/articles/food-donation-services-988981.jpg?v=1682960048');">
                <div class="container ">
                    <h2>Give what you can</h2>
                    <a href="donate.html">
                    <p><button type="button" class="btn btn-outline-success btn-lg">Donate food </button> </a> </p>
                  </div>
              </div>
              <div class="carousel-item" style="background-image: url('https://www.shutterstock.com/shutterstock/videos/1100815869/thumb/7.jpg?ip=x480');">
                <div class="container">
                    <h2 >Spread Humanity</h2>
                   
                    
                  </div>
              </div>
            </div>
            
          </div>
    </section>
    
    <section class="how-it-works">
      <div id="how">
        <h2 id="howheading">How It Works</h2>
      </div>
        <div class="container mt-5">
          <div class="row">
            <div class="col-md-4">
              <div class="card card-1">
                <h3 >Login</h3>
                <p class="mt-3">Both donors and Volunteers have to login or sign up in the food bank to donate the food and stay connected with us as well...&#10084;...</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-2">
                <h3>Donors</h3>
                <p class="mt-3">The Donor will be donating the food and providing us some essential information about food such as quality, quantity & category ...&#10084;...</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-3">
                <h3>Volunteer</h3>
                <p class="mt-3">Volunteers or NGO team will collect the food from donor's doorstep and distribute to the needy ones or at an Old Age home ...&#10084;...</p>
              </div>
            </div>
          </div>
        </div>
    </section>


    
    <section class="how-it-works">
      <div id="how">
        <div id="ngopicks">
          <h2 id="ngoheading" >Top Trusted NGOs & Charitable trusts</h2>
        </div>
      </div>
      <!-- Topic Cards -->
    <div id="cards_landscape_wrap-2">
      <div class="containerngocard mt-0">
          <div class="row py-0">
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 mb-5">
                  <a href="">
                      <div class="card-flyer">
                          <div class="text-box">
                              <div class="image-box">
                                  <img src="https://akshayachaitanya.org/assets/images/loader.png" alt="" />
                              </div>
                              <div class="text-container">
                                  <h6 style="color: red;">akshaya chaitanya</h6>
                                  <p> Akshaya Patra Foundation is a NGO organisation headquartered in Bengaluru, India. It strives to eliminate classroom hunger by implementing the Mid-Day Meal Programme</p>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <a href="">
                      <div class="card-flyer">
                          <div class="text-box">
                              <div class="image-box">
                                  <img src="https://upload.wikimedia.org/wikipedia/commons/f/f3/The_Logo_of_the_Robin_Hood_Army.jpg" alt="" />
                              </div>
                              <div class="text-container">                                    
                                <h6 style="color: red;">Robin Hood Army</h6>
                                  <p>The Robin Hood Army is a volunteer based, zero-funds organization that works to get surplus food from restaurants and the community to serve less fortunate people.</p>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <a href="">
                      <div class="card-flyer">
                          <div class="text-box">
                              <div class="image-box">
                                  <img src="data:image/png;base64,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" alt="" />
                              </div>

                              <div class="text-container">
                                <h6 style="color: red;">Annamrita </h6>
                                 <p>Founded in 2004, Annamrita Foundation has always believed that the intake of food not only sustains a person, it also paves a way for a healthy future of the growing youth</p>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <a href="">
                      <div class="card-flyer">
                          <div class="text-box">
                              <div class="image-box">
                                
                               <a href="https://www.giveindia.org/"> <img src="https://images.yourstory.com/cs/images/companies/KD0PK4XE400x400-1614704725568.jpg?fm=auto&ar=1:1&mode=fill&fill=solid&fill-color=fff" alt="" /></a>  
                              </div>
                              <div class="text-container">
                                <h6 style="color: red;">Give india </h6>
                                 <p>GiveIndia exists to alleviate poverty by enabling  world to give. Established in 2000, it is the largest and most trusted giving platform in India. It enables individuals to donate. </p>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
          </div>
      </div>
  </div>
    </section>
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


<?php include('footer.php'); ?>