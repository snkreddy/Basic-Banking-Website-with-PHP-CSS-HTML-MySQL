


<?php
	session_start();

    if(!isset($_SESSION['accountno']))
    {
        header('location: cust_login.php');
    }

	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	ini_set('display_errors', 1);
   
    $flag =$_SESSION['accountno'];
   	 $flag1= $_SESSION['p1'];
   	  $flag2=$_SESSION['p2'];
    
	// Create connection
	$conn = new mysqli("localhost", "root", "koti", "banking");
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

    $result = "update account set balance=balance-$flag2 where  accountno='$flag'";
    $result1 = "update account set balance=balance+$flag2 where  accountno='$flag1'";
   
    //echo $result1;
    if ($conn->query($result1) === TRUE&&$conn->query($result) === TRUE) {
    header('Location: transaction.php');
	} else {
    echo "Error in updating password, try again!" . $result . "<br>" . $conn->error;
	}
?>


