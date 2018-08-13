<?php
   session_start();

    if(!isset($_SESSION['accountno']))
    {
        header('location: cust_login.php');
    }

	error_reporting( ~E_DEPRECATED & ~E_NOTICE );
	ini_set('display_errors', 1);
   
    $flag =1;
    $beneficiary=$_POST['beneficiary'];
    $amm = (int)$_POST['amount'];

    $_SESSION['p1']=$beneficiary;
     $_SESSION['p2']=$amm;
	// Create connection
	$conn = new mysqli("localhost", "root", "koti", "banking");
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$result = "select * from account " ;

	 $row1 = $conn->query($result);
	 $row2 = $conn->query($result);
	 
    while($row = $row1->fetch_assoc())
    {

        
        if($row['accountno'] == $_SESSION['accountno']&& $row['balance']> $amm && $row['balance'] > 1000)
        {
        	$temp=$row['accountno'];

            while($rowz = $row2->fetch_assoc())
            {
            		if($rowz['accountno'] ==  $beneficiary && $beneficiary!=$_SESSION['accountno'])
            		{

            				$flag=0;
            				
            				header('Location: tmain.php');
            				
            			    break;
            		}
            }
            break;
        }
    }


    if($flag==1)
    {
    	 header('Location: cust_main.php');

    }
?> 
           
