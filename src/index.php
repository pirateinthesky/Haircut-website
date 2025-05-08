<?php
require('DBconnection.php')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CanCan Haircut</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <section class="flex">

    <a href="index.php" class="logo">
    <img src="image/barber-pale.svg" alt="logo" style="height: 2.5rem; vertical-align: middle;">
    Can Haircut
    </a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#services">Services</a>
            <a href="#about">About</a>
            <a href="#haircutters">Haircutters</a>
            <a href="#book">Book</a>
        </nav>

        <a href="login.php" class="btn">Login</a>


    </section>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<div class="even-container">

    <section class="home" id="home">

        <div class="image">
            <img src="image/home-img.gif">
        </div>
    
        <div class="content">
            <h3>Take good care of your hair with Can Haircut</h3>
            <p>Welcome to Can Haircut<br/>At Can Haircut, Our expert team is here to provide you with the highest quality haircut, 
            using the latest technology and best practices in haircut</p>
            <a href="contact.php" class="btn"> Contact Us <span class="fas fa-chevron-right"></span> </a>
        </div>
    
    </section>

</div>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-cut"></i>
        <h3>50+</h3>
        <p>Haircutters at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1000+</h3>
        <p>Satisfied customers</p>
    </div>

    <div class="icons">
        <i class="fa-solid fa-chair"></i>
        <h3>500+</h3>
        <p>Chairs</p>
    </div>

    <div class="icons">
        <i class="fas fa-store"></i>
        <h3>100+</h3>
        <p>Available Branches</p>
    </div>

</section>

<!-- icons section ends -->

<!-- services section starts  -->

<div class="even-container">

    <section class="services" id="services">

        <h1 class="heading"> Our Services </h1>
    
        <div class="box-container">
    
        <div class="box">
            <i class="fas fa-clipboard-list"></i>
            <h3>Free Hair Styling</h3>
            <p>Can Haircut offers free hair styling for our dear customers.</p>
            <a href="html/services.html?service=styling" class="btn"> Learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
             <i class="fas fa-clock"></i>
             <h3>24/7 Open Branches</h3>
             <p>Can Haircut's branches are ready to help you anytime, day or night.</p>
             <a href="html/services.html?service=branches" class="btn"> Learn more <span class="fas fa-chevron-right"></span> </a>
       </div>
       <div class="box">
       <i class="fas fa-user-tie"></i>
            <h3>Expert Haircutters</h3>
            <p>The haircutters at Can Haircut are here to give you the best care possible.</p>
            <a href="html/services.html?service=haircutters" class="btn"> Learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-spray-can"></i>
            <h3>Hair Care Products</h3>
            <p>Can Haircut has all hair care products you need to get better.</p>
            <a href="html/services.html?service=haircare" class="btn"> Learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-couch"></i>
            <h3>Barber Chairs</h3>
            <p>We provide comfortable seating for both waiting and haircuts.</p>
            <a href="html/services.html?service=bedfacility" class="btn"> Learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-hand-holding-heart"></i>
            <h3>Total Care</h3>
            <p>At Can Haircut, we take care of all your haircut needs in one place.</p>
            <a href="html/services.html?service=totalcare" class="btn"> Learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
        
        </div>
    
    </section>

</div>

<!-- services section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> About Us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.gif">
        </div>


        <div class="content">
            <h3>Can Haircut take care of your hair</h3>
            <p>At Can Haircut, we are committed to providing the best hair services to help you look a great and fulfilling life. Our team of haircutter experts are here to support your health journey with care and compassion.</p>
            <<a href="html/about.html?service=checkups" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>

        </div>

    </div>

</section>

<!-- about section ends -->

<!-- haircutters section starts  -->

<div class="even-container">

    <section class="haircutters" id="haircutters">

        <h1 class="heading"> Our Team</h1>
    
        <div class="box-container">
    
            <div class="box">
                <img src="image/haircutter1.jpg" alt="haircutter"  width="200" height="200">
                <h3>Sarp Tarlig</h3>
                <span>Expert Haircutter</span>
                <div class="share">
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f" target="_blank" aria-label="Facebook"></a>
                    <a href="https://twitter.com/" class="fab fa-twitter" target="_blank" aria-label="Twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram" target="_blank" aria-label="Instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin" target="_blank" aria-label="LinkedIn"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="image/haircutter2.jpg" alt="">
                <h3>Ahmetcan Alaca</h3>
                <span>Expert Haircutter</span>
                <div class="share">
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f" target="_blank" aria-label="Facebook"></a>
                    <a href="https://twitter.com/" class="fab fa-twitter" target="_blank" aria-label="Twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram" target="_blank" aria-label="Instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin" target="_blank" aria-label="LinkedIn"></a>
                </div>
            </div>
    
            <div class="box">
                <img src="image/haircutter3.jpg" alt="">
                <h3>Yoshan Gunaratna</h3>
                <span>Expert Haircutter</span>
                <div class="share">
                    <a href="https://www.facebook.com/" class="fab fa-facebook-f" target="_blank" aria-label="Facebook"></a>
                    <a href="https://twitter.com/" class="fab fa-twitter" target="_blank" aria-label="Twitter"></a>
                    <a href="https://www.instagram.com/" class="fab fa-instagram" target="_blank" aria-label="Instagram"></a>
                    <a href="https://www.linkedin.com/" class="fab fa-linkedin" target="_blank" aria-label="LinkedIn"></a>
                </div>
            </div>
    
         
    
        </div>
    
    </section>

</div>

<!-- haircutters section ends -->


<!-- booking section starts   -->

<section class="book" id="book">

    <h1 class="heading"> Book Now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/book-img.gif" alt="">
        </div>

        <form action="login.php" method="GET">
            <h3>Book Appointment</h3>
            <input type="text" name="name" placeholder="Your Name" class="box" required>
            <input type="number" name="phone" placeholder="Your Number" class="box" required>
            <input type="email" name="email" placeholder="Your Email" class="box" required>
            <input type="date" name="appointment_date" class="box" required>
            <input type="time" name="appointment_time" class="box">
            <textarea name="message" placeholder="Message (Optional)" class="box"></textarea>
            <input type="submit" value="Book Now" class="btn">
        </form>


    </div>

</section>

<!-- booking section ends -->


<!-- footer section starts  -->

<div class="even-container">

    <section class="footer" color: #1e90ff>
        

        <div class="box-container">
    
            <div class="box">
                <h3>quick links</h3>
                <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
                <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
                <a href="#haircutters"> <i class="fas fa-chevron-right"></i> Our Haircutters </a>
                <a href="#book"> <i class="fas fa-chevron-right"></i> book </a>
            </div>
    
            <div class="box">
                 <h3>our services</h3>
                 <a href="html/services.html?service=styling"> <i class="fas fa-chevron-right"></i> Free Haircare Styling </a>
                 <a href="html/services.html?service=branches"> <i class="fas fa-chevron-right"></i> 24/7 Open Branches </a>
                 <a href="html/services.html?service=haircutters"> <i class="fas fa-chevron-right"></i> Expert Haircutters </a>
                 <a href="html/services.html?service=haircare"> <i class="fas fa-chevron-right"></i> Hair Care Products </a>
                 <a href="html/services.html?service=chairs"> <i class="fas fa-chevron-right"></i>Barber Chairs </a>
                 <a href="html/services.html?service=totalcare"> <i class="fas fa-chevron-right"></i>Total Care</a>
           </div>

    
           <div class="box contact-info">
                <h3>Contact Info</h3>
                <a href="tel:+393427679812"> <i class="fas fa-phone"></i> +39 342 767 9812 </a>
                <a href="mailto:ahmetcan.alaca@studenti.unime.it"> <i class="fas fa-envelope"></i> ahmetcan.alaca@studenti.unime.it </a>
                <a href="mailto:ahmetcanalaca143@gmail.com"> <i class="fas fa-envelope"></i> ahmetcanalaca143@gmail.com </a>
                <a href="https://www.google.com/maps/search/?api=1&query=Messina,+Italy+98122" target="_blank"> 
                    <i class="fas fa-map-marker-alt"></i> Messina, Italy - 98122 
                </a>
            </div>

    
            <div class="box">
                 <h3>follow us</h3>
                 <a href="https://www.facebook.com/ahmetcangram/" target="_blank"> <i class="fab fa-facebook-f"></i> Facebook </a>
                 <a href="https://x.com/canwhatalready" target="_blank"> <i class="fab fa-x"></i> X </a>
                 <a href="https://www.instagram.com/_thiscan_" target="_blank"> <i class="fab fa-instagram"></i> Instagram </a>
                 <a href="https://www.linkedin.com/in/ahmetcanalaca/" target="_blank"> <i class="fab fa-linkedin"></i> Linkledin </a>
            </div>

        </div>
    
        <div class="credit"> created by <span>Ahmetcan Alaca</span> | student of the University of Messina </div>
    
    </section>

</div>

<!-- footer section ends -->

<script src="js/script.js"></script>

</body>
</html>