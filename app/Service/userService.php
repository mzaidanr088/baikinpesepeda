<?php 
require __DIR__ . '\..\core\config\connect.php';

class UserService extends Connect{
	protected $sql;
	protected $result;

	public function SQLLogin($username, $password){
		$this->sql = "SELECT * FROM `users` WHERE username = '".$username."' AND password = '".md5($password)."'";
		return $this->getResult();
	}
	public function SQLValidateUser($username){
		$this->sql = "SELECT * FROM `users` WHERE username = '".$username."'";
		return $this->getResult();
	}
	public function SQLRegister($username, $name, $password, $email){
		$this->sql = "INSERT INTO `users` (`username`, `name`, `password`, `email`)"."VALUES('".$username."','".$name."','".md5($password)."','".$email."')";
		return $this->getResult();
	}
	
	public function getResult(){
		$this->result = $this->dbConn()->query($this->sql);
		return $this;
	}
	public function FetchArray(){
		$row = $this->result->fetch_array();
		return $row;
	}
}
?>