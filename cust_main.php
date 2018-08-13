

<?php
    
    session_start();
    if(!isset($_SESSION['accountno']))
    {
        header('location: cust_login.php');
    }   
?>

<?php
include('balance.php');
?>
<?php
include('transmain.php');
?>

<?php
include('loan.php');
?>
<?php
include('myprofile.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>online banking</title>
	<link rel="icon" type="image/png" href="rupee.png">
	    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" >
              <!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<script src="js/jquery.min.js"></script>
         <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<style>
		.ms
		{
			font-family: Montserrat,sans-serif;
		}
		body
		{
			font-family: Lato,sans-serif;
			line-height: 1.375;
		}
	</style>





</head>
<body>
    <div class="container">
    	<!-- page headers -->
    	<div class="page-header">
    		<h1 class="ms"><a href="" onclick = " alert('please logout to go to homepage');" target="_parent">
            <img src="rupee.png" sizes="30px,30px"></a>Bank</h1>
    	</div>
    	<!-- main page -->
    	<strong>
    		<ul class=" nav nav-tabs" align="right">
    	    <li class="active"><a data-toggle="tab" href="#Myaccount">My account</a></li>
    		<li><a data-toggle="tab" href="#Transferfunds">Transfer funds</a></li>
    		<li><a data-toggle="tab" href="#LoanDetails">Loan Details</a></li>
    		<li><a data-toggle="tab" href="#MyProfile">My Profile</a></li>
            <form action="logout.php"><input type="submit" align="center" value="Logout"  class="btn btn-danger"></form>
    	</ul>
    	</strong>

    	<div class="tab-content">
        <div class="col-md-2"></div>
    		<div id="Myaccount" class="tab-pane fade in active col-md-8" align="center">
    			<h3 class="ms page-header" style="border-bottom-color: black">My account</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Account no.</td>
                                <td>Balance</td>
                                <td>ACCOUNT-TYPE</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo($account);?></td>
                                <td><?php echo($flag);?></td>
                                <td><?php echo($type);?></td>
                            </tr>
                        </tbody>                        
                    </table>
    		</div>

    		<div id="LoanDetails" class="tab-pane fade col-md-8" align="center">
    			<h3 class="ms page-header" style="border-bottom-color: black">Loan Details</h3>
               <table class="table">
                               
                        <tbody>
                             
                            <tr>
                                <td>LOAN-TYPE</td><td><?php echo($loantype);?></td></tr> 
                               <tr><td>LOAN-AMOUNT</td><td><?php echo($loanammount);?></td></tr> 
                        </tbody>                        
                    </table>

    		</div>

    		<div id="MyProfile" class="tab-pane fade col-md-8" align="center">
    			<h2 class="ms page-header" style="border-bottom-color: black">My Profile</h2>


                        <table class="table">
                                <h4 align="center">     USER DETAILS</h4>
                        <tbody>
                             
                               <tr><td>name</td><td><?php echo($name);?></td></tr><tr>
                                <td>email</td><td><?php echo($email);?></td></tr> 
                               <tr><td>phone no:</td><td><?php echo($phone);?></td></tr> <tr><td>adhar.no</td><td><?php echo($id);?></td></tr> 
                        </tbody>                        
                    </table>
                <form>
                      <a href="password.html">changepassword</a>
                      <br>
                      <a href="username.html">changeusername</a>
                </form>
    		</div>

    		<div id="Transferfunds" class="tab-pane fade col-md-8" align="center">
    			<h3 class="ms page-header" style="border-bottom-color: black">Transfer funds</h3>
                <form>
                    <input type="text" name="beneficiary"  placeholder="Beneficiary account" required class="form-control">
                    <input type="text" name="amount" placeholder="Amount" required class="form-control">
                    <input type="submit" value="submit" class="btn  btn-primary btn-block" formaction="transfer.php" formmethod="post">
                </form>

                <table class="table">
                                <h4 align="center">     last 5 transction</h4>
                       

                                    <thead>
                            <tr>
                                <td>Account no.</td>
                                <td>amount</td>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo( $_SESSION['acc1']);?></td>
                                <td><?php echo( $_SESSION['amm1']);?></td>
                            </tr>
                            <tr>
                                <td><?php echo( $_SESSION['acc2']);?></td>
                                <td><?php echo( $_SESSION['amm2']);?></td>
                            </tr>
                            <tr>
                                <td><?php echo( $_SESSION['acc3']);?></td>
                                <td><?php echo( $_SESSION['amm3']);?></td>
                            </tr>
                            <tr>
                                <td><?php echo( $_SESSION['acc4']);?></td>
                                <td><?php echo( $_SESSION['amm4']);?></td>
                            </tr>
                            <tr>
                                <td><?php echo( $_SESSION['acc5']);?></td>
                                <td><?php echo( $_SESSION['amm5']);?></td>
                            </tr>
                        </tbody>       


                    </table>


    		</div>
            <div class="col-md-2"></div>
    	</div>
    </div>
</body>
</html>