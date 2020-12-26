<?php 
class login {
	// property
	private $readyusername = "bsepeda1";
	private $readypassword = "12345";

	protected $username;
	protected $password;

	// methods
	function __construct($username, $password){
		$this->username = $username;
		$this->password = $password;
	}
	function get_username() {
		return $this->username;
	}
	function get_password() {
		return $this->password;
	}
	function process() {
		if ($this->username === $this->readyusername && $this->password === $this->readypassword) {
			echo "Success ";

		}else {
			echo "Failed";
		}
	}
}

$id = new login ("bsepeda1", "12345");
echo $id->get_username();
echo "<br>";
echo $id->get_password();
echo "<br>";
$id->process();
?>
