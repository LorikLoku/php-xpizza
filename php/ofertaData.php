<?php
require_once('connect.php');
	$sql = "SELECT * FROM ofertat";
	$result = $db-> query($sql);
	if($result -> num_rows > 0){
		while($row = $result-> fetch_assoc()){
			if($row[id] == 1){
				$emri = "".$row['emri'];
				$cmimi = "".$row['cmimi'];
				$pershkrimi = "".$row['pershkrimi'];
			}
			if($row[id] == 2){
				$emri1 = "".$row['emri'];
				$cmimi1 = "".$row['cmimi'];
				$pershkrimi1 = "".$row['pershkrimi'];
			}
		}
	}
?>