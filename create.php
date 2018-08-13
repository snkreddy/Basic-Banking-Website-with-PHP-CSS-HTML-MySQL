<?php

session_start();
	
	ini_set('display_errors', 1);



$cust_name = $_POST['name'];

$cust_aadhar   = $_POST['aadhar'];
$cust_dob      = $_POST['bday'];
$cust_address  = $_POST['address'];

$cust_city     = $_POST['town'];
$cust_pincode  = $_POST['pincode'];
$cust_phone    = $_POST['phone'];
$cust_email    = $_POST['email'];
$username      = $_POST['username'];
$password      = $_POST['password'];
$sex=$_POST['gender'];
 $cust_dob = date("Y-m-d", strtotime($cust_dob ));
$conn = new mysqli("localhost", "root", "koti", "banking");
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	echo $cust_name;

$cust_id = uniqid();
 $_SESSION['accountno']=$cust_id;
 
$insert = "INSERT INTO customer(username,password,name,birth,sex,address,email,id,accountno,phone_number,town,pincode) VALUES('$username','$password','$cust_name','$cust_dob','$sex','$cust_address','$cust_email','$cust_aadhar','$cust_id','$cust_phone','$cust_city','$cust_pincode')";

 if ($conn->query($insert) === TRUE) {
 	echo "ok!";

   header('Location: staff_main.php') ;
    } else {
    echo "Error in updating password, try again!" . $insert . "<br>" . $conn->error;
    }

    
?>
