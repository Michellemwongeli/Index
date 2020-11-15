<?php
/*  
  $name="Michelle";

  echo "Hello ".$name;

  echo("<br>My name is $name");
*/
?>

<!DOCTYPE html>
<html>
<head>
<title>SIGN UP</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<form id="signup-form">
		<h2>Registration Form</h2>
		<div>
			<label>Name:</label>
			<input required type="text" name="full-name"><br>
		</div>
		<div>
			<label>E-mail:</label>
			<input required type="email" name="email">
		</div>
		<div>
			<label>Phone Number:</label>
			<input required type="text" name="phone-number">
		</div>
		<div>
			<label>Password:</label>
			<input minlength="6" id="password" type="password" name="password">
		</div>
		<div>
			<label>Confirm Password:</label>
			<input minlength="6" id="confirm"  type="password" name="confirm-password">
		</div>
		<div>
			<input type="Submit" value="Register">
		</div>

	</form>
	<a href ="login.php">Login</a>

<script src='js/script.js'  type="text/javascript"></script>

</body>
</html>