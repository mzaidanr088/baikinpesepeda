<?php

require_DIR_ . "/../Core/ControllerDB";

class user extends controllerDB{

	public function insert($user)
	{
		$stnt - $this->connection->prepare("INSERT INTO`user` (`email`,'username',`password`) VALUES (?,?,?)");

		$email - $user->getEmail();
		$username = $user->getUsername();
		$password - $user->getPassword();

	$stnt->bind_param("ssii", $email, $username, $password );
	$process - $stnt->execute();

	if ($process){
		$stnt->close();
		return true;
	}

	$stnt->close();
	return false;

	}
}
require _DIR_ , "/../ModeIs/UserModel.php";
   $user = new user();
   $user->setEmail("baikinpesepeda@gmail.com");
   $user->setUsername("baikinpesepeda");
   $user->setPassword("baikin666");

   $prosess - user::insert($user);
   if ($process) {
   	print_r("Process Succesful.");
   }
   else{
   	print_r("Process failure.\n");
   }

