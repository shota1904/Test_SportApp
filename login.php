<html lang="de">
<?php 
include("pages/datenbank.php");
session_start();
//Schaut welche Methode benutzt wird. In diesem Fall POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["Uname"];
	$pwd = $_POST["Pass"];
	//Überprüft ob das Feld Username oder das Feld Passwort leer sind
	if (!empty($name) || !empty($pwd)) {	
		$result = fetch_user_details($name);
		//Wenn Username und Password richtig sind gelangt man auf die richtige Seite
		if ($name == $result["username"] && $pwd == $result["password"]) {
			$_SESSION['username'] = $name;
			header('Location: pages/home.php');
			die();
		} else {
			echo "falsche Eingabe";
		}
	}
}
?>
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
	<main>
	<div class="userinput">
		<form id="login" method="post" action="login.php">
			<ul>
				<li><input type="text" name="Uname" id="Uname" placeholder="Username" pattern="\w{1,20}.\w{1,20}@\w{0,20}.{0,1}ksh.ch"></li>
				<li><input type="Password" name="Pass" id="Pass" placeholder="Passwort" pattern=".{4,20}"></li>
				<li><input type="submit" name="submit" class="log_button" value="Login"></li>
			</ul>
		</form>
		<div id="create_account">
			<a href="pages/register.php">Ich besitze noch keinen Account. Hier registrieren</a>
		</div>
	</div>
	</main>
	<footer>
		<p>Autoren: Damian Bühler, Patrick Höscheler, Shota Takahira</p>
	</footer>
</body>
	
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
