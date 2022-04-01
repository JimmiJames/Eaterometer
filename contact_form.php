<?php
require("universalconnection.php");
if (isset($_POST['contact_btn']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO `contact_form` (name,email,phone,message) VALUES ('$name','$email','$phone','$msg')";

    if ($conn->query($sql)==true)
        {
          echo "Successfully added";
          // $row = mysqli_fetch_assoc($getID_result);
         //   echo $row_fetch_id_for_edit_item['item_id'];
           
         
        }

        else
        {
        echo "ERROR".mysqli_error($conn);
        }
        $conn->close();
}



?>