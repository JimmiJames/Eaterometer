<?php

//session_start();
if(isset($_GET['update']))
{
require("universalconnection.php");

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
}
     // }
    
$conn->close();

// }
?>