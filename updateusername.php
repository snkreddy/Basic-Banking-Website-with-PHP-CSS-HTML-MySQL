<?php
session_start();

    if(!isset($_SESSION['accountno']))
    {
        header('location: cust_login.php');
    }

	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	ini_set('display_errors', 1);

   
    $password = $_POST['password1'];
    $npassword = $_POST['password2'];
    
    echo $password;
    echo $npassword;
    $flag =$_SESSION['accountno'];
    if($password==$npassword)
    {
		    		// Create connection
			$conn = new mysqli("localhost", "root", "koti", "banking");
			// Check connection
			if ($conn->connect_error)
			 {
				die("Connection failed: " . $conn->connect_error);
			 } 
			
			
					 $result = "update customer set username = '$password' where  accountno ='$flag'";
			    if ($conn->query($result) === TRUE)
			     {
			    	
			   		header('Location: cust_main.php');
			   	 }
				 else {
			    			echo "Error in updating username, try again!" . $result . "<br>" . $conn->error;
						}
	}

	
	if($password!=$npassword)
	{
		echo "conform and username dont match";
	}
	
   
?>


