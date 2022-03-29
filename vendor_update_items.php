<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="update_items">
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
                       

                       ?>
               
               </select>
               <br><br>
               TO
               <input type="text" name="changed_item_name" id="">
               <br><br>
               <input type="button" value="Confirm">
   </div>
</body>
</html>