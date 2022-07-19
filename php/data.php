<?php
	require_once('connect.php');
	
	//Home data
	$sql = "SELECT * FROM home";
	$result = $db-> query($sql);
	if($result -> num_rows > 0){
		while($row = $result-> fetch_assoc()){
			$headerH = "".$row['Header'];
			$text1H = "".$row['text1'];
			$text2H = "".$row['text2'];
		}
	}
	//Rreth Neshe data
	$sql = "SELECT * FROM rrethNesh";
	$result = $db-> query($sql);
	if($result -> num_rows > 0){
		while($row = $result-> fetch_assoc()){
			$headerR = "".$row['Header'];
			$text1R = "".$row['text1'];
			$text2R = "".$row['text2'];
		}
	}
	//Komentet
	$sql = "SELECT * FROM komentet WHERE id=1";
	$result = $db-> query($sql);
	if($result -> num_rows > 0){
		while($row = $result-> fetch_assoc()){
			$Klienti1 = "".$row['Klienti'];
			$Komenti1 = "".$row['Komenti'];
		}
	}
	$sql = "SELECT * FROM komentet WHERE id=2";
	$result = $db-> query($sql);
	if($result -> num_rows > 0){
		while($row = $result-> fetch_assoc()){
			$Klienti2 = "".$row['Klienti'];
			$Komenti2 = "".$row['Komenti'];
		}
	}
	$sql = "SELECT * FROM komentet WHERE id=3";
	$result = $db-> query($sql);
	if($result -> num_rows > 0){
		while($row = $result-> fetch_assoc()){
			$Klienti3 = "".$row['Klienti'];
			$Komenti3 = "".$row['Komenti'];
		}
	}
?>