<?php
function fetch_user_details($username){
	global $connection;
	verify_database_connection();
	return $connection->query("SELECT username, password FROM `login` WHERE username = '$username'")->fetch_assoc();
}
function verify_database_connection(){
	global $connection;
	if ($connection == null){
		$connection = new mysqli("127.0.0.1", "root", "WhateverPassword", "sportapp");  //Verbindung zum SQL Server
	}
}
function look_up_training($area, $typ){
	global $connection;
	verify_database_connection();
	return $connection->query("SELECT * FROM `uebungen` WHERE trainingsart = '$typ' AND bereiche LIKE '%$area%'")->fetch_all(MYSQLI_ASSOC);
}
function insert_user_details($username, $password){
	global $connection;
	verify_database_connection();
	return $connection->query("INSERT INTO login (username, password) VALUES ('$username', '$password') ");
}
function insert_history_record($intensitaet, $uebung_id){
	global $connection;
	verify_database_connection();
	return $connection->query("INSERT INTO history (intensitaet, uebungen_fk) VALUES ('$intensitaet', '$uebung_id') ");
}
function look_up_history(){
	global $connection;
	verify_database_connection();
	return $connection->query("SELECT * FROM `history` ORDER BY datum DESC")->fetch_all(MYSQLI_ASSOC);
}
function look_up_uebung($id){
	global $connection;
	verify_database_connection();
	return $connection->query("SELECT * FROM `uebungen` WHERE id = '$id'")->fetch_assoc();
}
?>