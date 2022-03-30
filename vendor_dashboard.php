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

        <div id="update_items">
            <form action="slot_mgt.php" method = "get">
             <img id="iconedititem" src="https://img.search.brave.com/V5BTpzxDXvGP1nu1KCiGgjIaX_dNupJEN4vfIVSASQA/rs:fit:474:225:1/g:ce/aHR0cHM6Ly90c2Uz/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5u/eTdaYk9UMXVhSFUx/M21sVHl0OU93SGFI/YSZwaWQ9QXBp" alt="error">
             <h3>EDIT ITEM NAME</h3>
             <br><br>
             Item Name
             &nbsp;&nbsp;
             <br>
            
              <select name="items" id="selected_item">

                            <option value="">Select Item:</option>
                            <?php
                                $results=mysqli_query($conn,  "SELECT * FROM slot_mgt");
                                //loop
                                foreach ($results as $slot){
                            ?>
                            <option value="<?php echo $slot["allotted_item_name"];?>">
                                <?php echo $slot["allotted_item_name"];?>
                            </option id="vendor_option" name="vendor_option_select">
                        
                            <?php
                            }
                            foreach($results as $slot)
                            {
                                echo $slot["vendor_option_select"];

                            }
                            //get item name from edit item buttin click and update the item name from text box

                            ?>
                    
                    </select>

                    <br><br>
                    TO
                    <input type="text" name="changed_item_name" id="">
                    <br><br>
                    <input type="submit" name="changed_item_name_btn" value="Confirm">
            </form>
        </div>

    <form action="slot_mgt_time.php" method="get">
        <div id="update_time">
            <img id="iconedittime" src="https://img.search.brave.com/V5BTpzxDXvGP1nu1KCiGgjIaX_dNupJEN4vfIVSASQA/rs:fit:474:225:1/g:ce/aHR0cHM6Ly90c2Uz/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5u/eTdaYk9UMXVhSFUx/M21sVHl0OU93SGFI/YSZwaWQ9QXBp" alt="error">
                <label>Slot Time</label>&nbsp;
                <select name="slot_time">
                    <option value="">Select Slot :</option>

                    <?php
                    $results2=mysqli_query($conn, "SELECT concat_ws(' - ',slot_time_start,slot_time_end) as slot_time from slot_mgt");
                    //loop
                    foreach ($results2 as $slot)
                    {
                     ?>
                      <option value="<?php echo $slot["slot_time"];?>">
                        <?php echo $slot["slot_time"];?>
                      </option>
                     <?php
                    }
                     ?>
                </select>
                  <br>
                TO
                <br>
                <label for="start">Start time:</label>
                    <input type="time" id="start" name="start" step="1">
                    <br><br>
                    <label for="end">End time:</label>
                    <input type="time" id="end" name="end" step="1">
                <br><br>
                <input type="submit" name="edit_time" value="Confirm">
          </div>
                </form>
          <!-- <div id="update_price">
            <form action = "slot_mgt.php" method="get">
     <img id="iconeditprice" src="https://img.search.brave.com/V5BTpzxDXvGP1nu1KCiGgjIaX_dNupJEN4vfIVSASQA/rs:fit:474:225:1/g:ce/aHR0cHM6Ly90c2Uz/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5u/eTdaYk9UMXVhSFUx/M21sVHl0OU93SGFI/YSZwaWQ9QXBp" alt="error">
       <label>Old Price</label>&nbsp;
       <input type="number" name="price" placeholder="Enter the price" id="vendor_price">
       <br>
       TO
       <br>
       <label>New Price</label>&nbsp;
      <input type="number" name="edit_price" placeholder="Enter the price" id="vendor_edit_price">
      <br><br>
      <input type="submit" value= "confirm" name = "price_change_btn">
            </form>
    </div> -->
     </div>
</body>
<script src="logged_in_vendor.js"></script>
<!-- <script src="vendor_update.js"></script> -->
</html>