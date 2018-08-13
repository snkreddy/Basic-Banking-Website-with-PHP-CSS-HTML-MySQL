<?php
	session_start();
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	ini_set('display_errors', 1);
    $username = $_POST['username'];
    $password = $_POST['password'];
	$flag = 1;

	$conn = new mysqli("localhost", "root", "koti", "banking");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

    $result = "select * from staff";
    $row1 = $conn->query($result);
    
    while($row = $row1->fetch_assoc()){
    	
    	if($row['username'] == $username && $row['password'] == $password){
        	$flag = 0;
          
			header('Location: staff_main.php');
			
		}
    }
    if($flag==1)
    {
    	
		header('Location: cust_login.php') ;   }
?>


