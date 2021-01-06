<<<<<<< HEAD:ControllerDB.php
<?php

require _DIR_ . "/MySQL.php";

class ControllerDB {
	protected $connection;

	public function_construct();{
		$mysql = new MySQL();
		$this->connection = $mysql->connection;
	}
=======
<?php

require _DIR_ . "/MySQL.php";

class ControllerDB {
	protected $connection;

	public function _construct() {
		$mysql = new MySQL();
		$this->connection = $mysql->connection;
	}
}
>>>>>>> main:__unused/ControllerDB.php
