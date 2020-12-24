<?php
class changename{
	private $correctusername = "umroh17";
	private $name;
	protected $username;

	public function __construct($username){
		$this->username = $username;
	}
	public function validation(){
		if($this->username === $this->correctusername){
			return true;
		}else{
			return false;
		}
	}
	public function change(){
		if($this->validation()){
			echo "Nama berhasil diubah";
		}else{
			echo"Nama sudah digunakan";
		}
	}
}

$changename = new changename("umroh17");
$changename->change();
?>