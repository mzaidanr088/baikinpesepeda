<?php
require 'config\registerController.php';
session_start();
if(isset($_POST['submit'])){
	$register = new RegisterController;
	$register->getData($_POST['username'],$_POST['name'],$_POST['password'],$_POST['email']);
} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>baikinpesepeda</title>
	<link rel="stylesheet" href="../views/css/style-login.css">
</head>
<body class="bg-primary">
	<div class="container">	
		
		<p><b>Daftar</b></p>

		<form method="post" action="register.php">
			<?php 
				if(isset($_POST['submit'])){
					echo "<div class='alert' style='color: red; margin-bottom: 5px;' role='alert'>
					'<b>".$register->message."</b>'
					</div>";
				}
			?>
		
			<div class="form-group">
				<input type="email" name="email" placeholder="Email" class="form-control">
			</div>

			<div class="form-group">
				<input type="text" name="username" placeholder="Username" class="form-control">
			</div>

			<div class="form-group">
				<input type="text" name="name" placeholder="Name" class="form-control">
			</div>

			<div class="form-group">
				<input type="password" name="password" placeholder="Password" class="form-control">
			</div>

			<input type="submit" name="submit" value="Register" class="btn btn-outline-light btn-block">
			
			<div class="reg">
				<b>Sudah punya akun? <a href="login.php">Login</a></b>
			</div>
		</form>

	</div>
</body>
</html>