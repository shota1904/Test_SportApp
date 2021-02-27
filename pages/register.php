<html lang="de">
<?php
include("datenbank.php");
if(isset($_POST["submit"])){
	$name = $_POST["Uname"];
	$pwd1 = $_POST["pwd1"];
	$pwd2 = $_POST["pwd2"];
	
	//$result = fetch_user_details($name);
	$connection = new mysqli("127.0.0.1", "root", "WhateverPassword", "sportapp");  //Verbindung zum SQL Server
	$result = mysqli_query($connection, "SELECT username, password FROM `login` WHERE username = '$name'");
	$user = mysqli_fetch_assoc($result);
	if (!$user){
		//Username ist frei
		if($_POST["pwd1"] == $_POST["pwd2"]){
			//Passwörter stimmen überein
			$result = insert_user_details($name, $pwd1, $pwd2);
			header ("location:../login.php");
		} else {
			echo "Die Passwörter stimmen nicht überein";
		}
	} else {
		echo "Email ist bereits vergeben";
	}
}
?>
<head>
	<meta charset="UTF-8">
	<title>Trainingstyp Auswahl</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<!-- KSH-logo als Banner -->
	<div id="banner">
		<a>
			<img class="logo" src="../pictures/ksh_logo.png" alt="ksh_logo">
		</a>
		<h1 id="title">KSH Sport-App</h1>
	</div>
	<main>
	<div class="userinput">
		<form id="register" method="post" action="register.php">
			<ul>
				<li><input type="text" name="Uname" id="Uname" placeholder="Username" pattern="\w{1,20}.\w{1,20}@\w{0,20}.{0,1}ksh.ch"></li>
				<li><input type="Password" name="pwd1" id="pwd1" placeholder="Passwort" pattern=".{4,20}"></li>
				<li><input type="Password" name="pwd2" id="pw2" placeholder="Passwort wiederholen"></li>
				<li><input type="submit" name="submit" class="log_button" value="Registieren"></li>
			</ul>
		</form>
	</div>
	</main>
	<footer>
		<p>Autoren: Damian Bühler, Patrick Höscheler, Shota Takahira</p>
	</footer>
</body>
</html>
