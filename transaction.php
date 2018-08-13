


<?php
    session_start();

    if(!isset($_SESSION['accountno']))
    {
        header('location: cust_login.php');
    }

    error_reporting( ~E_DEPRECATED & ~E_NOTICE );
    ini_set('display_errors', 1);
   
    $flagt =$_SESSION['accountno'];
     $flag1t= $_SESSION['p1'];
      $flag2t=$_SESSION['p2'];
    
    // Create connection
    $connt = new mysqli("localhost", "root", "koti", "banking");
    // Check connection
    if ($connt->connect_error) {
        die("Connection failed: " . $connt->connect_error);
    } 

    $resultt1 = "update transactions  set acc1='$flag1t' where person='$flagt'";
    $resultt2 = "update transactions set amm1=$flag2t where  person='$flagt'";

       
   
   
    if ($connt->query($resultt1) === TRUE&&$connt->query($resultt2) === TRUE) {
   header('Location: trans2.php');
    } else {
    echo "Error in updating password, try again!" . $resultt . "<br>" . $conn->error;
    }
?>


