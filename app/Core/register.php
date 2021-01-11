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
</head>
<body class="bg-primary">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-4">	
			<?php 
				if(isset($_POST['submit'])){
					echo "<div class='alert alert-danger text-center' role='alert'>
					'".$register->message."'
					</div>";
				}
			?>
				<h1 class="text-center text-light">Register Here!</h1>
				<form method="post" action="register.php">
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
				</form>
				<div class="text-center">
					<a href="login.php" class="text-light">Anda sudah menpunyai akun?</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>