<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
  <?php
        require 'includes/dbInclude.php';
    ?>
   <link rel="stylesheet" href="headerstyles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <style>
      body {
        height: 100%;
        padding: 0%;
        margin: 0%;
        overflow-x: hidden;
      }

li {
          display: inline;
          float:left;
          }
      a {
          color: white;
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

.container {
  background-color: white;
  font-family: Ubuntu;
  display: flex;
  flex-wrap: wrap;
}

.clearncheck {
  float: right;
}

html,body { height:100%; }

.centered {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: "streamster";
}

.clear {
  color: white;
  padding: 25px 42px;
  text-align: center;
  font-size: 18px;
  margin: 4px 2px;
  background-color: coral;
  float: right;
  vertical-align: bottom;
  display: flex;
}

.cartin {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  min-width: 600px;
  margin: 50px;
  display: flex;
  flex-direction: row;
}

.check {
  color: white;
  padding: 25px 42px;
  text-align: center;
  font-size: 20px;
  margin: 4px 2px;
  background-color: #008CBA;
  float: right;
  vertical-align: bottom;
  display: flex;
}

.pimg {
padding: 20px;
flex: 25%;
}

.pimg img {
  width: 98px;
  height: 120px;
}

.cname {
padding: 10px;
flex: 25%;
margin-top: auto;
margin-bottom: auto;
}

 .cadd {
padding: 10px;
flex: 25%;
margin-top: auto;
margin-bottom: auto;
color: black;
font-size: 30px;
}

.cprice {
padding: 10px;
flex: 25%;
margin-top: auto;
margin-bottom: auto;
}

.stock {
padding: 10px;
flex: 25%;
margin-top: auto;
margin-bottom: auto;
}

.total {
  margin: 10px;
  padding: 10px;
  text-align: center;
  height: 135px;
  width: 335px;
  font-family: Ubuntu;
}

.space {
  max-width: 75px;
  background-color: white;
  height: 250px;
}

.none {
  margin-left: auto;
  margin-right: auto;
  padding: 10px;
  transform: translate(0%, -30%);
  text-align: center;
}

@font-face {
  font-family: streamster;
  src: url(streamster.ttf);
}

    </style>
  </head>
  <header>
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
          <img src="images/cart.png" style="filter: invert(85%);height: 50px; width: 50px; display: inline; float: right; transform: scaleX(-1);">
      </ul>
  </nav>
  <br><br><br><br><br>
  </header>
  <body>
    <br><br><br><br><br><br>
    <div class="clearncheck">
      <?php include 'includes/clearncheck.php'; ?>
    </div>
    <div class="container">
<?php 
include 'includes/content.php';
?>
    </div>
    <div class='space'></div>
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
    <div style="height: 100px; width: 100%; background-color: rgb(54, 54, 54);">
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
