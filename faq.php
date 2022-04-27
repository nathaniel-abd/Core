<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="headerstyles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FaQ</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <?php
        require 'includes/dbInclude.php';
    ?>
    <style>

li {
          display: inline;
          float:left;
          }
      a {
          color: rgb(216,216,216);
          text-decoration: none;
          display: block;
          }
      li a:hover {
        -webkit-animation-name: animation;
        -webkit-animation-duration: .5s;
        -webkit-animation-timing-function: ease-in;
        -webkit-animation-iteration-count:initial;    
        -webkit-animation-play-state: running;
        animation-fill-mode: forwards;
        animation-name: animation;
        animation-duration: .5s;
        animation-timing-function: ease-in;
        animation-iteration-count: initial;    
        animation-play-state: running;
        text-decoration: none;
          }
      ul li ul {
          visibility: hidden;
          opacity: 0;
          position: relative;
          display: none;
          width: 75%;
          }
      ul li:hover > ul,
      ul li ul:hover {
          visibility: visible;
          opacity: 1;
          display: block;
          width: 75%
          }
      ul li ul li {
          width: 75%;
          margin: 0px;
          }
      li {
          padding: 10px;
          background-color: rgba(133, 200, 255, 0);
          color: white;
          }
          @-webkit-keyframes animation {
    0%     {color:rgb(216, 216, 216);}
    50.0%  {color:rgb(212, 103, 198)} 
    100.0%  {color:rgb(194, 63, 176);}
}
          @keyframes animation {
    0%     {color:rgb(216, 216, 216);}
    50.0%  {color:rgb(212, 103, 198);}
    100.0%  {color:rgb(194, 63, 176);}
}


* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

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

@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

header {
  background-image: url(images/bg.jpeg);
  background-size: cover;
}

body {
            background-image: url('images/bg.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
          }

      a {
        color: rgb(216,216,216);
      }
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

header {
  background-image: url(images/bg.jpeg);
  background-size: cover;
}

  body {
  background-color: white;
}

.container {
  height: 1200px;
  width: 100%;
  background-color: white;
}

.centered {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: "streamster";
}

@font-face {
  font-family: streamster;
  src: url(streamster.ttf);
}
    </style>
    <script src="myscripts.js"></script>
  </head>
  <header style="background-image:src('images/mogus.jpeg');">
    <a href="index.php">
    <img src="images/logo.png" style="height: 100px; width: 125px; display: inline; float: left;">
    </a>
    <nav class="nav" style="font-size: 22px; font-family: Ubuntu; display: inline; float: right; margin: 5px">
      <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="upcoming.php">Upcoming</a></li>
          <li><a href="store.php">Store</a></li>
          <li><a href="cart.php">Cart</a></li>
          <img src="images/cart.png" style="filter: invert(85%); height: 50px; width: 50px; display: inline; float: right; transform: scaleX(-1);">
      </ul>
  </nav>
  
  </header>
  <body>
  <br><br><br><br><br>
    <div class="container">
    <br>
      <div>
        <center>
        <h1 style="font-family: Ubuntu; font-size: 70px; color: rgb(220,220,220);">
          Frequently Asked Questions</h1>
          <br>
          <div>
          <p style="font-weight: bold; font-size: 25px; font-family: Ubuntu; color: white">What is CORE™? & How Does it Work?</p>
          <p style="font-family: Ubuntu; color: rgb(250,250,250);">We don't need word-pasta to describe how our product works, what we have is a powderized energy formula for gamers and gymrats alike.</p>
          <p style="font-family: Ubuntu; color: rgb(250,250,250);">We use organic caffeine and abstain from using any artificial garbage. We spare no expense in providing a quality energy drink.</p>
          </div>
          <div>
            <p style="font-weight: bold; font-size: 25px; font-family: Ubuntu; color: white">What About CORE™ Makes It Better Than H-FUEL™?</p>
            <p style="font-family: Ubuntu; color: rgb(250,250,250);">Our competitors, like H-Fuel™, load their drinks with garbage like maltodextrin and artificial caffeine.</p>
            <p style="font-family: Ubuntu; color: rgb(250,250,250);">We employ organic caffeine & natural sage to maximize focus and energy without the crash common from most other brands.</p>
            </div>
            <div>
              <p style="font-weight: bold; font-size: 25px; font-family: Ubuntu; color: white">How Long Does the Effect Last?</p>
              <p style="font-family: Ubuntu; color: rgb(250,250,250);">In one serving, you can get an energy and focus boost for ~8hrs.</p>
              </div>
              <div>
                <p style="font-weight: bold; font-size: 25px; font-family: Ubuntu; color: white">How Much Should I Have?</p>
                <p style="font-family: Ubuntu; font-style: italic; font-weight: 999; color: rgb(250,250,250);">While we always believe that one should savor Core and drink it in moderation;</p>
                <p style="font-family: Ubuntu; color: rgb(250,250,250);">we can say that you can have 2-3 cups before there is enough to make you crash.</p>
                </div>
                <div>
                  <p style="font-weight: bold; font-size: 25px; font-family: Ubuntu; color: white">What are the Benefits?</p>
                  <p style="font-family: Ubuntu; color: rgb(250,250,250);">Increased focus, more energy, better short-term & long-term memory, and sharper reflexes.</p>
                  </div>
                  <div>
                    <p style="font-weight: bold; font-size: 25px; font-family: Ubuntu; color: white">Can I get a Free Sample?</p>
                    <p style=" font-family: Ubuntu; font-weight: 700; color: rgb(250,250,250);">No</p>
                    </div>
</center>
      </div>
    </div>
  </body>
  <footer>
    <div style="font-family: Ubuntu; height: 150px; width: 100%; background-color: rgb(62, 62, 62);">
      <img src="images/logo.png" style="height: 125px; width: 150px; position: relative; left: 5%; top: 5%;">
      <img src="images/shipping.png" style="height: 110px; width: 150px; position: relative; left: 25%; top: -10%;">
      <img src="images/about.png" style="height: 110px; width: 150px; position: relative; left: 35%; top: -10%;">
      <img src="images/social.png" style="height: 110px; width: 150px; position: relative; left: 45%; top: -10%;">
      <a href="shipping_info.php" style="color: rgb(230, 230, 230); position: relative; left: 34.3%; top: -8%;">Shipping Info</a>
      <a href="about.php" style="color: rgb(230, 230, 230); position: relative; left: 53.2%; top: -20%;">About Us</a>
      <img src="images/socials.png" style="height: 75px; width: 150px; position: relative; left: 69.420%; top: -60%;">
  
    </div>
    <div style="font-family: Ubuntu; height: 100px; width: 100%; background-color: rgb(54, 54, 54);">
      <br>
      <center>
        <p style="margin: 0; color: rgb(230, 230, 230);">© Copyright 2021 | Core Drinks | All Rights Reserved</p>
          <br>
          <img src="images/payment_garbage.png" width="322" height="34">
        </center>
      </div>
    </footer>
  </html>
</html>
