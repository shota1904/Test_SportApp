<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>Trainingstyp Auswahl</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="banner">
		<a>
			<img class="logo" src="pictures/ksh_logo.png" alt="ksh_logo">
		</a>
		<h1 id="title">KSH Sport-App</h1>
	</div>
	<div id="login_userinput">
		<form id="login" method="post" action="login.php">
			<ul>
				<li><input type="text" name="Uname" id="Uname" placeholder="Username"></li>
				<!-- pattern="\w{1,20}.\w{1,20}@\w{0,20}.{0,1}ksh.ch" -->
				<li><input type="Password" name="Pass" id="Pass" pattern=".{4,20}" placeholder="Password"></li>
				<li><input type="submit" name="log" id="log" value="Login" onClick="pasuser(this.form)"></li>
			</ul>
		</form>
		<a href="pages/register.php">Ich besitze noch keinen Account. Hier registrieren</a>
	</div>
</body>
<?php
session_start();
//Schaut welche Methode benutzt wird. In diesem Fall POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["Uname"];
	$pwd = $_POST["Pass"];
	//Überprüft ob das Feld Username oder das Feld Passwort leer sind
	if (!empty($name) || !empty($pwd)) {	
		$connection = new mysqli("127.0.0.1", "root", "WhateverPassword", "sportapp"); //Verbindung zum SQL Server
		$query = mysqli_query($connection, "SELECT username, password FROM `login` WHERE username = '$name'");
		$result = mysqli_fetch_assoc($query);
		//Wenn Username und Password richtig sind gelangt man auf die richtige Seite
		if ($name == $result["username"] && $pwd == $result["password"]) {
			$_SESSION['email'] = $emailid;
			header('Location: pages/home.php');
			die();
		} else {
			echo "falsches Passwort";
		}
	}
}
?>
	
<script>
var input = document.getElementById("Pass");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("log").click();
  }
});
</script>
<script>
var input = document.getElementById("Uname");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("log").click();
  }
});


</script>
</html>
