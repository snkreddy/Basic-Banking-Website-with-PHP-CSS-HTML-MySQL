<?php
	session_start();

    if(!isset($_SESSION['accountno']))
    {
        header('location: cust_login.php');
    }

	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	ini_set('display_errors', 1);
   
    $flagv =1;
	

	$connv = new mysqli("localhost", "root", "koti", "banking");
	if ($connv->connect_error) {
		die("Connection failed: " . $connv->connect_error);
	} 
 
    $resultv = "select * from transactions " ;
     $row1v = $connv->query($resultv);
    
    while($rowv = $row1v->fetch_assoc()){
        
        if($rowv['person'] ==$_SESSION['accountno'] ){
            
            $benifi=$rowv['acc1'];
           $flagv=$rowv['amm1'];
           break;
            
        }
    }
    
    





?>


