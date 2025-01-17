<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theaters</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
   
    
   
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>


  </head>

  <body>
    
  
 <!-- navbar -->
 <header>
    <div class = "navbar">
        <div class = "logo"><a href="/WEB SITE/index.php">CinemaPlex</a></div>
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
    </div>

</header>

<div class="theater-img">
    <img class="main-img" src="theater img/theater.jpg">
    <h1>A World of Movies Awaits! Take Your Seat in Our Theater Paradise.</h1>
</div>

<h2>Unlock Movie Magic:<br>Your Premier Theater Destination!</h2>



<!-- 1 -->
<section class="theater">
</div>
<div class="theater-container">
<div class="theater-content">
    <h2>Unleash the Power of IMAX: Bigger, Brighter, Better.</h2>
    <p>IMAX is a cinematic marvel, offering massive screens, crystal-clear visuals, and immersive sound. 
        With extended viewing angles and a commitment to safety, it's the ultimate destination for a larger-than-life movie experience that takes you beyond the screen.</p>
    
</div>
<div class="theater-image">
    <img src="theater img/imax.jpeg" alt="">
</div>
</div>


<!-- 2 -->

<section class="theater2">
</div>
<div class="theater-container2">
<div class="theater-content2">
    <h2>Escape Reality and Step into 3D Wonder.</h2>
    <p>Step into a world of wonder in our 3D theater. Our cutting-edge technology makes movies come to life, immersing you in extraordinary realms. With 3D glasses on, 
        characters leap from the screen, and scenes gain incredible depth. Experience a cinematic adventure that defies tradition, only at CinemaPlex.</p>
</div>
<div class="theater-image2">
    <img src="theater img/3d.jpeg" alt="">
</div>
</div>


<!-- 3 -->

<section class="theater">
</div>
<div class="theater-container">
<div class="theater-content">
    <h2>Classic 2D: Where Storytelling Takes the Spotlight.</h2>
    <p>At our 2D theater, storytelling reigns supreme. Stripped of 3D effects, we celebrate the pure essence of cinema. Here, it's all about the narratives, characters, and emotions that shine brightly in their most unadulterated form.
         Welcome to a place where the spotlight is on storytelling, and timeless narratives come to life.</p>
</div>
<div class="theater-image">
    <img src="theater img/2d.jpeg" alt="">
</div>
</div>

 <!-- footer -->


 <footer>
    <div class="footer-container">
        <div class="row">
              <div class="col">
                  <img src="/Users/NadirangaMac/Desktop/web site/MY/Og-image-Logo.png" alt="" class="logo">
                  <p>
                    <h2>CinemaPlex</h2> <br><br>
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
                 <a href="/WEB SITE/other pages/user website/index.php">HOME</a>
                    <a href="/WEB SITE/Other Pages/user website/Other Pages/movie/index.php">MOVIES</a>
                    <a href="/WEB SITE/Other Pages/user website/Other Pages/theaters/index.php">THEATER</a>
                    <a href="/WEB SITE/Other Pages/user website/Other Pages/offers/index.php">OFFERS</a>
                    <a href="/WEB SITE/Other Pages/user website/Other Pages/about us/index.php">ABOUT US</a>
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