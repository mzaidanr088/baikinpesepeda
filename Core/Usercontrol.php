<?php

require __DIR__ . "/../Core/ControllerDB";

class user extends ControllerDB {

	public function insert($user)
	{
		$stmt = $this->connection->prepare("INSERT INTO `user` (`email`, 'username', `password`) VALUES (?, ?, ?)");

        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = $user->getPassword();

        $stmt->bind_param("ssii", $email, $username, $password );

        $process = $stmt->execute();

        if ($process) {
            $stmt->close();
            return true;
        }

        $stmt->close();
        return false;

	}
}

require _DIR_ . "/../Models/UserModel.php";
	$user = new User();
    $user->setEmail("baikinpesepeda@gmail.com");
    $user->setUsername("baikpes111");
    $user->setPassword("baik123");

    $process = user::insert($user);

    if ($process) {
        print_r("Process successful.");
    } else {
        print_r("Process failure.\n");
    }
?>