
<?php

session_start();
?>

<?php


if(isset($_GET['signup_button_name']))
{
require("universalconnection.php");

$fname = $_GET['fName'];
$lname = $_GET['lName'];
$email = $_GET['Email'];
$password = $_GET['Password'];
$phone = $_GET['Phone'];
$role = $_GET['1'];
$restaurant_name = $_GET['Rest_name'];


if(empty($fname))
{
    echo "first name is empty";
}
else if(empty($lname))
{
    echo "last name is empty";
}
else if(empty($phone))
{
    echo "phone is empty";
}
else if(empty($email))
{
    echo "email is empty";
}
else if(empty($password))
{
    echo "password is empty";
}
else if(empty($role))
{
    echo "Plaese select a role";
}
else
{
    if($role == "customer")
    {
        $sql = "INSERT INTO customer_details (`First_Name`,`Last_Name`,`Phone`) VALUES ('$fname','$lname','$phone')";
        $sql2 = "INSERT INTO customer_login (`Email`,`Password`) VALUES ('$email','$password');";
        $_SESSION["Uname"]=$fname;

        if ($conn->query($sql)===true&&$conn->query($sql2)===true)
        {
        echo "Successfully added user $fname";
        }

        else
        {
        echo "ERROR".mysqli_error($conn);
        }
    }
    else
    {

        

        $sql2 = "INSERT INTO vendor_details (`First_Name`,`Last_Name`,`Phone`) VALUES ('$fname','$lname','$phone')";
        $_SESSION["Vuname"]=$fname;
        // $sql1 = "SELECT vendor_id FROM vendor_details";
        // $result = $con->query($sql);

        // if ($result->num_rows > 0) {
        // // output data of each row
        // while($row = $result->fetch_assoc()) 
        // {
        
        //         $restaurant_id = $row["vendor_id"];
        //         //echo "$restaurant_id";
        //     }
        // } 

         $sql3 = "INSERT INTO vendor_login (`Email`,`Password`) VALUES ('$email','$password');";
        //$_SESSION['Uname']=$name;
        
         $sql4 = "INSERT INTO restaurant_details (`Restaurant_Name`) VALUES ('$restaurant_name');";

        
        
       // $sql6 = "INSERT INTO slot_mgt  (`vendor_id`) VALUES ()";

        if ($conn->query($sql2)===true&&$conn->query($sql3)===true&&$conn->query($sql4)&&$conn->query($sql5)&&$conn->query($sql6))
        {
        echo "Successfully added user $fname";
        }

        else
        {
        echo "ERROR: ".mysqli_error($conn);
        }
    }
$conn->close();
}

}
?>