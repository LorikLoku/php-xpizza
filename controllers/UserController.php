<?php
	
include_once "./includes/Database.php";

class UserController {

	protected $connection;
	protected $db;

	function __construct() {
		$this->db = new Database;
		$this->connection = $this->db->conn;
	}

	
}

?>