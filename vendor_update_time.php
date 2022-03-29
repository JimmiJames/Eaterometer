<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            <input type="button" value="Confirm">
      </div>
</body>
</html>