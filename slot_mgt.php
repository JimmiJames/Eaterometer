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

// $fname = $_GET['fName'];
// $lname = $_GET['lName'];
// $email = $_GET['Email'];
// $password = $_GET['Password'];
// $phone = $_GET['Phone'];
// $role = $_GET['1'];
// $restaurant_name = $_GET['Rest_name'];

$slot_time = "2022:02:03";
$allotted_item_name = "Item";
$price = "1200";



// if(empty($slot_time))
// {
//     echo "slot time is empty";
// }
// else if(empty($allotted_item_name))
// {
//     echo "allotted item name is empty";
// }
// else if(empty($price))
// {
//     echo "price is empty";
// }
// else
// {
    // if($role == "")
    // {
        $sql = "INSERT INTO slot_mgt (`Slot_time`,`Allotted_Item_Name`,`Price`) VALUES ('$slot_time','$allotted_item_name','$price')";
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