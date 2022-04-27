<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../headerstyles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="../styles.css">
    <title>Checkout</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <?php
        require 'dbInclude.php';
    ?>
    <style>

      header {
  background-image: url(../images/bg.jpeg);
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

body {
  background-image: url('../images/bg.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
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
  <header style="background-image: url('../images/bg.jpeg');">
    <a href="index.php">
    <img src="../images/logo.png" style="height: 100px; width: 125px; display: inline; float: left;">
    </a>
    <nav class="nav" style="font-size: 22px; font-family: Ubuntu; display: inline; float: right; margin: 5px">
      <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../faq.php">FAQ</a></li>
          <li><a href="upcoming.php">Upcoming</a></li>
          <li><a href="../store.php">Store</a></li>
          <li><a href="../cart.php">Cart</a></li>
          <img src="../images/cart.png" style="filter: invert(85%); height: 50px; width: 50px; display: inline; float: right; transform: scaleX(-1);">
      </ul>
  </nav>
  
  </header>
  <body>
  <br><br><br><br><br>
    <div class="container">
    <br>
      <div>
        <center>
        <h1 style="font-family: Ubuntu; font-size: 70px; color: rgb(203,203,203);">
          You've Checked Out!</h1>
          <div>
          <p style="font-weight: bold; color: ;font-size: 25px; font-family: Ubuntu;">Your order will be processed shortly, thanks for buying from</p>
          <img src="../images/logo.png">
          </div>
</center>
      </div>
    </div>
  </body>
  <footer>
    <div style="font-family: Ubuntu; height: 150px; width: 100%; background-color: rgb(62, 62, 62);">
      <img src="../images/logo.png" style="height: 125px; width: 150px; position: relative; left: 5%; top: 5%;">
      <img src="../images/shipping.png" style="height: 110px; width: 150px; position: relative; left: 25%; top: -10%;">
      <img src="../images/about.png" style="height: 110px; width: 150px; position: relative; left: 35%; top: -10%;">
      <img src="../images/social.png" style="height: 110px; width: 150px; position: relative; left: 45%; top: -10%;">
      <a href="../shipping_info.php" style="color: rgb(230, 230, 230); position: relative; left: 34.3%; top: -8%;">Shipping Info</a>
      <a href="../about.php" style="color: rgb(230, 230, 230); position: relative; left: 53.2%; top: -20%;">About Us</a>
      <img src="../images/socials.png" style="height: 75px; width: 150px; position: relative; left: 69.420%; top: -60%;">
  
    </div>
    <div style="height: 100px; width: 100%; background-color: rgb(54, 54, 54);">
      <br>
      <center>
        <p style="margin: 0; color: rgb(230, 230, 230);">© Copyright 2021 | Core Drinks | All Rights Reserved</p>
          <br>
          <img src="../images/payment_garbage.png" width="322" height="34">
        </center>
      </div>
    </footer>