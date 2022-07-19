<?php

class Database {
	public $conn;

	function __construct() {
		$servername = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "web_db";

		$this->conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

		if (!$this->conn) {
			die("Connection failed: ".mysqli_connect_error());
		}
	}
}

?>