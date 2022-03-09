<?php

//session_start();
// if(isset($_GET['signup_button_name']))
// {
$server = "localhost";
$username = "root";
$password = "root";
$db_db = 'eaterometer';

$con = mysqli_connect($server,$username,$password,$db_db);

if (!$con) {
    die("Connection to this database failed dut to".mysqli_connect_error());
}

 $slot_time = $_GET['slot_time'];
$allotted_item_name = "Item";
$price = "1200";


        $sql = "INSERT INTO slot_mgt (`slot_time_start`,`Allotted_Item_Name`,`Price`) VALUES ('$slot_time','$allotted_item_name','$price')";
       // $sql2 = "INSERT INTO customer_login (`Email`,`Password`) VALUES ('$email','$password');";
        //$_SESSION['Uname']=$name;

        if ($con->query($sql)===true)
        {
        echo "Successfully added updated slot";
        }

        else
        {
        echo "ERROR".mysqli_error($con);
        }
   // }
     // }
    
$con->close();

// }
?>