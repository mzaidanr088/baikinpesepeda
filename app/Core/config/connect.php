<?php 

class Connect{

	private $hostname;
	private $username;
	private $password;
	private $dbname;
	private $port;

	public function dbConn(){
		$this->hostname = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->dbname = "baikinpesepeda";
		$this->port = 3306;

		$connection = new mysqli($this->hostname, $this->username, $this->password, $this->dbname, $this->port);
		return $connection;

		if(mysqli_connect_errno()) {
			echo "Error Connect to Database";
			exit;
		}
	}

}
?>