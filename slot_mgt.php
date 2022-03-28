<?php

//session_start();
// if(isset($_GET['signup_button_name']))
// {
require("universalconnection.php");

 $slot_time = $_GET['slot_time'];
 $allotted_item_name = "Item";
 $price = "1200";


        $sql = "INSERT INTO slot_mgt (`slot_time_start`,`Allotted_Item_Name`,`Price`) VALUES ('$slot_time','$allotted_item_name','$price')";
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
   // }
     // }
    
$conn->close();

// }
?>