<?php
 require("universalconnection.php");
 $slot_time_start = $_GET['start'];
 $slot_time_end = $_GET['end'];
 $allotted_item_name = $_GET['items']; //item name from main update page
 $changed_item_name = $_GET['changed_item_name']; 
 $price = "1200";
 $selected_time_slot_edit_item=$_GET['slot_time'];
 echo "$selected_time_slot_edit_time";

// ITEM NAME UPDATE SECTION

 $getID_query = "SELECT item_id FROM `slot_mgt` WHERE allotted_item_name = '{$allotted_item_name}'";

 echo $allotted_item_name;

 $getID_result = mysqli_query($conn, $getID_query);
 $vendor_id=22;
 $row_fetch_id_for_edit_item = mysqli_fetch_assoc($getID_result);
 $row_fetch_id_for_edit_item = $row_fetch_id_for_edit_item['item_id'];

 
//  PRICE UPDATE SECTION

// $getPrice_query = "SELECT price FROM `slot_mgt` WHERE item_id = '{$row_fetch_id_for_edit_item}'";
// $getPrice_result = mysqli_query($conn, $getPrice_query);
// $row_fetch_price = mysqli_fetch_assoc($getPrice_result);
// $row_fetch_price=$row_fetch_price['price']; 
// echo $row_fetch_price;
// echo $row_fetch_id_for_edit_item;


//session_start();


     if(isset($_GET['edit_time']) == 'Confirm')
     {
          
         //$sql = "UPDATE `slot_mgt` set allotted_item_name = '{$changed_item_name}' where allotted_item_name = '{$allotted_item_name}'"; 
        //$sql = "INSERT INTO slot_mgt (`item_id`,`slot_time_start`,`slot_time_end`,`Allotted_Item_Name`,`Price`,`vendor_id`) VALUES ('$item_id','$slot_time_start','$slot_time_end','$allotted_item_name','$price','$vendor_id')";
       // $sql2 = "INSERT INTO customer_login (`Email`,`Password`) VALUES ('$email','$password');";
        //$_SESSION['Uname']=$name;

        $getID_query = "SELECT item_id FROM `slot_mgt` WHERE allotted_item_name = '{$allotted_item_name}'";

        echo $allotted_item_name;
       
        $getID_result = mysqli_query($conn, $getID_query);
        //$vendor_id=22;
        $row_fetch_id_for_edit_item = mysqli_fetch_assoc($getID_result);
        $row_fetch_id_for_edit_item = $row_fetch_id_for_edit_item['item_id'];


        $sql = "UPDATE `slot_mgt` set slot_time_start = '$slot_time_start',slot_time_end = '$slot_time_end' where item_id = '$row_fetch_id_for_edit_item'";


        //$sql = "UPDATE `slot_mgt` set allotted_item_name = '$changed_item_name' where item_id = '$row_fetch_id_for_edit_item'";
      
        echo "$slot_time_start";
        echo $slot_time_end;

        if ($conn->query($sql)==true)
        {
          echo "Successfully added updated slot time";
          // $row = mysqli_fetch_assoc($getID_result);
           //echo $row_fetch_id_for_edit_item['item_id'];
           
         
        }

        else
        {
        echo "ERROR UPDATE ITEM NAME".mysqli_error($conn);
        }
     }


    
$conn->close();


?>