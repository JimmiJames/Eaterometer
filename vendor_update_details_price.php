<!-- VENDOR UPDATE FUNCTIONALITY -->
<?php
 //session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     <!-- UPDATE -->
    <div id="updatebtnback2">
    <img class="backbutton" src="https://www.freeiconspng.com/uploads/arrow-icon-28.png" alt="">

            <h2>UPDATE</h2>
            <br>
            <form action="slot_mgt.php" method="get">
        <form action="slot_mgt_price.php" method="get">    
            <form action="slot_mgt.php" method="get">

               <!-- header("location:login.php"); -->

                <?php
                    require("universalconnection.php");
                    
                    $results=mysqli_query($conn, "SELECT * FROM slot_mgt");
                ?>

            <div class="dropdown">
                
                    <label>Item</label>&nbsp;
                
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
                            
                            ?>
                    
                    </select>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="button" value="EDIT ITEMS" name="edit_items" id="edit_item_btn">
                    <br><br>
                    <label>Price</label>
                    &nbsp;
                    <input type="number" name="price" placeholder="Click get price" id="vendor_price" value="<?php
                    
                    echo $_SESSION["price_value"]; ?>" disabled/>

                    <input type="number" name="price_edit" placeholder="Enter the new price" id="vendor_price_edit" value="" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                        <!-- <form action="slot_mgt_price.php" method="get"> -->
                    <input type="button" value="NEW PRICE" name="update_new_price" id="updateprice_id2" >
                    <input type="button" value="CANCEL" name="update_new_price" id="updateprice_id3" >
                        
                    <br><br>
                    <label>Slot Start Time</label>&nbsp;
                    <select name="slot_time">
                    <option value="">Select Slot :</option>
                    <?php
                    $results2=mysqli_query($conn, "SELECT slot_time_start as slot_time from slot_mgt");
                    //loop
                    foreach ($results2 as $slot){
                    ?>
                    <option value="<?php echo $slot["slot_time"];?>">
                        <?php echo $slot["slot_time"];?>
                    </option>
                    <?php
                }
            ?>
                </select>
<br><br>
                <label>Slot End Time</label>&nbsp;
                    <select name="slot_time">
                    <option value="">Select Slot :</option>
                    <?php
                    $results2=mysqli_query($conn, "SELECT slot_time_end as slot_time from slot_mgt");
                    //loop
                    foreach ($results2 as $slot){
                    ?>
                    <option value="<?php echo $slot["slot_time"];?>">
                        <?php echo $slot["slot_time"];?>
                    </option>
                    <?php
                }
            ?>
                </select>
                <input type="button" value="Edit time" id="edit_time_btn">
                <br><br>
                
                    <input type="submit" name="update" value="Update" id="update_form">
               </div>
                </form>
        </form> 
            </form>  
     </div>
</body>
<script src="jquery.main.js" type="text/javascript"></script>

<!-- <script src="logged_in_vendor_price.js"></script> -->
<script src="vendor_update.js"></script>
</html>