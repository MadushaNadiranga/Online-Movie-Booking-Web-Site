<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CinemaPlex</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>


  </head>


  <body>
    <!-- navbar -->
<header>
    <div class = "navbar">
        <div class = "logo"><a href="../WEB SITE/index.php">CinemaPlex</a></div>
        <ul class = "link">
            <li><a href="/WEB SITE/index.php">Home</a></li>
            <li><a href="/WEB SITE/Other Pages/movie/index.html">Movies</a></li>
            <li><a href="/WEB SITE/Other Pages/Theaters/index.html">Theaters</a></li>
            <li><a href="/WEB SITE/Other Pages/offers/index.html">Offers</a></li>
            <li><a href="/WEB SITE/Other Pages/about us/index.html">About Us</a></li>
        </ul>
        <a href="../WEB SITE/Other Pages/login system/login_form.php" class = "action_btn">LOG IN / REGISTER</a>
        <div class = "toggle_btn"><i class="fa-regular fa-bars"></i>
        
        </div>
    </div>

    <div class="dropdown_menu">
        <li><a href="../WEB SITE/index.php">Home</a></li>
        <li><a href="../WEB SITE/Other Pages/movie /index.html">Movies</a></li>
        <li><a href="../WEB SITE/Other Pages/Theaters/index.html">Theaters</a></li>
        <li><a href="../WEB SITE/Other Pages/offers/index.html">Offers</a></li>
        <li><a href="../WEB SITE/Other Pages/about us/index.html">About Us</a></li>
        <li><a href="../WEB SITE/Other Pages/login system/login_form.php" class = "action_btn">LOG IN / REGISTER</a></li>
    </div>

</header>


<!-- slider -->
<div class="mainslider">
  <!-- fade css -->
  <div class="mainslide fade">
    <div class="text">
      <h1>THE NUN 2</h1>
      <p>NOW SHOWING AT CineSphere<br>BUY TICKETS ONLINE</p>
      <div class="btn">
        <a href="../WEB SITE/Other Pages/login system/login_form.php" class="btn btn1">BOOK NOW</i></a>
        <a href="https://www.imdb.com/title/tt10160976/" class="btn btn2">MORE INFO</i></a>


        </div>
    </div>
    <img class="mainslider-img" src="IMAGES/slider img/the nun.jpeg">
  </div>
  
  <div class="mainslide fade">
    <div class="text">
      <h1>OPPENHEIMER</h1>
      <p>NOW SHOWING AT CineSphere<br>BUY TICKETS ONLINE</p>
      <div class="btn">
      <a href="../WEB SITE/Other Pages/login system/login_form.php" class="btn btn1">BOOK NOW</i></a>
        <a href="https://www.imdb.com/title/tt15398776/" class="btn btn2">MORE INFO</i></a>

        </div>
    </div>
    <img class="mainslider-img" src="IMAGES/slider img/oppenheimer.jpg">
  </div>
  
  <div class="mainslide fade">
    <div class="text">
      <h1>TAYLOR SWIFT | THE ERAS TOUR</h1>
      <p>NOW SHOWING AT CineSphere<br>BUY TICKETS ONLINE</p>
      <div class="btn">
      <a href="../WEB SITE/Other Pages/login system/login_form.php" class="btn btn1">BOOK NOW</i></a>
        <a href="https://www.imdb.com/title/tt28814949/" class="btn btn2">MORE INFO</i></a>

        </div>
    </div>
    <img class="mainslider-img" src="IMAGES/slider img/taylor swift.jpeg">
  </div>
  
  <div class="mainslide fade">
    <div class="text">
      <h1>GRAN TURISMO</h1>
      <p>NOW SHOWING AT CineSphere<br>BUY TICKETS ONLINE</p>
      <div class="btn">
      <a href="../WEB SITE/Other Pages/login system/login_form.php" class="btn btn1">BOOK NOW</i></a>
        <a href="https://www.imdb.com/title/tt4495098/" class="btn btn2">MORE INFO</i></a>

        </div>
    </div>
    <img class="mainslider-img" src="IMAGES/slider img/Gran Turismo.jpg">
  </div>
  
  <div class="mainslide fade">
    <div class="text">
      <h1>A HAUNTING IN VENICE</h1>
      <p>NOW SHOWING AT CineSphere<br>BUY TICKETS ONLINE</p>
      <div class="btn">
      <a href="../WEB SITE/Other Pages/login system/login_form.php" class="btn btn1">BOOK NOW</i></a>
        <a href="https://www.imdb.com/title/tt22687790/" class="btn btn2">MORE INFO</i></a>

        </div>
    </div>
    <img class="mainslider-img" src="IMAGES/slider img/a haunting in venice.jpg">
  </div>


  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
  <div class="dotsbox" style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
  </div>
 
  
</div>

<!-- now streaming slider -->

<h1 class="text-center section-heading">NOW STREAMING MOVIES</h1>
<h2 class="text-center section-subheading">- BUY YOR TICKETS NOW -</h2>

    <section id="movie">
        <div class="container">
            <div class="swiper-container movie-slider">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide movie-slide">
                        <div class="movie-slide-img">
                            <img src="IMAGES/slider img/the nun.jpeg">
                        </div>
                        <div class="movie-slide-content">
                           
                            <div class="movie-slide-content-bottom">
                                <h2 class="movie-details">
                                &nbsp &nbsp &nbspTHE NUN 2
                                </h2>
                                <h4 class="movie-rating">
                                    <span>&nbsp &nbsp &nbsp &nbsp IMDB RATING 8.5/10</span>
                                    <div class="rating">
                                    &nbsp &nbsp &nbsp &nbsp
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>

                                  </h4>
                                <div class="btn">
                                <a href="../WEB SITE/Other Pages/login system/login_form.php" class="btn btn1">BOOK NOW</i></a>
                                <a href="https://www.imdb.com/title/tt10160976/" class="btn btn2">MORE INFO</i></a>
                          
                                  </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="swiper-slide movie-slide">
                        <div class="movie-slide-img">
                            <img src="IMAGES/slider img/taylor swift.jpeg">
                        </div>
                        <div class="movie-slide-content">
                           
                            <div class="movie-slide-content-bottom">
                                <h2 class="movie-details">
                                &nbsp &nbsp &nbspTAYLOR SWIFT <br>&nbsp &nbsp &nbspTHE ERAS TOUR
                                </h2>
                                <h3 class="movie-rating">
                                    <span>&nbsp &nbsp &nbsp &nbsp IMDB RATING 8.7/10</span>
                                    <div class="rating">
                                    &nbsp &nbsp &nbsp &nbsp
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>
                                </h3>
                                <div class="btn">
                                <a href="../WEB SITE/Other Pages/login system/login_form.php" class="btn btn1">BOOK NOW</i></a>
                                <a href="https://www.imdb.com/title/tt28814949/" class="btn btn2">MORE INFO</i></a>
                          
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide movie-slide">
                        <div class="movie-slide-img">
                            <img src="IMAGES/slider img/the creator.jpg">
                        </div>
                        <div class="movie-slide-content">
                           
                            <div class="movie-slide-content-bottom">
                                <h2 class="movie-details">
                                &nbsp &nbsp &nbspTHE CREATOR
                                </h2>
                                <h3 class="movie-rating">
                                    <span>&nbsp &nbsp &nbsp &nbsp IMDB RATING 7.1/10</span>
                                    <div class="rating">
                                    &nbsp &nbsp &nbsp &nbsp
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                       
                                    </div>
                                </h3>
                                <div class="btn">
                                <a href="../WEB SITE/Other Pages/login system/login_form.php" class="btn btn1">BOOK NOW</i></a>
                                <a href="https://www.imdb.com/title/tt11858890/" class="btn btn2">MORE INFO</i></a>
                          
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide movie-slide">
                        <div class="movie-slide-img">
                            <img src="IMAGES/slider img/Gran Turismo.jpg">
                        </div>
                        <div class="movie-slide-content">
                            
                            <div class="movie-slide-content-bottom">
                                <h2 class="movie-details">
                                &nbsp &nbsp &nbspGRAN TURISMO
                                </h2>
                                <h3 class="movie-rating">
                                    <span>&nbsp &nbsp &nbsp &nbsp IMDB RATING 7.2/10</span>
                                    <div class="rating">
                                    &nbsp &nbsp &nbsp &nbsp
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                       
                                    </div>
                                </h3>
                                <div class="btn">
                                <a href="../WEB SITE/Other Pages/login system/login_form.php" class="btn btn1">BOOK NOW</i></a>
                                <a href="https://www.imdb.com/title/tt4495098/" class="btn btn2">MORE INFO</i></a>
                                  </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="swiper-slide movie-slide">
                      <div class="movie-slide-img">
                          <img src="IMAGES/slider img/a haunting in venice.jpg">
                      </div>
                      <div class="movie-slide-content">
                          
                          <div class="movie-slide-content-bottom">
                              <h2 class="movie-details">
                              &nbsp &nbsp &nbspA HAUNTING IN VENICE
                              </h2>
                              <h3 class="movie-rating">
                                  <span>&nbsp &nbsp &nbsp &nbsp IMDB RATING 6.8/10</span>
                                  <div class="rating">
                                  &nbsp &nbsp &nbsp &nbsp
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>

                                  </div>
                              </h3>
                              <div class="btn">
                              <a href="../WEB SITE/Other Pages/login system/login_form.php" class="btn btn1">BOOK NOW</i></a>
                                <a href="https://www.imdb.com/title/tt22687790/" class="btn btn2">MORE INFO</i></a>
                                </div>
                          </div>
                      </div>
                  </div>





                  
                    
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
 
    </section>



    <!-- comming soon slider -->
    <section id="comming-soon-movie">
        <div class="comming-soon-movie-container">
          <h1 class="text-center section-heading">COMMING SOON</h1>
        </div>
        <div class="comming-soon-movie-container">
          <div class="swiper comming-soon-movie-slider">
            <div class="swiper-wrapper">
  
              
              <div class="swiper-slide comming-soon-movie-slide">
                <div class="comming-soon-movie-slide-img">
                  <img src="IMAGES/comming soon img/AQUAMAN AND THE LOST KINGDOM.jpeg">
                </div>
                <div class="comming-soon-movie-slide-content">
                  
                  <div class="comming-soon-movie-slide-content-bottom">
                    <h2 class="comming-soon-movie-details">
                      AQUAMAN AND THE LOST KINGDOM
                    </h2>
                    <h3 class="comming-soon-movie-rating">
                      <span>IN CINEMAS 20TH DECEMBER</span>
 
                    </h3>
                    <div class="btn">
                                <a href="../WEB SITE/Other Pages/login system/login_form.php" class="btn btn1">BOOK NOW</i></a>
                                <a href="https://www.imdb.com/title/tt9663764/" class="btn btn2">MORE INFO</i></a>
              
                      </div>
                  </div>
                </div>
              </div>
  


  
              <div class="swiper-slide comming-soon-movie-slide">
                <div class="comming-soon-movie-slide-img">
                  <img src="IMAGES/comming soon img/WISH.jpeg">
                </div>
                <div class="comming-soon-movie-slide-content">
                  
                  <div class="comming-soon-movie-slide-content-bottom">
                    <h2 class="comming-soon-movie-details">
                      WISH
                    </h2>
                    <h3 class="comming-soon-movie-rating">
                      <span>IN CINEMAS 24TH NOVEMBER</span>

                    </h3>
                    <div class="btn">
                    <a href="../WEB SITE/Other Pages/login system/login_form.php" class="btn btn1">BOOK NOW</i></a>
                                <a href="https://www.imdb.com/title/tt11304740/" class="btn btn2">MORE INFO</i></a>
                      </div>
                  </div>
                </div>
              </div>
  
              <div class="swiper-slide comming-soon-movie-slide">
                <div class="comming-soon-movie-slide-img">
                  <img src="IMAGES/comming soon img/WONKA.jpeg">
                </div>
                <div class="comming-soon-movie-slide-content">
               
                  <div class="comming-soon-movie-slide-content-bottom">
                    <h2 class="comming-soon-movie-details">
                      WONKA
                    </h2>
                    <h3 class="comming-soon-movie-rating">
                      <span>IN CINEMAS 15TH DECEMBER</span>

                    </h3>
                    <div class="btn">
                    <a href="../WEB SITE/Other Pages/login system/login_form.php" class="btn btn1">BOOK NOW</i></a>
                                <a href="https://www.imdb.com/title/tt6166392/" class="btn btn2">MORE INFO</i></a>
              
                      </div>
                  </div>
                </div>
              </div>
  
  
              <div class="swiper-slide comming-soon-movie-slide">
                <div class="comming-soon-movie-slide-img">
                  <img src="IMAGES/comming soon img/MIGRATION.jpeg">
                </div>
                <div class="comming-soon-movie-slide-content">
               
                  <div class="comming-soon-movie-slide-content-bottom">
                    <h2 class="comming-soon-movie-details">
                      MIGRATION
                    </h2>
                    <h3 class="comming-soon-movie-rating">
                      <span>IN CINEMAS 22ND DECEMBER</span>
                      <div class="comming-soon-movie-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                      </div>
                    </h3>
                    <div class="btn">
                    <a href="../WEB SITE/Other Pages/login system/login_form.php" class="btn btn1">BOOK NOW</i></a>
                                <a href="https://www.imdb.com/title/tt6495056/" class="btn btn2">MORE INFO</i></a>
              
                      </div>
                  </div>
                </div>
              </div>
   
  
  
              <div class="swiper-slide comming-soon-movie-slide">
                <div class="comming-soon-movie-slide-img">
                  <img src="IMAGES/comming soon img/napoleon.jpg">
                </div>
                <div class="comming-soon-movie-slide-content">
                 
                  <div class="comming-soon-movie-slide-content-bottom">
                    <h2 class="comming-soon-movie-details">
                      NAPOLEON
                    </h2>
                    <h3 class="IMAGES/comming soon img/napoleon.jpg">
                      <span>IN CINEMAS 24TH NOVEMBER</span>
                      <div class="comming-soon-movie-rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                      </div>
                    </h3>
                    <div class="btn">
                    <a href="../WEB SITE/Other Pages/login system/login_form.php" class="btn btn1">BOOK NOW</i></a>
                                <a href="https://www.imdb.com/title/tt13287846/" class="btn btn2">MORE INFO</i></a>
              
                      </div>
                  </div>
                </div>
              </div>
          
            </div>
  
            <div class="movie-slider-control">
              <div class="swiper-button-prev slider-arrow">
            
              </div>
              <div class="swiper-button-next slider-arrow">
          
              </div>
              <div class="swiper-pagination"></div>
            </div>
  
          </div>
        </div>
      </section>


<!-- spacial offer -->

<!-- 1 -->
<section class="spacial-offer">
</div>
<div class="spacial-offer-container">
<div class="spacial-offer-content">
    <h2>Online Exclusive Deal 10% Off When You Buy 2 Tickets Together.!</h2>

    <a href="../WEB SITE/Other Pages/offers/index.html">
      <button class="cta-button">More Info</button>
    </a>

</div>
<div class="spacial-offer-image">
    <img src="IMAGES/spacial offer img/1.jpg" alt="">
</div>
</div>


<!-- 2 -->

<section class="spacial-offer2">
</div>
<div class="spacial-offer-container2">
<div class="spacial-offer-content2">
    <h2>Enjoy Family Time at the Movies with our Exclusive Family Discount!</h2>
    
    <a href="../WEB SITE/Other Pages/offers/index.html">
      <button class="cta-button">More Info</button>
    </a>

</div>
<div class="spacial-offer-image2">
    <img src="IMAGES/spacial offer img/2.jpg" alt="">
</div>
</div>


<!-- 3 -->

<section class="spacial-offer">
</div>
<div class="spacial-offer-container">
<div class="spacial-offer-content">
    <h2>Comming Soon...</h2>
        
    <a href="../WEB SITE/Other Pages/offers/index.html">
      <button class="cta-button">More Info</button>
    </a>

</div>
<div class="spacial-offer-image">
    <img src="IMAGES/spacial offer img/3.jpg" alt="">
</div>
</div>






 <!-- footer -->


 <footer>
        <div class="footer-container">
            <div class="row">
                  <div class="col">
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
                      </div><br><br>
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