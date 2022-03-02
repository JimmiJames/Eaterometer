<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'eaterometer';
 
  $conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);

if (!$conn) {

    echo "Connection failed!";
}

?>

<?php 

// include "db_conn.php";

if (isset($_POST['Email']) && isset($_POST['Password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['Email']);

    $password = validate($_POST['Password']);

    if (empty($email)) {

        echo "User Name is required";

        exit();

    }else if(empty($password)){

        echo"error=Password is required";

        exit();

    }else{

        $sql = "SELECT * FROM customer_login WHERE Email='$email' AND Password ='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Email'] === $email && $row['Password'] === $password) {

                include ('');

                exit();

            }else{

                echo"error=Incorect User name or password";

                exit();

            }

        }else{

            echo"error=Incorect User name or password";

            exit();

        }

    }

}else{

    echo "error";

    exit();

}

?>

