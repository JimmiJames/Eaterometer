<?php

//session_start();
if(isset($_GET['signup_button_name']))
{
require("universalconnection.php");

 $slot_time_start = $_GET['slot_time_start'];
 $slot_time_end = $_GET['slot_time_end'];
 $allotted_item_name = $_GET['items'];
 $price = "1200";
 $item_id = 11;
 $vendor_id=11;

        $sql = "INSERT INTO slot_mgt (`item_id`,`slot_time_start`,`slot_time_end`,`Allotted_Item_Name`,`Price`,`vendor_id`) VALUES ('$item_id','$slot_time_start','$slot_time_end','$allotted_item_name','$price','$vendor_id')";
       // $sql2 = "INSERT INTO customer_login (`Email`,`Password`) VALUES ('$email','$password');";
        //$_SESSION['Uname']=$name;

        if ($conn->query($sql)===true)
        {
        echo "Successfully added updated slot";
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