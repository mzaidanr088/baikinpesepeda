<?php
require __DIR__ . "/ConfigurationDataBase.php";

class Mysql{
    use ConfigurationDatabase;

    private $connection = null;

    public $status = fales;
    public $erorMessage = null;

    public function __construct(){
        $this->createConnection();
    }

    private function createConnection(){
        $this->connection = new mysqli($this->HOSTNAME, $this->USERNAME, $this->PASSWORD, $this->DBNAME, $this->PORT);
        $this->checkConnection();
    }
    public function checkConnection(){
        if($this->connection->connect_error){
            $this->status = false;
            $this->erorMessage = $this->connection->connect_error;
        }else {
            $this->status = true;
        }
    }
    public function close(){
        if ($this->connection){
            $this->connection->close();
        }
    }
}
