<?php
function fetch_user_details($username){
	global $connection;
	verify_database_connection(); // Methode zur Verbindung zum SQL Server
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
	verify_database_connection(); // Methode zur Verbindung zum SQL Server
	return $connection->query("SELECT * FROM `uebungen` WHERE trainingsart = '$typ' AND bereiche LIKE '%$area%'")->fetch_all(MYSQLI_ASSOC); //Gibt Daten von der Übungen-Tabelle zurück, welche zum mitgegebenen Typ und Area (Bereich) entsprechen
}
function insert_user_details($username, $password){
	global $connection;
	verify_database_connection(); // Methode zur Verbindung zum SQL Server
	return $connection->query("INSERT INTO login (username, password) VALUES ('$username', '$password') "); //Fügt den Usernamen und das Passwort in die Login-Tabelle
}
function insert_history_record($intensitaet, $uebung_id){
	global $connection;
	verify_database_connection(); // Methode zur Verbindung zum SQL Server
	return $connection->query("INSERT INTO history (intensitaet, uebungen_fk) VALUES ('$intensitaet', '$uebung_id') "); //Fügt die Intensitaet und die Übung in die Tabelle History ein
}
function look_up_history(){
	global $connection;
	verify_database_connection(); // Methode zur Verbindung zum SQL Server
	return $connection->query("SELECT * FROM `history` ORDER BY datum DESC")->fetch_all(MYSQLI_ASSOC); //Gibt Alle Daten der History-Tabelle zurück
}
function look_up_uebung($id){
	global $connection;
	verify_database_connection(); // Methode zur Verbindung zum SQL Server
	return $connection->query("SELECT * FROM `uebungen` WHERE id = '$id'")->fetch_assoc(); //Gibt Daten der History-Tabelle zurück, wecleh zur mitgegebenen id entspricht
}
?>