<?php

if(isset($_POST['signup-submit'])) {

	include_once "connect.php";
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$gender = 'n';
	if(isset($_POST['gender'])) {
		if($_POST['gender'] == 'male') {
			$gender = 'm';
		} else {
			$gender = 'f';
		}
	}
	$password = $_POST['password'];
	$hashed_pwd = password_hash($password, PASSWORD_DEFAULT);

	if(empty($firstname) || empty($lastname) || empty($email) || empty($gender) || empty($password)) {
		header("Location: ../Singup.php?registered=fail");
		exit();
	}

	$sql = "INSERT INTO user (firstname, lastname, email, password, gender) VALUES (?, ?, ?, ?, ?)";
	$stmt = mysqli_stmt_init($db);
	mysqli_stmt_prepare($stmt, $sql);
	
	mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $email, $hashed_pwd, $gender);
	mysqli_stmt_execute($stmt);

	mysqli_stmt_close($stmt);
	mysqli_close($db);
	header("Location: ../Login.php?registered=success");
	exit();
} else {
	header("Location: ../Singup.php?registered=fail");
	exit();
}


