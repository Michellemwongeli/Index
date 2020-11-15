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
<title>LOGIN</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<form id="login-form">
		<h2>Login Form</h2>
		
		<div>
			<label>E-mail:</label>
			<input required type="email" name="email">
		</div>
		<br>
		
		<div>
			<label>Password:</label>
			<input minlength="6" id="password" type="password" name="password">
		</div>
		<br>
		
		<div>
			<input type="Submit" value="Login">
		</div>

	</form>
<a href ="index.php">Register</a>
<script src='js/script.js'  type="text/javascript"></script>

</body>
</html>