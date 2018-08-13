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
            
           $_SESSION['acc1']=$rowv['acc1'];
           $_SESSION['acc2']=$rowv['acc2'];
           $_SESSION['acc3']=$rowv['acc3'];
           $_SESSION['acc4']=$rowv['acc4'];
           $_SESSION['acc5']=$rowv['acc5'];

         $_SESSION['amm1'] =$rowv['amm1'];
         $_SESSION['amm2'] =$rowv['amm2'];
         $_SESSION['amm3'] =$rowv['amm3'];
         $_SESSION['amm4'] =$rowv['amm4'];
         $_SESSION['amm5'] =$rowv['amm5'];
           break;
            
        }

    }

    


?>


