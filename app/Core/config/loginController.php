<?php 

require __DIR__ . '\..\..\service\userService.php';

class LoginController extends UserService{
	protected $username;
	protected $password;
    public $message;
    public $login;

	public function getData($username, $password){
		$this->username = $username;
		$this->password = $password;

		return $this->validateData();
	}

	public function validateData(){
		if(empty($this->username)|| empty($this->password)){
			$this->message = "username dan password belum diisi";
			return $this->message;
	 		header('location:login.php');
		}else{
			return $this->Login();
		}
	}
	
	public function Login(){
		$row = $this->SQLLogin($this->username, $this->password)->FetchArray();
		if($row['username'] == $this->username || $row['password'] == md5($this->password)){
				
			if($row['role'] == 'admin')	 {
				$_SESSION['admin'] = true;
			} else {
				$_SESSION['admin'] = false;
			}
			
			$_SESSION['login'] = true;
            
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
			
            header('location:forum.php');
			
		}else{
			$this->message = "username atau password anda salah";
			return $this->message;
			header('location:login.php');
		}
	}
}
?>