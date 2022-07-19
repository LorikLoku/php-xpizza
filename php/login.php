<?php
	session_start();
	
	require_once "connect.php";

	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM user WHERE email = '$email'";
	$result = mysqli_query($db, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck == 1) {
		$row = mysqli_fetch_assoc($result);
		if($row['admin']== 1 && $row['menager']!= 1){
			if(password_verify($password, $row['password'])) {
				$_SESSION['id'] = $row['id'];
				$u_id = $row['id'];
				mysqli_close($db);
				header("Location: ../admin.php?signin=successful");
			} else {
				mysqli_close($db);
				header("Location: ../Login.php?signin=wrongpassword");
			}
		}else if($row['menager']== 1 && $row['admin']!= 1){
			if(password_verify($password, $row['password'])) {
					$_SESSION['id'] = $row['id'];
					$u_id = $row['id'];
					mysqli_close($db);
					header("Location: ../adminiKryesor.php?signin=successfulSA");
				} else {
					mysqli_close($db);
					header("Location: ../Login.php?signin=wrongpasswordSA");
				}
		}else if($row['menager']!= 1 && $row['admin']!= 1){
			if(password_verify($password, $row['password'])) {
					$_SESSION['id'] = $row['id'];
					$u_id = $row['id'];
					mysqli_close($db);
					header("Location: ../Home.php?signin=successfulSA");
				} else {
					mysqli_close($db);
					header("Location: ../Login.php?signin=wrongpasswordSA");
				}
		}
	} else {
		mysqli_close($db);
		header("Location: ../Login.php?signin=failed");
	}
	exit();
?>