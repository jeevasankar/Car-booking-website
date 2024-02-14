<?php
include("auth.php");
require('db.php');
?>


<!DOCTYPE html>
<html>
<head>
  <title>J K S COMPANY</title>
  <link href="Home_page.css" rel="stylesheet" type="text/css" >
</head>
<body>
  <header class="header">
    <img class="logo"  src="E:\WEB ENG\WEB_LAB\logo-1.png" alt="me" width="100px">
    <p>CAR BOOKING</p>
    <nav class="nav-items">
      <a href="Home_page.html">Home</a>
      <a href="#">About</a>
      <div class="dropdown">
        <button class="dropbtn">Dropdown 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
           <a href="#">Link 1</a>
           <a href="#">Link 2</a>
           <a href="#">Link 3</a>
        </div>
      </div> 
      <a href="E:\WEB ENG\WEB_LAB\contact.html">Contact</a>
      <a href="E:\WEB ENG\WEB_LAB\login_page.html">Sign in</a>
    </nav>
  </header>
  <main>
    <div class="intro">
      <h1>Are you looking for cars</h1>
      <p>Here we are to provide lot of car collection</p>
      <button>CAR COLLECTION</button>
    </div>
    <div class="achievements">
      <div class="work">
        <p class="work-heading"><a href="#"> BASIC MODEL </a></p>
        <p class="work-text">When it comes to small cars in India, buyers are always looking for the best compact cars that offer style, practicality, and affordability.  India that cater to every taste and budget.</p>
      </div>
      <div class="work">
        <p class="work-heading" ><a href="#"> INTERMEDIATE MODEL </a></p>
        <p class="work-text"> the cars designed for the middle-class family are endless. So, to make it easier, here are the best and most used cars for middle-class families in India.</p>
      </div>
      <div class="work">
        <p class="work-heading"><a href="#">HIGH END MODEL</a></p>
        <p class="work-text">When it comes to high-end hypercars and super-fast supercars, a few companies should come to mind first: Bugatti, Ferrari, Koenigsegg, Rimac, and Pagani, among others.</p>
      </div>
    </div>
    <div class="about-me">
      <div class="about-me-text">
        <h2>About US</h2>
        <p>
          Founded in 2023, J K S is a leading AutoTech company streamlining and revolutionising the sale, purchase, and financing of pre-owned cars in India, Australia, Thailand, and UAE. Leveraging a Smart AI Pricing Engine, and 140 quality checks, selling and buying pre-owned vehicles is seamless and transparent with J K S. 
          
          Ensuring complete transparency and faster lending processes, J K S Financial Services Private Limited, a professionally managed Non-Banking Financial Company (NBFC) registered with the Reserve Bank of India, offers customers focused value added services.</p>
      </div>
      <img src="E:\WEB ENG\WEB_LAB\cars.png" alt="me">
    </div>
  </main>
  <footer class="footer">
    <div class="copy">Developed by Mr.JEEVASANKAR</div>
    <div class="bottom-links">
      <div class="links">
        <span>More Info</span>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <a href="#">Sign in</a>
      </div>
    </div>
  </footer>
</body>

</html>