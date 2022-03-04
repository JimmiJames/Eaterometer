<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="import" href="index.html">
    <link rel="stylesheet" href="eat_style.css">
    <link rel="stylesheet" href="logged_in_vendor.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&family=Bree+Serif&display=swap" rel="stylesheet">
    
</head>
<body>
    <img id="backimg" src="https://images.pexels.com/photos/7130503/pexels-photo-7130503.jpeg?cs=srgb&dl=pexels-gradienta-7130503.jpg&fm=jpg" alt="Error">
    <nav id="navbar" style="z-index:5">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#about_me">About Us</a></li>
            <li><a href="#contact_us_li">Contact Us</a></li>
            <li><?php
            //  echo "Welcome".$_SESSION["Uname"];
            ?></li>
        </ul>
    </nav>
    <div id="customer_status">
        <img id="user_image" src="https://www.w3schools.com/howto/img_avatar.png" alt="User image">

        <div id="customer_detail">
            <label id="name">Name:&nbsp;Sahil</label>
        </div>

        <div id="bookings">
            <div class="booking1" id="booking1_id">500</div>
            <div class="booking1" id="booking2_id">200</div>
            <div class="booking1" id="booking3_id">600</div>
        </div>

        <!-- <div id="button">
        <button id="slot_button">
           <img id="arrow_img" src="https://www.freeiconspng.com/thumbs/arrow-icon/right-arrow-icon-27.png" alt="Error">
        </button>
        </div> -->

       <!-- <div id="slot_mang">
           <label>SLOT-TIME</label><input type="datetime" name="slot_datetime" id="">
       </div> -->
   <div id="twobtn">
       <div id="btn">
           <button id="add">
               ADD +
           </button>
           <button id="view">
               VIEW +
           </button>
           <button id="add">
               UPDATE +
           </button>
       </div>
        <div id="btnback">
            <h2>ADD</h2>
            <br>
           <label>Slot Time</label>&nbsp;
           <div class="dropdown">
           <select name="time" id="time_id">
           <option value="8-9AM">8-9AM</option>
           <option value="1-2PM">1-2PM</option>
           <option value="8-9PM">8-9PM</option>
          </select>
          </div><br><br>
       <label>Price</label>&nbsp;
       <input type="number" name="price" value="Enter the price" id="">
       <br><br>
       <label for="start">Start time:</label>
       <input type="time" id="start" name="start">
       <br><br>
       <label for="end">End time:</label>
       <input type="time" id="end" name="end">
</div>
        </div>

    </div>
</body>
<script src="logged_in_vendor.js"></script>
</html>