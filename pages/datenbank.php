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
?>