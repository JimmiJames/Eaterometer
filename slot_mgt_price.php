<?php
session_start();
?>

<?php
 require("universalconnection.php");
 //$slot_time_start = $_GET['slot_time_start'];
 //$slot_time_end = $_GET['slot_time_end'];
 $allotted_item_name = $_GET['items']; //item name from main update page
 //$changed_item_name = $_GET['changed_item_name']; 
 $price = "1200";

 // ITEM NAME UPDATE SECTION

 $getID_query = "SELECT item_id FROM `slot_mgt` WHERE allotted_item_name = '{$allotted_item_name}'";

 //echo "$allotted_item_name";

 $getID_result = mysqli_query($conn, $getID_query);
 $vendor_id=22;
 $row_fetch_id_for_edit_item = mysqli_fetch_assoc($getID_result);
 $row_fetch_id_for_edit_item = $row_fetch_id_for_edit_item['item_id'];


 
//  PRICE UPDATE SECTION

// $getPrice_query = "SELECT price FROM `slot_mgt` WHERE item_id = '{$row_fetch_id_for_edit_item}'";
// $getPrice_result = mysqli_query($conn, $getPrice_query);
// $row_fetch_price = mysqli_fetch_assoc($getPrice_result);
// $row_fetch_price=$row_fetch_price['price']; 
// echo $row_fetch_price;
// echo $row_fetch_id_for_edit_item;


//session_start();


    //  if(isset($_GET['changed_item_name_btn']))
    //  {
          
    //      //$sql = "UPDATE `slot_mgt` set allotted_item_name = '{$changed_item_name}' where allotted_item_name = '{$allotted_item_name}'"; 
    //     //$sql = "INSERT INTO slot_mgt (`item_id`,`slot_time_start`,`slot_time_end`,`Allotted_Item_Name`,`Price`,`vendor_id`) VALUES ('$item_id','$slot_time_start','$slot_time_end','$allotted_item_name','$price','$vendor_id')";
    //    // $sql2 = "INSERT INTO customer_login (`Email`,`Password`) VALUES ('$email','$password');";
    //     //$_SESSION['Uname']=$name;




    //     $sql = "UPDATE `slot_mgt` set allotted_item_name = '$changed_item_name' where item_id = '$row_fetch_id_for_edit_item'";
      


    //     if ($conn->query($sql)==true)
    //     {
    //       echo "Successfully added updated slot";
    //       // $row = mysqli_fetch_assoc($getID_result);
    //        echo $row_fetch_id_for_edit_item['item_id'];
           
         
    //     }

    //     else
    //     {
    //     echo "ERROR UPDATE ITEM NAME".mysqli_error($conn);
    //     }
    //  }
if (isset($_GET['update_new_price']))
{



  $sql_price = "SELECT price FROM `slot_mgt` WHERE item_id = '{$row_fetch_id_for_edit_item}'";
     
      $result = $conn->query($sql_price);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
         // echo "price: " . $row["price"]. "<br>";
          $price_of_selected_item = $row["price"];
          $_SESSION["price_value"]=$price_of_selected_item;
          $_SESSION["item_selected"] =$allotted_item_name;
          echo "$price_of_selected_item";
        }
      } else {
        echo "0 results";
      }
  
    //$sql = "UPDATE `slot_mgt` set allotted_item_name = '$changed_item_name', set price = '$price_of_selected_item' where item_id = '$row_fetch_id_for_edit_item'";
    //$sql = "UPDATE `slot_mgt` (allotted_item_name, price) VALUES ('$changed_item_name', '$price_of_selected_item')";
    //$sql = "UPDATE `slot_mgt` SET allotted_item_name='$changed_item_name',price='$price_of_selected_item' WHERE item_id='$row_fetch_id_for_edit_item'";
    
    $sql = 
    "UPDATE `slot_mgt` SET price=$price_of_selected_item WHERE item_id=$row_fetch_id_for_edit_item";

    //echo $row_fetch_id_for_edit_item['item_id'];
           
    if ($conn->query($sql)==true&&$conn->query($sql_price)==true)
        {
          echo "Successfully added updated slot";
          // $row = mysqli_fetch_assoc($getID_result);
           echo $row_fetch_id_for_edit_item;
           echo "$price_of_selected_item";
         
        }

        else
        {
        echo "ERROR UPDATE ITEM NAME".mysqli_error($conn);
        }

}

  
if (isset($_GET['updateprice']))
{
      //require("universalconnection.php");

      $sql = "SELECT price FROM `slot_mgt` WHERE item_id = '{$row_fetch_id_for_edit_item}'";
     
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
         // echo "price: " . $row["price"]. "<br>";
          $price_of_selected_item = $row["price"];
          $_SESSION["price_value"]=$price_of_selected_item;
          //echo "$price_of_selected_item";
          require("vendor_dashboard_price.php");
        }
          // output data of each row
          while($row = $result->fetch_assoc()) {
            // echo "price: " . $row["price"]. "<br>";
            $price_of_selected_item = $row["price"];
            echo "$price_of_selected_item";
          }
      } else {
        echo "0 results";
      }


        //$sql = "INSERT INTO slot_mgt (`item_id`,`slot_time_start`,`slot_time_end`,`Allotted_Item_Name`,`Price`,`vendor_id`) VALUES ('$item_id','$slot_time_start','$slot_time_end','$allotted_item_name','$price','$vendor_id')";
        // $sql2 = "INSERT INTO customer_login (`Email`,`Password`) VALUES ('$email','$password');";
        //$_SESSION['Uname']=$name;

        // if ($conn->query($getPrice_query)===true)
        // {
        //   echo "Successfully added updated slot";
        //   //$row = mysqli_fetch_assoc($getPrice_result);
        //   echo $row_fetch_price['price'];
        // }

        // else
        // {
        //   echo $row_fetch_price['price'];
        // echo "ERROR PRICE--".mysqli_error($conn);
        // }
}
    
$conn->close();

// }
?>