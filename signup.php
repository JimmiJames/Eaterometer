<?php

//session_start();
if(isset($_GET['signup_button_name']))
{
$server = "localhost";
$username = "root";
$password = "";
$db_db = 'eaterometer';

$con = mysqli_connect($server,$username,$password,$db_db);

if (!$con) {
    die("Connection to this database failed dut to".mysqli_connect_error());
}

$fname = $_GET['fName'];
$lname = $_GET['lName'];
$email = $_GET['Email'];
$password = $_GET['Password'];
$phone = $_GET['Phone'];
$role = $_GET['1'];


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
        //$_SESSION['Uname']=$name;

        if ($con->query($sql)===true&&$con->query($sql2)===true)
        {
        echo "Successfully added user $fname";
        }

        else
        {
        echo "ERROR".mysqli_error($con);
        }
    }
    else
    {

    }
$con->close();
}

}
?>