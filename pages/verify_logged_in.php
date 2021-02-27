<?php
function verify_logged_in(){
	//es wird überprüft, ob der User bereits angemeldet ist
	session_start();

	//ist der User nicht angemeldet, so wird er zur Login-Seite zurückgeschickt
	if(!$_SESSION['username']){
		header ("location:../login.php");
	}
}

?>