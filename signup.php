<?php

session_start();
if(isset($_GET['signup_button_name']))
{
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if (!$con) {
    die("Connection to this database failed dut to".mysqli_connect_error());
}

$name = $_GET['Name'];
$email = $_GET['Email'];
$password = $_GET['Password'];
$phone = $_GET['Phone'];
$role = $_GET['1'];

if(empty($name))
{
    echo "name is empty";
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

$sql = "INSERT INTO `eaterometer`.`customer_login` (`Email`,`Password`) VALUES ('$email','$password');";
$sql2 = "INSERT INTO `eaterometer`.`customer_table` (`Name`) VALUES ('$name');";
//$_SESSION['Uname']=$name;

if ($con->query($sql)==true&&$con->query($sql2)==true){//) {
   echo "Successfully added user $name";
}

else
{
    echo "Error:".mysqli_connect_error();
}

$con->close();
}
}
?>