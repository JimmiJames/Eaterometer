<?php

include("../connection/connect.php");

$id = $_GET['d_id'];
$status = $_GET['status'];

$query = "UPDATE dishes SET status=$status WHERE d_id=$id";

mysqli_query($db,$query);

header("location:all_menu.php");

?>