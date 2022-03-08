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

   <div id="twobtn">
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
       <!-- Add -->
        <div id="addbtnback">
            <h2>ADD</h2>
            <br>
            <form action="slot_mgt.php" method="get">
            <label>Slot Time</label>&nbsp;
           
           <!-- header("location:login.php"); -->
           
           <?php
           $server = "localhost";
           $username = "root";
           $password = "root";
           $db_db = 'eaterometer';
           
           $con = mysqli_connect($server,$username,$password,$db_db);
           
           if (!$con) {
               die("Connection to this database failed due to".mysqli_connect_error());
           }
           
        
           $results=mysqli_query($con, "SELECT * FROM slot_mgt");
           ?>
          
          <div class="dropdown">
            <select name="slot_time ">
                <option value="">Select Slot :</option>
             
                <?php
                    $results=mysqli_query($con, "SELECT concat_ws(' - ',slot_time_start,slot_time_end) as slot_time from slot_mgt");
                    //loop
                    foreach ($results as $slot){
                ?>
                        <option value="<?php echo $slot["slot_time"];?>"><?php echo $slot["slot_time"];?></option>
                <?php
                    }
                ?>
            </select>
            <br><br>

            <label>Price</label>&nbsp;
            <input type="number" name="price" placeholder="Enter the price" id="">
            <br><br>
            <label>Item</label>&nbsp;
            <input type="text" name="item" placeholder="Enter the item" id="">
            <br><br> 
            <input type="submit" value="Confirm">
     </div>
     
 </div>          
</form>
<!-- UPDATE -->
<div id="updatebtnback">
            <h2>UPDATE</h2>
            <br>
            <form action="slot_mgt.php" method="get">
            
           <!-- header("location:login.php"); -->
           
           <?php
           $server = "localhost";
           $username = "root";
           $password = "";
           $db_db = 'eaterometer';
           
           $con = mysqli_connect($server,$username,$password,$db_db);
           
           if (!$con) {
               die("Connection to this database failed due to".mysqli_connect_error());
           }
           
        
           $results=mysqli_query($con, "SELECT * FROM slot_mgt");
           ?>
          
         <div class="dropdown">
            <label>Item</label>&nbsp;
            <input type="text" name="item" placeholder="Enter the item" id="">
            <br><br> 
            <label>Price</label>&nbsp;
            <input type="number" name="price" placeholder="Enter the price" id="">
            <br><br>
            <label for="start">Start time:</label>
            <input type="time" id="start" name="start">&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="end">End time:</label>
            <input type="time" id="end" name="end">
            <br><br> 
            <input type="submit" value="Confirm">
        </div>
</div>
</div>
</div>
</body>
<script src="logged_in_vendor.js"></script>
</html>