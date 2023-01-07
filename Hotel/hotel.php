<?php
    session_start();
?>
<html lang="en">

<!--HEAD-->
<head>
  <title> Hotel </title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/Sidebar Nav/sidebar_style.css">
  <link rel="stylesheet" href="hotelstyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<!--BODY-->
<body style = "height: 100%; width: 100%;">

<!--SIDEBAR-->
<div class="sidebar">
  <div class="logo-details">
  <img src="/Sidebar Nav/sidebar_logo_1.png" class="logopic1"></img>
  <img src="/Sidebar Nav/sidebar_logo_2.png" class="logopic2"></img>
</div>
<ul class="nav-list">
  <li>
    <a href="#">
      <i class="fa-solid fa-clipboard-check"></i>
      <span class="links_name">Dashboard</span>
      <div class="active-bar"></div>
    </a>
  </li>
  <li>
    <a href="#">
      <i class="fa-solid fa-sliders"></i>
      <span class="links_name">Admin Setting</span>
      <div class="active-bar"></div>
    </a>
  </li>
  <li>
    <a href="#">
      <i class="fa-solid fa-calendar-days"></i>
      <span class="links_name">Appointments</span>
      <div class="active-bar"></div>
    </a>
  </li>
  <li>
    <a href="#">
      <i class="fa-solid fa-users"></i>
      <span class="links_name">Customers</span>
      <div class="active-bar"></div>
    </a>
  </li>
  <li>
    <a href="#">
      <i class="fa-solid fa-building"></i>
      <span class="links_name">Hotel</span>
      <div class="active-bar"></div>
    </a>
  </li>
  <li>
    <a href="#">
      <i class="fa-solid fa-folder-open"></i>
      <span class="links_name">History</span>
      <div class="active-bar"></div>
    </a>
  </li>
  <li>
    <a href="#">
      <i class="fa-solid fa-scissors"></i>
      <span class="links_name">Services</span>
      <div class="active-bar"></div>
    </a>
  </li>  
  <li>
    <a href="#">
      <i class="fa-solid fa-right-from-bracket"></i>
      <span class="links_name">Log Out</span>
      <div class="active-bar"></div>
    </a>
  </li> 
</ul>
</div>

<!--MAIN DASHBOARD-->
<section class="dashboard">
    <!--HEADER-->
    <div class="header">
        <div class="header-text">
            <span class="text">Hotel & Daycare</span>
        </div>
        <div class="header-button">
            <button type="button" id="checkin-button">Check in</button>
        </div>
    </div>
    <!--BANNER FOR NUM OF PETS IN HOTEL-->
    <div class="banner">
        <div class="box">
            <div class="pets-num">
                <div class="number">4</div>
                <div class="box-text">pets checked in</div>
            </div>
            <div class="pets-num">
                <div class="number">2</div>
                <div class="box-text">to arrive</div>
            </div>
            <div class="pets-num">
                <div class="number">7</div>
                <div class="box-text">rooms available</div>
            </div>
        </div>
    </div>
    <!--LIST OF PETS IN HOTEL-->
    <div class="appointments">
      <div class="table">
        <div class="todaytitle">
            <span id="date"></span>
        </div>
        <div class="tabletitle">
          <div id="t1">Owner</div>
          <div id="t2">Pet</div>
          <div id="t3">Contact</div>
          <div id="t4">Service</div>
          <div id="t5">Time</div>
          <div id="t6">Action</div>
        </div>
        <hr>
        <div class="contents">
          <table class="tg">
            <tbody>
              <tr>
                <td class="tg-text1">Juan dela Cruz</td>
                <td class="tg-text2">Brownie</td>
                <td class="tg-text3">09123456789</td>
                <td class="tg-text4">Basic Bath</td>
                <td class="tg-text5">10:00 AM</td>
                <td class="tg-text6">
                    <button class="button" id="tg-button">Checkout</button>
                </td>
              </tr>
              <tr>
                <td class="tg-text1">Cardo Dalisay</td>
                <td class="tg-text2">Whitey</td>
                <td class="tg-text3">09123456789</td>
                <td class="tg-text4">Deluxe Bath</td>
                <td class="tg-text5">11:00 AM</td>
                <td class="tg-text6">
                    <button class="button" id="tg-button">Checkout</button>
                </td>
              </tr>
              <tr>
                <td class="tg-text1">Taylor Swift</td>
                <td class="tg-text2">Blackie</td>
                <td class="tg-text3">09123456789</td>
                <td class="tg-text4">Basic Bath</td>
                <td class="tg-text5">12:00 PM</td>
                <td class="tg-text6">
                    <button class="button" id="tg-button">Checkout</button>
                </td>
              </tr>
              <tr>
                <td class="tg-text1">Zhong Li</td>
                <td class="tg-text2">Chubby</td>
                <td class="tg-text3">09123456789</td>
                <td class="tg-text4">Deluxe Bath</td>
                <td class="tg-text5">1:00 PM</td>
                <td class="tg-text6">
                    <button class="button" id="tg-button">Checkout</button>
                </td>
              </tr>
              <tr>
                <td class="tg-text1">Kathryn Bernardo</td>
                <td class="tg-text2">Rex</td>
                <td class="tg-text3">09123456789</td>
                <td class="tg-text4">Basic Bath</td>
                <td class="tg-text5">1:30 PM</td>
                <td class="tg-text6">
                    <button class="button" id="tg-button">Checkout</button>
                </td>
              </tr>
              <tr>
                <td class="tg-text1">Nadine Lustre</td>
                <td class="tg-text2">Lemon</td>
                <td class="tg-text3">09123456789</td>
                <td class="tg-text4">Basic Bath</td>
                <td class="tg-text5">1:30 PM</td>
                <td class="tg-text6">
                    <button class="button" id="tg-button">Checkout</button>
                </td>
              </tr>
              <tr>
                <td class="tg-text1">Maria Claire</td>
                <td class="tg-text2">Tiger</td>
                <td class="tg-text3">09123456789</td>
                <td class="tg-text4">Deluxe Bath</td>
                <td class="tg-text5">2:00 PM</td>
                <td class="tg-text6">
                    <button class="button" id="tg-button">Checkout</button>
                </td>
              </tr>
              <tr>
                <td class="tg-text1">Michael Santos</td>
                <td class="tg-text2">Pesto</td>
                <td class="tg-text3">09123456789</td>
                <td class="tg-text4">Deluxe Bath, Deshedding</td>
                <td class="tg-text5">3:00 PM</td>
                <td class="tg-text6">
                    <button class="button" id="tg-button">Checkout</button>
                </td>
              </tr>
            </tbody>
            </table>
        </div>
      </div>
     
    </div>
</section>




<script>
$(document).ready(function(){
  $('ul li a').click(function(){
    $('li a').removeClass("active");
    $(this).addClass("active");
});
});     

var dt = new Date();
document.getElementById("date").innerHTML= dt.toDateString();

</script>

</script>
</body>
</html>
<?php
    unset($_SESSION["error"]);
?>