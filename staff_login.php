

<html>
<head>
	<title> Online banking</title>
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
    });
    </script>
</head>

<!--body-->

<body>
  <div class="container">

    <!-- page header -->

    	<div class="page-header">
    		<h1 class="ms"><a href="main.php" target="_parent"><img src="rupee.png"></a>Bank</h1>
    	</div> 

    <!--login-->
       
        <div class="col-md-4"></div>
        <div class="col-md-4">
         	<form action="process1.php" method="POST">
         	    <h2 class="ms page-header" style="border-bottom-color:black" align="center">Staff Login</h2>
         		<input type="text" name="username" placeholder="Username" required class="form-control input-lg"><br>
         		<input type="password" name="password" placeholder="Password" required class="form-control input-lg"><br>
            <input type="submit" value="Login" class="btn btn-lg btn-primary btn-block" align="center"><br>
         	</form>
        </div>	
        <div class="col-md-4"></div>
  </div>
</body>
</html>  

