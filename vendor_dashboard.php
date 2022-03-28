<!-- VENDOR DASHBOARD -->

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

<script src="jquery.main.js" type="text/javascript"></script>

<body>
<!-- background image -->
    <img id="backimg"
        src="https://images.pexels.com/photos/7130503/pexels-photo-7130503.jpeg?cs=srgb&dl=pexels-gradienta-7130503.jpg&fm=jpg" alt="Error">
        <!-- navbar -->
    <nav id="navbar" style="z-index:5">
        <ul>
            <li><a href="index.html#">Home</a></li>
            <li><a href="index.html#about_me">About Us</a></li>
            <li><a href="index.html#contact_us_li">Contact Us</a></li>
        </ul>
    </nav>
    <!-- vendor status -->
    <div id="vendor_status">
        <img id="user_image" src="https://www.w3schools.com/howto/img_avatar.png" alt="User image">

        <!-- vendor info. -->
        <div id="vendor_detail">
            <label id="name">Name:&nbsp;Sahil</label>
        </div>

        <!-- booked info -->
        <div id="bookings">
            <div class="booking1" id="booking1_id">500</div>
            <div class="booking1" id="booking2_id">200</div>
            <div class="booking1" id="booking3_id">600</div>
        </div>

        <div id="mode">
        <button id="dark_mode">
                    Change mode
                </button>
        </div>

        <!-- vendor functions -->
        <div id="fourbtn">
            <img id="backbutton" src="https://www.freeiconspng.com/uploads/arrow-icon-28.png" alt="">
            <div id="btn">
                <button id="add">
                    ADD +
                </button>
                <button id="view">
                    VIEW +
                </button>
                <button id="update">
                    UPDATE +
                </button>
            </div>

            <?php
        //ADD
        require("vendor_add_details.php");
        //UPDATE
        require("vendor_update_details.php");
        ?>
        </div>
    </div>
</body>
<script src="logged_in_vendor.js"></script>
<!-- <script src="vendor_update.js"></script> -->
</html>