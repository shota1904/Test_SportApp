<html lang="de">
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
	<div id="register_userinput">
		<form id="register" method="post" action="register.php">
			<ul>
				<li><input type="text" name="Uname" id="Uname" placeholder="Username"></li>
				<li><input type="Password" name="pw" id="pw" placeholder="Passwort"></li>
				<li><input type="Password" name="pw2" id="pw2" placeholder="Passwort wiederholen"></li>
				<li><input type="submit" name="submit">Erstellen</li>
			</ul>
		</form>
	</div>
</body>
<?php
if(isset($_POST["submit"])){
try{
	$connection = new mysqli("127.0.0.1", "root", "WhateverPassword", "sportapp");
} catch (PDOException $e){
    echo "SQL Error: ".$e->getMessage();
}
	
  	$stmt = $connection->prepare("SELECT * FROM login WHERE username = :user"); //Username überprüfen
  	$stmt->bindParam(":user", $_POST["username"]);
	$stmt->execute();
  	$count = $stmt->rowCount();
  	if($count == 0){
  	//Username ist frei
		if($_POST["pw"] == $_POST["pw2"]){
			//User anlegen
			$stmt = $mysql->prepare("INSERT INTO login (username, passwort) VALUES (:user, :pw)");
			$stmt->bindParam(":user", $_POST["username"]);
			$hash = password_hash($_POST["pw"], PASSWORD_BCRYPT);
			$stmt->bindParam(":pw", $hash);
			$stmt->bindParam(":id", 123);
			$stmt->execute();
			echo "Dein Account wurde angelegt";
	 	} else {
			echo "Die Passwörter stimmen nicht überein";
		}
	} else {
		echo "Email ist bereits vergeben";
	}
}
?>
</html>
