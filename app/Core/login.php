<?php 
require 'config\loginController.php';
session_start();
if(isset($_POST['submit'])){
	$login = new LoginController;
	if(!empty($_POST['remember'])){
		$remember = $_POST['remember'];
	}else{
		$remember = NULL;
	}
	$login->getData($_POST['username'], $_POST['password'], $remember);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>baikinpesepeda</title>
</head>
<body class="bg-primary">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-4">	
			<?php 
				if(isset($_POST['submit'])){
					echo "<div class='alert alert-danger text-center' role='alert'>
					'".$login->message."'
					</div>";
				}
			?>
				<h1 class="text-center text-light">Login Here!</h1>
				<form method="post" action="login.php">
					<div class="form-group">
						<input type="text" name="username" placeholder="Username" class="form-control" value="<?php
							if(isset($_COOKIE['username'])){echo $_COOKIE['username']; } ?>">
					</div>

					<div class="form-group">
						<input type="password" name="password" placeholder="Password" class="form-control" value="<?php
							if(isset($_COOKIE['password'])){echo $_COOKIE['password']; } ?>">
					</div>

					<div class="form-check">
						<input type="checkbox" name="remember" class="form-check-input" id="remember1" <?php 
							if(isset($_COOKIE['email'])){ ?>checked <?php } ?>>
						<label class="form-check-label" for="remember1">Remember Me</label>
					</div>

					<input type="submit" name="submit" value="Login" class="btn btn-outline-light btn-block">
					<a href="register.php" class="btn btn-danger btn-block">Register</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>