<?php
	
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('location: cust_login.php');
	}	



?>



<doctype html>
<head>
	<title style="colour:red">customer_acc</title>
	<meta  name="autor" content="koti">

</head>
<body>
<?php  echo($_SESSION['username']);

?>
<form>
	<fieldset style="color:red">
		<legend style="color:green; text-align:center">
			<i>click_to edit profile </i>
		</legend>
		
		<p style="color:#553333">
			a user can change his profile status 
		</p>
			<input type="submit" value="edit" formaction="cust_edit.html" >
		
	</fieldset>
	<br><br>
	<fieldset>
		<legend style="color:#779933; text-align:center>transfer amount</legend>
		
		<p style="color:#553333">
			transfer money click
		</p>
			<input type="submit" value="click to transfer" formaction="transfer.html" >
		

	</fieldset>


	</fieldset>
	<br><br>
	<fieldset>
		<legend style="color:#779933; text-align:center>transfer amount</legend>
		
		<p style="color:#553333">
			 click to view balance
		</p>
			<input type="submit" value="balance" formaction="balance.html" >
		

	</fieldset>




	</form>
</body>
</html>
