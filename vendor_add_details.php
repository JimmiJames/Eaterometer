

<!-- VENDOR ADD FUNCTIONALITY -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Add -->
    <div id="addbtnback">
        <h2>ADD</h2>
        <br>
        <form action="slot_mgt.php" method="get">
            <?php
          require("universalconnection.php");
        $results=mysqli_query($conn, "SELECT * FROM slot_mgt");
         ?>

            <div class="dropdown">
            <label>Slot Time</label>&nbsp;
                <select name="slot_time">
                    <option value="">Select Slot :</option>

                    <?php
                $results2=mysqli_query($conn, "SELECT concat_ws(' - ',slot_time_start,slot_time_end) as slot_time from slot_mgt");
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

                <label>Price</label>&nbsp;
                <input type="number" name="price" placeholder="Enter the price" id="">
                <br><br>
                <label>Item</label>&nbsp;
                <input type="text" name="item" placeholder="Enter the item" id="">
                <br><br>
                <input type="submit" value="Confirm">
            </div>
        </form>
    </div>
</body>

</html>