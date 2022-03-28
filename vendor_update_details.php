<!-- VENDOR UPDATE FUNCTIONALITY -->

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
    <div id="updatebtnback">
            <h2>UPDATE</h2>
            <br>
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
                    <input type="button" value="Edit items">
                    <br><br>
                    <label>Price</label>
                    &nbsp;
                    <input type="number" name="price" placeholder="Enter the price" id="vendor_price">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="button" value="Get Price" name="getprice">
                    <br><br>

                    <label for="start">Start time:</label>
                    <input type="time" id="start" name="start">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <label for="end">End time:</label>
                    <input type="time" id="end" name="end">
                    <br><br>
                    <input type="submit" name="update" value="Update">
               </div>
                </form>   
     </div>
</body>
<script src="jquery.main.js" type="text/javascript"></script>


<script src="vendor_update.js"></script>
</html>