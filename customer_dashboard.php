<!-- VENDOR DASHBOARD -->
<?php
// session_start();
?>
<?php
// if($_SESSION['Email']==false)
// {
//     header("location:index.html");
// }
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
    <link rel="stylesheet" href="logged_in_customer.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&family=Bree+Serif&display=swap" rel="stylesheet">
</head>

<script src="jquery.main.js" type="text/javascript"></script>

<body id ="body">
<!-- background image -->
    <img id="backimg"
        src="img\pexels-gradienta-7130469.jpg" alt="Error">
        <!-- navbar -->
    <nav id="navbar" style="z-index:5">
        <ul>
            <li><a href="index.html#">Home</a></li>
            <li><a href="index.html#about_me">About Us</a></li>
            <li><a href="index.html#contact_us_li">Contact Us</a></li>
        </ul>
    </nav>
    <!-- customer status -->
    <div class="" id="customer_status">
        <img id="user_image" src="https://www.w3schools.com/howto/img_avatar.png" alt="User image">

        <!-- customer info. -->
        <div id="customer_detail">
            <label id="name">Name:&nbsp;Sahil</label><br><br>
            <label id="email">Email:&nbsp;Sahil@gmail.com</label><br><br>
            <label id="phone">Phone:&nbsp;+91 9235437045</label>
        </div>

        <div id="orderbook">
            <img src="img/black-cross-transparent-background-21.png" alt="" id="cross_btn">
            <img id="food1_1" class="foods1" src="https://www.holidify.com/images/cmsuploads/compressed/indian-1768906_1920_20180322173733.jpg" alt="">
            <div id="item_detail">
              <label for="fooditemname">FOOD Name</label><br><br>
              <label for="food info">FOOD INFO<br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio sapiente magni vitae sequi obcaecati, cum corporis modi itaque molestias eius ipsa quasi ea dicta iste facilis? Harum odit itaque id?</label><br><br>
              <label for="foodprice">Price</label><br><br>
              <input type="submit" value="Order now" id="order_now_btn">
            </div>
       </div>

       <div id="orderbook2">
            <img src="img/black-cross-transparent-background-21.png" alt="" id="cross_btn2">
            <img id="food1_2" class="foods1" src="https://www.treebo.com/blog/wp-content/uploads/2018/03/Idlis.jpg" alt="">
            <div id="item_detail">
              <label for="fooditemname">FOOD Name</label><br><br>
              <label for="food info">FOOD INFO<br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio sapiente magni vitae sequi obcaecati, cum corporis modi itaque molestias eius ipsa quasi ea dicta iste facilis? Harum odit itaque id?</label><br><br>
              <label for="foodprice">Price</label><br><br>
              <input type="submit" value="Order now" id="order_now_btn">
            </div>
       </div>
        <!-- booked info -->
        <div id="bookings">
            <div class="booking1" id="booking1_id">500</div>
            
            <!-- <div class="booking1" id="booking2_id">200</div>
            <div class="booking1" id="booking3_id">600</div> -->
        </div>
        <label id="totbooked">TOTAL BOOKING</label>
        <!-- <div id="mode">
        <button id="dark_mode">
                    Dark mode
                </button>
        </div> -->
   </div>
   
        <!-- vcustomer functions -->
        <div id="customer_items_1" class="customer_items">
            <label for="itemdisplayres1" id="itemdisplayname">RESTURANT 1</label>
            <div id="item1" class="items">
             <img id="food1" class="foods" src="https://www.holidify.com/images/cmsuploads/compressed/indian-1768906_1920_20180322173733.jpg" alt="">
             <label for="foodname" class="foodnames" id="foodname1">FOOD</label>   
            </div>

            <div id="item2" class="items">
            <img id="food2" class="foods" src="https://www.treebo.com/blog/wp-content/uploads/2018/03/Idlis.jpg" alt="">
             <label for="foodname" class="foodnames" id="foodname2">FOOD</label> 
            </div>

            <div id="item3" class="items">
                 <img id="food3" class="foods" src="https://5.imimg.com/data5/CP/GV/IS/SELLER-2954846/medu-vada-500x500.jpg" alt="">
             <label for="foodname" class="foodnames" id="foodname3">FOOD</label> 
            </div>
        </div>

        <div id="customer_items_2" class="customer_items">
            <label for="itemdisplayres1" id="itemdisplayname">RESTURANT 2</label>
            <div id="item4" class="items1">
            <img id="food4" class="foods" src="https://www.thespruceeats.com/thmb/JpcMr-9YN3TnRczX4-yeVNcs4Vo=/566x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/naan-leavened-indian-flatbread-1957348-final-08-116a2e523f6e4ee693b1a9655784d9b9.jpg" alt="">
             <label for="foodname" class="foodnames" id="foodname4">FOOD</label> 
            </div>

            <div id="item5" class="items1">
                 <img id="food5" class="foods" src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/qf3crnqdr8pvozfmummm" alt="">
             <label for="foodname" class="foodnames" id="foodname5">FOOD</label> 
            </div>

            <div id="item6" class="items1">
                 <img id="food6" class="foods" src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201708/dish-story_647_081417052301.jpg?size=770:433" alt="">
             <label for="foodname" class="foodnames" id="foodname6">FOOD</label> 
            </div>
        </div>

</body>
<script src="logged_in_customer.js"></script>
</html>