<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
    <script class="script js"></script>
</head>
<body>
     <!-- navbar -->
<header>
    <div class = "navbar">
        <div class = "logo"><a href="/WEB SITE/other pages/user website/index.php">CinemaPlex</a></div>
        <ul class = "link">
            <li><a href="/WEB SITE/other pages/user website/index.php">Home</a></li>
            <li><a href="/WEB SITE/Other Pages/user website/Other Pages/movie/index.php">Movies</a></li>
            <li><a href="/WEB SITE/Other Pages/user website/Other Pages/theaters/index.php">Theaters</a></li>
            <li><a href="/WEB SITE/Other Pages/user website/Other Pages/offers/index.php">Offers</a></li>
            <li><a href="/WEB SITE/Other Pages/user website/Other Pages/about us/index.php">About Us</a></li>
        </ul>
        
        <a href="" class = "action_btn">WELLCOME! <?php echo $_SESSION["user_name"]?></a>
        <div class = "toggle_btn"><i class="fa-regular fa-bars"></i>
        
        </div>
    </div>

    <div class="dropdown_menu">
            <li><a href="/WEB SITE/index.php">Home</a></li>
            <li><a href="/WEB SITE/Other Pages/user website/Other Pages/movie/index.php">Movies</a></li>
            <li><a href="/WEB SITE/Other Pages/user website/Other Pages/theater/index.php">Theaters</a></li>
            <li><a href="/WEB SITE/Other Pages/user website/Other Pages/offers/index.php">Offers</a></li>
            <li><a href="/WEB SITE/Other Pages/user website/Other Pages/about us/index.php">About Us</a></li>

        <li><a href="#" class = "action_btn">LOG IN / REGISTER</a></li>
    </div>

</header>



<div class="theater-img">
    <img class="main-img" src="img/1.jpg">
    
    <h1>Welcome to CinemaPlex: Redefining Sri Lanka's Cinema.!<br><br>
        CinemaPlex is dedicated to elevating the movie going experience in Sri Lanka. We blend the charm of classic theaters with state of the art modernity, 
        delivering an international-standard cinematic adventure.</h1>

</div>



<div class="heading">
    <h2>VISION</h2>
    <p>Our Vision: To become Sri Lanka's premier multi-sensory luxury entertainment company,<br> 
        leading the industry by setting new standards.<br> We're dedicated to offering innovative 
        solutions that cater to the diverse needs of our customers, <br>making the magic of cinema accessible to everyone.</p>
</div>

<div class="heading">
    <h2>MISION</h2>
    <p>Our Mission: To enrich our customers' lives by providing a range of diverse,<br> 
        positive experiences through our portfolio of brands.<br> 
        We achieve this through a supportive organizational culture that prioritizes maximizing value for all stakeholders.</p>
</div> 


 <!-- footer -->


 <footer>
    <div class="footer-container">
        <div class="row">
              <div class="col">
                  <p> <h2>CinemaPlex</h2> <br><br>
                    We are specialized in designings, make your business a brand.
                    Try our premium services.
                  </p>
                  <div class="social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                  </div>
              </div>


              <div class="col" id="services">
                 <h3>Services</h3>
                 <div class="links">
                    <a href="/WEB SITE/index.php">HOME</a>
                    <a href="/WEB SITE/Other Pages/movie/index.html">MOVIES</a>
                    <a href="/WEB SITE/Other Pages/Theaters/index.html">THEATER</a>
                    <a href="/WEB SITE/Other Pages/offers/index.html">OFFERS</a>
                    <a href="WEB SITE/Other Pages/about us/index.html">ABOUT US</a>
                 </div>
              </div>

              <div class="col" id="useful-links">
                 <h3>Links</h3>
                 <div class="links">
                    <a href="#">CAREERS</a>
                    <a href="#">EVENTS</a>
                    <a href="#">CONTACT US</a>
                    <a href="#">TERMS AND CONDITIONS</a>
                 </div>
              </div>

              <div class="col" id="contact">
                  <h3>Contact</h3>
                  <div class="contact-details">
                     <i class="fa fa-location"></i>
                     <p>FF-42,Colombo-7, <br> Sri Lanka</p>
                  </div>
                  <div class="contact-details">
                     <i class="fa fa-phone"></i>
                     <p>072-1558920</p>
                  </div>
              </div>
        </div>

        <div class="row">
              <div class="form">
                <form action="">
                    <input type="text" placeholder="Email here...">
                    <button><i class="fa fa-paper-plane"></i></button>
                    
                </form>
              </div>
              
        </div>

    </div>
    <div class="footer-txt">
      <p>©2023 CinemaPlex All Right Reserved. Developed by Madusha Nadiranga.</p>
    </div>
 </footer>

</body>
</html>