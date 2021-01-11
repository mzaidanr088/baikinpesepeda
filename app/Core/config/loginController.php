<?php 

require 'query.php';

class LoginController extends Query{
	protected $username;
	protected $password;
	public $remember;
    public $message;
    public $login;

	public function getData($username, $password, $remember){
		$this->username = $username;
		$this->password = $password;
        $this->remember = $remember;

		return $this->validateData();
	}

	public function validateData(){
		if(empty($this->username)|| empty($this->password)){
			$this->message = "Username dan Password belum diisi";
			return $this->message;
	 		header('location:login.php');
		}else{
			return $this->Login();
		}
	}
	
	public function Login(){
		$row = $this->SQLLogin($this->username, $this->password)->FetchArray();
		if($row['username'] == $this->username || $row['password'] == md5($this->password)){
            $_SESSION['login'] = true;
            
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];

			$time = time() + (86400 *30);
			if(!empty($this->remember)){
				setcookie('username', $this->username, $time);
				setcookie('password', $this->password, $time);
			}else{
				setcookie('username','');
				setcookie('password','');
            }
            
            header('location:game.php');
			
		}else{
			$this->message = "Username atau Password Anda salah";
			return $this->message;
			header('location:login.php');
		}
	}
}
?>