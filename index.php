<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <?php
        require 'includes/dbInclude.php';
    ?>

    <style>
          body {
            background-image: url('images/bg.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
          }

            li {
          display: inline;
          float:left;
          }
      a {
          color: rgb(211, 211, 211);
          text-decoration: none;
          display: block;
          }
      li a:hover {
        -webkit-animation-name: animation;
        -webkit-animation-duration: .3s;
        -webkit-animation-timing-function: ease-in;
        -webkit-animation-iteration-count:initial;    
        -webkit-animation-play-state: running;
        animation-fill-mode: forwards;
        animation-name: animation;
        animation-duration: .3s;
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

          * {box-sizing: border-box}

    body {
      font-family: Verdana, sans-serif; 
      margin:0;
      overflow-x: hidden;
      overflow-y: scroll;}
    
      .mySlides {
        display: none
      }

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
    
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }
    
    .prev:hover, .next:hover {
      background-color: rgba(0,0,0,0.8);
    }
    
    .text {
      color: #f2f2f2;
      font-size: 15px;
      bottom: 8px;
      width: 100%;
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

    .container{
      background-image: linear-gradient(rgb(58, 60, 175), rgb(255, 75, 75));
      height: 1500px;
      width: 100%;
      display: inline-block;
    }

    .container2{
      background-image: linear-gradient(rgb(255, 75, 75), rgba(255,145,10,1));
      height: 750px;
      width: 100%;
      margin: auto;
      padding: auto;
      display: inline-block;
      
    }
      .tects {
        float: right;
        height: 420px; 
        width: 655px; 
        vertical-align: middle;
        background-color: white; 
        border-radius: 20px 20px 20px 20px; 
        box-shadow: 15px 15px 10px #2c2c2c3f;
        display: flex;
        flex-wrap: wrap;
        margin: 50px;
      }
      p {
        margin: 40px; 
        font-size: 17px;
        padding: 10px;
      }
      .cont {
      position: relative; 
      left: 5%; 
      top: 30%; 
      height: 440px; 
      width: 675px; 
      background-color: white; 
      border-radius: 20px 20px 20px 20px; 
      box-shadow: 5px 5px 10px;
    }

    </style>
        
  </head>
  <header>
    <a href="index.php">
    <img src="images/logo.png" style="background-image: url('images/bg.jpeg'); height: 100px; width: 125px; display: inline; float: left;">
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
<br>    
<br>
<br>    
<br>
  <div class="slideshow-container">
    
    <div class="mySlides fade">
      <center>
      <img src="images/logo2.png" style="width:448px; height: 350px;">
    </center>
    </div>
    
    <div class="mySlides fade">
      <center>
      <img src="images/hot_drop.png" style="height: 350px;">
    </center>
    </div>
    
    <div class="mySlides fade">
      <center>
      <img src="images/placeholdera.png" style="height: 350px;">
      </center>
    </div>

    <div class="mySlides fade">
      <center>
      <img src="images/placeholder2.png" style="height: 350px;">
      </center>
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span> 
      <span class="dot" onclick="currentSlide(4)"></span> 
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
      <br>
      <br>
      <br>
      <br>
      <br>    
      <br>
    <div class="container">
    <img src="images/nice.png" style="height: 45%;width: 25%; float: right; margin: 300px;">
      <div class="cont"></div>
        <h1 style="margin: 0; position: relative; top: 5%; left: 10%; font-family: Ubuntu;">What Is CORE™?</h1>
        <p style="margin: 0; position: relative; top: 10%; left: 8%; font-family: Ubuntu; font-size: 18px;">Core is an energizing focus drink for gaming, outdoors, and exercise.</p>
        <p style="margin: 0; position: relative; top: 13%; left: 8%; font-family: Ubuntu; font-size: 18px;">We combine the energy boost of traditional drinks, with the added</p>
        <p style="margin: 0; position: relative; top: 16%; left: 8%; font-family: Ubuntu; font-size: 18px;"> benefit of a sharpened mind.</p>
      </div>
    </div>
    <div class="container2">
      <div class="tects"><br>
      <center><h1 style="font-family: Ubuntu;">What We Offer</h1>
      <p>Each tub has a unique and energetic taste that always has a good feel.</p>
      <p>In every sip, we try and get your focus & energy to absolute perfection.</p>
      <p>Additionally, we sell stickers, mouse pads, and of course custom cups.</p></center>
      </div>
      <img src="images/tub_ad.png" style="float: left;height: 50%;width: 35%; margin: 40px;">
      <br><br><br><br>
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
    <div style="height: 120px; width: 100%; background-color: rgb(54, 54, 54);">
      <br>
      <center>
        <p style="margin: 0; color: rgb(230, 230, 230);">© Copyright 2021 | Core Drinks | All Rights Reserved</p>
          <br>
          <img src="images/payment_garbage.png" width="322" height="34">
        </center>
      </div>
    </footer>
  </html>
