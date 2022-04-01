<?php
// sesssion_start();
 require("universalconnection.php");
 $slot_time_start = $_GET['slot_time_start'];
 $slot_time_end = $_GET['slot_time_end'];
 $allotted_item_name = $_GET['items']; //item name from main update page
 $_SESSION['allotted_item_name'] = $allotted_item_name;
 $changed_item_name_item_edit = $_GET['changed_item_name']; 
 $changed_item_name = $_GET['items'];
 $price = $_GET['price_edit']; //warning don't remove at all
 $slot=$_GET['slot_time'];
 echo "$slot";


// ITEM NAME UPDATE SECTION

 $getID_query = "SELECT item_id FROM `slot_mgt` WHERE allotted_item_name = '{$allotted_item_name}'";

 

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


     if(isset($_GET['changed_item_name_btn']) == 'Confirm')
     {
          
         //$sql = "UPDATE `slot_mgt` set allotted_item_name = '{$changed_item_name}' where allotted_item_name = '{$allotted_item_name}'"; 
        //$sql = "INSERT INTO slot_mgt (`item_id`,`slot_time_start`,`slot_time_end`,`Allotted_Item_Name`,`Price`,`vendor_id`) VALUES ('$item_id','$slot_time_start','$slot_time_end','$allotted_item_name','$price','$vendor_id')";
       // $sql2 = "INSERT INTO customer_login (`Email`,`Password`) VALUES ('$email','$password');";
        //$_SESSION['Uname']=$name;

          if( $changed_item_name=='')
          {
               $changed_item_name=$_GET['items'];;
          }


        $sql = "UPDATE `slot_mgt` set allotted_item_name = '$changed_item_name_item_edit' where item_id = '$row_fetch_id_for_edit_item'";
      


        if ($conn->query($sql)==true)
        {
          echo "Successfully added updated slot";
          // $row = mysqli_fetch_assoc($getID_result);
         //   echo $row_fetch_id_for_edit_item['item_id'];
           
         
        }

        else
        {
        echo "ERROR UPDATE ITEM NAME".mysqli_error($conn);
        }
     }

     if(isset($_GET['update'])=='Update')
     {

          $sql = "UPDATE `slot_mgt` set price = '$price', slot_time_start = '$slot_time_start', slot_time_end = '$slot_time_end' where item_id = '$row_fetch_id_for_edit_item'";
      
          //echo $changed_item_name;
          echo "$price";

          if ($conn->query($sql)==true)
          {
               echo "Successfully added updated slot";
               // $row = mysqli_fetch_assoc($getID_result);
          //   echo $row_fetch_id_for_edit_item['item_id'];
          }

          else
          {
          echo "ERROR UPDATE ITEM NAME".mysqli_error($conn);
          }
     

//       //require("universalconnection.php");

//       $getPrice_query = "SELECT price FROM `slot_mgt` WHERE item_id = '{$row_fetch_id_for_edit_item}'";
//       $getPrice_result = mysqli_query($conn, $getPrice_query);
//       $row_fetch_price = mysqli_fetch_assoc($getPrice_result);
//       $row_fetch_price=$row_fetch_price['price']; 
//       echo $row_fetch_price;
//       echo $row_fetch_id_for_edit_item;
      
//         //$sql = "INSERT INTO slot_mgt (`item_id`,`slot_time_start`,`slot_time_end`,`Allotted_Item_Name`,`Price`,`vendor_id`) VALUES ('$item_id','$slot_time_start','$slot_time_end','$allotted_item_name','$price','$vendor_id')";
//        // $sql2 = "INSERT INTO customer_login (`Email`,`Password`) VALUES ('$email','$password');";
//         //$_SESSION['Uname']=$name;

//         if ($conn->query($getPrice_query)===true)
//         {
//           echo "Successfully added updated slot";
//           //$row = mysqli_fetch_assoc($getPrice_result);
//           echo $row_fetch_price['price'];
//         }

//         else
//         {
//           echo $row_fetch_price['price'];
//         echo "ERROR PRICE--".mysqli_error($conn);
//         }
     }
    
$conn->close();

// }
?>