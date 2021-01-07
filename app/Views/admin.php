<?php

require __DIR__ . "/ControllerDB.php";

class adminService extends ControllerDB {

    public function validateUsername ($username){
        $stmt = $this->connection->prepare("SELECT * FROM 'admin' WHERE 'username' VALUES (?)");
        $stmt->bind_param("s",$username);
        $stmt->execute;
        return $stmt->result();
    
    }
    

    public function insert($admin)
    {
        $stmt = $this->connection->prepare("INSERT INTO `admin` (`username`, `password`, `email`) VALUES (?, ?, ?)");
        
        $username = $admin->getUsername();
        $password = $admin->getPassword();
        $email = $admin->getEmail();
        
        $stmt->bind_param("sss",$username, $password, $email);

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

require __DIR__ . "/../Models/adminModel.php";
    $admin = new adminModel();
    $admin->setUsername("miles morales");
    $admin->setPassword("spiderman");
    $admin->setEmail("miles_morales@marvel.com");

    $service = new adminService;

    $process = $service->insert($admin);

    if ($process) {
        echo "Process Successfull";
    } else {
        echo "Process Failed";
    }
