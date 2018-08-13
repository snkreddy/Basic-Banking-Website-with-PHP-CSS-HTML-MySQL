<?php
	session_start();

    if(!isset($_SESSION['accountno']))
    {
        header('location: cust_login.php');
    }

	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	ini_set('display_errors', 1);
   
    $flagz =1;
	

	$connz = new mysqli("localhost", "root", "koti", "banking");
	if ($connz->connect_error) {
		die("Connection failed: " . $connz->connect_error);
	} 
 
    $resultz = "select * from customer " ;
     $row1z = $connz->query($resultz);
    
    while($rowz = $row1z->fetch_assoc()){
        
        if($rowz['accountno'] ==$_SESSION['accountno'] ){
             
              $email=$rowz['email']; 
              $name=$rowz['name'];
              $phone=$rowz['phone_number'];
              $id=$rowz['id'];
           break;
            
        }
    }
    
    





?>


