<?php
session_start();
 class Logout{
	public function __construct(){
	// tidak ada aksi
  }
 public function logout(){
 session_destroy();
 unset($_SESSION["user_id"]);
echo "Logout Sucess";
   }
 }

 $logout = new Logout();
 $logout->logout();
 ?>
