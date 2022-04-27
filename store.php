<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="headerstyles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Store</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <?php
        require 'includes/dbInclude.php';
    ?>
    <style>

body {
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

        .container {
          background-color: white; 
          display: flex; 
          height: 100%; 
          width: 100%; 
          justify-content: center;
          overflow-x:hidden; 
          flex-wrap: wrap;"
        }
        
        .container2 {
          background-color: white;
          margin: auto;
          display: flex; 
          height: 100%; 
          width: 100%; 
          justify-content: center;
          overflow-x:hidden; 
          flex-wrap: wrap;"
        }

        .container3 {
          background-color: white;
          margin: auto;
          display: flex; 
          height: 100%; 
          width: 100%; 
          justify-content: center;
          overflow-x:hidden; 
          flex-wrap: wrap;"
        }

      a {
          color: rgb(216,216,216);
          text-decoration: none;
          display: block;
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

.centered {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: "streamster";
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
  max-height: 480px;
  margin: 50px;
  text-align: center;
  font-family: arial;
}

.space {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  max-height: 500px;
  margin: 50px;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  margin: 0px;
  color: white;
  background-color: #6C6AFF;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 90%;
}

.sorting {
  position: fixed;
  bottom: 200px;
  right: 0px;
  font-family: ubuntu; 
  padding: 32px 32px;
  font-size: 18px;
  text-align: center;
  color: white;
  height: 80px;
  width: 100px;
  display: flex;
  cursor: pointer;
  background-color: #008CBA;
  margin-top: auto;
  transition: width .5s;
}
.sorting:hover {
  position: fixed;
  bottom: 200px;
  right: 0px;
  font-family: ubuntu; 
  padding: 32px 32px;
  font-size: 18px;
  text-align: center;
  color: white;
  height: 80px;
  width: 180px;
  display: flex;
  cursor: pointer;
  background-color: #008CBA;
  margin-top: auto;
}
.sorting1 {
  position: fixed;
  bottom: 300px;
  right: 0px;
  font-family: ubuntu; 
  padding: 32px 32px;
  font-size: 18px;
  text-align: center;
  color: white;
  height: 80px;
  width: 100px;
  display: flex;
  cursor: pointer;
  background-color: #008CBA;
  margin-top: auto;
  transition: width .5s;
}
.sorting1:hover {
  position: fixed;
  bottom: 300px;
  right: 0px;
  font-family: ubuntu; 
  padding: 32px 32px;
  font-size: 18px;
  text-align: center;
  color: white;
  height: 80px;
  width: 180px;
  display: flex;
  cursor: pointer;
  background-color: #008CBA;
  margin-top: auto;
}
.sorting2 {
  position: fixed;
  bottom: 400px;
  right: 0px;
  font-family: ubuntu; 
  padding: 32px 32px;
  font-size: 18px;
  text-align: center;
  color: white;
  height: 80px;
  width: 100px;
  display: flex;
  cursor: pointer;
  background-color: #008CBA;
  margin-top: auto;
  transition: width .5s;
}
.sorting2:hover {
  position: fixed;
  bottom: 400px;
  right: 0px;
  font-family: ubuntu; 
  padding: 32px 32px;
  font-size: 18px;
  text-align: center;
  color: white;
  height: 80px;
  width: 180px;
  display: flex;
  cursor: pointer;
  background-color: #008CBA;
  margin-top: auto;
}
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: #008CBA;
  flex-direction: column;
  flex: 1;
  margin-top: auto;
}

@font-face {
  font-family: streamster;
  src: url(streamster.ttf);
}

    </style>

    <script src="myscripts.js"></script>
  </head>
  <header>
    <a href="index.php">
    <img src="images/logo.png" style="background-image: url('images/bg.jpeg'); height: 95px; width: 120px; display: inline; float: left;">
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
  <br><br><br><br><br><div stlye="height: 10px;"></div>
  </header>
  <body>
  <div id="container2">
<div style="height: 520px; width: 100%;background-image: linear-gradient(to bottom right,rgb(50, 50, 165), rgb(240, 60, 60));"></div>
<div class="centered" style="font-size: 100px; color: rgb(101, 195, 240);">Store</div>
    </div>
    <br><br><br><br>
    <div class="container">
   <?php
require 'dbInclude.php';

$sql = "SELECT * FROM products 
        ORDER BY id";
$result = $conn->query($sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "
        <div class='card'>
        <img style='height: {$row['height']}%; width: {$row['width']}%;'; src='{$row['img']}'>
        <h2>{$row['name']}</h2>
        <p class='price'> \${$row['price']}</p>
        <a href='includes/add.php?id={$row['id']}' onclick='includes/add.php?price={$row['price']};return true;'><button>Add to Cart</button></a>
</div>
        ";
    }
}
?>
<center><img src='images/coming_soon.png'</center>
</div>
    <br><br><br>
  </body>
  
  <footer>
    <div style="font-family: Ubuntu; height: 150px; width: 100%; background-color: rgb(62, 62, 62);">
      <img src="images/logo.png" style="height: 125px; width: 150px; position: relative; left: 5%; top: 5%;">
      <img src="images/shipping.png" style="height: 110px; width: 150px; position: relative; left: 25%; top: -10%;">
      <img src="images/about.png" style="height: 110px; width: 150px; position: relative; left: 35%; top: -10%;">
      <img src="images/social.png" style="height: 110px; width: 150px; position: relative; left: 45%; top: -10%;">
      <a href="shipping_info.php" style="color: rgb(230, 230, 230); position: relative; left: 34.3%; top: -8%;">Shipping Info</a>
      <a href="" style="color: rgb(230, 230, 230); position: relative; left: 53.2%; top: -20%;">About Us</a>
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
