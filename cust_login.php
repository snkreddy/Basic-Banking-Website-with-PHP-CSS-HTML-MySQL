
<!DOCTYPE html>
<html>
<head>
	<title>Online banking</title>
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
    
    <script src="js/jquery.min.js"></script>
         <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
    $(function () {
      $(document).bind('contextmenu', function (e) {
        e.preventDefault();
        alert('Right Click is not allowed');
      });

      /*$('.Container').bind('contextmenu',function(e){
      e.preventDefault();
      alert('Right Click is not allowed on div');
      });*/
    });
  </script>
</head>
<body>
    <div class="container">

    <!-- page header -->

    	<div class="page-header">
    		<h1 class="ms"><a href="main.php" target="_parent"><img src="rupee.png"></a>Bank</h1>
    	</div> 

    <!--login-->
       
        <div class="col-md-4"></div>
        <div class="col-md-4">
         	<form action="process.php" method="POST">
         	  <h2 class="ms page-header" align="center" style="border-bottom-color: black">Customer Login</h2>
         		<input type="text" name="cust_id" placeholder="Username" required class="form-control input-lg"><br>
         		<input type="password" name="password" placeholder="Password" required class="form-control input-lg"><br>
            <input type="submit" value="Login"  class="btn btn-lg btn-primary btn-block" align="center"><br>
            <a href="fp.php">Forgot Password?</a>
         	</form>
        </div>	
        <div class="col-md-4"></div>
    </div>
    <div class="col-md-12">
      <h3 class="ms">Our banking provides the following features</h3><hr style="color: black">
       <ul>
                    <li>Registration for online banking</li>
                    <li>Adding Beneficiary account</li>
                    <li>Funds Transfer</li>
                    <li>Last Login record</li>
                    <li>Mini Statement</li>
                    <li>ATM and Cheque Book</li>
                    <li>Staff approval Feature</li>
                    <li>Account Statement by date</li>            
        </ul>
        <hr>
        <footer style="align-content: center">
          copyrights @ 2016
        </footer>
        <br><br>
    </div>
</body>
</html>
