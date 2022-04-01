<?php
  require("universalconnection.php");
  session_start();
?>

<?php 

// include "db_conn.php";

if (isset($_POST['Email']) && isset($_POST['Password']) && isset($_POST['2'])) 
{   
    function validate($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

        $email = validate($_POST['Email']);
        $password = validate($_POST['Password']);
        $role = validate($_POST['2']);

        if (empty($email)) 
        {
          echo "User Name is required";
          exit();
        }
    
        else if(empty($password))
        {
          echo"error=Password is required";
          exit();
        }

        else
        {
          $sql = "SELECT * FROM customer_login WHERE Email='$email' AND Password ='$password'";
          $result = mysqli_query($conn, $sql);

          $sql2 = "SELECT * FROM vendor_login WHERE Email='$email' AND Password ='$password'";
          $result2 = mysqli_query($conn, $sql2);
          // $_SESSION['Email']=$email;

          if (mysqli_num_rows($result) === 1) 
          {
            $row = mysqli_fetch_assoc($result);

            if ($row['Email'] === $email && $row['Password'] === $password && $role === "vendor" ) 
            {
                header ('location:vendor_dashboard.php');
                
                exit();
            }
            
            
            else
            {
                echo"error=Incorect User name or password in vendor";
                exit();
            }

        }
       // echo"error=Incorect User name or password in customer 1";
        if (mysqli_num_rows($result2) === 1) 
          {
            $row = mysqli_fetch_assoc($result2);

            if ($row['Email'] === $email && $row['Password'] === $password && $role === "customer" ) 
            {
                echo "customer";
                header ('location:vendor_dashboard.php');
                exit();
            }
            
            
            else
            {
                echo"error=Incorect User name or password in customer 2";
                exit();
            }

        }
    }
}


else
{
    exit();
}

?>

