<?php 
require 'config\loginController.php';
session_start();
if(isset($_POST['submit'])){
	$login = new LoginController;
	$login->getData($_POST['username'], $_POST['password']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>baikinpesepeda</title>
	<link rel="stylesheet" href="../views/css/style-login.css">
</head>
<body class="bg-primary">
	<div class="container">
		
		<p><b>Login</b></p>

		<form class="form" method="post" action="login.php">

			<?php 
				if(isset($_POST['submit'])){
					echo "<div class='alert' style='color: red; margin-bottom: 5px;' role='alert'>
					'<b>".$login->message."</b>'
					</div>";
				}
			?>

			<div class="form-group">
				<input type="text" name="username" placeholder="Username" class="form-control">
			</div>

			<div class="form-group">
				<input type="password" name="password" placeholder="Password" class="form-control">
			</div>

			<input class="btn" type="submit" name="submit" value="Login"><br>

			<div class="reg">
				<b>Belum punya akun? <a href="register.php">Daftar</a></b>
			</div>
		</form>
	</div>
</body>
</html>