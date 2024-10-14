<?php
@include("check_loggedin.php");

// Check if the logout button is clicked
if (isset($_POST['logout'])) {
    // Start the session
    session_start();
    // Unset all session variables
    $_SESSION = array();
    // Destroy the session
    session_destroy();
    // Redirect to the login page
    header('Location: http://localhost/php/She/login/Sign_in.php');
    exit;
}
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
        <button type="submit" class="btn btn-primary" name="logout">Login</button>
    </nav>
    </form>
    <div id="menu-bars" class="fas fa-bars"></div>

</header>



<!-- (2)home section-->

<section class="home" id="home">

    <div class="content">
        <h3>best  exclusive  events in tunisia<span> check this </span></h3>
    
    </div>

    <section class="slider-container">
      <div class="slider-images">
        <div class="slider-img">
          <img src="logo/zebra.jpg" alt="1" />
          <h1>Trapez</h1>
          <div class="details">
            <h2>Trapez</h2>
            <p>Yassmine Rekik</p>
          </div>
        </div>
        <div class="slider-img">
          <img src="logo/flexy.jpg" alt="2" />
          <h1>Mermaid</h1>
          <div class="details">
            <h2>Mermaid</h2>
            <p>Amal Boughnim</p>
          </div>
        </div>
        <div class="slider-img">
          <img src="logo/rosa.jpg" alt="3" />
          <h1>hamac</h1>
          <div class="details">
            <h2>hamac</h2>
            <p>Rahma Boughnim</p>
          </div>
        </div>
        <div class="slider-img active">
          <img src="logo/duo.jpg" alt="4" />
          <h1>Duo</h1>
          <div class="details">
            <h2>Fedi And Eya</h2>
            <p>Acro Duo</p>
          </div>
        </div>
        <div class="slider-img">
          <img src="logo/marriage.jpg" alt="5" />
          <h1>Wedding</h1>
          <div class="details">
            <h2>Wedding</h2>
            <p>Ballerina</p>
          </div>
        </div>
        <div class="slider-img">
          <img src="logo/fedi.jpg" alt="6" />
          <h1>acrobatic</h1>
          <div class="details">
            <h2>acrobatic</h2>
            <p>fedi fridhi</p>
          </div>
        </div>
        <div class="slider-img">
          <img src="logo/amal.jpg" alt="7" />
          <h1>Fire</h1>
          <div class="details">
            <h2>fire</h2>
            <p>amal boughnim</p>
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
        <source src="video/zebra.mp4" type="video/mp4">
    </video>
</div>
                </div>
                <div class="event-info">
                    <p class="event-categorie">The Big Show</p>
                    <strong class="event-title">
                        <span>Pack Lounge</span>
                    </strong>
                </div>
            </div>
            

             <!--carte (2)-->
             <div class="event_carte">
                <div class="event-img">
                <div style="width: 320px; height: 320px; overflow: hidden;">
    <video width="500px" controls autoplay muted loop style="width: 90%; height:90%;">
        <source src="video/acroduo.mp4" type="video/mp4">
    </video>
</div>
                </div>
                <div class="event-info">
                    <p class="event-categorie">Trust</p>
                    <strong class="event-title">
                        <span>Acro Duo</span>
                    </strong>
                </div>
            </div>




             <!--carte (3)-->
             <div class="event_carte">
                <div class="event-img">
                <div style="width: 320px; height: 320px; overflow: hidden;">
    <video width="500px" controls autoplay muted loop style="width: 90%; height:90%;">
        <source src="video/Balance.mp4" type="video/mp4">
    </video>
</div>
                </div>
                <div class="event-info">
                    <p class="event-categorie">Balance</p>
                    <strong class="event-title">
                        <span>Handstand</span>
                    </strong>
                </div>
            </div>
             <!--carte (4)-->
             <div class="event_carte">
                <div class="event-img">
                <div style="width: 320px; height: 320px; overflow: hidden;">
    <video width="500px" controls autoplay muted loop style="width: 90%; height:90%;">
        <source src="video/ballerina.mp4" type="video/mp4">
    </video>
</div>
                </div>
                <div class="event-info">
                    <p class="event-categorie">ballerina</p>
                    <strong class="event-title">
                        <span>Wedding</span>
                    </strong>
                </div>
            </div>



              <!--carte (5)-->

              <div class="event_carte">
                <div class="event-img">
                <div style="width: 320px; height: 320px; overflow: hidden;">
    <video width="500px" controls autoplay muted loop style="width: 90%; height:90%;">
        <source src="video/mermaid.mp4" type="video/mp4">
    </video>
</div>
                </div>
                <div class="event-info">
                    <p class="event-categorie">Mermaid</p>
                    <strong class="event-title">
                        <span>Pool Party</span>
                    </strong>
                </div>
            </div>


               <!--carte (6)-->

               <div class="event_carte">
                <div class="event-img">
                <div style="width: 320px; height: 320px; overflow: hidden;">
    <video width="500px" controls autoplay muted loop style="width: 90%; height:90%;">
        <source src="video/rosa.mp4" type="video/mp4">
    </video>
</div>
                </div>
                <div class="event-info">
                    <p class="event-categorie">Dance</p>
                    <strong class="event-title">
                        <span>Dance Event</span>
                    </strong>
                </div>
            </div>



        </div>

    </section>

   


     <!--agenda-->
     <section class="agenda" id="agenda">
        <h1 class="heading"> Soon <span>Events</span> </h1>

        <div class="box-container" id="ticket">
        
            <div class="box">
                <img src="logo/621_xiaomi.jpg" alt="">
                <h3 class="title">Launch of the Redmi Note 13 series in Tunisia</h3>
                <h3 class="amount">50DT</h3>
                <ul>
                    <li>   Date: 15 june 2022 </li>
                    <li>   place: Le Pavillon des Baies de Gammarth </li>
                    <li> <i class="fas fa-check"></i> music and photos </li>
                    <li> <i class="fas fa-check"></i> food and drinks </li>
                </ul>
                <a  href="payment/payment.html" class="btn">buy ticket</a>
            </div>
            <div class="box">
                <img src="logo/jerba.jpg" alt="">
                <h3 class="title">Jerba Music Land</h3>
                <h3 class="amount">500dt</h3>
                <ul>
                    
                    <li>  -Date : AUGUST 1-2-3 2k24 </li>
                    <li>  -23:00 to 06:00 </li>
                    <li>  -Place: Radisson Blu Palace Resort & Thalasso, Djerba </li>
                   
                </ul>
                <a href="payment/payment1.html" class="btn">buy ticket</a>
            </div>
            <div class="box">
                <img src="logo/gravity.jpg" alt="">
                <h3 class="title">Gravity</h3>
                <h3 class="amount">350DT</h3>
                <ul>
                    
                    <li>  -Date: June 1-2 2k24 </li>
                    <li>  -Place :Africa Jade Korba </li>
                    <li>-Dress Code: Black & White </li>
                    
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
            <p><b>Sky Hight Events</b> Founded in 2021 by the visionary Amal Bougnim, our agency of events in Tunisia embodies the spirit of creativity and innovation. With a background steeped in the world of circus arts and a passion for organizing memorable experiences, Amal brought her unique perspective to the forefront, shaping our agency into a dynamic force in the events industry. From extravagant corporate gatherings to intimate cultural celebrations, we specialize in curating unforgettable moments that captivate and inspire. With a keen eye for detail and a commitment to excellence, we seamlessly blend artistry with organization, ensuring that each event we undertake is a resounding success. Guided by Amal's bold vision and fueled by our dedicated team's passion, we continue to push boundaries, redefine possibilities, and create magical experiences that leave a lasting impression on all who attend.
            </p>
           
            
        </div>

<!--aboutus 2-->
    
     
    
</section>

    




    <!--contact-->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>
    
        <form action="">
            
            <div class="inputBox">
                <input type="text" name="name" id="name" placeholder="name">
                <input type="email" name="email" id="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number"name="number" id="number" placeholder="number">
                <input type="text" name="subject" id="subject" placeholder="subject">
            </div>
            <textarea name="message" id="message" placeholder="your message"  cols="30" rows="10"></textarea>
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
                <a href="#about"> <i class="fas fa-arrow-right"></i> about </a>
                <a href="#service"> <i class="fas fa-arrow-right"></i> Service </a>
                <a href="#gallery"> <i class="fas fa-arrow-right"></i> gallery </a>
                <a href="#agenda"> <i class="fas fa-arrow-right"></i> agenda </a>
                
                <a href="#contact"> <i class="fas fa-arrow-right"></i> contact </a>
            </div>
    
            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +216 52 185 382 </a>
                <a href="#"> <i class="fas fa-phone"></i> +216 55 058 917 </a>
                <a href="#"> <i class="fas fa-envelope"></i> amalboughnim29@gmail.com </a>
                <a href="#"> <i class="fas fa-envelope"></i> fedi.fridhi44@gmail.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> ben arous/ Mourouj, Tunisia  </a>
            </div>
    
            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/amal.flexy?locale=fr_FR"> <i class="fab fa-facebook-f"></i> facebook </a>
                
                <a href="https://www.instagram.com/sky.high.eventss/"> <i class="fab fa-instagram"></i> instagram </a>
            </div>
    
        </div>
    
        <div class="credit"> © 2023 All rights reserved.<span> Fridhi Fedi </span>  </div>
    
    </section>
     
    
    
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
   
    <script src="javascript.js"></script>
    <script src="index.js"></script>

<script
  type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"
></script>
<script type="text/javascript">
  (function () {
    emailjs.init("4f4UWZry5Gkuj0vta");
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