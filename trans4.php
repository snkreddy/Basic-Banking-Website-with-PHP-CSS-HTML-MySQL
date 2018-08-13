


<?php
    session_start();

    if(!isset($_SESSION['accountno']))
    {
        header('location: cust_login.php');
    }

    error_reporting( ~E_DEPRECATED & ~E_NOTICE );
    ini_set('display_errors', 1);
   
    $flagt =$_SESSION['accountno'];
     $flag1t= $_SESSION['acc3'];
      $flag2t=$_SESSION['amm3'];
     if($flag1t==NULL)
    {
        $flag1t="no trans!";
        $flag2t=0;
    }
    // Create connection
    $connt = new mysqli("localhost", "root", "koti", "banking");
    // Check connection
    if ($connt->connect_error) {
        die("Connection failed: " . $connt->connect_error);
    } 

    $resultt1 = "update transactions  set acc4='$flag1t' where person='$flagt'";
    $resultt2 = "update transactions set amm4=$flag2t where  person='$flagt'";

       
   
   
    if ($connt->query($resultt1) === TRUE&&$connt->query($resultt2) === TRUE) {
   header('Location: trans5.php');
    } else {
    echo "Error in updating password, try again!" . $resultt . "<br>" . $conn->error;
    }
?>


