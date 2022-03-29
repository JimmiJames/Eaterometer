<?php
require("universalconnection.php");
$slot_time_start = $_GET['slot_time_start'];
 $slot_time_end = $_GET['slot_time_end'];
 $allotted_item_name = $_GET['edit_items_selected_items']; //item name from main update page
 $changed_item_name = $_GET['changed_item_name']; 
 $price = "1200";


 $getID_query = "SELECT item_id FROM `slot_mgt` WHERE allotted_item_name = '{$allotted_item_name}'";

 echo $allotted_item_name;

 $getID_result = mysqli_query($conn, $getID_query);
 //$item_id = $_GET['item_id'];
 $vendor_id=22;

 $row = mysqli_fetch_assoc($getID_result);
 $row = $row['item_id'];
 
//session_start();


     if(isset($_GET['changed_item_name_btn']))
     {
          
         //$sql = "UPDATE `slot_mgt` set allotted_item_name = '{$changed_item_name}' where allotted_item_name = '{$allotted_item_name}'"; 
        //$sql = "INSERT INTO slot_mgt (`item_id`,`slot_time_start`,`slot_time_end`,`Allotted_Item_Name`,`Price`,`vendor_id`) VALUES ('$item_id','$slot_time_start','$slot_time_end','$allotted_item_name','$price','$vendor_id')";
       // $sql2 = "INSERT INTO customer_login (`Email`,`Password`) VALUES ('$email','$password');";
        //$_SESSION['Uname']=$name;




        $sql = "UPDATE `slot_mgt` set allotted_item_name = '$changed_item_name' where item_id = '$row'";
     


        if ($conn->query($sql)===true)
        {
          echo "Successfully added updated slot";
          // $row = mysqli_fetch_assoc($getID_result);
           echo $row['item_id'];
           
         
        }

        else
        {
        echo "ERROR".mysqli_error($conn);
        }
     }

     
  
/*if (isset($_GET['edit_items']))
{
     equire("universalconnection.php");

     $slot_time_start = $_GET['slot_time_start'];
     $slot_time_end = $_GET['slot_time_end'];
     $allotted_item_name = $_GET['items'];
     $price = "1200";
     $getID_query = "SELECT item_id FROM `slot_mgt` WHERE allotted_item_name = '{$allotted_item_name}'";
     $getID_result = mysqli_query($conn, $getID_query);
     $item_id = $_GET['item_id'];
     $vendor_id=22;

        $sql = "INSERT INTO slot_mgt (`item_id`,`slot_time_start`,`slot_time_end`,`Allotted_Item_Name`,`Price`,`vendor_id`) VALUES ('$item_id','$slot_time_start','$slot_time_end','$allotted_item_name','$price','$vendor_id')";
       // $sql2 = "INSERT INTO customer_login (`Email`,`Password`) VALUES ('$email','$password');";
        //$_SESSION['Uname']=$name;

        if ($conn->query($sql)===true&&$conn->query($getID_query)==true)
        {
          echo "Successfully added updated slot";
          $row = mysqli_fetch_assoc($getID_result);
          echo $row['item_id'];
        }

        else
        {
        echo "ERROR".mysqli_error($conn);
        }
}*/
    
$conn->close();

// }
?>