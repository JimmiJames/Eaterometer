<?php
if(isset($_GET['login_button_name']))
{
$server = "localhost";
$username = "root";
$password = "root";

$con = mysqli_connect($server,$username,$password);

if (!$con) {
    die("Connection to this database failed due to ".mysqli_connect_error());
}

$email = $_GET['Email'];
$password = $_GET['Password'];

$sql = "INSERT INTO `eaterometer`.`customer_login` (`Email`,`Password`) VALUES ('$email','$password');";
echo $sql;
if ($con->query($sql)==true) {
   echo "Successfully inserted";
}

else
{
    echo "Error:";
}

$con->close();
}

?>
