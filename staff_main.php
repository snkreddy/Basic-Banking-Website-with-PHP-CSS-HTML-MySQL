

<!DOCTYPE html>
<html>
<head>
	<title>DS online banking</title>
	<link rel="icon" type="image/png" href="rupee.png">
	    <!-- Latest c<ompiled and minified CSS -->
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
		.ls
		{
			font-family: Lato,sans-serif;
			line-height: 1.375;
		}
	</style>
</head>
<body>
   <div class="container">
    	page headers
    	<div class="page-header">
    		<h1 class="ms"><a href="" onclick = " alert('please logout to go to homepage');" target="_parent">
            <img src="rupee.png" sizes="30px,30px"></a>DS Bank</h1>
    	</div>
    	main page 
    	<strong>
    		<ul class=" nav nav-tabs" align="right">
    	    <li class="active"><a data-toggle="tab" href="#Newaccount">New account</a></li>
    		<li><a data-toggle="tab" href="#Deleteaccount">Delete account</a></li>
    		<li><a data-toggle="tab" href="#Updateaccount">Update account</a></li>
            <form action="logout.php"><input type="submit" align="center" value="Logout"  class="btn btn-danger"></form>
    	</ul>
    	</strong> 

    	<div class="tab-content">
    	    <div class="col-md-4"></div>
    		<div id="Newaccount" class="tab-pane fade in active col-md-4" align="center">
    			<h3 class="ms page-header" style="border-bottom-color: black">New account</h3>
    			<form >
	                <input type="text" name="name"  placeholder="Customer Name" required class="form-control input-lg"><br>
	                <input type="text" name="aadhar" placeholder="Aadhar ID" required class="form-control input-lg">
                    <br>
	                <h5 align="center">DATE OF BIRTH </h5>
                    <input type="date" name="bday">
	                <input type="text" name="address" placeholder="Address" required class="form-control input-lg"><br>
	                <input type="text" name="town" placeholder="Town/city" required class="form-control input-lg"><br>
	                <input type="text" name="pincode" placeholder="Pincode" required class="form-control input-lg"><br>
	                <input type="text" name="phone" placeholder="Mobile Number" required class="form-control input-lg"><br>
	                <input type="text" name="email" placeholder="E-mail" required class="form-control input-lg"><br>
                    <h5 align="center"> SEX</h5>
                    <input type="radio" name="gender" value="male" checked> Male<br>
                    <input type="radio" name="gender" value="female"> Female<br>
                     <input type="radio" name="gender" value="other"> Other
                    <h5 class="ls"><b>For Online Banking Purpose</b></h5>
	                <hr>
	                <input type="text" name="username" placeholder="Username" required class="form-control input-lg">
                    <br>
	                <input type="text" name="password" placeholder="Password" required class="form-control input-lg">
                    <br>
                    <input type="submit" value="Submit" required class="form-control input-lg" formmethod="POST" formaction="create.php"><br>
                </form>
    		</div>
           

    		<div id="Deleteaccount" class="tab-pane fade col-md-4" align="center">
    			<h3 class="ms page-header" style="border-bottom-color: black">Delete account</h3>
                <form action="delete.php" method="POST">
                    <input type="text" name="cust_acc" placeholder="Account number" required class="form-control input-lg" ><br>
                    <input type="submit" value="Submit" required class="form-control input-lg">
                </form>
    		</div>

    		<div id="Updateaccount" class="tab-pane fade col-md-4" align="center">
    			<h3 class="ms page-header" style="border-bottom-color: black">Update account</h3>
    		</div>
    		<div class="col-md-4"></div>
    	</div></div>
    </div>

    <footer class="container text-center ms">
        
    </footer><br><br><br><br>
</body>
</html>
