<?php
function verify_logged_in(){
	session_start();

	if(!$_SESSION['username']){
		header ("location:../login.php");
	}
}

?>