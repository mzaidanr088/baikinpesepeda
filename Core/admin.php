<?php

require __DIR__ . "/../Core/ControlllerDB.php";

class admin extends ControlllerDB
{
    public function insert($admin)
    {
        $stmt = $this->connection->prepare("INSERT INTO `admin` (`username`, `password`, `email`) VALUES (?, ?, ?, ?, ?, ?)");
        
        $username = $admin->getUsername();
        $password = $admin->getPassword();
        $email = $admin->getEmail();
        
        $stmt->bind_param(1234567, $admin->username, $admin->password, $admin->email);

        $process = $stmt->execute();

        // Jika proses sukses.
        if ($process) {
            $stmt->close();
            return true;
        }

        // Jika proses gagal.
        $this->errorMessage = $stmt->error;
        $stmt->close();
        return false;
    }
}

require __DIR__ . "/../Models/UserModel.php";
    $admin = new Admin();
    $admin->setUsername("miles morales");
    $admin->setPassword("spiderman");
    $admin->setEmail("miles_morales@marvel.com");

    $process = admin::insert($admin);

    if ($process) {
        print_r("Process Successfull");
    } else {
        print_r("Process Failed");
    }
