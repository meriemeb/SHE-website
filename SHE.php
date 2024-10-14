<?php
require_once 'check_loggedin.php';

// Check if the logout button is clicked
if (isset($_POST['logout'])) {
    // Start the session if it's not already started
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    // Unset all session variables
    $_SESSION = array();
    // Destroy the session
    session_destroy();
    // Redirect to the login page
    header('Location: ' . LOGOUT_URL);
    exit;
}

// Define constants
const LOGOUT_URL = 'http://localhost/php/She/index.php';
const BASE_URL = 'http://localhost/php/She/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="x-icon" href="logo/IMG_8446">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>She</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> 
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="style1.css" />
</head>
<body>
    
<!--(1) header section   -->

<header class="header">

    <a href="#" class="logo"><span>SkyHight</span>Events</a>
    <form action="" method="post"> 
    <nav class="navibar">
        <a href="#home">Home</a>
        <a href="#service">services</a>
        <a href="#discover">Discover</a>
        <a href="#agenda">Agenda</a>
        <a href="#about">About</a>
        <a href="#contact">Contact Us</a>
        <span style="margin-right: 10px;"></span> 
        <button type="submit" class="btn btn-primary" name="logout">logout</button>
    </nav>
    </form>
    <div id="menu-bars" class="fas fa-bars"></div>

</header>



<!-- (2)home section-->

<section class="home" id="home">

    <div class="content">
        <h3>best  exclusive  events in the world <br><span> check this </span></h3>
    
    </div>

    <section class="slider-container">
      <div class="slider-images">
        <div class="slider-img">
          <img src="img/euro1.jpg" alt="2" />
          <h1>euro</h1>
          <div class="details">
            <h2>euro</h2>
            <p>germany</p>
          </div>
        </div>
        <div class="slider-img">
          <img src="img/Formula.jpg" alt="3" />
          <h1>Formula 1</h1>
          <div class="details">
            <h2>F1 Grand Prix</h2>
            <p>Monaco</p>
          </div>
        </div>
        <div class="slider-img active">
          <img src="img/TMR.jpg" alt="4" />
          <h1>Tomorrowland</h1>
          <div class="details">
            <h2>Tomorrowland</h2>
            <p>Belgium</p>
          </div>
        </div>
        <div class="slider-img">
          <img src="img/olamp.jpg" alt="5" />
          <h1>olampics</h1>
          <div class="details">
            <h2>olampics</h2>
            <p>Paris</p>
          </div>
        </div>
        <div class="slider-img">
          <img src="img/Keinemusik1.jpg" alt="6" />
          <h1>Keinemusik</h1>
          <div class="details">
            <h2>Keinemusik</h2>
            <p>Brazil</p>
          </div>
        </div>
      </div>
    </section>
    </div>

</section>

<section class="service" id="service">
    <h1 class="heading"> our <span>services</span> </h1>
    <div class="contentevent">
   <div class="box-serv">
       
     <div class="content-serv">
        <i class="fas fa-map-marker-alt"></i> 
        <h3>venue selection</h3>
      
        <p>We offer you many options to choose the right venue for your event</p>
      
     </div>

     
    
   </div>
   <div class="box-serv">
       
    <div class="content-serv">
        <i class="fas fa-utensils"></i>
        <h3>custom food</h3>
     
       <p> You are free to choose the types of food that will be served at your event</p>

    </div>

    
   
  </div>
  <div class="box-serv">
       
    <div class="content-serv">
        <i class="fas fa-ad"></i>
        <h3>Marketing</h3>
     
       <p> We provide you with the necessary advertisements to market your event</p>
     
    </div>

    
   
  </div>

  <div class="box-serv">
       
    <div class="content-serv">
        <i class="fas fa-music"></i>
        <h3>entertainment</h3>
     
       <p>  We offer you the latest entertainment gadgets</p>
       <p>  -Music & Danceshow-</p>
      
    </div>

    
   
  </div>


  <div class="box-serv">
       
    <div class="content-serv">
        <i class="fas fa-photo-video"></i>
        <h3>photos and videos</h3>
       <p> Photograph your event with the latest tools and publish it on our website (as a publicity) or private site</p>
  
    </div>

    
   
  </div>


  <div class="box-serv">
       
    <div class="content-serv">
        <i class="fas fa-ticket"></i>
        <h3>other event</h3>
     
       <p>We also offer tickets for other events</p>
 
    </div>

    
   
  </div>



    </div>
</section>


<!--      About          -->



    <!--(3)section event-->



    <section class="create" id="discover">
       
        
        <h1 class="heading"><span> Discover</span></h1>
        <p class="creation"> <i class="fas fa-angle-double-down"></i> Our Shows <i class="fas fa-angle-double-down"></i></p>
        
        <div class="contentevent">

            <!--carte (1)-->
            
            <div class="event_carte">
                <div class="event-img">
                <div style="width: 320px; height: 320px; overflow: hidden;">
    <video width="500px" controls autoplay muted loop style="width: 90%; height:90%;">
        <source src="video/olampics.mp4" type="video/mp4">
    </video>
</div>
                </div>
                <div class="event-info">
                    <p class="event-categorie">olampics 2024</p>
                    <strong class="event-title">
                        <span>Paris</span>
                    </strong>
                </div>
            </div>
            

             <!--carte (2)-->
             <div class="event_carte">
                <div class="event-img">
                <div style="width: 320px; height: 320px; overflow: hidden;">
    <video width="500px" controls autoplay muted loop style="width: 90%; height:90%;">
        <source src="video/F1.mp4" type="video/mp4">
    </video>
</div>
                </div>
                <div class="event-info">
                    <p class="event-categorie">Formula1</p>
                    <strong class="event-title">
                        <span>Monaco</span>
                    </strong>
                </div>
            </div>



            
             <!--carte (3)-->
             <div class="event_carte">
                <div class="event-img">
                <div style="width: 320px; height: 320px; overflow: hidden;">
    <video width="500px" controls autoplay muted loop style="width: 90%; height:90%;">
        w<source src="video/tomorrow.mp4" type="video/mp4">
    </video>
</div>
                </div>
                <div class="event-info">
                    <p class="event-categorie">Tomorrowland</p>
                    <strong class="event-title">
                        <span>Belgium</span>
                    </strong>
                </div>
            </div>
                         <!--carte (4)-->
                         <div class="event_carte">
                <div class="event-img">
                <div style="width: 320px; height: 320px; overflow: hidden;">
    <video width="500px" controls autoplay muted loop style="width: 90%; height:90%;">
        w<source src="video/eurovid.mp4" type="video/mp4">
    </video>
</div>
                </div>
                <div class="event-info">
                    <p class="event-categorie">Euro 2024</p>
                    <strong class="event-title">
                        <span>Germany</span>
                    </strong>
                </div>
            </div>
                         <!--carte (5)-->
                         <div class="event_carte">
                <div class="event-img">
                <div style="width: 320px; height: 320px; overflow: hidden;">
    <video width="500px" controls autoplay muted loop style="width: 90%; height:90%;">
        w<source src="video/Burning.mp4" type="video/mp4">
    </video>
</div>
                </div>
                <div class="event-info">
                    <p class="event-categorie">Keinemusik</p>
                    <strong class="event-title">
                        <span>Brazil</span>
                    </strong>
                </div>
            </div>
 

    </section>

   


     <!--agenda-->
     <section class="agenda" id="agenda">
        <h1 class="heading"> Soon <span>Events</span> </h1>

        <div class="box-container" id="ticket">
        
            <div class="box">
                <img src="logo/olampic.jpg" alt="">
                <h3 class="title">Olampics 2024 Paris</h3>
                <h3 class="amount">2200DT</h3>
                <ul>
                    <li>   Date: July 26, 2024 </li>
                    <li>   place: Stade de France </li>
                    <li> <i class="fas fa-check"></i> music and photos </li>
                    <li> <i class="fas fa-check"></i> food and drinks </li>
                </ul>
                <a  href="payment/payment.html" class="btn">buy ticket</a>
            </div>
            <div class="box">
                <img src="logo/ff.jpeg" alt="">
                <h3 class="title">Monaco Grand Prix</h3>
                <h3 class="amount">1820dt</h3>
                <ul>
                    
                    <li>  -Date : May 23-26 2024 </li>
                    <li>  -Circuit Overview: The Circuit de Monaco is a 3.337 km (2.074 miles) 
                        track with 19 turns that weaves through the city's streets on a whirlwind tour past Casino Square and along the harbourfront. </li>
                   
                </ul>
                <a href="payment/payment1.html" class="btn">buy ticket</a>
            </div>
            <div class="box">
                <img src="logo/tmr.jpg" alt="">
                <h3 class="title">Tomorrowland</h3>
                <h3 class="amount">3200DT</h3>
                <ul>
                    
                    <li>  -Date: Juy 27-28-29 2026 </li>
                    <li>  -Place :Belgium </li>
                    <li>-Dress Code: Print </li>
                    
                </ul>
                <a  href="payment/payment2.html" class="btn">buy ticket</a>
            </div>
          
            
        </div>
            
 
    </section>
    




   


    <!--(3)section about us -->

<section class="about" id="about">

    <h1 class="heading"><span>about</span> us </h1>
    
    <div class="row">
    
        <div class="image">
            <img src="logo/logo.jpg" alt="">
        </div>
    
        <div class="content">
             <h3><i class="uil-heart"></i> Together we create magic <i class="uil-heart"></i></h3>
            <p><b>Sky Hight Events</b> is a revolutionary website designed to simplify event planning for clients worldwide. Our platform allows users to effortlessly browse and attend major events across the globe, whether in the realm of sports, music, or other exciting categories, all at the best prices. With SkyHighEvents, the world's most thrilling events are just a click away, providing an unparalleled experience for event enthusiasts everywhere.
            </p>
           
            
        </div>


    
     
    
</section>


    <!--contact-->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>
    
        <form action="">
            
            <div class="inputBox">
                <input type="text" name="name" id="name" placeholder="name" required/>
                <input type="email" name="email" id="email" placeholder="email" required>
            </div>
            <div class="inputBox">
                <input type="number"name="number" id="number" placeholder="number" required>
                <input type="text" name="subject" id="subject" placeholder="subject" required>
            </div>
            <textarea name="message" id="message" placeholder="your message"  cols="30" rows="10" required></textarea>
        </form>
        <div style="text-align: center;">
            <button class="btn btn-primary" onclick="sendMail()">Submit</button>
        </div>
        
    </section>




    <section class="footer">

        <div class="box-container">
    
            
    
            <div class="box">
                <h3>quick links</h3>
                <a href="#home"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#service "> <i class="fas fa-arrow-right"></i> Services  </a>
                <a href="#discover "> <i class="fas fa-arrow-right"></i> Discover  </a>
                <a href="#agenda "> <i class="fas fa-arrow-right"></i> Agenda  </a>
                <a href="#about"> <i class="fas fa-arrow-right"></i> About </a>
                
                <a href="#contact"> <i class="fas fa-arrow-right"></i> Contact Us  </a>
            </div>
    
            <div class="box">
                <h3>contact info</h3>
                <a> <i class="fas fa-phone"></i> +216 94 618 417 </a>
                <a> <i class="fas fa-envelope"></i> meriem.elayeb02@gmail.com </a>
                <a> <i class="fas fa-envelope"></i> skyhightevents@gmail.com </a>
                <a> <i class="fas fa-map-marker-alt"></i> ben arous/ Megrine, Tunisia  </a>
            </div>
    
            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/myriam.elayeb.5/"> <i class="fab fa-facebook-f"></i> facebook </a>
                
                <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i> instagram </a>
            </div>
    
        </div>
    
        <div class="credit"> © 2024 All rights reserved.<span> Amir saidi </span>  </div>
    
    </section>
     
    
    
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
   
    <script src="javascript.js"></script>
    <script src="index.js"></script>

    <script
  type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>

<script type="text/javascript">
  (function () {
    emailjs.init("xDdJDWEl9dKhig4g7");
  })();
</script>
<script src="js/jQuery.js"></script>
    <script>
      jQuery(document).ready(function ($) {
        $(".slider-img").on("click", function () {
          $(".slider-img").removeClass("active");
          $(this).addClass("active");
        });
      });
    </script>

</body>
</html>
</body>
</html>