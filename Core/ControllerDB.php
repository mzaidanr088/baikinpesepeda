<?php

require __DIR__ . "/MySQL.php";

class ControllerDB {
    protected $connection;

    public function __construct() {
        $mysql = new MySQL();
        $this->connection = $mysql->connection;
    }
}
