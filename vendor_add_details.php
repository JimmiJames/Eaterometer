

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
    <img class="backbutton" src="https://www.freeiconspng.com/uploads/arrow-icon-28.png" alt="">

        <h2>ADD</h2>
        <br>
        <!-- <form action="slot_mgt.php" method="get"> -->
            <?php
          require("universalconnection.php");
        $results=mysqli_query($conn, "SELECT * FROM slot_mgt");
         ?>

            <div class="dropdown">
                <form action="vendor_add_func.php" method="POST">
                <label for="start">Start time:</label>
                    <input type="time" id="start" name="starts" step="1">
                
                    <br><br>
                    <label for="end">End time:</label>
                    <input type="time" id="end" name="end" step="1">
                <br><br>
                <label>Price</label>&nbsp;
                <input type="number" name="price" placeholder="Enter the price" id="">
                <br><br>
                <label>Item</label>&nbsp;
                <input type="text" name="item" placeholder="Enter the item" id="">
                <br><br>
                <input type="submit" value="Confirm" name="Confirm">
            </div>
        </form> 
    </div>
</body>

</html>