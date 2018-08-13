<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title> DS Online banking</title>
	<link rel="icon" type="image/png" href="rupee.png">

	   <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" >
              <!-- Optional theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" >

	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<style>
		.ms
		{
			font-family: Montserrat,sans-serif;
		}
	</style>
</head>

<!-- body -->

<body>
    <div class="container">

    <!-- page header -->

    	<div class="page-header">
    		<h1 class="ms"><a href="main.php" target="_parent"><img src="rupee.png"></a>DS Bank</h1>
    	</div>

    <!-- login boxes -->
        <!-- staff -->
        <div class="col-sm-6 text-center">
            <fieldset class="ms" style="background-color: #ffd633;">
            	<h3 style="color: white">Log in as our Employee</h3>
            	<img src="staff.png" class="img-circle"><br><br>
            	<form action="staff_login.php">
            		<input type="submit" value="Login" class="btn btn-lg" ><br>
            	</form>
            	<p></p>
            </fieldset>
        </div>

        <!-- customers -->

        <div class="col-sm-6 text-center">
             <fieldset class="ms" style="background-color:#66d9ff">
            	<h3 style="color: white">Log in as our Customer</h3>
            	<img src="customers.png" class="img-circle"><br><br>
            	<form action="cust_login.php">
            		<input type="submit" name="customer" value="Login" class="btn btn-lg"><br>
            	</form>
            	<p></p>
            </fieldset>
        </div>
    </div>
    <!-- footer -->

    <footer class="container text-center">
    	Copyrights Reserved
    </footer>
    
</body>
</html>
