<?php 
/**
 * 
 */
class changepassword {

	private $readyuserid = "021031";
	private $readycurrentpassword = "sepeda021";

	protected $userid;
	protected $currentpassword;
	protected $newpassword1;
	protected $newpassword2;
	
	function __construct($userid, $currentpassword, $newpassword1, $newpassword2){
		$this->userid = $userid;
		$this->currentpassword = $currentpassword;
		$this->newpassword1 = $newpassword1;
		$this->newpassword2 = $newpassword2;
	}

	// check user id
	function check_userid() {
		if ($this->userid == $this->readyuserid) {
			return true;
		} else {
				return false;
			}
	}

	// check password saat ini
	function check_currentpassword() {
		if ($this->currentpassword == $this->readycurrentpassword) {
			return true;
		} else {
				return false;
			}
	}
	// check new password
	function check_newpass() {
		if (strlen($this->newpassword1) >= 5){
			if ($this->newpassword1 == $this->newpassword2){
				return true;
			} else {
				return false;
			}
			$newpassword1 = md5($newpassword1);	
		}
		
	}

	// konfirmasi data
	function confirm() {
		if (!$this->check_userid()) {
			echo "Incorrect User ID";
		} else if (!$this->check_currentpassword()) {
			echo "Incorrect Password";
			} else if (!$this->check_newpass()){
				echo "Failed to confirm Password";
				} else {
					echo "Success Change Password";
				}
	}

}

$readyuserid = "021031";
$readycurrentpassword = "sepeda021";
$newpassword1 = "sepeda";
$newpassword2 = "sepeda";

$update = new changepassword ($readyuserid, $readycurrentpassword, $newpassword1, $newpassword2);
$update->confirm();
?>