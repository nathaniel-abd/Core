<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <title>Shipping</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <?php
        require 'includes/dbInclude.php';
    ?>
    <style>

      body {
        padding: 0%;
        margin: 0%;
        overflow-x: hidden;
        background-image: url(images/bg.jpeg);
        
      }

li {
          display: inline;
          float:left;
          }
      a {
          color: rgb(216, 216, 216);
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
    50.0%  {color:rgb(196, 101, 183)} 
    100.0%  {color:rgb(194, 63, 176);}
}
          @keyframes animation {
    0%     {color:rgb(216, 216, 216);}
    50.0%  {color:rgb(194, 92, 180);}
    100.0%  {color:rgb(194, 63, 176);}
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

.container {
  height: 1450px;
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
    <nav class="nav" style="font-size: 22px; font-family: Ubuntu; display: inline; float: right;">
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
          Shipping Information</h1>
          <br>
          <div>
          <p style="font-weight: bold; font-size: 25px; font-family: Ubuntu; color: white">Where do you ship from?</p>
          <p style="font-family: Ubuntu; color: rgb(250,250,250);">We are based out of Henderson, Tennessee on West Main Street near the Wifi Park</p>
          </div>
          <div>
            <p style="font-weight: bold; font-size: 25px; font-family: Ubuntu; color: white">What countries do you guys ship to?</p>
            <p style="font-family: Ubuntu; color: rgb(250,250,250);">We ship worldwide, we don't want a single person to potentially miss out on our drink of the century,</p>
            <p style="font-family: Ubuntu; color: rgb(250,250,250);">this is precisely the reason why we have decided to make shipping costs so low.</p>
            </div>
            <div>
              <p style="font-weight: bold; font-size: 25px; font-family: Ubuntu; color: white">Will shipping compound the more things I buy?</p>
              <p style="font-family: Ubuntu; color: rgb(250,250,250);">Sadly yes, though we wish it weren't true. Due to supply chain issues and</p>
              <p style="font-family: Ubuntu; color: rgb(250,250,250);">in order to properly pay postage, this is how we must calculate shipping.</p>
              </div>
              <div>
                <p style="font-weight: bold; font-size: 25px; font-family: Ubuntu; color: white">Is there any State or Federal sales tax on this?</p>
                <p style="font-family: Ubuntu; font-style: italic; font-weight: 999; color: rgb(250,250,250);">Don't tell the IRS, but no. There is no sales tax on CORE™,</p>
                <p style="font-family: Ubuntu; font-style: italic; font-weight: 999; color: rgb(250,250,250);">However, we pay a flat amount out of profits to rectify this.</p>
                </div>
                <div>
                  <p style="font-weight: bold; font-size: 25px; font-family: Ubuntu; color: white">How long will it take to get here?</p>
                  <p style="font-family: Ubuntu; color: rgb(250,250,250);">With Domestic Shipping, it will take anywhere from 1-4 days from our standard shipping time at 7:30PM CST.</p>
                  <p style="font-family: Ubuntu; color: rgb(250,250,250);">Shipping globally will range from 3-14 days. If we know it will take more than 5 days to arrive, we will</p>
                  <p style="font-family: Ubuntu; color: rgb(250,250,250);">always include a coupon that you can redeem at checkout for the next item you buy.</p>
                  </div>
                  <div>
                    <p style="font-weight: bold; font-size: 25px; font-family: Ubuntu; color: white">What if it arrives damaged?</p>
                    <p style=" font-family: Ubuntu; font-weight: 700; color: rgb(250,250,250);">We put a lot of trust in the postal service to deliver you CORE™ in one piece.</p>
                    <p style=" font-family: Ubuntu; font-weight: 700; color: rgb(250,250,250);">If ever it arrives damaged, we will be happy to issue a refund or a return.</p>
                    </div>
    <br>
      <div>

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
