<?php
interface registration{
	public function check();
	public function registeredusername();
}

class verify Implements registration{
	protected $inputName;
	protected $inputusername;
	protected $inputEmail;
	protected $inputpassword;

	private $registeredusername = 'masfuumr17';

	public function __construct($inputName, $inputusername, $inputEmail, $inputpassword){
		$this->inputName = $inputName;
		$this->inputusername = $inputusername;
		$this->inputEmail = $inputEmail;
		$this->inputpassword = $inputpassword;
	}
	public function get_inputName(){
		return $this->inputName;
	}
	public function get_inputusername(){
		return $this->inputusername;
	}
	public function get_inputEmail(){
		return $this->inputEmail;
	}
	public function get_inputpassword(){
		return $this->inputpassword;
	}
	public function registeredusername(){
		if($this->inputusername === $this->registeredusername ){
			return true;
		}else{
			return false;
		}
	}
	public function check(){
		if($this->registeredusername()){
			echo'username telah digunakan';
		}else{
			echo' Registrasi Success';
		}
	}
}
$date = new verify ('umroh', 'umroh11', 'umroh@gmail.com', '1234');
$date->check();
?>