<?php
 require("universalconnection.php");
 $slot_time_start = $_GET['slot_time_start'];
 $slot_time_end = $_GET['slot_time_end'];
 $allotted_item_name = $_GET['edit_items_selected_items']; //item name from main update page
 $changed_item_name = $_GET['changed_item_name']; 
 $price = "1200";

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


     if(isset($_GET['changed_item_name_btn']) == 'EDIT ITEM')
     {
          
         //$sql = "UPDATE `slot_mgt` set allotted_item_name = '{$changed_item_name}' where allotted_item_name = '{$allotted_item_name}'"; 
        //$sql = "INSERT INTO slot_mgt (`item_id`,`slot_time_start`,`slot_time_end`,`Allotted_Item_Name`,`Price`,`vendor_id`) VALUES ('$item_id','$slot_time_start','$slot_time_end','$allotted_item_name','$price','$vendor_id')";
       // $sql2 = "INSERT INTO customer_login (`Email`,`Password`) VALUES ('$email','$password');";
        //$_SESSION['Uname']=$name;




        $sql = "UPDATE `slot_mgt` set allotted_item_name = '$changed_item_name' where item_id = '$row_fetch_id_for_edit_item'";
      


        if ($conn->query($sql)==true)
        {
          echo "Successfully added updated slot";
          // $row = mysqli_fetch_assoc($getID_result);
           echo $row_fetch_id_for_edit_item['item_id'];
           
         
        }

        else
        {
        echo "ERROR UPDATE ITEM NAME".mysqli_error($conn);
        }
     }


  
// if (isset($_GET['updateprice'])=='GET PRICE')
// {
//       //require("universalconnection.php");

//       $getPrice_query = "SELECT price FROM `slot_mgt` WHERE item_id = '{$row_fetch_id_for_edit_item}'";
//       $getPrice_result = mysqli_query($conn, $getPrice_query);
//       $row_fetch_price = mysqli_fetch_assoc($getPrice_result);
//       $row_fetch_price=$row_fetch_price['price']; 
//       echo $row_fetch_price;
//       echo $row_fetch_id_for_edit_item;
      
//         //$sql = "INSERT INTO slot_mgt (`item_id`,`slot_time_start`,`slot_time_end`,`Allotted_Item_Name`,`Price`,`vendor_id`) VALUES ('$item_id','$slot_time_start','$slot_time_end','$allotted_item_name','$price','$vendor_id')";
//        // $sql2 = "INSERT INTO customer_login (`Email`,`Password`) VALUES ('$email','$password');";
//         //$_SESSION['Uname']=$name;

//         if ($conn->query($getPrice_query)===true)
//         {
//           echo "Successfully added updated slot";
//           //$row = mysqli_fetch_assoc($getPrice_result);
//           echo $row_fetch_price['price'];
//         }

//         else
//         {
//           echo $row_fetch_price['price'];
//         echo "ERROR PRICE--".mysqli_error($conn);
//         }
// }
    
$conn->close();

// }
?>