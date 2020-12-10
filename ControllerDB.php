<?php

require _DIR_ . "/MySQL.php";

class ControllerDB {
	protected $connection;

	public function_construct();{
		$mysql = new MySQL();
		$this->connection = $mysql->connection;
	}
