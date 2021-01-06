<?php

require _DIR_ . "/MySQL.php";

class ControllerDB {
	protected $connection;

	public function _construct() {
		$mysql = new MySQL();
		$this->connection = $mysql->connection;
	}
}