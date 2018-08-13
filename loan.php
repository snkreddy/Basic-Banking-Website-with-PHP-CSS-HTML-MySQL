<?php
	session_start();

    if(!isset($_SESSION['accountno']))
    {
        header('location: cust_login.php');
    }

	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	ini_set('display_errors', 1);
   
    $flaga =1;
	

	$conna = new mysqli("localhost", "root", "koti", "banking");
	if ($conn->connect_error) {
		die("Connection failed: " . $conna->connect_error);
	} 
 
    $resulta = "select * from loan " ;
     $row1a = $conna->query($resulta);
    
    while($rowa = $row1a->fetch_assoc()){
        
        if($rowa['accountno'] ==$_SESSION['accountno'] ){
             
             $loanammount=$rowa['loan_ammount'];
             $loantype=$rowa['loan_type'];
           
           break;
            
        }
    }
    
    





?>


