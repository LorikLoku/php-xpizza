<?php
	
include_once "./includes/Database.php";

class MessageController {

	protected $connection;
	protected $db;

	function __construct() {
		$this->db = new Database;
		$this->connection = $this->db->conn;
	}

    function sendNewMessageByUserId($u_id, $subject, $content) {
        $sql = "INSERT INTO message (u_id, subject, content) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($this->connection);
        mysqli_stmt_prepare($stmt, $sql);
        mysqli_stmt_bind_param($stmt, "iss", $u_id, $subject, $content);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($this->connection);
    }
	
}

?>