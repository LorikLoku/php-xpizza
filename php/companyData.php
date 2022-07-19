<?php
require_once('connect.php');
	$numri;
	$adresa;
	$email;
	$sql = "SELECT * FROM companydata";
	$result = $db-> query($sql);
	if($result -> num_rows > 0){
		while($row = $result-> fetch_assoc()){
		$numri = "".$row['numriTel'];
		$adresa = "".$row['adresa'];
		$email = "".$row['email'];
		}
	}
?>