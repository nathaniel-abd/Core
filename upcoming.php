<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <title>Upcoming</title>
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
  height: 750px;
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
  <center>
    <br><br><br><br><br><br><br><br><br><br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLuLU0y8uBD_PZ2p62iUztyNoNac0cTnXd" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
