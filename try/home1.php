<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="windows/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="windows/css/grid.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="resources/js/homejs.js"></script>
    <title>Alumni Plus</title>
    
    </head>
<body>
    <header>
        <nav>
        <div class="row">
            <ul class="main-nav">
            <li><a href="home.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            </ul>
            
            
            </div>
        </nav>
        <div class="hero-text-box">
        <h1>Be a part of our Alumnus.<br>Stay Updated Always</h1>
        <a class="btn btn-full" href="login.php">Login</a>
        <a class="btn btn-ghost" href="signup1.php">SignUp</a> 
        </div>
        
    </header>
    <section class="section-whatshappening">
        
        <div class="row">
        <h2>Know what's happening around</h2>
            <p class="long-copy">
            Hello, we’re Alumni+,helping you stay connected with your alumni and peers.The student experience no longer ends with graducation. Engaging with Alumni enables organizations to expand talent pools and grow.
            </p>
        </div>
        <h4> Look what our Alumni have to say</h4>
        <div class="row">
            <div class="col span-1-of-4 box">
             <h3>Tom Austen</h3>
                <p>
                    <img src="resources/css/img/male1.jpg" height="190" width="240">
                    Batch: 11-15 ( IT )<br>
                    Currently Working at Google as Senior Web Developer<br>
                    
                </p>
            </div>
            <div class="col span-1-of-4 box">
             <h3>Sarah Rafferty</h3>
                <p>
                    <img src="resources/css/img/female%203.jpg" height="190" width="200" >
                    Batch: 14-18 (Electronics)<br>
                    Currently Working at L & T as Senior Supervisor<br>
                </p>
            </div>
            <div class="col span-1-of-4 box">
             <h3>Mark Gillis</h3>
                <p>
                    <img src="resources/css/img/male%202.jpg" height="190" width="240"><br>
                    Batch: 98-02 (Mechanical)<br>
                    Currently Working as<br> Vice Chairperson at Vodafone Inc.<br>
                </p>
            </div>
            <div class="col span-1-of-4 box">
             <h3>Portia Gebano</h3>
                <p>
                    <img src="resources/css/img/female1.jpg" height="190" width="180"><br>
                     Batch: 12-16 (Civil)<br>
                    Inspection Officer at Tough Nickel
                </p>
            </div>
        </div>
    
    </section>
    
    <section class="Upcoming-events">
    <div class="row">
        <h4>Our upcoming events</h4>        
        </div>
        <div class="row">
            <div class="col span-1-of-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="tedx.jpg" alt="TedX" style="width: 300px;height: 300px">
                        </div>
                    <div class="flip-card-back">
                        <p>TedX Meet <br>Topic : <br>The Launch of Chandrayan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col span-1-of-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="lantern.jpg" alt="TedX" style="width: 300px;height: 300px">
                        </div>
                    <div class="flip-card-back">
                        <p>TedX Meet <br>Topic : <br>The Launch of Chandrayan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col span-1-of-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="study%20event.jpg" alt="TedX" style="width: 300px;height: 300px">
                        </div>
                    <div class="flip-card-back">
                        <p>TedX Meet <br>Topic : <br>The Launch of Chandrayan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Past-events">
        <style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
    <h4>Our Past Events</h4>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="seminar2.jpg" style="width:100%">
  <div class="text">Seminar Hosted on User Experience</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="concert.jpg" style="width:100%">
  <div class="text">Cultural Fest which showcased incredible student talents</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="seminar3.jpg" style="width:100%">
  <div class="text">Seminar Hosted on Future is IOT</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
    </section>
   
    
    
    
    
        
    </body>

</html>