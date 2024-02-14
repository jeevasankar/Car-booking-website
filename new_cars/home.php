<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <?php  require_once('header.htm')?>

<style>
    .intro {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 520px;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url("cars.png");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .intro h1 {
      font-family: sans-serif;
      font-size: 60px;
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
    }

    .intro p {
      font-size: 20px;
      color: #d1d1d1;
      text-transform: uppercase;
      margin: 20px 0;
    }

    .intro button {
      background-color: #5edaf0;
      color: #000;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
    }

    .achievements {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 80px;
    }

    .achievements .work {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .achievements .work i {
      width: fit-content;
      font-size: 50px;
      color: #333333;
      border-radius: 50%;
      border: 2px solid #333333;
      padding: 12px;
    }

    .achievements .work .work-heading {
      font-size: 20px;
      color: #333333;
      text-transform: uppercase;
      margin: 10px 0;
    }

    .achievements .work .work-text {
      font-size: 15px;
      color: #585858;
      margin: 10px 0;
    }

    .about-me {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 80px;
      border-top: 2px solid #eeeeee;
    }

    .about-me img {
      width: 500px;
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .about-me-text h2 {
      font-size: 30px;
      color: #333333;
      text-transform: uppercase;
      margin: 0;
    }

    .about-me-text p {
      font-size: 15px;
      color: #585858;
      margin: 10px 0;
    }

</style>
  </head>
<body>
    <!-- TOP  -->

    <!-- TOP  -->


<div class="container-fluid">

<?php
require_once('assets/navbar.php');

/*  */

?>
<main>
    <div class="intro">
      <h1>Are you looking for cars</h1>
      <p>Here we are to provide lot of car collection</p>
      <button>CAR COLLECTION</button>
    </div>
    <div class="achievements">
      <div class="work">
        <p class="work-heading"><a href="web_view copy.php"> BASIC MODEL </a></p>
        <p class="work-text">When it comes to small cars in India, buyers are always looking for the best compact cars that offer style, practicality, and affordability.  India that cater to every taste and budget.</p>
      </div>
      <div class="work">
        <p class="work-heading" ><a href="web_view copy 2.php"> INTERMEDIATE MODEL </a></p>
        <p class="work-text"> the cars designed for the middle-class family are endless. So, to make it easier, here are the best and most used cars for middle-class families in India.</p>
      </div>
      <div class="work">
        <p class="work-heading"><a href="web_view copy 3.php">HIGH END MODEL</a></p>
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
      <img src="cars.png" alt="me">
    </div>
  </main>
  <?php   include_once('assets/footer.php');?>
  </body>
  </head>
