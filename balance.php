

<?php
	session_start();

    if(!isset($_SESSION['accountno']))
    {
        header('location: cust_login.php');
    }

	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	ini_set('display_errors', 1);

    $flag =1;


	$conn = new mysqli("localhost", "root", "koti", "banking");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

    $result = "select * from account " ;
     $row1 = $conn->query($result);

    while($row = $row1->fetch_assoc()){

        if($row['accountno'] ==$_SESSION['accountno'] ){
             $flag=$row['balance'];
             $account=$row['accountno'];
             $type=$row['account_type'];

           break;

        }
    }







?>
